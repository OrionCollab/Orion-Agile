<script setup lang="ts">
import UserIcon from '@/components/icons/User.vue';
import LogoutIcon from '@/components/icons/Logout.vue';
import SettingIcon from '@/components/icons/Setting.vue';
</script>

<template>
    <ul class="hidden absolute left-3 bottom-16 rounded-lg border md:block bg-neutral-100 border-neutral-200">
        <li><a href="#"
                class="flex gap-x-1 items-center px-4 py-2 text-sm text-black rounded-t-md hover:bg-neutral-200">
                <UserIcon class="size-5" /> Perfil
            </a></li>
        <li><a href="#" class="flex gap-x-1 items-center px-4 py-2 text-sm text-black hover:bg-neutral-200">
                <SettingIcon class="size-5" /> Configuración
            </a>
        </li>
        <li><a href="#"
                class="flex gap-x-1 items-center px-4 py-2 text-sm text-black rounded-b-md hover:bg-neutral-200">
                <LogoutIcon class="size-5" /> Cerrar sesión
            </a>
        </li>
    </ul>
</template>