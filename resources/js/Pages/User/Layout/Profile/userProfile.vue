<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import Profile from "./components/Profile.vue";
import ShopProfile from "./components/ShopProfile.vue";
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
            <div class="flex w-full gap-10">
                <div class="justify-self-start">
                    <Sidebar />
                </div>
                <div  v-if="$page.props.auth.seller" class="flex flex-col gap-16">
                    <Profile />
                    <ShopProfile />
                </div>
                <div  v-else class="flex flex-col gap-16">
                    <Profile />
                    
                </div>
                
            </div>
        </div>
    </section>

    <Footer />
</template>
