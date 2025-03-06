<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="404" />

    <div class="flex flex-col items-center justify-center h-screen text-black bg-white">
        <div class="max-w-md text-center">
            <div class="font-extrabold text-neutral-300 text-9xl">404</div>
            <h1 class="mt-4 text-3xl font-bold text-primary">Página no encontrada</h1>

            <p class="mt-4 text-neutral-400">
                Lo sentimos, la página que estás buscando no existe o ha sido movida.
            </p>

            <a :href="route('home')"
                class="inline-flex items-center justify-center px-4 py-2 mt-6 text-sm font-medium text-white transition-colors rounded-sm bg-primary hover:bg-primary/90">
                Volver al inicio
            </a>
        </div>
    </div>
</template>