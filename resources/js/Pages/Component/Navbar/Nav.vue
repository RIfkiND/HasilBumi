<template>
    <header class="flex items-center py-2 bg-white justify-between">
        <div class="ml-14 text-2xl font-bold" style="color: #292c2b">
            Hasil <span style="color: #3cb72b">Bumi.</span>
        </div>
        <nav class="text-base flex gap-8 font-medium" style="color: #292c2b">
            <a href="#" class="hover:text-primaryColor">Home</a>
            <a href="#" class="hover:text-primaryColor">Store</a>
            <a href="#" class="hover:text-primaryColor">Landing</a>
            <a href="#" class="hover:text-primaryColor">Profile</a>
        </nav>
        <div
            class="w-96 h-10 rounded-3xl ml-16"
            style="border: 2px solid #edf1ed; color: #4a514e"
        ></div>

        <div v-if="authenticated" >
            <h1>{{ user.name }}</h1>

        </div>
        <div v-else class="flex gap-5 mr-10">
            <button
                class="bg-white p-2 border rounded-lg text-base w-24 font-semibold hover:bg-primaryColor"
                style="border: solid 2px #3cb72b; color: #292c2b"
            >
                <Link :href="route('login')">Sign in</Link>
            </button>
            <button
                class="p-2 rounded-lg text-base w-24 font-semibold hover:bg-teal-dark hover:cursor-pointer"
                style="background-color: #3cb72b; color: #fff"
            >
                <Link :href="route('register')">Sign up</Link>
            </button>
        </div>
    </header>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage } from '@inertiajs/vue3';

const {authenticated, user } = usePage().props;
</script>
