<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import Profile from "./components/Profile.vue";
</script>

<style scoped>
.hidden {
    display: none;
}

.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.5s;
}
.modal-enter,
.modal-leave-to /* .modal-leave-active in <2.1.8 */ {
    opacity: 0;
}
</style>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto mt-12 font-poppins">
            <div class="max-w-7xl mx-auto flex w-[1200px] gap-10">
                <Sidebar />
                <Profile />
            </div>
        </div>
    </section>

    <Footer />
</template>
