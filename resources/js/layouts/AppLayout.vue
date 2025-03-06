<script setup lang="ts">
import AppHeaderLayout from '@/layouts/app/AppHeaderLayout.vue';
</script>

<template>
    <AppHeaderLayout>
        <main class="px-2 pt-16 mx-auto space-y-10 max-w-6xl">
            <slot />
        </main>
    </AppHeaderLayout>
</template>