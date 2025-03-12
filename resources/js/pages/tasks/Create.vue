<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    description: '',
    link: '',
    priority: 3,
    status: 'pending',
});

const submitForm = () => {
    form.post(route('task.store'))
}
</script>

<template>

    <Head title="Crear Tarea" />
    <div class="fixed top-0 left-0 z-10 w-full h-screen bg-neutral-900">
        <div class="flex items-center h-full max-w-lg mx-auto">
            <form @submit.prevent="submitForm"
                class="flex flex-col w-full p-6 border rounded-md gap-y-4 bg-neutral-900 border-neutral-800">
                <div class="space-y-2 text-center">
                    <h1 class="text-2xl font-bold">Crear tarea</h1>
                    <p class="text-sm text-neutral-500">Rellena el formulario para crear la tarea.</p>
                </div>
                <div class="space-y-4">
                    <div class="flex flex-col gap-y-2">
                        <label for="title" class="font-medium text-white text-md">Título</label>
                        <input type="text" name="title" id="title" placeholder="Título" autofocus required
                            v-model="form.title"
                            class="px-4 py-3 text-sm transition-colors border rounded-md outline-none text-neutral-300 placeholder:text-neutral-500 bg-neutral-800/20 border-neutral-800 focus:bg-neutral-800/60">
                        <p v-if="form.errors.title" class="text-xs text-red-500">{{ form.errors.title }}</p>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="description" class="font-medium text-white text-md">Descripción</label>
                        <textarea name="description" id="description" rows="3" v-model="form.description"
                            class="px-4 py-3 text-sm transition-colors border rounded-md outline-none resize-none text-neutral-300 placeholder:text-neutral-500 bg-neutral-800/20 border-neutral-800 focus:bg-neutral-800/60"></textarea>
                        <p v-if="form.errors.description" class="text-xs text-red-500">{{ form.errors.description }}</p>

                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="link" class="font-medium text-white text-md">Enlace</label>
                        <input type="text" name="link" id="link" placeholder="https://example.com" v-model="form.link"
                            class="px-4 py-3 text-sm text-blue-400 transition-colors border rounded-md outline-none placeholder:text-neutral-500 bg-neutral-800/20 border-neutral-800 focus:bg-neutral-800/60">
                        <p v-if="form.errors.link" class="text-xs text-red-500">{{ form.errors.link }}</p>

                    </div>
                    <div class="flex flex-col gap-y-2">
                        <div>
                            <label for="priority" class="font-medium text-white text-md">Prioridad</label>
                            <p class="text-xs text-neutral-500">Mientras mas bajo el numero, mas alta la
                                prioridad.</p>
                        </div>
                        <input type="number" min="1" value="3" max="3" required name="priority" id="priority"
                            placeholder="Prioridad" v-model="form.priority"
                            class="px-4 py-3 text-sm transition-colors border rounded-md outline-none text-neutral-300 placeholder:text-neutral-500 bg-neutral-800/20 border-neutral-800 focus:bg-neutral-800/60">
                        <p v-if="form.errors.priority" class="text-xs text-red-500">{{ form.errors.priority }}</p>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="status" class="font-medium text-white text-md">Estado</label>
                        <select name="status" id="status" required v-model="form.status"
                            class="px-4 py-3 text-sm transition-colors border rounded-md outline-none text-neutral-300 placeholder:text-neutral-500 bg-neutral-800/20 border-neutral-800 focus:bg-neutral-800/60">
                            <option value="pending">Pendiente</option>
                            <option value="in_progress">En progreso</option>
                            <option value="completed">Completada</option>
                        </select>
                        <p v-if="form.errors.status" class="text-xs text-red-500">{{ form.errors.status }}</p>
                    </div>
                </div>
                <div class="flex gap-1">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium transition-colors border rounded-md text-neutral-900 bg-neutral-100 hover:bg-neutral-100/80 border-neutral-800">
                        Crear tarea
                    </button>
                    <Link :href="route('home')" class="px-4 py-2 text-sm font-medium text-neutral-500 hover:underline">
                    Cancelar
                    </Link>
                </div>
            </form>
        </div>
    </div>
</template>