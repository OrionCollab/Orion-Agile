<script setup lang="ts">
import SettingsLayout from '@/layouts/settings/Layout.vue';
import { TransitionRoot } from '@headlessui/vue';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref<HTMLInputElement | null>(null);
const currentPasswordInput = ref<HTMLInputElement | null>(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: (errors: any) => {
            if (errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value?.focus();
            }

            if (errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value?.focus();
            }
        },
    });
};
</script>

<template>
    <div>

        <Head title="Password settings" />
        <SettingsLayout>
            <div class="p-6">
                <h2 class="text-lg font-semibold">Update password</h2>
                <p class="text-sm text-gray-600">Ensure your account is using a long, random password to stay secure.
                </p>
                <form @submit.prevent="updatePassword" class="mt-4 space-y-6">
                    <div>
                        <label for="current_password" class="block text-sm font-medium">Current password</label>
                        <input id="current_password" ref="currentPasswordInput" v-model="form.current_password"
                            type="password" class="block w-full p-2 mt-1 border rounded-md"
                            autocomplete="current-password" placeholder="Current password" />
                        <p v-if="form.errors.current_password" class="text-sm text-red-500">{{
                            form.errors.current_password }}</p>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium">New password</label>
                        <input id="password" ref="passwordInput" v-model="form.password" type="password"
                            class="block w-full p-2 mt-1 border rounded-md" autocomplete="new-password"
                            placeholder="New password" />
                        <p v-if="form.errors.password" class="text-sm text-red-500">{{ form.errors.password }}</p>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium">Confirm password</label>
                        <input id="password_confirmation" v-model="form.password_confirmation" type="password"
                            class="block w-full p-2 mt-1 border rounded-md" autocomplete="new-password"
                            placeholder="Confirm password" />
                        <p v-if="form.errors.password_confirmation" class="text-sm text-red-500">
                            {{ form.errors.password_confirmation }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <button type="submit" :disabled="form.processing"
                            class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 disabled:opacity-50">
                            Save password
                        </button>

                        <TransitionRoot :show="form.recentlySuccessful" enter="transition ease-in-out"
                            enter-from="opacity-0" leave="transition ease-in-out" leave-to="opacity-0">
                            <p class="text-sm text-green-600">Saved</p>
                        </TransitionRoot>
                    </div>
                </form>
            </div>
        </SettingsLayout>
    </div>
</template>
