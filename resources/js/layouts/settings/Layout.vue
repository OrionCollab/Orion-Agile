<script setup lang="ts">
import { Link } from '@inertiajs/vue3'

const sidebarNavItems = [
    {
        title: 'Profile',
        href: '/settings/profile',
    },
    {
        title: 'Password',
        href: '/settings/password',
    }
];

const currentPath = window.location.pathname;
</script>

<template>
    <div class="px-4 py-6">
        <h1 class="text-2xl font-bold">Settings</h1>
        <p class="text-gray-600">Manage your profile and account settings</p>

        <div class="flex flex-col space-y-8 md:space-y-0 lg:flex-row lg:space-x-12 lg:space-y-0">
            <aside class="w-full max-w-xl lg:w-48">
                <nav class="flex flex-col space-x-0 space-y-1">
                    <Link v-for="item in sidebarNavItems" :key="item.href" :href="item.href"
                        class="block w-full px-4 py-2 text-left transition-colors duration-200 rounded-lg"
                        :class="{ 'bg-gray-200': currentPath === item.href, 'hover:bg-gray-100': currentPath !== item.href }">
                    {{ item.title }}
                    </Link>
                </nav>
            </aside>

            <hr class="my-6 border-gray-300 md:hidden" />

            <div class="flex-1 md:max-w-2xl">
                <section class="max-w-xl space-y-12">
                    <slot />
                </section>
            </div>
        </div>
    </div>
</template>