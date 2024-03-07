<!-- resources/js/Pages/Products/Index.vue -->

<template>
    <div>
        <h1>Products Belonging to {{ category }}</h1>
        <ul>
            <li v-for="product in products" :key="product.id">{{ product.name }}</li>
        </ul>
    </div>
</template>

<script setup>
const props = defineProps({
    category: String,
    products: Array
});
</script>
