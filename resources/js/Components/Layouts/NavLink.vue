<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    href: String,
    active: Boolean,
})

const classes = computed(() => {
    return props.active
        ? 'flex items-center px-4 py-2 rounded-full bg-white text-sm font-bold text-gray-900 focus:outline-none transition shadow-lg'
        : 'flex items-center px-4 py-2 rounded-full bg-transparent text-sm font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition'
})
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
