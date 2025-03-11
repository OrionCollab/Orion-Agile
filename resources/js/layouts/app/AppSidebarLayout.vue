<script setup lang="ts">
import { ref } from 'vue';
import { usePage } from '@inertiajs/vue3';
import ProfileOptions from '@/components/app/home/components/ProfileOptions.vue';
import SettingIcon from '@/components/icons/Setting.vue';
import BellIcon from '@/components/icons/Bell.vue';
import TaskIcon from '@/components/icons/Task.vue';
import FolderIcon from '@/components/icons/Folder.vue';
import { Auth } from '@/types';

const auth = usePage().props.auth as Auth;
const showProfileOptions = ref(false);

const handleProfileOptions = () => {
    showProfileOptions.value = !showProfileOptions.value;
};
</script>

<template>
    <div class="hidden fixed md:block">
        <div
            class="flex overflow-x-hidden flex-col justify-between items-center py-4 space-y-6 w-16 h-screen no-scroll">
            <div class="flex flex-col items-center space-y-5">
                <a href="#" class="text-2xl font-semibold text-white rounded-md cursor-pointer">OA</a>
                <nav class="flex flex-col space-y-2">
                    <a href="#"
                        class="p-2 rounded-md transition-colors hover:text-neutral-100 text-neutral-500 hover:bg-neutral-800">
                        <FolderIcon class="size-6" />
                    </a>
                    <a href="#"
                        class="p-2 rounded-md transition-colors hover:text-neutral-100 text-neutral-500 hover:bg-neutral-800">
                        <TaskIcon class="size-6" />
                    </a>
                    <a href="#"
                        class="p-2 rounded-md transition-colors hover:text-neutral-100 text-neutral-500 hover:bg-neutral-800">
                        <SettingIcon class="size-6" />
                    </a>
                </nav>
            </div>
            <div class="flex flex-col items-center space-y-5">
                <div class="flex flex-col space-y-2">
                    <a href="#"
                        class="p-2 rounded-md transition-colors hover:text-neutral-100 text-neutral-500 hover:bg-neutral-800">
                        <BellIcon class="size-6" />
                    </a>
                    <a href="#"
                        class="p-2 rounded-md transition-colors hover:text-neutral-100 text-neutral-500 hover:bg-neutral-800">
                        <SettingIcon class="size-6" />
                    </a>
                </div>
                <button @click="handleProfileOptions"
                    class="relative p-5 font-medium bg-white rounded-full cursor-pointer text-neutral-900">
                    <span class="absolute top-2 left-3.5 uppercase">{{ auth.user.name.slice(0, 1) }}</span>
                </button>
            </div>
        </div>
    </div>
    <slot />

    <Transition name="fade">
        <ProfileOptions v-if="showProfileOptions" />
    </Transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity .2s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>