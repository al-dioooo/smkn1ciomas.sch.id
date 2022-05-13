<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue"
    import Welcome from "@/Jetstream/Welcome.vue"
    import JetSectionBorder from "@/Jetstream/SectionBorder"
    import ProfileForm from "@/Components/Forms/Staff/ProfileForm"
    import AddressForm from "@/Components/Forms/Staff/AddressForm"
    import ContactForm from "@/Components/Forms/Staff/ContactForm"
    import StaffingForm from "@/Components/Forms/Staff/StaffingForm"
    import FamilyForm from "@/Components/Forms/Staff/FamilyForm"
    import AdditionalForm from "@/Components/Forms/Staff/AdditionalForm"
    import OtherForm from "@/Components/Forms/Staff/OtherForm"
    import { InertiaLink } from "@inertiajs/inertia-vue3"
</script>

<template>
    <AppLayout title="Edit Staff">
        <template #header>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">Edit Staff</h2>
                    <div class="inline-flex items-center space-x-2 text-xs text-gray-500">
                        <InertiaLink :href="route('dashboard.staff.index')"> Staff </InertiaLink>
                        <span>/</span>
                        <InertiaLink :href="route('dashboard.staff.show', $page.props.staff)">
                            {{ $page.props.staff?.auth_data.name }}
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
                    <profile-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <address-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <contact-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <staffing-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <family-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <additional-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />

                    <jet-section-border />

                    <other-form :staff="$page.props.staff" class="mt-10 sm:mt-0" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
