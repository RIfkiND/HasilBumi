<template>
    <div>
      <h1>Checkout Page</h1>
      <button @click="processCheckout">Checkout</button>
    </div>
  </template>
  
  <script setup>
  import { Inertia } from '@inertiajs/inertia';
  import { ref } from 'vue';
  
  const processCheckout = async () => {
    const { data } = await Inertia.post(route('checkout.process'));
  
    const stripe = Stripe('your-publishable-key'); // Replace with your Stripe publishable key
  
    stripe.redirectToCheckout({ sessionId: data.id }).then((result) => {
      if (result.error) {
        console.error(result.error.message);
      }
    });
  };
  </script>
  
  <style scoped>
  /* Add your styles here */
  </style>
  