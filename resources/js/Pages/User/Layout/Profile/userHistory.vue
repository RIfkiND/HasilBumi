<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import History from "./components/History.vue";
</script>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto mt-12 font-poppins">
            <div class="flex w-full gap-10">
                <div class="justify-self-start ml-10">
                    <Sidebar />
                </div>
                <History />
            </div>
        </div>
    </section>

    <Footer />
</template>
