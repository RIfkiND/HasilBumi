<script setup>
import { Link } from "@inertiajs/vue3";
import Header from "./Component/Header.vue";
import Hero from "./Component/Hero.vue";
import Footer from "./Component/Footer.vue";
import Shop_card from "./Component/shop_card.vue";
import Wislisht from "./Component/Wislisht.vue";
import Testimonial from "./Component/Testimonial.vue";
import Pricing from "./Component/price.vue";
</script>

<template>
    <html>
        <body>
            <Header />
            <Hero />
            <Testimonial />
            <!-- <Wislisht/> -->
            <!-- <Shop_card/> -->
            <Pricing />
            <Footer />
        </body>
    </html>
</template>
