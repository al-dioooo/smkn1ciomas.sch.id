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
    import JetCheckbox from "@/Jetstream/Checkbox"

    const props = defineProps({
        staff: Object
    })

    const form = useForm({
        _method: "POST",
        _updating: "other",
        is_mastering_braille: props.staff?.is_mastering_braille !== 0 ? true : false,
        is_mastering_gestural_language: props.staff?.is_mastering_gestural_language !== 0 ? true : false
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

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} another information.</template>

        <template #form>
            <div class="col-span-6 space-y-4">
                <!-- Is Mastering Braille -->
                <div>
                    <div class="flex items-center space-x-2">
                        <JetCheckbox v-model:checked="form.is_mastering_braille" name="is_mastering_braille" id="is_mastering_braille" />
                        <JetLabel for="is_mastering_braille" value="Is Mastering Braille" />
                    </div>
                    <JetInputError :message="form.errors.is_mastering_braille" class="mt-2" />
                </div>

                <!-- Is Mastering Gestural Language -->
                <div>
                    <div class="flex items-center space-x-2">
                        <JetCheckbox v-model:checked="form.is_mastering_gestural_language" name="is_mastering_gestural_language" id="is_mastering_gestural_language" />
                        <JetLabel for="is_mastering_gestural_language" value="Is Mastering Gestural Language" />
                    </div>
                    <JetInputError :message="form.errors.is_mastering_gestural_language" class="mt-2" />
                </div>
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
