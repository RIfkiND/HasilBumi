<template>
    <button @click="filterByCategory('wood')">Filter by Wood</button>
</template>

<script setup>

import { router } from "@inertiajs/vue3";

const filterByCategory = (category) => {
    router.visit(route('',{category}));

};
</script>
