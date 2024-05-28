<template>
    <div>
      <h1>Conversation</h1>
      <div v-for="message in conversation.messages" :key="message.id">
        <p><strong>{{ message.user.name }}:</strong> {{ message.message }}</p>
      </div>
      <form @submit.prevent="sendMessage">
        <input v-model="message" type="text" placeholder="Type your message" required>
        <button type="submit">Send</button>
      </form>
    </div>
  </template>

  <script setup>
  import { ref, onMounted, computed } from 'vue';
  import { usePage } from '@inertiajs/vue3';
  import { Inertia } from '@inertiajs/inertia';

  const { props } = usePage();
  const conversation = computed(() => props.value.conversation);

  const message = ref('');

  const sendMessage = () => {
    Inertia.post(route('messages.store', conversation.value.id), { message: message.value })
      .then(() => {
        message.value = '';
      });
  };

  onMounted(() => {
    window.Echo.private(`conversation.${conversation.value.id}`)
      .listen('.message.sent', (e) => {
        conversation.value.messages.push(e.message);
      });
  });
  </script>
