<template>
    <div>
      <h1>Pusher Test</h1>
      <p>
        Publish an event to channel <code>public</code>
        with event name <code>chat</code>; it will appear below:
      </p>
      <div id="app">
        <ul>
          <li v-for="message in messages" :key="message.id">
            {{ message.text }}
          </li>
        </ul>
      </div>

      <form class="mt-20" @submit.prevent="submit">
        <input v-model="newMessage" type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
        <button type="submit">Add</button>
      </form>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
  import { router } from '@inertiajs/vue3';

  const messages = ref([]);
  const newMessage = ref('');

  // Method to submit a new message
  async function submit() {
    const message = { id: Date.now(), text: newMessage.value };
    messages.value.push(message); // Immediately add the message to the UI
    newMessage.value = ''; // Clear the input field after submission

    try {
      // Send the new message to the server for broadcasting asynchronously
      await router.post('/broadcast', { message: message.text });
    } catch (error) {
      // If there's an error, log it to the console
      console.error('Error broadcasting message:', error);
    }
  }
  </script>
