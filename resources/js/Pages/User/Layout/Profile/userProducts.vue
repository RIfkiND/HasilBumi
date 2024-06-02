<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import Products from "./components/Products.vue";
</script>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto mt-12">
            <div class="max-w-7xl mx-auto flex w-[1200px] gap-10">
                <Sidebar />
                <Products />
            </div>
        </div>
    </section>

    <Footer />
</template>
