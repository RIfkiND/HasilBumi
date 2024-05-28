<template>
    <div class="fixed bottom-0 w-full bg-white pl-4">
      <form @submit.prevent="submit">
        <TextInput
          class="h-16 w-full overflow-y-auto bg-white pt-3 font-light border-0 hover:border-0 focus:border-0 focus:ring-0 !shadow-none focus:!outline-none"
          placeholder="Chat...."
          name="message"
          v-model="form.message"
        />
      </form>
    </div>
  </template>


<script setup>

import { ref, onMounted } from 'vue';
import { useForm } from '@inertiajs/vue3';
import TextInput from './../TextInput.vue';

const props = defineProps({
  receiver: Object,
  messages: Array
});

const form = useForm({
  message: "",
});

const submit = () => {
  form.post(route('chat.store', props.receiver.id), {
    onSuccess: () => {
      form.reset('message');
    }
  });
};





  </script>

