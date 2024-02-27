<template>
    <div>
      <h2>Broadcast Message</h2>
      <form @submit.prevent="broadcastMessage">
        <input v-model="message" type="text" placeholder="Enter your message...">
        <button type="submit">Broadcast</button>
      </form>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
  import { inertia } from '@inertiajs/inertia';

  const message = ref('');

  const broadcastMessage = () => {
    inertia.post('/broadcast', { message });
  };
  </script>
