<template>
  <div ref="chatContainer" class="chat-container">
    <div
      v-for="(message, index) in messages"
      :key="index"
      :class="[
        isReceivedMessage(message) ? 'justify-start' : 'justify-end',
        'relative',
        'flex',
      ]"
    >
      <div v-if="isReceivedMessage(message)" class="space-y-3">
        <div class="chat chat-start flex w-full items-center relative">
          <div class="block">
            <div class="chat-header">
              <time class="text-xs text-slate-200">12.30</time>
            </div>
            <div
              class="chat-bubble bg-hoverPrimary text-white flex flex-wrap text-md pr-5"
            >
              {{ message.message }}
            </div>
          </div>
          <div
            class="dropdown dropdown-right w-8 h-8 rounded-full hover:bg-white-50 hover:cursor-pointer flex justify-center items-center translate-y-2 relative z-10 -translate-x-2"
            tabindex="0"
          >
            <button class="relative">
              <i class="bx bx-dots-vertical-rounded bx-xs text-slate-200 m-auto"></i>
            </button>
            <ul class="dropdown-content menu p-2 shadow bg-white rounded-md w-40">
              <li class="py-1 w-full hover:bg-white-50 rounded-md">
                <Link class="hover:text-slate-300 flex">
                  <i class="bx bx-share text-primaryColor text-[16px]"></i>
                  Balas
                </Link>
              </li>
              <li class="py-1 w-full hover:bg-white-50 rounded-md">
                <Link class="hover:text-slate-300 flex">
                  <i class="bx bxs-flag-alt text-primaryColor text-[16px]"></i>
                  Laporkan
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div v-else>
        <div class="chat chat-end">
          <div class="flex justify-between items-center text-left">
            <div
              class="dropdown dropdown-left w-8 h-8 rounded-full hover:bg-white-50 hover:cursor-pointer flex justify-center items-center relative z-10 translate-y-3 -translate-x-3"
              tabindex="0"
            >
              <button class="relative">
                <i class="bx bx-dots-vertical-rounded bx-xs text-slate-200 m-auto"></i>
              </button>
              <ul class="dropdown-content menu p-2 shadow bg-white rounded-md w-40">
                <li class="py-1 w-full hover:bg-white-50 rounded-md">
                  <Link class="hover:text-slate-300 flex">
                    <i class="bx bx-trash text-hoverPrimary text-[16px]"></i>
                    Hapus chat
                  </Link>
                </li>
              </ul>
            </div>
            <div class="block">
              <div class="chat-header">
                <time class="text-xs text-slate-200">15.30</time>
              </div>
              <div
                class="chat-bubble bg-white-50 text-slate-300 flex flex-wrap text-md pl-5"
              >
                {{ message.message }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref, watch, onMounted, nextTick } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
  messages: Array,
  auth_id: [String, Number],
});

const chatContainer = ref(null);

const isReceivedMessage = (message) => {
  return message.receiver_id === props.auth_id;
};

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
  height: 550px;
  width: 100%;
  padding: 10px;
}
</style>
