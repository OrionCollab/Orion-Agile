<script setup lang="ts">
import { ref } from 'vue';

import FormTask from '@/components/app/home/components/FormTask.vue';

import PlusIcon from '@/components/icons/Plus.vue';
import FolderIcon from '@/components/icons/Folder.vue';
import TaskIcon from '@/components/icons/Task.vue';


const showFormTask = ref(false);

const handleFormTask = () => {
    showFormTask.value = !showFormTask.value;
};
</script>


<template>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
        <a href="#"
            class="flex flex-col flex-1 justify-center items-center px-4 py-4 text-sm font-medium text-center text-green-400 rounded-md transition-colors lg:py-2 hover:bg-green-500/30 bg-green-500/20">
            <PlusIcon class="size-8" />
            <span>Crear grupo</span>
        </a>
        <a href="#"
            class="flex flex-col flex-1 justify-center items-center px-4 py-4 text-sm font-medium text-center text-orange-400 rounded-md transition-colors lg:py-2 hover:bg-orange-500/30 bg-orange-500/20">
            <FolderIcon class="size-8" />
            <span>Nuevo proyecto</span>
        </a>
        <button @click="handleFormTask" type="button"
            class="flex flex-col flex-1 justify-center items-center px-4 py-4 text-sm font-medium text-center text-purple-400 rounded-md transition-colors lg:py-2 hover:bg-purple-500/30 bg-purple-500/20">
            <TaskIcon class="size-8" />
            <span>Nueva tarea</span>
        </button>
        <div class="flex flex-col gap-2 justify-center text-sm font-medium text-center">
            <a href="#"
                class="px-4 py-2 text-white rounded-md border transition-colors bg-neutral-800/20 hover:bg-neutral-800/60 border-neutral-800">
                Panel de control
            </a>
            <a href="#"
                class="px-4 py-2 rounded-md transition-colors text-neutral-900 bg-neutral-100 hover:bg-neutral-100/80">
                Ver registros
            </a>
        </div>
    </div>
    <FormTask v-if="showFormTask" @close="showFormTask = false" />
</template>