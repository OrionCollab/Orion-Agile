<script setup lang="ts">
import FolderIcon from '@/components/icons/Folder.vue';
import TaskIcon from '@/components/icons/Task.vue';
import ProjectIcon from '@/components/icons/Project.vue';

const items = [
    { content: 'Agregar Proyecto', icon: ProjectIcon, href: '/project' },
    { content: 'Agregar Tarea', icon: TaskIcon, href: '/task' },
    { content: 'Registros', icon: FolderIcon, href: '/logs' },
    { content: 'Listado de Tareas', icon: FolderIcon, href: '/tasks' },
    { content: 'Lista de Proyectos', icon: FolderIcon, href: '/projects' },
] as const;
</script>

<template>
    <a v-for="item in items" :key="item.href" :href="item.href"
        class="flex flex-col justify-start items-center p-4 space-y-1 font-medium text-center rounded-md hover:bg-zinc-100 group">
        <component :is="item.icon" class="size-10 text-blue-500/50 group-hover:text-blue-500" />
        <p class="text-[13px] break-words max-w-[100px]">
            {{ item.content }}
        </p>
    </a>
</template>
