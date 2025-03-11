<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { Auth } from '@/types';
import Section from '@/components/Section.vue';
import Card from '@/components/Card.vue';

import Activity from '@/components/app/home/components/Activity.vue';
import Actions from '@/components/app/home/components/Actions.vue';
import Stats from '@/components/app/home/components/Stats.vue';

const auth = usePage().props.auth as Auth;
</script>

<template>
    <Section>
        <div class="grid grid-cols-1 gap-7 select-none md:gap-4 lg:grid-cols-3 xl:grid-cols-4">
            <Card :def-style="false" class="lg:col-span-3 xl:col-span-2">
                <div class="flex flex-col gap-y-5">
                    <div>
                        <h2 class="text-2xl font-bold text-white">Orion Agile</h2>
                        <p class="text-md text-neutral-500">Bienvenido de nuevo, <span class="font-medium text-white">
                                {{ auth.user.name }}</span>.</p>
                    </div>
                    <Actions />
                    <div class="flex">
                        <a href="#" class="text-sm font-semibold text-blue-400 hover:underline">
                            Ver actividades recientes
                        </a>
                    </div>
                </div>
            </Card>
            <Card class="lg:col-span-1 xl:col-span-2">
                <div class="flex flex-col gap-y-5">
                    <div>
                        <h2 class="text-lg font-medium text-white">Estadísticas</h2>
                    </div>
                    <Stats />
                </div>
            </Card>
            <Card class="lg:col-span-2 xl:col-span-1">
                Tareas pendientes
            </Card>
            <Card class="lg:col-span-1 xl:col-span-1">
                Proyectos en progreso
            </Card>
            <Card class="lg:col-span-2 xl:col-span-1">
                Mis Grupos
            </Card>
            <Card :def-style="false" class="lg:col-span-1 xl:row-span-2">
                <div class="space-y-5">
                    <div>
                        <h2 class="text-lg font-medium text-white">Mi Actividad</h2>
                        <p class="text-sm text-neutral-500">Aquí podrás ver la actividad que tienes en el sistema.</p>
                    </div>
                    <Activity />
                </div>
            </Card>
            <Card class="lg:col-span-2 lg:row-span-2 xl:row-span-1 xl:col-span-2">
                Estados de proyectos
            </Card>
            <Card class="lg:col-span-1 xl:col-span-1">
                Notificaciones
            </Card>
        </div>
    </Section>
</template>
