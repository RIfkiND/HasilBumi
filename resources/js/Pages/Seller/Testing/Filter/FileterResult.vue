<template>
    <div>
      <h1>Category: {{ category.name }}</h1>
      <h2>Products:</h2>
      <ul>
        <li v-for="product in category.products" :key="product.id">
          {{ product.name }} - {{ product.description }}
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  const props = defineProps({
    category: {
      type: Object,
      required: true,
    },
  });
  </script>
  
