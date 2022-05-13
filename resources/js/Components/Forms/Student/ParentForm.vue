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
        _updating: "parent information",
        parent_name: props.student?.parent_name,
        parent_status: props.student?.parent_status,
        parent_place_of_birth: props.student?.parent_place_of_birth,
        parent_date_of_birth: props.student?.parent_date_of_birth,
        parent_education: props.student?.parent_education,
        parent_profession: props.student?.parent_profession,
        parent_income: props.student?.parent_income,
        parent_liabilities: props.student?.parent_liabilities,
        parent_phone: props.student?.parent_phone,
        parent_address: props.student?.parent_address
    });

    const updateParentInformation = () => {
        form.put(route("dashboard.student.update", props.student), {
            errorBag: "updateParentInformation",
            preserveScroll: true
        });
    };
</script>

<template>
    <JetFormSection @submitted="updateParentInformation">
        <template #title>Parent Information</template>

        <template #description>Student's parent information.</template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_name" value="Name" />
                <JetInput id="parent_name" v-model="form.parent_name" :isError="form.errors.parent_name" type="text" class="block w-full mt-1" autocomplete="parent_name" />
                <JetInputError :message="form.errors.parent_name" class="mt-2" />
            </div>

            <!-- Status -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_status" value="Status" />
                <JetInput id="parent_status" v-model="form.parent_status" :isError="form.errors.parent_status" type="text" class="block w-full mt-1" autocomplete="parent_status" />
                <JetInputError :message="form.errors.parent_status" class="mt-2" />
            </div>

            <!-- Place of Birth -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_place_of_birth" value="Place of Birth" />
                <JetInput id="parent_place_of_birth" v-model="form.parent_place_of_birth" :isError="form.errors.parent_place_of_birth" type="text" class="block w-full mt-1" autocomplete="parent_place_of_birth" />
                <JetInputError :message="form.errors.parent_place_of_birth" class="mt-2" />
            </div>

            <!-- Date of Birth -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_date_of_birth" value="Date of Birth" />
                <JetInput id="parent_date_of_birth" v-model="form.parent_date_of_birth" :isError="form.errors.parent_date_of_birth" type="date" class="block w-full mt-1" autocomplete="parent_date_of_birth" />
                <JetInputError :message="form.errors.parent_date_of_birth" class="mt-2" />
            </div>

            <!-- Education -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_education" value="Education" />
                <JetInput id="parent_education" v-model="form.parent_education" :isError="form.errors.parent_education" type="text" class="block w-full mt-1" autocomplete="parent_education" />
                <JetInputError :message="form.errors.parent_education" class="mt-2" />
            </div>

            <!-- Profession -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_profession" value="Profession" />
                <JetInput id="parent_profession" v-model="form.parent_profession" :isError="form.errors.parent_profession" type="text" class="block w-full mt-1" autocomplete="parent_profession" />
                <JetInputError :message="form.errors.parent_profession" class="mt-2" />
            </div>

            <!-- Income -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_income" value="Income" />
                <JetInput id="parent_income" v-model="form.parent_income" :isError="form.errors.parent_income" type="text" class="block w-full mt-1" autocomplete="parent_income" />
                <JetInputError :message="form.errors.parent_income" class="mt-2" />
            </div>

            <!-- Liabilities -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_liabilities" value="Liabilities" />
                <JetInput id="parent_liabilities" v-model="form.parent_liabilities" :isError="form.errors.parent_liabilities" type="text" class="block w-full mt-1" autocomplete="parent_liabilities" />
                <JetInputError :message="form.errors.parent_liabilities" class="mt-2" />
            </div>

            <!-- Phone Number -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_phone" value="Phone Number" />
                <JetInput id="parent_phone" v-model="form.parent_phone" :isError="form.errors.parent_phone" type="text" class="block w-full mt-1" autocomplete="parent_phone" />
                <JetInputError :message="form.errors.parent_phone" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="col-span-6 sm:col-span-3">
                <JetLabel for="parent_address" value="Address" />
                <JetInput id="parent_address" v-model="form.parent_address" :isError="form.errors.parent_address" type="text" class="block w-full mt-1" autocomplete="parent_address" />
                <JetInputError :message="form.errors.parent_address" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetActionMessage :on="form.recentlySuccessful" class="mr-3"> Saved. </JetActionMessage>

            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> Save </JetButton>
        </template>
    </JetFormSection>
</template>
