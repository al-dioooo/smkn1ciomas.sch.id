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
    import axios from "axios"

    const props = defineProps({
        staff: Object
    })

    const majors = ref(null)
    const classes = ref(null)

    const form = useForm({
        _method: "POST",
        _updating: "profile information",
        name: props.staff?.auth_data.name,
        email: props.staff?.auth_data.email,
        password: null,
        nik: props.staff?.nik,
        place_of_birth: props.staff?.place_of_birth,
        date_of_birth: props.staff?.date_of_birth,
        gender: props.staff?.gender,
        religion: props.staff?.religion,
        marrital_status: props.staff?.marrital_status,
    })

    const storeStaffInformation = () => {
        form.post(route("dashboard.staff.store"), {
            errorBag: "storeStaffInformation",
            preserveScroll: true
        })
    }

    const updateStaffInformation = () => {
        form.put(route("dashboard.staff.update", props.staff), {
            errorBag: "updateStaffInformation",
            preserveScroll: true
        })
    }

    const submitHandler = () => {
        if (props.staff != null) {
            updateStaffInformation()
        } else {
            storeStaffInformation()
        }
    }

    onMounted(() => {
        getMajors()
        getClasses()
    })

    const getMajors = () => {
        axios.get(route('api.majors.get')).then((response) => majors.value = response.data)
    }

    const getClasses = () => {
        axios.get(route('api.classes.get', { major: form.major })).then((response) => classes.value = response.data)
    }
</script>

<template>
    <JetFormSection @submitted="submitHandler">
        <template #title>Profile Information</template>

        <template #description>Staff's profile information.</template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="name" value="Name" />
                <JetInput id="name" v-model="form.name" :isError="form.errors.name" type="text" class="block w-full mt-1" autocomplete="name" />
                <JetInputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="email" value="Email" />
                <JetInput id="email" v-model="form.email" :isError="form.errors.email" type="email" class="block w-full mt-1" autocomplete="email" />
                <JetInputError :message="form.errors.email" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="password" value="Password" />
                <JetInput id="password" v-model="form.password" :isError="form.errors.password" type="password" class="block w-full mt-1" autocomplete="password" />
                <JetInputError :message="form.errors.password" class="mt-2" />
            </div>

            <!-- NIK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nik" value="NIK" />
                <JetInput id="nik" v-model="form.nik" :isError="form.errors.nik" type="text" class="block w-full mt-1" autocomplete="nik" />
                <JetInputError :message="form.errors.nik" class="mt-2" />
            </div>

            <template v-if="staff != null">
                <!-- Place of Birth -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="place_of_birth" value="Place of Birth" />
                    <JetInput id="place_of_birth" v-model="form.place_of_birth" type="text" class="block w-full mt-1" autocomplete="place_of_birth" />
                    <JetInputError :message="form.errors.place_of_birth" class="mt-2" />
                </div>

                <!-- Date of Birth -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="date_of_birth" value="Date of Birth" />
                    <JetInput id="date_of_birth" v-model="form.date_of_birth" type="date" class="block w-full mt-1" autocomplete="date_of_birth" />
                    <JetInputError :message="form.errors.date_of_birth" class="mt-2" />
                </div>

                <!-- Gender -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="gender" value="Gender" />
                    <FormSelect id="gender" v-model="form.gender" :isError="form.errors.gender" class="block w-full mt-1">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </FormSelect>
                    <JetInputError :message="form.errors.gender" class="mt-2" />
                </div>

                <!-- Religion -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="religion" value="Religion" />
                    <JetInput id="religion" v-model="form.religion" type="text" class="block w-full mt-1" autocomplete="religion" />
                    <JetInputError :message="form.errors.religion" class="mt-2" />
                </div>

                <!-- Marrital Status -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="marrital_status" value="Marrital Status" />
                    <FormSelect id="marrital_status" v-model="form.marrital_status" :isError="form.errors.marrital_status" class="block w-full mt-1">
                        <option value="Kawin">Married</option>
                        <option value="Belum Kawin">Single</option>
                        <option value="Cerai Hidup">Divorced</option>
                        <option value="Cerai Mati">Widowed</option>
                    </FormSelect>
                    <JetInputError :message="form.errors.marrital_status" class="mt-2" />
                </div>
            </template>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
