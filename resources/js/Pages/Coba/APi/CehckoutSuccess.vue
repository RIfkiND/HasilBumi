<template>
    <div>
      <h1>Checkout Successful</h1>
      <div class="order-details">
        <h2>Order Details</h2>
        <p>Order ID: {{ order.id }}</p>
        <p>Status: {{ order.status }}</p>
        <ul>
          <li v-for="item in orderItems" :key="item.id">
            {{ item.product.name }} - {{ item.quantity }} x {{ item.price }}
          </li>
        </ul>
        <p>Total Price: {{ order.total_price }}</p>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { usePage } from '@inertiajs/vue3';
  
  const { props } = usePage();
  const order = ref(props.order);
  const orderItems = ref(props.order.order_items);
  </script>
  
  <style scoped>
  /* Add your styles here */
  .order-details {
    margin-top: 20px;
  }
  </style>
  