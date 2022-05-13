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
        _updating: "other",
        is_mastering_braille: props.staff?.is_mastering_braille,
        is_mastering_gestural_language: props.staff?.is_mastering_gestural_language
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
        <template #title>Other Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} other information.</template>

        <template #form>
            <!-- Is Mastering Braille -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="is_mastering_braille" value="Is Mastering Braille" />
                <JetInput id="is_mastering_braille" v-model="form.is_mastering_braille" :isError="form.errors.is_mastering_braille" type="text" class="block w-full mt-1" autocomplete="is_mastering_braille" />
                <JetInputError :message="form.errors.is_mastering_braille" class="mt-2" />
            </div>

            <!-- Is Mastering Gestural Language -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="is_mastering_gestural_language" value="Is Mastering Gestural Language" />
                <JetInput id="is_mastering_gestural_language" v-model="form.is_mastering_gestural_language" :isError="form.errors.is_mastering_gestural_language" type="text" class="block w-full mt-1" autocomplete="is_mastering_gestural_language" />
                <JetInputError :message="form.errors.is_mastering_gestural_language" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
