<script setup>
import { Link } from "@inertiajs/vue3";

const product1 = "/assets/img/ilustration/OpenStore.png";
</script>

<template>
    <div class="shadow-sm flex flex-col items-center gap-2 font-inter">
        <img :src="product1" alt="Store Image" />
        <Link :href="route('seller.form')" class="btn-header-full mb-8"
            >Open Store</Link
        >
    </div>
</template>
