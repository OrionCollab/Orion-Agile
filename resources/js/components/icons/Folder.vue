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
        stroke-width="1.5" class="icon icon-tabler icons-tabler-filled icon-tabler-folder" :class="customClass">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path
            d="M9 3a1 1 0 0 1 .608 .206l.1 .087l2.706 2.707h6.586a3 3 0 0 1 2.995 2.824l.005 .176v8a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-11a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
    </svg>
</template>