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
    import axios from "axios"

    const props = defineProps({
        staff: Object
    })

    const form = useForm({
        _method: "POST",
        _updating: "staffing",
        nip: props.staff?.nip,
    })

    const updateStaffInformation = () => {
        form.put(route("dashboard.staff.update", props.staff), {
            errorBag: "updateStaffInformation",
            preserveScroll: true
        })
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
                <JetInput id="nip" v-model="form.nip" :isError="form.errors.nip" type="text" class="block w-full mt-1" autocomplete="nip" />
                <JetInputError :message="form.errors.nip" class="mt-2" />
            </div>

            <!-- NUPTK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="nuptk" value="NUPTK" />
                <JetInput id="nuptk" v-model="form.nuptk" :isError="form.errors.nuptk" type="text" class="block w-full mt-1" autocomplete="nuptk" />
                <JetInputError :message="form.errors.nuptk" class="mt-2" />
            </div>

            <!-- Employment Status -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="employment_status" value="Employment Status" />
                <JetInput id="employment_status" v-model="form.employment_status" :isError="form.errors.employment_status" type="text" class="block w-full mt-1" autocomplete="employment_status" />
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
                <JetInput id="cpns_sk" v-model="form.cpns_sk" :isError="form.errors.cpns_sk" type="text" class="block w-full mt-1" autocomplete="cpns_sk" />
                <JetInputError :message="form.errors.cpns_sk" class="mt-2" />
            </div>

            <!-- CPNS Date -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="cpns_date" value="CPNS Date" />
                <JetInput id="cpns_date" v-model="form.cpns_date" :isError="form.errors.cpns_date" type="text" class="block w-full mt-1" autocomplete="cpns_date" />
                <JetInputError :message="form.errors.cpns_date" class="mt-2" />
            </div>

            <!-- Appointment SK -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_sk" value="Appointment SK" />
                <JetInput id="appointment_sk" v-model="form.appointment_sk" :isError="form.errors.appointment_sk" type="text" class="block w-full mt-1" autocomplete="appointment_sk" />
                <JetInputError :message="form.errors.appointment_sk" class="mt-2" />
            </div>

            <!-- Appointment TMT -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_tmt" value="Appointment TMT" />
                <JetInput id="appointment_tmt" v-model="form.appointment_tmt" :isError="form.errors.appointment_tmt" type="text" class="block w-full mt-1" autocomplete="appointment_tmt" />
                <JetInputError :message="form.errors.appointment_tmt" class="mt-2" />
            </div>

            <!-- Appointment Institute -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="appointment_institute" value="Appointment Institute" />
                <JetInput id="appointment_institute" v-model="form.appointment_institute" :isError="form.errors.appointment_institute" type="text" class="block w-full mt-1" autocomplete="appointment_institute" />
                <JetInputError :message="form.errors.appointment_institute" class="mt-2" />
            </div>

            <!-- Rank -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="rank" value="Rank" />
                <JetInput id="rank" v-model="form.rank" :isError="form.errors.rank" type="text" class="block w-full mt-1" autocomplete="rank" />
                <JetInputError :message="form.errors.rank" class="mt-2" />
            </div>

            <!-- Source of Salary -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="source_of_salary" value="Source of Salary" />
                <JetInput id="source_of_salary" v-model="form.source_of_salary" :isError="form.errors.source_of_salary" type="text" class="block w-full mt-1" autocomplete="source_of_salary" />
                <JetInputError :message="form.errors.source_of_salary" class="mt-2" />
            </div>

            <!-- PNS TMT -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="pns_tmt" value="PNS TMT" />
                <JetInput id="pns_tmt" v-model="form.pns_tmt" :isError="form.errors.pns_tmt" type="text" class="block w-full mt-1" autocomplete="pns_tmt" />
                <JetInputError :message="form.errors.pns_tmt" class="mt-2" />
            </div>

            <!-- Karpeg -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="karpeg" value="Karpeg" />
                <JetInput id="karpeg" v-model="form.karpeg" :isError="form.errors.karpeg" type="text" class="block w-full mt-1" autocomplete="karpeg" />
                <JetInputError :message="form.errors.karpeg" class="mt-2" />
            </div>

            <!-- Karsu -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="karsu" value="Karsu" />
                <JetInput id="karsu" v-model="form.karsu" :isError="form.errors.karsu" type="text" class="block w-full mt-1" autocomplete="karsu" />
                <JetInputError :message="form.errors.karsu" class="mt-2" />
            </div>

            <!-- Is Licensed as Principal -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="is_licensed_as_principal" value="Is Licensed as Principal" />
                <JetInput id="is_licensed_as_principal" v-model="form.is_licensed_as_principal" :isError="form.errors.is_licensed_as_principal" type="text" class="block w-full mt-1" autocomplete="is_licensed_as_principal" />
                <JetInputError :message="form.errors.is_licensed_as_principal" class="mt-2" />
            </div>

            <!-- Had Supervision Training -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="had_supervision_training" value="Had Supervision Training" />
                <JetInput id="had_supervision_training" v-model="form.had_supervision_training" :isError="form.errors.had_supervision_training" type="text" class="block w-full mt-1" autocomplete="had_supervision_training" />
                <JetInputError :message="form.errors.had_supervision_training" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
