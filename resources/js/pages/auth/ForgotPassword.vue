<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

defineProps<{
    status?: string;
}>();

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <div class="max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">

        <Head title="Forgot password" />

        <h2 class="mb-2 text-lg font-semibold text-center">Forgot password</h2>
        <p class="mb-4 text-sm text-center text-gray-600">Enter your email to receive a password reset link.</p>

        <div v-if="status" class="mb-4 text-sm font-medium text-center text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input id="email" type="email" name="email" autocomplete="off" v-model="form.email"
                        placeholder="email@example.com" autofocus
                        class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" />
                    <p v-if="form.errors.email" class="mt-1 text-sm text-red-500">{{ form.errors.email }}</p>
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
                        Email password reset link
                    </button>
                </div>
            </div>
        </form>

        <div class="mt-4 text-sm text-center text-gray-600">
            <span>Or, return to</span>
            <a :href="route('login')" class="text-blue-600 hover:underline"> log in</a>
        </div>
    </div>
</template>
