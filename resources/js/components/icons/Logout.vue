<script setup lang="ts">
defineProps({
    customClass: {
        type: String,
        default: '',
    },
});
</script>

<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2" :class="customClass">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
        <path d="M15 12h-12l3 -3" />
        <path d="M6 15l-3 -3" />
    </svg>
</template>