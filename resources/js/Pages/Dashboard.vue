<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';

const user = usePage().props.auth.user;

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-6">
                    <div class="px-6 text-gray-900"><b>Name:</b> {{ user.name }}</div>
                    <div class="px-6 text-gray-900"><b>Phone:</b> {{ user.phone_number }}</div>
                    <div class="px-6 text-gray-900"><b>Point:</b> {{ user.point }}</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
