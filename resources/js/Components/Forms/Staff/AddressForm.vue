<script setup>
    import { onMounted, ref } from "vue"
    import { Inertia } from "@inertiajs/inertia"
    import { useForm } from "@inertiajs/inertia-vue3"
    import JetButton from "@/Jetstream/Button.vue"
    import JetFormSection from "@/Jetstream/FormSection.vue"
    import JetInput from "@/Jetstream/Input.vue"
    import JetInputError from "@/Jetstream/InputError.vue"
    import JetLabel from "@/Jetstream/Label.vue"
    import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue"
    import JetActionMessage from "@/Jetstream/ActionMessage.vue"
    import FormSelect from "@/Components/Forms/Select"
    import FormTextarea from "@/Components/Forms/Textarea"
    import axios from 'axios'

    const props = defineProps({
        staff: Object
    })

    const form = useForm({
        _method: "POST",
        _updating: "address information",
        province: props.staff?.province,
        city: props.staff?.city,
        district: props.staff?.district,
        rural: props.staff?.rural,
        hamlet: props.staff?.hamlet,
        neighbourhood: props.staff?.neighbourhood,
        post_code: props.staff?.post_code,
        address: props.staff?.address
    })

    const updateStaffInformation = () => {
        form.put(route("dashboard.staff.update", props.staff), {
            errorBag: "updateStaffInformation",
            preserveScroll: true
        })
    }

    const provinces = ref(null)
    const cities = ref(null)
    const districts = ref(null)
    const rurals = ref(null)

    onMounted(() => {
        getProvinces()
        getCities()
        getDistricts()
        getRurals()
    })

    const getProvinces = () => {
        axios.get('http://dev.farizdotid.com/api/daerahindonesia/provinsi').then((response) => provinces.value = response.data.provinsi)
    }

    const getCities = () => {
        axios.get(`http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${form.province}`).then((response) => cities.value = response.data.kota_kabupaten)
    }

    const getDistricts = () => {
        axios.get(`http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${form.city}`).then((response) => districts.value = response.data.kecamatan)
    }

    const getRurals = () => {
        axios.get(`http://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=${form.district}`).then((response) => rurals.value = response.data.kelurahan)
    }
</script>

<template>
    <JetFormSection @submitted="updateStaffInformation">
        <template #title>Address Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} address information.</template>

        <template #form>
            <!-- Province -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="province" value="Province" />
                <FormSelect @input="getCities" class="block w-full mt-1" name="province" id="province" v-model="form.province" :isError="form.errors.province">
                    <template v-for="row in provinces" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.province" class="mt-2" />
            </div>

            <!-- City -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="city" value="City" />
                <FormSelect @input="getDistricts" :disabled="cities == null || cities.length == 0" class="block w-full mt-1" name="city" id="city" v-model="form.city" :isError="form.errors.city">
                    <template v-for="row in cities" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.city" class="mt-2" />
            </div>

            <!-- District -->
            <div class="col-span-4 sm:col-span-2">
                <JetLabel for="district" value="District" />
                <FormSelect @input="getRurals" :disabled="districts == null || districts.length == 0" class="block w-full mt-1" name="district" id="district" v-model="form.district" :isError="form.errors.district">
                    <template v-for="row in districts" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.district" class="mt-2" />
            </div>

            <!-- Rural -->
            <div class="col-span-4 sm:col-span-2">
                <JetLabel for="rural" value="Rural" />
                <FormSelect :disabled="rurals == null || rurals.length == 0" class="block w-full mt-1" name="rural" id="rural" v-model="form.rural" :isError="form.errors.rural">
                    <template v-for="row in rurals" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.rural" class="mt-2" />
            </div>

            <!-- Neighbourhood -->
            <div class="col-span-3 sm:col-span-1">
                <JetLabel for="neighbourhood" value="Neighbourhood" />
                <JetInput id="neighbourhood" v-model="form.neighbourhood" :isError="form.errors.neighbourhood" type="number" class="block w-full mt-1" autocomplete="neighbourhood" />
                <JetInputError :message="form.errors.neighbourhood" class="mt-2" />
            </div>

            <!-- Hamlet -->
            <div class="col-span-3 sm:col-span-1">
                <JetLabel for="hamlet" value="Hamlet" />
                <JetInput id="hamlet" v-model="form.hamlet" :isError="form.errors.hamlet" type="number" class="block w-full mt-1" autocomplete="hamlet" />
                <JetInputError :message="form.errors.hamlet" class="mt-2" />
            </div>

            <!-- Post Code -->
            <div class="col-span-3 sm:col-span-1">
                <JetLabel for="post_code" value="Post Code" />
                <JetInput id="post_code" v-model="form.post_code" :isError="form.errors.post_code" type="number" class="block w-full mt-1" autocomplete="post_code" />
                <JetInputError :message="form.errors.post_code" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="col-span-6">
                <JetLabel for="address" value="Address" />
                <FormTextarea id="address" v-model="form.address" :isError="form.errors.address" class="block w-full mt-1"></FormTextarea>
                <JetInputError :message="form.errors.address" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
