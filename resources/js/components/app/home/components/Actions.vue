<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

import PlusIcon from '@/components/icons/Plus.vue';
import FolderIcon from '@/components/icons/Folder.vue';
import TaskIcon from '@/components/icons/Task.vue';
</script>


<template>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
        <a href="#"
            class="flex flex-col items-center justify-center flex-1 px-4 py-4 text-sm font-medium text-center text-green-400 transition-colors rounded-md lg:py-2 hover:bg-green-500/30 bg-green-500/20">
            <PlusIcon class="size-8" />
            <span>Crear grupo</span>
        </a>
        <a href="#"
            class="flex flex-col items-center justify-center flex-1 px-4 py-4 text-sm font-medium text-center text-orange-400 transition-colors rounded-md lg:py-2 hover:bg-orange-500/30 bg-orange-500/20">
            <FolderIcon class="size-8" />
            <span>Nuevo proyecto</span>
        </a>
        <Link :href="route('task.create')"
            class="flex flex-col items-center justify-center flex-1 px-4 py-4 text-sm font-medium text-center text-purple-400 transition-colors rounded-md lg:py-2 hover:bg-purple-500/30 bg-purple-500/20">
        <TaskIcon class="size-8" />
        <span>Nueva tarea</span>
        </Link>
        <div class="flex flex-col justify-center gap-2 text-sm font-medium text-center">
            <a href="#"
                class="px-4 py-2 text-white transition-colors border rounded-md bg-neutral-800/20 hover:bg-neutral-800/60 border-neutral-800">
                Panel de control
            </a>
            <a href="#"
                class="px-4 py-2 transition-colors rounded-md text-neutral-900 bg-neutral-100 hover:bg-neutral-100/80">
                Ver registros
            </a>
        </div>
    </div>
</template>