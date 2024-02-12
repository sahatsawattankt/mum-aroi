<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <div>
        <div v-if="canLogin">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')">Dashboard</Link>

            <template v-else>
                <div class="flex flex-col items-center justify-center h-screen">
                    <div>
                        <ApplicationLogo class="w-40 h-40" />
                    </div>
                    <div>
                        <Link :href="route('login')" class="px-4 py-2 m-2 text-blue-100 rounded-md cursor-pointer bg-slate-500">Log in</Link>
                        <Link v-if="canRegister" :href="route('register')" class="px-4 py-2 m-2 text-blue-100 rounded-md cursor-pointer bg-slate-500">Register</Link>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<style></style>
