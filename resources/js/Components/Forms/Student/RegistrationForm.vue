<script setup>
    import { ref } from "vue"
    import { Inertia } from "@inertiajs/inertia"
    import { useForm } from "@inertiajs/inertia-vue3"
    import JetDialogModal from "@/Jetstream/DialogModal.vue"
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

    const isOpeningSchoolCertificatePreview = ref(false)
    const isOpeningFamilyCertificatePreview = ref(false)
    const isOpeningBirthCertificatePreview = ref(false)

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

    const openSchoolCertificatePreview = () => {
        isOpeningSchoolCertificatePreview.value = true
    }

    const closeSchoolCertificatePreview = () => {
        isOpeningSchoolCertificatePreview.value = false
    }

    const openFamilyCertificatePreview = () => {
        isOpeningFamilyCertificatePreview.value = true
    }

    const closeFamilyCertificatePreview = () => {
        isOpeningFamilyCertificatePreview.value = false
    }

    const openBirthCertificatePreview = () => {
        isOpeningBirthCertificatePreview.value = true
    }

    const closeBirthCertificatePreview = () => {
        isOpeningBirthCertificatePreview.value = false
    }

    const deleteCertificate = (certificate) => {
        Inertia.delete(route('dashboard.student.certificate.destroy', { student: props.student, certificate }), {
            preserveScroll: true,
            onSuccess: () => {
                if (certificate == 'school-certificate' && schoolCertificateInput.value?.value) {
                    schoolCertificatePreview.value = null
                    schoolCertificateInput.value = null
                }
                else if (certificate == 'family-certificate' && familyCertificateInput.value?.value) {
                    familyCertificatePreview.value = null
                    familyCertificateInput.value = null
                }
                else if (certificate == 'birth-certificate' && birthCertificateInput.value?.value) {
                    birthCertificatePreview.value = null
                    birthCertificateInput.value = null
                }
            }
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
            <div class="col-span-6 sm:col-span-3">
                <!-- School Certificate File Input -->
                <input ref="schoolCertificateInput" type="file" class="hidden" @change="updateSchoolCertificatePreview" />

                <JetLabel for="school_certificate_link" value="School Certificate" />

                <button @click.prevent="openSchoolCertificatePreview" class="mt-2 transition cursor-pointer hover:scale-[1.025] active:hover:scale-[.975] rounded-xl border-gray-300 border shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none">
                    <!-- Current School Certificate -->
                    <img :src="student?.school_certificate" v-if="!schoolCertificatePreview" class="object-cover rounded-xl aspect-[4/1]" />

                    <!-- New School Certificate Preview -->
                    <span v-if="schoolCertificatePreview" class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + schoolCertificatePreview + '\');'" />
                </button>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewSchoolCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.school_certificate_link" type="button" class="mt-2" @click.prevent="deleteCertificate('school-certificate')"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.school_certificate" class="mt-2" />
            </div>

            <!-- School Certificate Number -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="school_certificate_number" value="School Certificate Number" />
                <JetInput id="school_certificate_number" v-model="form.school_certificate_number" :isError="form.errors.school_certificate_number" type="text" class="block w-full mt-1" autocomplete="school_certificate_number" />
                <JetInputError :message="form.errors.school_certificate_number" class="mt-2" />
            </div>

            <!-- Family Certificate -->
            <div class="col-span-6 sm:col-span-3">
                <!-- Family Certificate File Input -->
                <input ref="familyCertificateInput" type="file" class="hidden" @change="updateFamilyCertificatePreview" />

                <JetLabel for="family_certificate_link" value="Family Certificate" />

                <button @click.prevent="openFamilyCertificatePreview" class="mt-2 transition cursor-pointer hover:scale-[1.025] active:hover:scale-[.975] rounded-xl border-gray-300 border shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none">
                    <!-- Current Family Certificate -->
                    <img :src="student?.family_certificate" v-if="!familyCertificatePreview" class="object-cover rounded-xl aspect-[4/1]" />

                    <!-- New Family Certificate Preview -->
                    <span v-if="familyCertificatePreview" class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + familyCertificatePreview + '\');'" />
                </button>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewFamilyCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.family_certificate_link" type="button" class="mt-2" @click.prevent="deleteCertificate('family-certificate')"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.family_certificate" class="mt-2" />
            </div>

            <div class="hidden sm:block"></div>

            <!-- Birth Certificate -->
            <div class="col-span-6 sm:col-span-3">
                <!-- Birth Certificate File Input -->
                <input ref="birthCertificateInput" type="file" class="hidden" @change="updateBirthCertificatePreview" />

                <JetLabel for="birth_certificate_link" value="Birth Certificate" />

                <button @click.prevent="openBirthCertificatePreview" class="mt-2 transition cursor-pointer hover:scale-[1.025] active:hover:scale-[.975] rounded-xl border-gray-300 border shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none">
                    <!-- Current Birth Certificate -->
                    <img :src="student?.birth_certificate" v-if="!birthCertificatePreview" class="object-cover rounded-xl aspect-[4/1]" />

                    <!-- New Birth Certificate Preview -->
                    <span v-if="birthCertificatePreview" class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + birthCertificatePreview + '\');'" />
                </button>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewBirthCertificate"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="student?.birth_certificate_link" type="button" class="mt-2" @click.prevent="deleteCertificate('birth-certificate')"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.birth_certificate" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>

    <!-- School Certificate Preview Modal -->
    <JetDialogModal :show="isOpeningSchoolCertificatePreview" @close="closeSchoolCertificatePreview">
        <template #title>School Certificate Preview</template>

        <template #content>
            <div class="relative flex w-full overflow-hidden rounded-xl">
                <img class="w-full" :src="schoolCertificatePreview ?? student?.school_certificate" alt="School Certificate Preview" />
                <div v-if="student?.school_certificate_link" class="absolute inset-0 flex items-end justify-end p-2 pointer-events-none">
                    <a :href="student?.school_certificate" class="p-1 text-gray-700 transition bg-white border border-gray-300 rounded-full pointer-events-auto hover:scale-105 active:hover:scale-95 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <polyline points="15 15 15 9 9 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </template>

        <template #footer>
            <JetSecondaryButton @click="closeSchoolCertificatePreview">Close</JetSecondaryButton>
        </template>
    </JetDialogModal>

    <!-- Family Certificate Preview Modal -->
    <JetDialogModal :show="isOpeningFamilyCertificatePreview" @close="closeFamilyCertificatePreview">
        <template #title>Family Certificate Preview</template>

        <template #content>
            <div class="relative flex w-full overflow-hidden rounded-xl">
                <img class="w-full" :src="familyCertificatePreview ?? student?.family_certificate" alt="Family Certificate Preview" />
                <div v-if="student?.family_certificate_link" class="absolute inset-0 flex items-end justify-end p-2 pointer-events-none">
                    <a :href="student?.family_certificate" class="p-1 text-gray-700 transition bg-white border border-gray-300 rounded-full pointer-events-auto hover:scale-105 active:hover:scale-95 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <polyline points="15 15 15 9 9 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </template>

        <template #footer>
            <JetSecondaryButton @click="closeFamilyCertificatePreview">Close</JetSecondaryButton>
        </template>
    </JetDialogModal>

    <!-- Birth Certificate Preview Modal -->
    <JetDialogModal :show="isOpeningBirthCertificatePreview" @close="closeBirthCertificatePreview">
        <template #title>Birth Certificate Preview</template>

        <template #content>
            <div class="relative flex w-full overflow-hidden rounded-xl">
                <img class="w-full" :src="birthCertificatePreview ?? student?.birth_certificate" alt="Birth Certificate Preview" />
                <div v-if="student?.birth_certificate_link" class="absolute inset-0 flex items-end justify-end p-2 pointer-events-none">
                    <a :href="student?.birth_certificate" class="p-1 text-gray-700 transition bg-white border border-gray-300 rounded-full pointer-events-auto hover:scale-105 active:hover:scale-95 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <polyline points="15 15 15 9 9 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </template>

        <template #footer>
            <JetSecondaryButton @click="closeBirthCertificatePreview">Close</JetSecondaryButton>
        </template>
    </JetDialogModal>
</template>
