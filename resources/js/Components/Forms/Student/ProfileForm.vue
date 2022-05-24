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
        student: Object
    })

    const majors = ref(null)
    const classes = ref(null)

    const form = useForm({
        _method: "POST",
        _updating: "profile",
        name: props.student?.auth_data.name,
        nickname: props.student?.nickname,
        email: props.student?.auth_data.email,
        password: null,
        nis: props.student?.nis,
        nisn: props.student?.nisn,
        major: props.student?.major,
        class: props.student?.class,
        gender: props.student?.gender,
        place_of_birth: props.student?.place_of_birth,
        date_of_birth: props.student?.date_of_birth,
        religion: props.student?.religion,
        nationality: props.student?.nationality,
        which_child: props.student?.which_child ?? ``,
        siblings: props.student?.siblings ?? ``,
        phone: props.student?.phone,
        address: props.student?.address,
        district: props.student?.district,
        city: props.student?.city,
        transport: props.student?.transport,
        status_of_residence: props.student?.status_of_residence,
        live_with: props.student?.live_with
    })

    const storeStudentInformation = () => {
        form.post(route('dashboard.student.store'), {
            errorBag: "storeStudentInformation",
            preserveScroll: true
        })
    }

    const updateStudentInformation = () => {
        form.put(route("dashboard.student.update", props.student), {
            errorBag: "updateStudentInformation",
            preserveScroll: true
        })
    }

    const submitHandler = () => {
        if (props.student != null) {
            updateStudentInformation()
        } else {
            storeStudentInformation()
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
        <template #title>{{ route('profile.show') && 'Additional' }} Profile Information</template>

        <template #description>{{ student?.auth_data.id === $page.props.user.id ? "Your" : "Student's" }} {{ route('profile.show') && 'additional' }} profile information.</template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-3" v-if="!route().current('profile.show')">
                <JetLabel for="name" value="Name" />
                <JetInput id="name" v-model="form.name" :isError="form.errors.name" type="text" class="block w-full mt-1" autocomplete="name" />
                <JetInputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Nickname -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="nickname" value="Nickname" />
                <JetInput id="nickname" v-model="form.nickname" :isError="form.errors.nickname" type="text" class="block w-full mt-1" autocomplete="nickname" />
                <JetInputError :message="form.errors.nickname" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-3" v-if="!route().current('profile.show')">
                <JetLabel for="email" value="Email" />
                <JetInput id="email" v-model="form.email" :isError="form.errors.email" type="email" class="block w-full mt-1" autocomplete="email" />
                <JetInputError :message="form.errors.email" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="col-span-6 sm:col-span-3" v-if="!route().current('profile.show')">
                <JetLabel for="password" value="Password" />
                <JetInput id="password" v-model="form.password" :isError="form.errors.password" type="password" class="block w-full mt-1" autocomplete="password" />
                <JetInputError :message="form.errors.password" class="mt-2" />
            </div>

            <!-- NIS -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="nis" value="NIS" />
                <JetInput id="nis" v-model="form.nis" :isError="form.errors.nis" type="text" class="block w-full mt-1" autocomplete="nis" />
                <JetInputError :message="form.errors.nis" class="mt-2" />
            </div>

            <!-- NISN -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="nisn" value="NISN" />
                <JetInput id="nisn" v-model="form.nisn" :isError="form.errors.nisn" type="text" class="block w-full mt-1" autocomplete="nisn" />
                <JetInputError :message="form.errors.nisn" class="mt-2" />
            </div>

            <!-- Major -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="major" value="Major" />
                <FormSelect @input="getClasses" id="major" v-model="form.major" :isError="form.errors.major" class="block w-full mt-1">
                    <template v-for="row in majors" :key="row.value">
                        <option :value="row.value">{{ row.name }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.major" class="mt-2" />
            </div>

            <!-- Class -->
            <div class="col-span-6 sm:col-span-1">
                <JetLabel for="class" value="Class" />
                <FormSelect :disabled="classes == null" id="class" v-model="form.class" :isError="form.errors.class" class="block w-full mt-1">
                    <template v-for="row in classes" :key="row">
                        <option :value="row">{{ row }}</option>
                    </template>
                </FormSelect>
                <JetInputError :message="form.errors.class" class="mt-2" />
            </div>

            <template v-if="student != null">
                <!-- Phone Number -->
                <div class="col-span-6 sm:col-span-2">
                    <JetLabel for="phone" value="Phone Number" />
                    <JetInput id="phone" v-model="form.phone" type="text" class="block w-full mt-1" autocomplete="phone" />
                    <JetInputError :message="form.errors.phone" class="mt-2" />
                </div>

                <!-- Gender -->
                <div class="col-span-6 sm:col-span-1">
                    <JetLabel for="gender" value="Gender" />
                    <FormSelect id="gender" v-model="form.gender" :isError="form.errors.gender" class="block w-full mt-1">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </FormSelect>
                    <JetInputError :message="form.errors.gender" class="mt-2" />
                </div>

                <!-- Place of Birth -->
                <div class="col-span-6 sm:col-span-3">
                    <JetLabel for="place_of_birth" value="Place of Birth" />
                    <JetInput id="place_of_birth" v-model="form.place_of_birth" type="text" class="block w-full mt-1" autocomplete="place_of_birth" />
                    <JetInputError :message="form.errors.place_of_birth" class="mt-2" />
                </div>

                <!-- Date of Birth -->
                <div class="col-span-6 sm:col-span-2">
                    <JetLabel for="date_of_birth" value="Date of Birth" />
                    <JetInput id="date_of_birth" v-model="form.date_of_birth" type="date" class="block w-full mt-1" autocomplete="date_of_birth" />
                    <JetInputError :message="form.errors.date_of_birth" class="mt-2" />
                </div>

                <!-- Religion -->
                <div class="col-span-6 sm:col-span-2">
                    <JetLabel for="religion" value="Religion" />
                    <JetInput id="religion" v-model="form.religion" type="text" class="block w-full mt-1" autocomplete="religion" />
                    <JetInputError :message="form.errors.religion" class="mt-2" />
                </div>

                <!-- Nationality -->
                <div class="col-span-6 sm:col-span-1">
                    <JetLabel for="nationality" value="Nationality" />
                    <FormSelect id="nationality" v-model="form.nationality" :isError="form.errors.nationality" class="block w-full mt-1">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </FormSelect>
                    <JetInputError :message="form.errors.nationality" class="mt-2" />
                </div>

                <!-- Which Child -->
                <div class="col-span-6 sm:col-span-1">
                    <JetLabel for="which_child" value="Which Child" />
                    <JetInput id="which_child" v-model="form.which_child" type="number" class="block w-full mt-1" autocomplete="which_child" />
                    <JetInputError :message="form.errors.which_child" class="mt-2" />
                </div>

                <!-- Siblings -->
                <div class="col-span-6 sm:col-span-1">
                    <JetLabel for="siblings" value="Siblings" />
                    <JetInput id="siblings" v-model="form.siblings" type="number" class="block w-full mt-1" autocomplete="siblings" />
                    <JetInputError :message="form.errors.siblings" class="mt-2" />
                </div>
            </template>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
