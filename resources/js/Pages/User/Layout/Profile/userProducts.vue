<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
import Sidebar from "./components/Sidebar.vue";
import Products from "./components/Products.vue";
import Card from "./components/Card.vue";
import { router } from "@inertiajs/vue3";
import route from '../../../../../../vendor/tightenco/ziggy/src/js/index';
defineProps({
    products:Array,
    search:Object,
    TotalProducts:Object,
})

const searching = (key) => {
    router.get(route('product.search'),{search:key} ,{preserveState: true})
}
</script>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto mt-12 font-poppins">
            <div class="flex w-full gap-10">
                <div class="justify-self-start">
                    <Sidebar />
                </div>
                <div>
                    <Card :dataTotal="TotalProducts"/>
                    <Products :dataProducts="products" @search="searching" />
                </div>
            </div>
        </div>
    </section>

    <Footer />
</template>
