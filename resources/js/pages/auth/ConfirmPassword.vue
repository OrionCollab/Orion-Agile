<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    password: '',
});

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <div class="max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">

        <Head title="Confirm password" />

        <h2 class="mb-2 text-lg font-semibold">Confirm your password</h2>
        <p class="mb-4 text-sm text-gray-600">This is a secure area of the application. Please confirm your password
            before continuing.</p>

        <form @submit.prevent="submit">
            <div class="space-y-4">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password"
                        class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300"
                        v-model="form.password" required autocomplete="current-password" autofocus />
                    <p v-if="form.errors.password" class="mt-1 text-sm text-red-500">{{ form.errors.password }}</p>
                </div>

                <div>
                    <button type="submit"
                        class="w-full px-4 py-2 font-medium text-white bg-blue-600 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none disabled:opacity-50"
                        :disabled="form.processing">
                        <svg v-if="form.processing" class="inline-block w-4 h-4 mr-2 animate-spin" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                        Confirm Password
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
