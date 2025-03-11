<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';

// import BurgerIcon from '@/components/icons/Burger.vue';
import SettingIcon from '@/components/icons/Setting.vue';
import BellIcon from '@/components/icons/Bell.vue';
import EyeIcon from '@/components/icons/Eye.vue';
import { Auth } from '@/types';

const auth = usePage().props.auth as Auth;
</script>

<template>
    <header class="flex fixed justify-around items-center px-2 py-3 w-full text-black bg-white/20">
        <div class="text-lg font-bold">
            Orion Agile
        </div>
        <div class="flex gap-x-5 items-center">
            <div class="flex gap-x-2 items-center">
                <button class="p-2 rounded-md hover:bg-zinc-800 text-zinc-300">
                    <EyeIcon class="size-5" />
                </button>
                <button class="p-2 rounded-md hover:bg-zinc-800 text-zinc-300">
                    <BellIcon class="size-5" />
                </button>
                <button class="p-2 rounded-md hover:bg-zinc-800 text-zinc-300">
                    <SettingIcon class="size-5" />
                </button>
            </div>
            <div class="flex gap-x-2 items-center">
                <!-- avatar -->
                <div class="p-5 bg-white rounded-full"></div>
                <!-- user-info -->
                <div class="">
                    <p class="text-sm font-medium">
                        {{ auth.user.name.length > 12 ? auth.user.name.slice(0, 12) : auth.user.name }}
                    </p>
                    <p class="text-xs font-medium text-zinc-500">
                        {{ auth.user.email.length > 14 ? auth.user.email.slice(0, 14) : auth.user.email }}
                    </p>
                </div>
            </div>
        </div>
    </header>
    <slot />
</template>
