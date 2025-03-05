<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <div class="max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">

        <Head title="Register" />
        <h2 class="text-2xl font-bold text-center">Create an account</h2>
        <p class="text-center text-gray-600">Enter your details below to create your account</p>

        <form @submit.prevent="submit" class="flex flex-col gap-6 mt-4">
            <div class="grid gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" type="text" required autofocus v-model="form.name" placeholder="Full name"
                        class="block w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                    <p v-if="form.errors.name" class="text-sm text-red-500">{{ form.errors.name }}</p>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input id="email" type="email" required v-model="form.email" placeholder="email@example.com"
                        class="block w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                    <p v-if="form.errors.email" class="text-sm text-red-500">{{ form.errors.email }}</p>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" required v-model="form.password" placeholder="Password"
                        class="block w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                    <p v-if="form.errors.password" class="text-sm text-red-500">{{ form.errors.password }}</p>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                        password</label>
                    <input id="password_confirmation" type="password" required v-model="form.password_confirmation"
                        placeholder="Confirm password"
                        class="block w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                    <p v-if="form.errors.password_confirmation" class="text-sm text-red-500">{{
                        form.errors.password_confirmation }}</p>
                </div>

                <button type="submit"
                    class="w-full py-2 mt-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring"
                    :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="inline-block w-4 h-4 mr-2 animate-spin" />
                    Create account
                </button>
            </div>

            <div class="text-sm text-center text-gray-600">
                Already have an account?
                <a :href="route('login')" class="text-blue-600 hover:underline">Log in</a>
            </div>
        </form>
    </div>
</template>