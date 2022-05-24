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

    const form = useForm({
        _method: "POST",
        _updating: "additional information",
        npwp: props.staff?.npwp,
        tax_payer_name: props.staff?.tax_payer_name,
        nationality: props.staff?.nationality,
        bank_name: props.staff?.bank_name,
        bank_account_number: props.staff?.bank_account_number,
        bank_account_name: props.staff?.bank_account_name,
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
        <template #title>Additional Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} additional information.</template>

        <template #form>
            <!-- NPWP -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="npwp" value="NPWP" />
                <JetInput id="npwp" v-model="form.npwp" :isError="form.errors.npwp" type="text" class="block w-full mt-1" autocomplete="npwp" />
                <JetInputError :message="form.errors.npwp" class="mt-2" />
            </div>

            <!-- Tax Payer Name -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="tax_payer_name" value="Tax Payer Name" />
                <JetInput id="tax_payer_name" v-model="form.tax_payer_name" :isError="form.errors.tax_payer_name" type="text" class="block w-full mt-1" autocomplete="tax_payer_name" />
                <JetInputError :message="form.errors.tax_payer_name" class="mt-2" />
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

            <!-- Bank Name -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="bank_name" value="Bank Name" />
                <JetInput id="bank_name" v-model="form.bank_name" :isError="form.errors.bank_name" type="text" class="block w-full mt-1" autocomplete="bank_name" />
                <JetInputError :message="form.errors.bank_name" class="mt-2" />
            </div>

            <!-- Bank Account Number -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="bank_account_number" value="Bank Account Number" />
                <JetInput id="bank_account_number" v-model="form.bank_account_number" :isError="form.errors.bank_account_number" type="text" class="block w-full mt-1" autocomplete="bank_account_number" />
                <JetInputError :message="form.errors.bank_account_number" class="mt-2" />
            </div>

            <!-- Bank Account Name -->
            <div class="col-span-6 sm:col-span-2">
                <JetLabel for="bank_account_name" value="Bank Account Name" />
                <JetInput id="bank_account_name" v-model="form.bank_account_name" :isError="form.errors.bank_account_name" type="text" class="block w-full mt-1" autocomplete="bank_account_name" />
                <JetInputError :message="form.errors.bank_account_name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
