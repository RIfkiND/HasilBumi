<template>
    <div>
      <h1>Checkout</h1>
      <div v-for="item in cartItems" :key="item.id" class="cart-item">
        <p>{{ item.product.name }} - {{ item.quantity }} x {{ item.product.price }}</p>
      </div>
      <h2>Total Price: {{ totalPrice }}</h2>
      <button @click="processCheckout">Checkout</button>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { usePage,router } from '@inertiajs/vue3';
  
  
  const { props } = usePage();
  const cartItems = ref(props.cartItems);
  const totalPrice = ref(props.totalPrice);
  
  const processCheckout = () => {
    router.post(route('checkout.process'), {
      onSuccess: () => {
        // Handle success (redirect, show message, etc.)
      },
    });
  };
  </script>
  
  <style scoped>
  /* Add your styles here */
  </style>
  