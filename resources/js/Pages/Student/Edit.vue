<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue"
    import Welcome from "@/Jetstream/Welcome.vue"
    import JetSectionBorder from "@/Jetstream/SectionBorder"
    import ProfileForm from "@/Components/Forms/Student/ProfileForm"
    import AddressForm from "@/Components/Forms/Student/AddressForm"
    import ParentForm from "@/Components/Forms/Student/ParentForm"
    import RegistrationForm from "@/Components/Forms/Student/RegistrationForm"
    import { InertiaLink } from "@inertiajs/inertia-vue3"
</script>

<template>
    <AppLayout title="Edit Student">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">Edit Student</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.student.index')">
                            Student
                        </InertiaLink>
                        <span>/</span>
                        <InertiaLink :href="route('dashboard.student.show', $page.props.student)">
                            {{ $page.props.student?.auth_data.name }}
                        </InertiaLink>
                        <span>/</span>
                        <span>Edit</span>
                    </div>
                </div>
            </div>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <profile-form :student="$page.props.student" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <address-form :student="$page.props.student" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <parent-form :student="$page.props.student" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <registration-form :student="$page.props.student" class="mt-10 sm:mt-0" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
