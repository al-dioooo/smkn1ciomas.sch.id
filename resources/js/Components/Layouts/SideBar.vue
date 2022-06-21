<script setup>
    import { ref } from 'vue'
    import { Inertia } from '@inertiajs/inertia'
    import { Head, Link } from '@inertiajs/inertia-vue3'

    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import NavLink from '@/Components/Layouts/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'

    const showingNavigationDropdown = ref(false)

    const switchToTeam = (team) => {
        Inertia.put(route('current-team.update'), {
            team_id: team.id,
        }, {
            preserveState: false,
        })
    }

    const logout = () => {
        Inertia.post(route('logout'))
    }
</script>


<template>
    <aside>
        <!-- Primary Navigation Menu -->
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <Link :href="route('dashboard')">
                        <JetApplicationMark class="block w-auto h-9" />
                    </Link>
                </div>

                <!-- <div class="flex flex-col items-center justify-center w-full space-y-4">
                    <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                        <img class="object-cover w-16 h-16 rounded-full" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                    </button>
                    <span>{{ $page.props.user.name }}</span>
                </div> -->

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:block">
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')"> Dashboard </NavLink>

                    <template v-if="$page.props.user.authenticatable_type === null">
                        <NavLink :href="route('dashboard.student.index')" :active="route().current('dashboard.student.index')"> Student </NavLink>

                        <NavLink :href="route('dashboard.staff.index')" :active="route().current('dashboard.staff.index')"> Staff </NavLink>
                    </template>
                </div>
            </div>
        </div>
    </aside>
</template>
