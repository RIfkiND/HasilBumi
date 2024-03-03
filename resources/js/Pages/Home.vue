<script setup>
import { Link } from "@inertiajs/vue3";
import Nav from "./Component/Navbar/Nav.vue";
import Section1 from "./Component/Body/section1.vue";
import Card from "./Component/Body/card.vue";
import Footer from "./Component/Footer/footer.vue";
</script>

<template>
    <body class="bg-white">
        <Nav />

        <Section1 />

        <Card />

        <Footer />
    </body>
</template>
