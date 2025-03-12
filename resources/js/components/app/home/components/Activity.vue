<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import PlusIcon from '@/components/icons/Plus.vue';
import { Log } from '@/types';

const page = usePage();
const logs = computed<Log[]>(() => {
    const logsData = page.props.logs as Log[] | undefined;
    return Array.isArray(logsData) ? logsData : [];
});
</script>

<template>
    <div class="overflow-y-auto max-h-80 no-scroll">
        <ul class="space-y-0" v-if="logs.length">
            <li v-for="log in logs" :key="log.id">
                <article
                    class="flex items-center p-4 transition-colors cursor-pointer gap-x-2 bg-neutral-800/20 hover:bg-neutral-800/60">
                    <PlusIcon class="size-5 text-neutral-500" />
                    <div class="flex items-center justify-between flex-1">
                        <h3 class="text-sm font-medium text-neutral-300">{{ log.action }}</h3>
                        <span class="text-xs text-neutral-500">{{ log.created_at }}</span>
                    </div>
                </article>
            </li>
        </ul>
        <p v-else class="text-xs text-neutral-500">No hay registros disponibles</p>
    </div>
</template>



<!-- 
<li>
    <article
        class="flex items-center p-4 transition-colors cursor-pointer gap-x-2 bg-neutral-800/20 hover:bg-neutral-800/60">
        <PlusIcon class="size-5 text-neutral-500" />
        <div class="flex items-center justify-between flex-1">
            <h3 class="text-sm font-medium text-neutral-300">Tarea creada</h3>
            <span class="text-xs text-neutral-500">23 seconds age</span>
        </div>
    </article>
</li>
<li>
    <article
        class="flex items-center p-4 transition-colors cursor-pointer gap-x-2 bg-yellow-800/20 hover:bg-yellow-800/30">
        <PlusIcon class="text-yellow-500 size-5" />
        <div class="flex items-center justify-between flex-1">
            <h3 class="text-sm font-medium text-yellow-400">Grupo creado</h3>
            <span class="text-xs text-yellow-400">23 seconds age</span>
        </div>
    </article>
</li>
<li>
    <article
        class="flex items-center p-4 transition-colors cursor-pointer gap-x-2 bg-red-800/20 hover:bg-red-800/30">
        <PlusIcon class="text-red-500 size-5" />
        <div class="flex items-center justify-between flex-1">
            <h3 class="text-sm font-medium text-red-400">Error al intentar editar perfil
            </h3>
            <span class="text-xs text-red-400">23 seconds age</span>
        </div>
    </article>
</li> 
-->