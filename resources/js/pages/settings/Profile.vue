<script setup lang="ts">
import { TransitionRoot } from '@headlessui/vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import SettingsLayout from '@/layouts/settings/Layout.vue';

import { type SharedData, type User } from '@/types';

interface Props {
    mustVerifyEmail: boolean;
    status?: string;
}

defineProps<Props>();


const page = usePage<SharedData>();
const user = page.props.auth.user as User;

const form = useForm({
    name: user.name,
    email: user.email,
});

const submit = () => {
    form.patch(route('profile.update'), {
        preserveScroll: true,
    });
};
</script>

<template>
    <div>

        <Head title="Profile settings" />

        <SettingsLayout>
            <div class="p-6">
                <h2 class="text-lg font-semibold">Profile information</h2>
                <p class="text-sm text-gray-500">Update your name and email address</p>

                <form @submit.prevent="submit" class="mt-4 space-y-6">
                    <div class="grid gap-2">
                        <label for="name" class="font-medium">Name</label>
                        <input id="name" class="w-full px-3 py-2 border rounded" v-model="form.name" required
                            autocomplete="name" placeholder="Full name" />
                        <p v-if="form.errors.name" class="text-sm text-red-500">{{ form.errors.name }}</p>
                    </div>

                    <div class="grid gap-2">
                        <label for="email" class="font-medium">Email address</label>
                        <input id="email" type="email" class="w-full px-3 py-2 border rounded" v-model="form.email"
                            required autocomplete="username" placeholder="Email address" />
                        <p v-if="form.errors.email" class="text-sm text-red-500">{{ form.errors.email }}</p>
                    </div>

                    <div v-if="mustVerifyEmail && !user.email_verified_at">
                        <p class="text-sm text-gray-500">
                            Your email address is unverified.
                            <Link :href="route('verification.send')" method="post" as="button"
                                class="text-blue-500 underline">Click here to resend the verification email.</Link>
                        </p>
                        <div v-if="status === 'verification-link-sent'" class="mt-2 text-sm font-medium text-green-600">
                            A new verification link has been sent to your email address.
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded"
                            :disabled="form.processing">Save</button>
                        <TransitionRoot :show="form.recentlySuccessful" enter="transition ease-in-out"
                            enter-from="opacity-0" leave="transition ease-in-out" leave-to="opacity-0">
                            <p class="text-sm text-gray-600">Saved.</p>
                        </TransitionRoot>
                    </div>
                </form>
            </div>
        </SettingsLayout>
    </div>
</template>