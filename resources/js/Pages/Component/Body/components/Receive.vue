<template>
    <div>
      <h2>Received Message</h2>
      <p>{{ message }}</p>
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue';
  import { inertia } from '@inertiajs/inertia';

  const message = ref('');

  onMounted(async () => {
    const response = await inertia.get('/receive');
    message.value = response.props.message;
  });
  </script>
