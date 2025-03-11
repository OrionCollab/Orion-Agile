<script setup lang="ts">
import { computed } from 'vue';

const props = withDefaults(defineProps<{
    customClass?: string;
    defStyle?: boolean;
}>(), {
    defStyle: true,
});

const customClass = computed(() => {
    return props.defStyle
        ? `md:p-4 md:rounded-3xl border-dashed md:border border-neutral-800 ${props.customClass || ''}`
        : props.customClass || '';
});
</script>

<template>
    <div :class="customClass">
        <slot />
    </div>
</template>
