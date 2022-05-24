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
        _updating: "family",
        mother_name: props.staff?.mother_name,
        pair_name: props.staff?.pair_name,
        pair_nip: props.staff?.pair_nip,
        pair_profession: props.staff?.pair_profession,
        family_certificate_number: props.staff?.family_certificate_number
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
        <template #title>Family Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} family information.</template>

        <template #form>
            <!-- Mother Name -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="mother_name" value="Mother Name" />
                <JetInput id="mother_name" v-model="form.mother_name" :isError="form.errors.mother_name" type="text" class="block w-full mt-1" autocomplete="mother_name" />
                <JetInputError :message="form.errors.mother_name" class="mt-2" />
            </div>

            <!-- Pair Name -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="pair_name" value="Pair Name" />
                <JetInput id="pair_name" v-model="form.pair_name" :isError="form.errors.pair_name" type="text" class="block w-full mt-1" autocomplete="pair_name" />
                <JetInputError :message="form.errors.pair_name" class="mt-2" />
            </div>

            <!-- Pair's NIP -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="pair_nip" value="Pair's NIP" />
                <JetInput id="pair_nip" v-model="form.pair_nip" :isError="form.errors.pair_nip" type="text" class="block w-full mt-1" autocomplete="pair_nip" />
                <JetInputError :message="form.errors.pair_nip" class="mt-2" />
            </div>

            <!-- Pair's Profession -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="pair_profession" value="Pair's Profession" />
                <JetInput id="pair_profession" v-model="form.pair_profession" :isError="form.errors.pair_profession" type="text" class="block w-full mt-1" autocomplete="pair_profession" />
                <JetInputError :message="form.errors.pair_profession" class="mt-2" />
            </div>

            <!-- Family Certificate Number -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="family_certificate_number" value="Family Certificate Number" />
                <JetInput id="family_certificate_number" v-model="form.family_certificate_number" :isError="form.errors.family_certificate_number" type="text" class="block w-full mt-1" autocomplete="family_certificate_number" />
                <JetInputError :message="form.errors.family_certificate_number" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
