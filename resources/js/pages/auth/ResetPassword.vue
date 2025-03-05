<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

interface Props {
    token: string;
    email: string;
}

const props = defineProps<Props>();

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<template>
    <div class="flex flex-col items-center justify-center min-h-screen px-6">

        <Head title="Reset password" />

        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center">Reset password</h2>
            <p class="mb-6 text-sm text-center text-gray-600">
                Please enter your new password below
            </p>

            <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" type="email" v-model="form.email"
                        class="w-full p-2 mt-1 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        readonly />
                    <p v-if="form.errors.email" class="mt-1 text-sm text-red-600">{{ form.errors.email }}</p>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" type="password" v-model="form.password"
                        class="w-full p-2 mt-1 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        autofocus placeholder="Password" />
                    <p v-if="form.errors.password" class="mt-1 text-sm text-red-600">{{ form.errors.password }}</p>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                    <input id="password_confirmation" type="password" v-model="form.password_confirmation"
                        class="w-full p-2 mt-1 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                        placeholder="Confirm password" />
                    <p v-if="form.errors.password_confirmation" class="mt-1 text-sm text-red-600">{{
                        form.errors.password_confirmation }}</p>
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700 disabled:bg-gray-400"
                    :disabled="form.processing">
                    <span v-if="form.processing" class="mr-2 animate-spin">⏳</span>
                    Reset password
                </button>
            </form>
        </div>
    </div>
</template>
