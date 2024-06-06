<template>
    <div ref="chatContainer" class="chat-container">
      <div
        v-for="(message, index) in messages"
        :key="index"
        :class="[
          isReceivedMessage(message) ? 'receive-chat justify-start' : 'send-chat justify-end',
          'relative flex'
        ]"
      >
        <div
          :class="[
            'mb-2 max-w-[80%] rounded px-5 py-2 text-sm',
            isReceivedMessage(message) ? 'bg-violet-400 text-slate-300' : 'bg-violet-200 text-slate-300 bg-dark'
          ]"
        >
          <p>{{ message.message }}</p>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { defineProps, ref, watch, onMounted, nextTick } from 'vue';

  const props = defineProps({
    messages: Array,
    auth_id: [String, Number],
  });

  const chatContainer = ref(null);

  const isReceivedMessage = (message) => {
    return message.receiver_id === props.auth_id;
  };

  // Watch for changes in messages array to trigger scroll
  watch(
    () => props.messages,
    () => {
      nextTick(() => {
        if (chatContainer.value) {
          chatContainer.value.scrollTop = chatContainer.value.scrollHeight;
        }
      });
    },
    { deep: true }
  );

  onMounted(() => {
    if (chatContainer.value) {
      chatContainer.value.scrollTop = chatContainer.value.scrollHeight;
    }
  });
  </script>

  <style scoped>
  .chat-container {
    overflow-y: auto;
    height: 400px; /* Adjust this value to the desired height */
  }
  /* Add any scoped styles here if necessary */
  </style>
