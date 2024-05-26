<template>
  
      <div class="messenger h-screen overflow-hidden p-4">
        <div class="flex">
          <div class="basis-2/6 border-r border-slate-100 bg-white pt-3">
            <ChatSidebar :recentMessages="recentMessages" />
          </div>
          <div class="basis-4/6">
            <div v-if="receiver?.id">
              <ChatUserInfoHeader :receiver="receiver" />
              <div class="messenger mt-4">
                <div class="px-4">
                  <ChatMessages :messages="messages" :auth_id="auth?.user?.id" />
                </div>
                <ChatInput :receiver="receiver" />
              </div>
            </div>
            <div v-else class="flex justify-center items-center bg-slate-100 h-screen">
              <p class="font-bold text-3xl text-gray-500">
                Please select a User to start chatting...
              </p>
            </div>
          </div>
        </div>
      </div>

  </template>
  
  <script setup>
  import {defineProps, ref ,watch } from 'vue';
  import ChatInput from '@/Components/Chat/ChatInput.vue';
  import ChatMessages from '@/Components/Chat/ChatMessages.vue';
  import ChatSidebar from '@/Components/Chat/ChatSidebar.vue';
  import ChatUserInfoHeader from '@/Components/Chat/ChatUserInfoHeader.vue';
  

 const props =  defineProps({auth: Object, errors: Object, recentMessages: Array, receiver: Object, messages: Array, });
  
const messages = ref(props.messages || []);
  
//   Echo.private(`messenger.1.2`).listen('MessageSent', (data) => {
//     if (data.message) {
//       messages.value.push(data.message);
//     }
//   });
  Echo.private(`messenger.1.2`)
    .listen('MessageSent', async(data) => {
        if (data.message) {
      messages.value.push(data.message);
    }
    });
  </script>
  
  
  <style scoped>
  /* Add any scoped styles here if necessary */
  </style>
  