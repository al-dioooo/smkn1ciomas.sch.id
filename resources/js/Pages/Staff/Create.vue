<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue"
    import Welcome from "@/Jetstream/Welcome.vue"
    import JetSectionBorder from "@/Jetstream/SectionBorder"
    import ProfileForm from "@/Components/Forms/Staff/ProfileForm"
    import { InertiaLink } from "@inertiajs/inertia-vue3"
</script>

<template>
    <AppLayout title="Add Staff">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">Add Student</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.staff.index')"> Staff </InertiaLink>
                        <span>/</span>
                        <span>Add</span>
                    </div>
                </div>
            </div>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <ProfileForm />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
