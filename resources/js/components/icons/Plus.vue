<script setup lang="ts">
defineProps({
    customClass: {
        type: String,
        default: '',
    },
});
</script>

<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24" :class="customClass">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 5v14m-7-7h14" />
    </svg>
</template>