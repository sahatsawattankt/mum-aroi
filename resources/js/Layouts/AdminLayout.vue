<script setup>
import AdminSidebar from '@/Components/AdminSidebar.vue';
import AdminNavbar from '@/Components/AdminNavbar.vue';
import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- navbar -->
        <AdminNavbar></AdminNavbar>
        <!-- sidebar -->
        <AdminSidebar></AdminSidebar>
        <main class="p-4 md:ml-64 h-auto pt-20">
            <slot/>
        </main>
    </div>
</template>
