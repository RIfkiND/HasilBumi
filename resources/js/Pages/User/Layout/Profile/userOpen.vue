<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import Open from "./components/OpenStore.vue";
</script>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto mt-12 font-poppins">
            <div class="flex w-full gap-10">
                <div class="justify-self-start">
                    <Sidebar />
                </div>
                <Open />
            </div>
        </div>
    </section>

    <Footer />
</template>
