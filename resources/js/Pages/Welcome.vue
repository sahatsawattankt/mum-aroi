<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

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

    <GuestLayout>
        <div v-if="canLogin">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold px-4 py-2 bg-green-400 hover:bg-green-500 rounded-md"
                >Dashboard</Link
            >

            <template v-else>
                <div class="grid grid-cols-2 gap-4 text-center">
                <Link
                    :href="route('login')"
                    class="font-semibold text-lg px-4 py-2 bg-green-400 hover:bg-green-500 rounded-md"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="font-semibold text-lg px-4 py-2 bg-green-400 hover:bg-green-500 rounded-md"
                    >Register</Link
                >
                </div>
            </template>
        </div>
    </GuestLayout>
</template>
