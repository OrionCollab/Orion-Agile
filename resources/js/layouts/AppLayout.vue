<script setup lang="ts">
import AppSidebarLayout from '@/layouts/app/AppSidebarLayout.vue';
</script>

<template>
    <AppSidebarLayout>
        <main class="py-4 md:pl-[75px] pl-4 pr-4">
            <slot />
        </main>
    </AppSidebarLayout>
</template>