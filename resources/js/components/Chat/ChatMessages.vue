<template>
  <div ref="chatContainer" class="chat-container">
    <div
      v-for="(message, index) in messages"
      :key="index"
      :class="[
        isReceivedMessage(message) ? 'justify-start' : 'justify-end',
        'relative flex',
      ]"
    >
        <div v-if="isReceivedMessage(message)" class="space-y-3">
            <div class="chat chat-start">
                <div class="chat-header">
                    <time class="text-xs text-slate-200">12.30</time>
                </div>
                <div class="chat-bubble chat-bubble-success text-white flex flex-wrap text-md pr-5">
                    {{ message.message }}
                </div>
            </div>
        </div>
        <div v-else>
            <div class="chat chat-end">
                <div class="chat-header">
                    <time class="text-xs text-slate-200">15.30</time>
                </div>
                <div class="chat-bubble bg-white-50 text-slate-300 flex flex-wrap text-md pl-5">
                    {{ message.message }}
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref, watch, onMounted, nextTick } from "vue";

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
