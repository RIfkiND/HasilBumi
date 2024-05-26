<template>
    <div>
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
            isReceivedMessage(message) ? 'bg-violet-400 text-white' : 'bg-violet-200 text-slate-500'
          ]"
        >
          <p>{{ message.message }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps, computed} from 'vue';
  
  const props = defineProps({
    messages: Array,
    auth_id: [String, Number],
  });
  
  const isReceivedMessage = (message) => {
    return message.receiver_id === props.auth_id;
  };
  </script>
  
  <style scoped>
  /* Add any scoped styles here if necessary */
  </style>
  