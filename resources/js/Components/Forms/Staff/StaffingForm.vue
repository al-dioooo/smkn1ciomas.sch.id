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
    import JetCheckbox from "@/Jetstream/Checkbox"
    import FormSelect from "@/Components/Forms/Select"
    import axios from "axios"

    const props = defineProps({
        staff: Object,
    })

    const form = useForm({
        _method: "POST",
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

        form.put(route("dashboard.staff.update", props.staff), {
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
</script>

<template>
    <JetFormSection @submitted="updateStaffInformation">
        <template #title>Staffing Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} staffing information.</template>

        <template #form>
            <!-- NIP -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nip" value="NIP" />
                <JetInput id="nip" v-model="form.nip" :isError="form.errors.nip" type="number" class="block w-full mt-1" autocomplete="nip" />
                <JetInputError :message="form.errors.nip" class="mt-2" />
            </div>

            <!-- NUPTK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nuptk" value="NUPTK" />
                <JetInput id="nuptk" v-model="form.nuptk" :isError="form.errors.nuptk" type="number" class="block w-full mt-1" autocomplete="nuptk" />
                <JetInputError :message="form.errors.nuptk" class="mt-2" />
            </div>

            <!-- Employment Status -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="employment_status" value="Employment Status" />
                <JetInput id="employment_status" v-model="form.employment_status" :isError="form.errors.employment_status" type="option" class="block w-full mt-1" autocomplete="employment_status" />
                <JetInputError :message="form.errors.employment_status" class="mt-2" />
            </div>

            <!-- PTK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="ptk" value="PTK" />
                <JetInput id="ptk" v-model="form.ptk" :isError="form.errors.ptk" type="text" class="block w-full mt-1" autocomplete="ptk" />
                <JetInputError :message="form.errors.ptk" class="mt-2" />
            </div>

            <!-- Additional Duty -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="additional_duty" value="Additional Duty" />
                <JetInput id="additional_duty" v-model="form.additional_duty" :isError="form.errors.additional_duty" type="text" class="block w-full mt-1" autocomplete="additional_duty" />
                <JetInputError :message="form.errors.additional_duty" class="mt-2" />
            </div>

            <!-- CPNS SK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="cpns_sk" value="CPNS SK" />
                <JetInput id="cpns_sk" v-model="form.cpns_sk" :isError="form.errors.cpns_sk" type="number" class="block w-full mt-1" autocomplete="cpns_sk" />
                <JetInputError :message="form.errors.cpns_sk" class="mt-2" />
            </div>

            <!-- CPNS Date -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="cpns_date" value="CPNS Date" />
                <JetInput id="cpns_date" v-model="form.cpns_date" :isError="form.errors.cpns_date" type="date" class="block w-full mt-1" autocomplete="cpns_date" />
                <JetInputError :message="form.errors.cpns_date" class="mt-2" />
            </div>

            <!-- Appointment SK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_sk" value="Appointment SK" />
                <JetInput id="appointment_sk" v-model="form.appointment_sk" :isError="form.errors.appointment_sk" type="number" class="block w-full mt-1" autocomplete="appointment_sk" />
                <JetInputError :message="form.errors.appointment_sk" class="mt-2" />
            </div>

            <!-- Appointment TMT -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_tmt" value="Appointment TMT" />
                <JetInput id="appointment_tmt" v-model="form.appointment_tmt" :isError="form.errors.appointment_tmt" type="date" class="block w-full mt-1" autocomplete="appointment_tmt" />
                <JetInputError :message="form.errors.appointment_tmt" class="mt-2" />
            </div>

            <!-- Appointment Institute -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_institute" value="Appointment Institute" />
                <JetInput id="appointment_institute" v-model="form.appointment_institute" :isError="form.errors.appointment_institute" type="option" class="block w-full mt-1" autocomplete="appointment_institute" />
                <JetInputError :message="form.errors.appointment_institute" class="mt-2" />
            </div>

            <!-- Rank -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="rank" value="Rank" />
                <JetInput id="rank" v-model="form.rank" :isError="form.errors.rank" type="option" class="block w-full mt-1" autocomplete="rank" />
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
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="pns_tmt" value="PNS TMT" />
                <JetInput id="pns_tmt" v-model="form.pns_tmt" :isError="form.errors.pns_tmt" type="date" class="block w-full mt-1" autocomplete="pns_tmt" />
                <JetInputError :message="form.errors.pns_tmt" class="mt-2" />
            </div>

            <!-- Karpeg -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="karpeg" value="Karpeg" />
                <JetInput id="karpeg" v-model="form.karpeg" :isError="form.errors.karpeg" type="text" class="block w-full mt-1" autocomplete="karpeg" />
                <JetInputError :message="form.errors.karpeg" class="mt-2" />
            </div>

            <!-- Pair PNS Identity -->
            <div class="col-span-6 sm:col-span-3">
                <!-- Pair PNS Identity File Input -->
                <input ref="pairPNSIdentityInput" type="file" class="hidden" @change="updatePairPNSIdentityPreview" />

                <JetLabel for="pair_pns_identity_link" value="Pair PNS Identity" />

                <!-- Current Pair PNS Identity -->
                <a :href="staff?.pair_pns_identity" target="_blank" v-if="!pairPNSIdentityPreview" class="block mt-2">
                    <img :src="staff?.pair_pns_identity" class="object-cover rounded-xl aspect-[4/1]" />
                </a>

                <!-- New Pair PNS Identity Preview -->
                <div v-if="pairPNSIdentityPreview" class="mt-2">
                    <span class="block bg-center bg-no-repeat bg-cover rounded-xl aspect-[4/1]" :style="'background-image: url(\'' + pairPNSIdentityPreview + '\');'" />
                </div>

                <JetSecondaryButton class="mt-2 mr-2" type="button" @click.prevent="selectNewPairPNSIdentity"> Select New </JetSecondaryButton>

                <JetSecondaryButton v-if="staff?.pair_pns_identity_link" type="button" class="mt-2" @click.prevent="deletePairPNSIdentity"> Remove </JetSecondaryButton>

                <JetInputError :message="form.errors.pair_pns_identity" class="mt-2" />
            </div>

            <!-- NUKS -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nuks" value="NUKS" />
                <JetInput id="nuks" v-model="form.nuks" :isError="form.errors.nuks" type="number" class="block w-full mt-1" autocomplete="nuks" />
                <JetInputError :message="form.errors.nuks" class="mt-2" />
            </div>

            <!-- Is Licensed as Principal -->
            <!-- <div class="col-span-6 sm:col-span-3">
                <JetLabel
                    for="is_licensed_as_principal"
                    value="Is Licensed as Principal"
                />
                <JetInput
                    id="is_licensed_as_principal"
                    v-model="form.is_licensed_as_principal"
                    :isError="form.errors.is_licensed_as_principal"
                    type="bool"
                    class="block w-full mt-1"
                    autocomplete="is_licensed_as_principal"
                />
                <JetInputError
                    :message="form.errors.is_licensed_as_principal"
                    class="mt-2"
                />
            </div> -->

            <div class="flex col-span-6 sm:col-span-3">
                <JetCheckbox v-model:checked="form.is_licensed_as_principal" name="is_licensed_as_principal" id="is_licensed_as_principal" />
                <JetLabel for="is_licensed_as_principal" value="Is Licensed as Principal" class="ml-2" />
                <JetInputError :message="form.errors.is_licensed_as_principal" class="mt-2" />
            </div>

            <!-- Had Supervision Training -->
            <div class="flex col-span-6 sm:col-span-3">
                <JetCheckbox v-model:checked="form.had_supervision_training" name="had_supervision_training" id="had_supervision_training" />
                <JetLabel for="had_supervision_training" value="Had Supervision Training" class="ml-2" />
                <JetInputError :message="form.errors.had_supervision_training" class="mt-2" />
            </div>
            <!-- <div class="col-span-6 sm:col-span-3">
                <JetLabel
                    for="had_supervision_training"
                    value="Had Supervision Training"
                />
                <JetInput
                    id="had_supervision_training"
                    v-model="form.had_supervision_training"
                    :isError="form.errors.had_supervision_training"
                    type="bool"
                    class="block w-full mt-1"
                    autocomplete="had_supervision_training"
                />
                <JetInputError
                    :message="form.errors.had_supervision_training"
                    class="mt-2"
                />
            </div> -->
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
