<script setup>
    import { onMounted, ref } from "vue"
    import { Inertia } from "@inertiajs/inertia"
    import { useForm } from "@inertiajs/inertia-vue3"
    import JetDialogModal from "@/Jetstream/DialogModal"
    import JetButton from "@/Jetstream/Button.vue"
    import JetFormSection from "@/Jetstream/FormSection.vue"
    import JetInput from "@/Jetstream/Input.vue"
    import JetInputError from "@/Jetstream/InputError.vue"
    import JetLabel from "@/Jetstream/Label.vue"
    import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue"
    import JetActionMessage from "@/Jetstream/ActionMessage.vue"
    import JetCheckbox from "@/Jetstream/Checkbox"
    import FormSelect from "@/Components/Forms/Select"
    import axios from "axios"

    const props = defineProps({
        staff: Object,
    })

    const form = useForm({
        _method: "PUT",
        _updating: "staffing information",
        nip: props.staff?.nip,
        nuptk: props.staff?.nuptk,
        employment_status: props.staff?.employment_status,
        ptk: props.staff?.ptk,
        additional_duty: props.staff?.additional_duty,
        cpns_sk: props.staff?.cpns_sk,
        cpns_date: props.staff?.cpns_date,
        appointment_sk: props.staff?.appointment_sk,
        appointment_tmt: props.staff?.appointment_tmt,
        appointment_institute: props.staff?.appointment_institute,
        rank: props.staff?.rank,
        source_of_salary: props.staff?.source_of_salary,
        pns_tmt: props.staff?.pns_tmt,
        karpeg: props.staff?.karpeg,
        pair_pns_identity: null,
        nuks: props.staff?.nuks,
        is_licensed_as_principal: props.staff?.is_licensed_as_principal !== 0 ? true : false,
        had_supervision_training: props.staff?.had_supervision_training !== 0 ? true : false,
    })

    const updateStaffInformation = () => {
        if (pairPNSIdentityInput.value) {
            form.pair_pns_identity = pairPNSIdentityInput.value.files[0]
        }

        form.post(route("dashboard.staff.update", props.staff), {
            errorBag: "updateStaffInformation",
            preserveScroll: true,
            onSuccess: () => {
                form.clear()
                pairPNSIdentityInput.value = null
            },
        })
    }

    const pairPNSIdentityInput = ref(null)
    const pairPNSIdentityPreview = ref(null)
    const isOpeningPNSIdentityPreview = ref(false)

    const selectNewPairPNSIdentity = () => {
        pairPNSIdentityInput.value.click()
    }
    const updatePairPNSIdentityPreview = () => {
        const photo = pairPNSIdentityInput.value.files[0]

        if (!photo) return

        const reader = new FileReader()

        reader.onload = (e) => {
            pairPNSIdentityPreview.value = e.target.result
        }

        reader.readAsDataURL(photo)
    }

    const openPNSIdentityPreview = () => {
        isOpeningPNSIdentityPreview.value = true
    }

    const closePNSIdentityPreview = () => {
        isOpeningPNSIdentityPreview.value = false
    }

    const deletePairPNSIdentity = () => {
        Inertia.delete(route('dashboard.staff.pair-pns-identity.destroy', props.staff), {
            preserveScroll: true,
            onSuccess: () => {
                pairPNSIdentityPreview.value = null
                clearPairPNSIdentityFileInput()
            }
        })
    }

    const clearPairPNSIdentityFileInput = () => {
        if (pairPNSIdentityInput.value?.value) {
            pairPNSIdentityInput.value.value = null
        }
    }
</script>

<template>
    <JetFormSection @submitted="updateStaffInformation">
        <template #title>Staffing Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} staffing information.</template>

        <template #form>
            <!-- NIP -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="nip" value="NIP" />
                <JetInput id="nip" v-model="form.nip" :isError="form.errors.nip" type="number" class="block w-full mt-1" autocomplete="nip" />
                <JetInputError :message="form.errors.nip" class="mt-2" />
            </div>

            <!-- NUPTK -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="nuptk" value="NUPTK" />
                <JetInput id="nuptk" v-model="form.nuptk" :isError="form.errors.nuptk" type="number" class="block w-full mt-1" autocomplete="nuptk" />
                <JetInputError :message="form.errors.nuptk" class="mt-2" />
            </div>

            <!-- Employment Status -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="employment_status" value="Employment Status" />
                <FormSelect id="employment_status" v-model="form.employment_status" :isError="form.errors.employment_status" class="block w-full mt-1">
                    <option value="PNS">PNS</option>
                    <option value="Non PNS">Non PNS</option>
                </FormSelect>
                <JetInputError :message="form.errors.employment_status" class="mt-2" />
            </div>

            <!-- PTK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="ptk" value="PTK" />
                <JetInput id="ptk" v-model="form.ptk" :isError="form.errors.ptk" type="text" class="block w-full mt-1" autocomplete="ptk" />
                <JetInputError :message="form.errors.ptk" class="mt-2" />
            </div>

            <!-- NUKS -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nuks" value="NUKS" />
                <JetInput id="nuks" v-model="form.nuks" :isError="form.errors.nuks" type="text" class="block w-full mt-1" autocomplete="nuks" />
                <JetInputError :message="form.errors.nuks" class="mt-2" />
            </div>

            <!-- Additional Duty -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="additional_duty" value="Additional Duty" />
                <JetInput id="additional_duty" v-model="form.additional_duty" :isError="form.errors.additional_duty" type="text" class="block w-full mt-1" autocomplete="additional_duty" />
                <JetInputError :message="form.errors.additional_duty" class="mt-2" />
            </div>

            <!-- CPNS SK -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="cpns_sk" value="CPNS SK" />
                <JetInput id="cpns_sk" v-model="form.cpns_sk" :isError="form.errors.cpns_sk" type="text" class="block w-full mt-1" autocomplete="cpns_sk" />
                <JetInputError :message="form.errors.cpns_sk" class="mt-2" />
            </div>

            <!-- CPNS Date -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="cpns_date" value="CPNS Date" />
                <JetInput id="cpns_date" v-model="form.cpns_date" :isError="form.errors.cpns_date" type="date" class="block w-full mt-1" autocomplete="cpns_date" />
                <JetInputError :message="form.errors.cpns_date" class="mt-2" />
            </div>

            <!-- Appointment SK -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="appointment_sk" value="Appointment SK" />
                <JetInput id="appointment_sk" v-model="form.appointment_sk" :isError="form.errors.appointment_sk" type="text" class="block w-full mt-1" autocomplete="appointment_sk" />
                <JetInputError :message="form.errors.appointment_sk" class="mt-2" />
            </div>

            <!-- Appointment TMT -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="appointment_tmt" value="Appointment TMT" />
                <JetInput id="appointment_tmt" v-model="form.appointment_tmt" :isError="form.errors.appointment_tmt" type="date" class="block w-full mt-1" autocomplete="appointment_tmt" />
                <JetInputError :message="form.errors.appointment_tmt" class="mt-2" />
            </div>

            <!-- Appointment Institute -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="appointment_institute" value="Appointment Institute" />
                <FormSelect id="appointment_institute" v-model="form.appointment_institute" :isError="form.errors.appointment_institute" class="block w-full mt-1">
                    <option value="Pemerintah Provinsi">Pemerintah Provinsi</option>
                    <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                </FormSelect>
                <JetInputError :message="form.errors.appointment_institute" class="mt-2" />
            </div>

            <!-- Rank -->
            <div class="col-span-6 sm:col-span-1">
                <JetLabel for="rank" value="Rank" />
                <FormSelect id="rank" v-model="form.rank" :isError="form.errors.rank" class="block w-full mt-1">
                    <option value="II/A">II/A</option>
                    <option value="II/B">II/B</option>
                    <option value="II/C">II/C</option>
                    <option value="II/D">II/D</option>
                    <option value="III/A">III/A</option>
                    <option value="III/B">III/B</option>
                    <option value="III/C">III/C</option>
                    <option value="III/D">III/D</option>
                    <option value="IV/A">IV/A</option>
                    <option value="IV/B">IV/B</option>
                    <option value="IV/C">IV/C</option>
                    <option value="IV/D">IV/D</option>
                    <option value="IV/E">IV/E</option>
                </FormSelect>
                <JetInputError :message="form.errors.rank" class="mt-2" />
            </div>

            <!-- Source of Salary -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="source_of_salary" value="Source of Salary" />
                <FormSelect id="source_of_salary" v-model="form.source_of_salary" :isError="form.errors.source_of_salary" class="block w-full mt-1">
                    <option value="APBD Provinsi">APBD Provinsi</option>
                    <option value="BOPD">BOPD</option>
                    <option value="Komite">Komite</option>
                </FormSelect>
                <JetInputError :message="form.errors.source_of_salary" class="mt-2" />
            </div>

            <!-- PNS TMT -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="pns_tmt" value="PNS TMT" />
                <JetInput id="pns_tmt" v-model="form.pns_tmt" :isError="form.errors.pns_tmt" type="date" class="block w-full mt-1" autocomplete="pns_tmt" />
                <JetInputError :message="form.errors.pns_tmt" class="mt-2" />
            </div>

            <!-- Karpeg -->
            <div class="col-span-6 sm:col-span-1">
                <JetLabel for="karpeg" value="Karpeg" />
                <JetInput id="karpeg" v-model="form.karpeg" :isError="form.errors.karpeg" type="text" class="block w-full mt-1" autocomplete="karpeg" />
                <JetInputError :message="form.errors.karpeg" class="mt-2" />
            </div>

            <!-- Pair PNS Identity -->
            <div class="col-span-6 sm:col-span-3">
                <!-- Pair PNS Identity File Input -->
                <input ref="pairPNSIdentityInput" type="file" class="hidden" @change="updatePairPNSIdentityPreview" />

                <JetLabel for="pair_pns_identity_link" value="Pair PNS Identity" />

                <button @click.prevent="openPNSIdentityPreview" class="mt-2 transition cursor-pointer hover:scale-[1.025] active:hover:scale-[.975] rounded-xl border-gray-300 border shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none">
                    <!-- Current Pair PNS Identity -->
                    <img :src="staff?.pair_pns_identity" v-if="!pairPNSIdentityPreview" class="object-cover rounded-xl aspect-[4/1]" />

                    <!-- New Pair PNS Identity Preview -->
                    <span v-if="pairPNSIdentityPreview" class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + pairPNSIdentityPreview + '\');'" />
                </button>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewPairPNSIdentity"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="staff?.pair_pns_identity_link" type="button" class="mt-2" @click.prevent="deletePairPNSIdentity"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.pair_pns_identity" class="mt-2" />
            </div>

            <div class="col-span-6 space-y-4">
                <!-- Is Licensed as Principal -->
                <div class="flex col-span-6 sm:col-span-3">
                    <div class="flex items-center space-x-2">
                        <JetCheckbox v-model:checked="form.is_licensed_as_principal" name="is_licensed_as_principal" id="is_licensed_as_principal" />
                        <JetLabel for="is_licensed_as_principal" value="Is Licensed as Principal" />
                    </div>
                    <JetInputError :message="form.errors.is_licensed_as_principal" class="mt-2" />
                </div>

                <!-- Had Supervision Training -->
                <div class="flex col-span-6 sm:col-span-3">
                    <div class="flex items-center space-x-2">
                        <JetCheckbox v-model:checked="form.had_supervision_training" name="had_supervision_training" id="had_supervision_training" />
                        <JetLabel for="had_supervision_training" value="Had Supervision Training" />
                    </div>
                    <JetInputError :message="form.errors.had_supervision_training" class="mt-2" />
                </div>
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>

    <!-- Pair PNS Identity Preview Modal -->
    <JetDialogModal :show="isOpeningPNSIdentityPreview" @close="closePNSIdentityPreview">
        <template #title>PNS Identity Preview</template>

        <template #content>
            <div class="relative flex w-full overflow-hidden rounded-xl">
                <img class="w-full" :src="pairPNSIdentityPreview ?? staff?.pair_pns_identity" alt="" />
                <div v-if="staff?.pair_pns_identity_link" class="absolute inset-0 flex items-end justify-end p-2 pointer-events-none">
                    <a class="p-1 text-gray-700 transition bg-white border border-gray-300 rounded-full pointer-events-auto hover:scale-105 active:hover:scale-95 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50" :href="staff?.pair_pns_identity" target="_blank">
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
            <JetSecondaryButton @click="closePNSIdentityPreview">Close</JetSecondaryButton>
        </template>
    </JetDialogModal>
</template>
