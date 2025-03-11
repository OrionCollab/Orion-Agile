<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

import AppLayout from '@/layouts/AppLayout.vue';

import Content from '@/components/app/home/Content.vue';
</script>

<template>

    <Head title="Inicio" />
    <AppLayout>
        <Content />
    </AppLayout>
</template>
