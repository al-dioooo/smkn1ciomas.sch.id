<script setup>
    import { ref } from "vue"
    import { Inertia } from "@inertiajs/inertia"
    import { useForm } from "@inertiajs/inertia-vue3"
    import JetButton from "@/Jetstream/Button.vue"
    import JetFormSection from "@/Jetstream/FormSection.vue"
    import JetInput from "@/Jetstream/Input.vue"
    import JetInputError from "@/Jetstream/InputError.vue"
    import JetLabel from "@/Jetstream/Label.vue"
    import JetActionMessage from "@/Jetstream/ActionMessage.vue"
    import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue"

    const props = defineProps({
        student: Object
    })

    const form = useForm({
        _method: "PUT",
        _updating: "registration information",
        school_before: props.student?.school_before,
        school_certificate_number: props.student?.school_certificate_number,
        school_certificate: null,
        birth_certificate: null,
        family_certificate: null,
        registration_path: props.student?.registration_path
    })

    const schoolCertificateInput = ref(null)
    const birthCertificateInput = ref(null)
    const familyCertificateInput = ref(null)

    const schoolCertificatePreview = ref(null)
    const birthCertificatePreview = ref(null)
    const familyCertificatePreview = ref(null)

    const updateRegistrationInformation = () => {
        if (schoolCertificateInput.value) {
            form.school_certificate = schoolCertificateInput.value.files[0]
        }

        if (birthCertificateInput.value) {
            form.birth_certificate = birthCertificateInput.value.files[0]
        }

        if (familyCertificateInput.value) {
            form.family_certificate = familyCertificateInput.value.files[0]
        }

        form.post(route("dashboard.student.update", props.student), {
            errorBag: "updateRegistrationInformation",
            preserveScroll: true,
            onSuccess: () => {
                form.clear()
                schoolCertificateInput.value = null
                birthCertificateInput.value = null
            }
        })
    }

    const selectNewSchoolCertificate = () => {
        schoolCertificateInput.value.click()
    }

    const selectNewBirthCertificate = () => {
        birthCertificateInput.value.click()
    }

    const selectNewFamilyCertificate = () => {
        familyCertificateInput.value.click()
    }

    const updateSchoolCertificatePreview = () => {
        const photo = schoolCertificateInput.value.files[0]

        if (!photo) return

        const reader = new FileReader()

        reader.onload = (e) => {
            schoolCertificatePreview.value = e.target.result
        }

        reader.readAsDataURL(photo)
    }

    const updateFamilyCertificatePreview = () => {
        const photo = familyCertificateInput.value.files[0]

        if (!photo) return

        const reader = new FileReader()

        reader.onload = (e) => {
            familyCertificatePreview.value = e.target.result
        }

        reader.readAsDataURL(photo)
    }

    const updateBirthCertificatePreview = () => {
        const photo = birthCertificateInput.value.files[0]

        if (!photo) return

        const reader = new FileReader()

        reader.onload = (e) => {
            birthCertificatePreview.value = e.target.result
        }

        reader.readAsDataURL(photo)
    }

    const deleteCertificate = () => {
        Inertia.delete(route('student.certificate.delete', props.student), {
            preserveScroll: true,
            onSuccess: () => {}
        })
    }
</script>

<template>
    <JetFormSection @submitted="updateRegistrationInformation">
        <template #title>Registration Information</template>

        <template #description>{{ student?.auth_data.id === $page.props.user.id ? "Your" : "Student's" }} registration information.</template>

        <template #form>
            <!-- School Before -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="school_before" value="School Before" />
                <JetInput id="school_before" v-model="form.school_before" :isError="form.errors.school_before" type="text" class="block w-full mt-1" autocomplete="school_before" />
                <JetInputError :message="form.errors.school_before" class="mt-2" />
            </div>

            <!-- Registration Path -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="registration_path" value="Registration Path" />
                <JetInput id="registration_path" v-model="form.registration_path" :isError="form.errors.registration_path" type="text" class="block w-full mt-1" autocomplete="registration_path" />
                <JetInputError :message="form.errors.registration_path" class="mt-2" />
            </div>

            <!-- School Certificate -->
            <div class="col-span-6 sm:col-span-4">
                <!-- School Certificate File Input -->
                <input ref="schoolCertificateInput" type="file" class="hidden" @change="updateSchoolCertificatePreview" />

                <JetLabel for="school_certificate_link" value="School Certificate" />

                <!-- Current School Certificate -->
                <a :href="student?.school_certificate" target="_blank" v-if="!schoolCertificatePreview" class="block mt-2">
                    <img :src="student?.school_certificate" class="object-cover rounded-xl aspect-[4/1]" />
                </a>

                <!-- New School Certificate Preview -->
                <div v-if="schoolCertificatePreview" class="mt-2">
                    <span class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + schoolCertificatePreview + '\');'" />
                </div>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewSchoolCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.school_certificate_link" type="button" class="mt-2" @click.prevent="deletePhoto"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.school_certificate" class="mt-2" />
            </div>

            <!-- School Certificate Number -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="school_certificate_number" value="School Certificate Number" />
                <JetInput id="school_certificate_number" v-model="form.school_certificate_number" :isError="form.errors.school_certificate_number" type="text" class="block w-full mt-1" autocomplete="school_certificate_number" />
                <JetInputError :message="form.errors.school_certificate_number" class="mt-2" />
            </div>

            <!-- Family Certificate -->
            <div class="col-span-6 sm:col-span-4">
                <!-- Family Certificate File Input -->
                <input ref="familyCertificateInput" type="file" class="hidden" @change="updateFamilyCertificatePreview" />

                <JetLabel for="family_certificate_link" value="Family Certificate" />

                <!-- Current Family Certificate -->
                <a :href="student?.family_certificate" target="_blank" v-if="!familyCertificatePreview" class="block mt-2">
                    <img :src="student?.family_certificate" class="object-cover rounded-xl aspect-[4/1]" />
                </a>

                <!-- New Family Certificate Preview -->
                <div v-if="familyCertificatePreview" class="mt-2">
                    <span class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + familyCertificatePreview + '\');'" />
                </div>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewFamilyCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.family_certificate_link" type="button" class="mt-2" @click.prevent="deletePhoto"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.family_certificate" class="mt-2" />
            </div>

            <!-- Birth Certificate -->
            <div class="col-span-6 sm:col-span-4">
                <!-- Birth Certificate File Input -->
                <input ref="birthCertificateInput" type="file" class="hidden" @change="updateBirthCertificatePreview" />

                <JetLabel for="birth_certificate_link" value="Birth Certificate" />

                <!-- Current Birth Certificate -->
                <a :href="student?.birth_certificate" target="_blank" v-if="!birthCertificatePreview" class="block mt-2">
                    <img :src="student?.birth_certificate" class="object-cover rounded-xl aspect-[4/1]" />
                </a>

                <!-- New Birth Certificate Preview -->
                <div v-if="birthCertificatePreview" class="mt-2">
                    <span class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + birthCertificatePreview + '\');'" />
                </div>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewBirthCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.birth_certificate_link" type="button" class="mt-2" @click.prevent="deletePhoto"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.birth_certificate" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
