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

    const majors = ref(null)
    const classes = ref(null)

    const form = useForm({
        _method: "POST",
        _updating: "contact",
        phone: props.staff?.phone,
        email: props.staff?.auth_data.email,
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
        <template #title>Contact Information</template>

        <template #description>{{ staff?.auth_data.id === $page.props.user.id ? "Your" : "Staff's" }} contact information.</template>

        <template #form>
            <!-- Phone -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="phone" value="Phone" />
                <JetInput id="phone" v-model="form.phone" :isError="form.errors.phone" type="text" class="block w-full mt-1" autocomplete="phone" />
                <JetInputError :message="form.errors.phone" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="email" value="Email" />
                <JetInput id="email" v-model="form.email" :isError="form.errors.email" type="email" class="block w-full mt-1" autocomplete="email" />
                <JetInputError :message="form.errors.email" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
