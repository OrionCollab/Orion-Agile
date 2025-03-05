<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div class="max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">

        <Head title="Log in" />

        <h2 class="text-lg font-semibold text-center">Log in to your account</h2>
        <p class="mb-4 text-sm text-center text-gray-600">Enter your email and password below to log in.</p>

        <div v-if="status" class="mb-4 text-sm font-medium text-center text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input id="email" type="email" required autofocus autocomplete="email" v-model="form.email"
                    placeholder="email@example.com"
                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" />
                <p v-if="form.errors.email" class="mt-1 text-sm text-red-500">{{ form.errors.email }}</p>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <a v-if="canResetPassword" :href="route('password.request')"
                        class="text-sm text-blue-600 hover:underline">
                        Forgot password?
                    </a>
                </div>
                <input id="password" type="password" required autocomplete="current-password" v-model="form.password"
                    placeholder="Password"
                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300" />
                <p v-if="form.errors.password" class="mt-1 text-sm text-red-500">{{ form.errors.password }}</p>
            </div>

            <div class="flex items-center">
                <input id="remember" type="checkbox" v-model="form.remember"
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <button type="submit"
                class="w-full px-4 py-2 font-medium text-white bg-blue-600 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none disabled:opacity-50"
                :disabled="form.processing">
                <svg v-if="form.processing" class="inline-block w-4 h-4 mr-2 animate-spin" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 6v6l4 2" />
                </svg>
                Log in
            </button>

            <p class="mt-4 text-sm text-center text-gray-600">
                Don't have an account?
                <a :href="route('register')" class="text-blue-600 hover:underline">Sign up</a>
            </p>
        </form>
    </div>
</template>
