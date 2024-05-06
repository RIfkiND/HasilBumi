<script setup>
import { Link } from "@inertiajs/vue3";
import Header from "./Component/Header.vue";
import Hero from "./Component/Hero.vue";
import Footer from "./Component/Footer.vue";
import Shop_card from "./Component/shop_card.vue";
import Wislisht from "./Component/Wislisht.vue";
// import Swal from "~/Swal.vue"
</script>

<template>
    <body>
        <Header />

        <Hero />

        <Footer />

        <Swal v-if="$page?.props.flash?.status" :status="$page?.props.flash?.status" />
        <!-- <Wislisht /> -->

        <!-- <Shop_card /> -->
    </body>
</template>
