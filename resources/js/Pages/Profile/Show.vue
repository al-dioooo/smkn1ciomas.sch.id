<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue';
    import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
    import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
    import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
    import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
    import StudentAddressForm from '@/Components/Forms/Student/AddressForm'
    import StudentParentForm from '@/Components/Forms/Student/ParentForm'
    import StudentRegistrationForm from '@/Components/Forms/Student/RegistrationForm'
    import StaffAddressForm from '@/Components/Forms/Staff/AddressForm'
    import StaffContactForm from '@/Components/Forms/Staff/ContactForm'
    import StaffStaffingForm from '@/Components/Forms/Staff/StaffingForm'
    import StaffFamilyForm from '@/Components/Forms/Staff/FamilyForm'
    import StaffAdditionalForm from '@/Components/Forms/Staff/AdditionalForm'
    import StaffOtherForm from '@/Components/Forms/Staff/OtherForm'

    defineProps({
        confirmsTwoFactorAuthentication: Boolean,
        sessions: Array,
    });
</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Profile</h2>
        </template>

        <div>
            <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <UpdateProfileInformationForm :user="$page.props.user" />

                    <JetSectionBorder />
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <UpdatePasswordForm class="mt-10 sm:mt-0" />

                    <JetSectionBorder />
                </div>

                <div v-if="$page.props.user.authenticatable_type === 'App\\Models\\Student'">
                    <StudentAddressForm :student="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StudentParentForm :student="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StudentRegistrationForm :student="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />
                </div>

                <div v-if="$page.props.user.authenticatable_type === 'App\\Models\\Staff'">
                    <StaffAddressForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StaffContactForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StaffStaffingForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StaffFamilyForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StaffAdditionalForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />

                    <StaffOtherForm :staff="$page.props.detail" class="mt-10 sm:mt-0" />
                </div>

                <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                    <TwoFactorAuthenticationForm :requires-confirmation="confirmsTwoFactorAuthentication" class="mt-10 sm:mt-0" />

                    <JetSectionBorder />
                </div>

                <LogoutOtherBrowserSessionsForm :sessions="sessions" class="mt-10 sm:mt-0" />

                <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                    <JetSectionBorder />

                    <DeleteUserForm class="mt-10 sm:mt-0" />
                </template>
            </div>
        </div>
    </AppLayout>
</template>
