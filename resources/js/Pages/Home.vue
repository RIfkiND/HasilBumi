<script setup>
import { Link } from "@inertiajs/vue3";
import Nav from "./Component/Navbar/Nav.vue";
import Section1 from "./Component/Body/section1.vue"

</script>

<template>
    <h1>Selamat datang di halaman home</h1>
    <a :href="route('head')">Pergi ke heading</a>
</template>
