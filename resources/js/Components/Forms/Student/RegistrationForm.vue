<script setup>
    import { ref } from "vue";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from "@inertiajs/inertia-vue3";
    import JetButton from "@/Jetstream/Button.vue";
    import JetFormSection from "@/Jetstream/FormSection.vue";
    import JetInput from "@/Jetstream/Input.vue";
    import JetInputError from "@/Jetstream/InputError.vue";
    import JetLabel from "@/Jetstream/Label.vue";
    import JetActionMessage from "@/Jetstream/ActionMessage.vue";
    import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";

    const props = defineProps({
        student: Object
    })

    const form = useForm({
        _method: "POST",
        _updating: "registration information",
        school_before: props.student?.school_before,
        school_certificate_link: props.student?.school_certificate_link,
        school_certificate_number: props.student?.school_certificate_number,
        photo_link: props.student?.photo_link,
        birth_certificate_link: props.student?.birth_certificate_link,
        family_certificate_link: props.student?.family_certificate_link,
        registration_path: props.student?.registration_path
    });

    const updateRegistrationInformation = () => {
        form.put(route("dashboard.student.update", props.student), {
            errorBag: "updateRegistrationInformation",
            preserveScroll: true
        });
    };
</script>

<template>
    <JetFormSection @submitted="updateRegistrationInformation">
        <template #title>Registration Information</template>

        <template #description>Student's registration information.</template>

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
                <JetLabel for="school_certificate_link" value="School Certificate" />
                <JetInput id="school_certificate_link" v-model="form.school_certificate_link" :isError="form.errors.school_certificate_link" type="text" class="block w-full mt-1 opacity-50" disabled autocomplete="school_certificate_link" />
                <JetInputError :message="form.errors.school_certificate_link" class="mt-2" />
            </div>

            <!-- School Certificate Number -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="school_certificate_number" value="School Certificate Number" />
                <JetInput id="school_certificate_number" v-model="form.school_certificate_number" :isError="form.errors.school_certificate_number" type="text" class="block w-full mt-1" autocomplete="school_certificate_number" />
                <JetInputError :message="form.errors.school_certificate_number" class="mt-2" />
            </div>

            <!-- Birth Certificate -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="birth_certificate_link" value="Birth Certificate" />
                <JetInput id="birth_certificate_link" :value="form.birth_certificate_link" :isError="form.errors.birth_certificate_link" disabled type="text" class="block w-full mt-1 opacity-50" autocomplete="birth_certificate_link" />
                <JetInputError :message="form.errors.birth_certificate_link" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
