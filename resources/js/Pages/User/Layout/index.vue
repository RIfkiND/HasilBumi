<script setup>
import { Link } from "@inertiajs/vue3";
import Header from "./Component/Header.vue";
import Hero from "./Component/Hero.vue";
import Footer from "./Component/Footer.vue";
import Shop_card from "./Component/shop_card.vue";
import Wislisht from "./Component/Wislisht.vue";
import Faq from "./Component/Faq.vue";
</script>

<template>
    <html>
        <body>
            <Header />
            <Hero />
            <Faq />
            <Wislisht/>
            <Shop_card/>
            <Footer />
        </body>
    </html>
</template>
