<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';

import BurgerIcon from '@/components/icons/Burger.vue';
// import GitHubIcon from '@/components/icons/GitHub.vue';
import SettingIcon from '@/components/icons/Setting.vue';
import BellIcon from '@/components/icons/Bell.vue';
import EyeIcon from '@/components/icons/Eye.vue';
import { Auth } from '@/types';

const auth = usePage().props.auth as Auth;
</script>

<template>
    <header class="flex fixed justify-between items-center w-full h-10 bg-primary">
        <div class="flex items-center">
            <button type="button" class="flex items-center px-3 h-10 cursor-pointer hover:bg-black/10">
                <BurgerIcon class="text-white/70 size-5" />
            </button>
            <a href="#" class="flex items-center px-5 py-3 h-10 text-sm font-medium text-white hover:bg-black/10">
                Orion Agile
            </a>
        </div>
        <div class="flex items-center">
            <nav class="hidden md:block">
                <ul class="flex">
                    <li>
                        <a href="#" class="flex justify-center items-center px-3 h-10 hover:bg-black/10">
                            <EyeIcon class="text-white size-5" />
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center items-center px-3 h-10 hover:bg-black/10">
                            <SettingIcon class="text-white size-5" />
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex justify-center items-center px-3 h-10 hover:bg-black/10">
                            <BellIcon class="text-white size-5" />
                        </a>
                    </li>
                </ul>
            </nav>
            <button type="button"
                class="flex flex-col justify-center items-start px-4 h-10 cursor-pointer hover:bg-black/10">
                <p class="text-sm text-white">
                    {{ auth.user.name.length > 15 ? auth.user.name.slice(0, 15) + "..." : auth.user.name }}
                </p>
                <p class="text-xs text-gray-300">
                    {{ auth.user.email.length > 15 ? auth.user.email.slice(0, 15) + "..." : auth.user.email }}
                </p>
            </button>
        </div>
    </header>
    <slot />
</template>
