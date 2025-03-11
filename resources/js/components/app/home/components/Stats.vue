<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';

import ClockIcon from '@/components/icons/Clock.vue';
import FolderIcon from '@/components/icons/Folder.vue';
import TaskIcon from '@/components/icons/Task.vue';

const page = usePage();
const taskCount = page.props.taskCount;
const highPriorityTasks = page.props.highPriorityTasks;
</script>


<template>
    <ul class="flex flex-col grid-cols-1 gap-4 md:grid md:grid-cols-3">
        <li class="relative overflow-hidden">
            <TaskIcon class="absolute right-0 -mr-10 top-5 opacity-10 -z-10 size-40" />
            <article
                class="p-4 transition-colors border rounded-md cursor-pointer bg-neutral-800/20 hover:bg-neutral-800/60 border-neutral-800">
                <div class="flex flex-col gap-y-2">
                    <h3 class="font-medium text-white text-md">Tareas personales</h3>
                    <span class="text-2xl font-bold text-neutral-400">{{ taskCount }}</span>
                    <span class="text-sm text-neutral-500">{{ highPriorityTasks }} con alta prioridad</span>
                </div>
            </article>
        </li>
        <li class="relative overflow-hidden">
            <FolderIcon class="absolute right-0 -mr-10 top-5 opacity-10 -z-10 size-40" />
            <article
                class="p-4 transition-colors border rounded-md cursor-pointer bg-neutral-800/20 hover:bg-neutral-800/60 border-neutral-800">
                <div class="flex flex-col gap-y-2">
                    <h3 class="font-medium text-white text-md">Proyectos activos</h3>
                    <span class="text-2xl font-bold text-neutral-400">7</span>
                    <span class="text-sm text-neutral-500">2 te pertenecen</span>
                </div>
            </article>
        </li>
        <li class="relative overflow-hidden">
            <ClockIcon class="absolute right-0 -mr-10 top-5 opacity-10 -z-10 size-40" />
            <article
                class="p-4 transition-colors border rounded-md cursor-pointer bg-neutral-800/20 hover:bg-neutral-800/60 border-neutral-800">
                <div class="flex flex-col gap-y-2">
                    <h3 class="font-medium text-white text-md">Grupos activos</h3>
                    <span class="text-2xl font-bold text-neutral-400">3</span>
                    <span class="text-sm text-neutral-500">23 proyectos totales</span>
                </div>
            </article>
        </li>
    </ul>
</template>