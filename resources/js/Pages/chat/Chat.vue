<template>
  <div class="messenger h-screen overflow-hidden">
    <div class="flex">
      <div class="basis-2/6 border-r border-white-50 bg-white pt-3 relative z-50">
        <ChatSidebar :recentMessages="recentMessages" class="border-r border-white-50"/>
      </div>
      <div class="w-4/6">
        <div v-if="receiver?.id">
          <ChatUserInfoHeader :receiver="receiver" />
          <div class="messenger mt-5">
            <div class="px-4 -translate-y-7">
              <ChatMessages :messages="messages" :auth_id="auth?.user?.id" />
            </div>
            <div class="relative z-10">
                <ChatInput :receiver="receiver" />
            </div>
          </div>
        </div>
        <div v-else class="flex justify-center items-center bg-[#fdfdfd] h-screen">
          <div class="block justify-center items-center mx-auto">
            <div class="flex justify-center">
                <img :src="chatIlustration" alt="Chat ilustration" class="w-80 m-10">
            </div>
            <div class="flex flex-wrap px-40 justify-center items-center font-inter mb-20 space-y-3 w-full">
                <h3 class="text-3xl text-center flex font-bold text-dark capitalize">Tanyakan soal produk</h3>
                <p class="text-center font-medium text-slate-300 text-md">Mulailah obrolan anda tanpa batas dengan seller dan user lainya yang <br> bertujuan untuk  menanyakan hal seputar produk</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref, watch } from "vue";
import ChatInput from "~/Components/Chat/ChatInput.vue";
import ChatMessages from "~/Components/Chat/ChatMessages.vue";
import ChatSidebar from "~/Components/Chat/ChatSidebar.vue";
import ChatUserInfoHeader from "~/Components/Chat/ChatUserInfoHeader.vue";

const chatIlustration = "/assets/img/ilustration/ilustration8.png";

const props = defineProps({
  auth: Object,
  errors: Object,
  recentMessages: Array,
  receiver: Object,
  messages: Array,
});

const messages = ref(props.messages || []);

Echo.private(`messenger.1.2`).listen("MessageSent", async (data) => {
  if (data.message) {
    messages.value.push(data.message);
  }
});
</script>

<style scoped>
/* Add any scoped styles here if necessary */
</style>
