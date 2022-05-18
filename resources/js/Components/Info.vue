<script setup>
    import Gauge from '@/Components/Charts/Gauge'
</script>


<template>
    <div>
        <div class="p-6 bg-white border-b border-gray-200 sm:p-20">
            <div class="flex space-x-4">
                <img class="object-cover w-12 h-12 rounded-full" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                <div>
                    <p class="text-sm">Welcome</p>
                    <p class="text-xl">{{ $page.props.user.name }}</p>
                </div>
            </div>

            <div class="mt-6 text-gray-500">Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel ecosystem to be a breath of fresh air. We hope you love it.</div>

            <div class="grid grid-cols-3">
                <template v-if="$page.props.user.authenticatable_type !== null">
                    <Gauge title="Progress" subtitle="Profile Completion" :progress="$page.props.progress" />
                </template>
                <template v-if="$page.props.user.authenticatable_type === null">
                    <Gauge title="Total" subtitle="User" :progress="$page.props.progress" :showProgress="false" />
                </template>
            </div>
        </div>
    </div>
</template>
