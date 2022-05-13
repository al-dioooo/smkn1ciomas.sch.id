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
        student: Object
    })

    const form = useForm({
        _method: "POST",
        _updating: "address",
        address: props.student?.address,
        district: props.student?.district,
        city: props.student?.city,
        transport: props.student?.transport,
        status_of_residence: props.student?.status_of_residence,
        live_with: props.student?.live_with
    })

    const updateStudentInformation = () => {
        form.put(route("dashboard.student.update", props.student), {
            errorBag: "updateStudentInformation",
            preserveScroll: true
        })
    }

    const cities = ref(null)
    const districts = ref(null)

    onMounted(() => {
        getCities()
        getDistricts()
    })

    const getCities = () => {
        axios.get('http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32').then((response) => cities.value = response.data.kota_kabupaten)
    }

    const getDistricts = () => {
        axios.get(`http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${form.city}`).then((response) => districts.value = response.data.kecamatan)
    }
</script>

<template>
    <JetFormSection @submitted="updateStudentInformation">
        <template #title>Address Information</template>

        <template #description>Student's address information.</template>

        <template #form>
            <!-- City -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="city" value="City" />
                <FormSelect @input="getDistricts" class="block w-full mt-1" name="city" id="city" v-model="form.city" :isError="form.errors.city">
                    <template v-for="row in cities" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.city" class="mt-2" />
            </div>

            <!-- District -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="district" value="District" />
                <FormSelect :disabled="districts == null || districts.length == 0" class="block w-full mt-1" name="district" id="district" v-model="form.district" :isError="form.errors.district">
                    <template v-for="row in districts" :key="row.id">
                        <option :value="row.id">{{ row.nama }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.district" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="address" value="Address" />
                <FormTextarea id="address" v-model="form.address" :isError="form.errors.address" class="block w-full mt-1"></FormTextarea>
                <JetInputError :message="form.errors.address" class="mt-2" />
            </div>

            <!-- Transport -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="transport" value="Transport" />
                <JetInput id="transport" v-model="form.transport" :isError="form.errors.transport" type="text" class="block w-full mt-1" autocomplete="transport" />
                <JetInputError :message="form.errors.transport" class="mt-2" />
            </div>

            <!-- Status of Residence -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="status_of_residence" value="Status of Residence" />
                <JetInput id="status_of_residence" v-model="form.status_of_residence" :isError="form.errors.status_of_residence" type="text" class="block w-full mt-1" autocomplete="status_of_residence" />
                <JetInputError :message="form.errors.status_of_residence" class="mt-2" />
            </div>

            <!-- Live with -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="live_with" value="Live with" />
                <JetInput id="live_with" v-model="form.live_with" :isError="form.errors.live_with" type="text" class="block w-full mt-1" autocomplete="live_with" />
                <JetInputError :message="form.errors.live_with" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
