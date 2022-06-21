<script setup>
    import AppLayout from '@/Layouts/AppLayout'
    import Info from '@/Components/Info'
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="text-2xl font-semibold leading-tight">Dashboard</h2>
        </template>

        <div>
            <div class="sm:px-6 lg:px-8">
                <Info />
            </div>
        </div>
    </AppLayout>
</template>
