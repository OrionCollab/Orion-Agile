<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

defineProps<{
    status?: string;
}>();

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};
</script>

<template>
    <div class="flex flex-col items-center justify-center min-h-screen px-6">

        <Head title="Email verification" />

        <div class="w-full max-w-md p-8 text-center bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold">Verify email</h2>
            <p class="mb-6 text-sm text-gray-600">
                Please verify your email address by clicking on the link we just emailed to you.
            </p>

            <div v-if="status === 'verification-link-sent'" class="mb-4 text-sm font-medium text-green-600">
                A new verification link has been sent to the email address you provided during registration.
            </div>

            <form @submit.prevent="submit" class="space-y-6">
                <button type="submit"
                    class="w-full px-4 py-2 font-semibold text-white bg-gray-600 rounded hover:bg-gray-700 disabled:bg-gray-400"
                    :disabled="form.processing">
                    <span v-if="form.processing" class="mr-2 animate-spin">⏳</span>
                    Resend verification email
                </button>

                <form method="post" :action="route('logout')" class="mt-4">
                    <button type="submit" class="text-sm text-blue-600 hover:underline">Log out</button>
                </form>
            </form>
        </div>
    </div>
</template>
