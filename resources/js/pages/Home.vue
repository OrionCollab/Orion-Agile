<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const page = usePage();
const auth = computed(() => page.props.auth);
</script>

<template>

    <Head title="Inicio" />
    <h1>HOME</h1>
    <p>{{ auth.user.name }}</p>
    <p>{{ auth.user.email }}</p>
</template>
