<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

import AppLayout from '@/layouts/AppLayout.vue';

import Section from '@/components/Section.vue';
</script>

<template>

    <Head title="Inicio" />
    <AppLayout>
        <Section>
            <p>Hola mundo</p>
        </Section>
    </AppLayout>
</template>
