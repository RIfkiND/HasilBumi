<template>
  <div>
    <div v-for="(message, index) in messages" :key="index" class="message">
      <p>{{ message.content }}</p>
      <p>Sender: {{ message.sender_type }}</p>
      <p>Receiver: {{ message.receiver_type }}</p>
    </div>
    <form @submit.prevent="sendMessage">
      <input v-model="newMessage" placeholder="Type your message here" required>
      <button type="submit">Send</button>
    </form>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { post } from '@inertiajs/inertia';

const messages = ref([]);
const newMessage = ref('');
let senderType = ref('user');
let senderId = ref(1); // Assuming user ID 1
let receiverType = ref('seller'); // Assuming receiver is always seller initially
let receiverId = ref(2); // Replace with actual seller ID

const sendMessage = () => {
  if (newMessage.value.trim() === '') return;

  post('/send-message', {
    message: newMessage.value,
    sender_type: senderType.value,
    sender_id: senderId.value,
    receiver_type: receiverType.value,
    receiver_id: receiverId.value
  }).then(() => {
    newMessage.value = '';
    fetchMessages();
  });
};

onMounted(() => {
  // Fetch messages for initial load
  fetchMessages();
});

const fetchMessages = async () => {
  // Fetch messages based on senderType, senderId, receiverType, and receiverId
  // Replace this logic with your actual API call to fetch messages
  // For example:
  // const response = await fetch(`/messages?sender_type=${senderType.value}&sender_id=${senderId.value}&receiver_type=${receiverType.value}&receiver_id=${receiverId.value}`);
  // const data = await response.json();
  // messages.value = data.messages;
};

// This function will be called when a seller or user wants to start a chat
const startChat = (type, id) => {
  receiverType.value = type;
  receiverId.value = id;
  fetchMessages();
};
</script>

<style scoped>
/* Add your styles here */
.message {
  margin-bottom: 10px;
  border: 1px solid #ccc;
  padding: 10px;
}
</style>
