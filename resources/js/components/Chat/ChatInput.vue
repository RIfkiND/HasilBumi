<template>
  <div class="fixed bottom-0 w-full border-b-2 border-white-50">
    <form @submit.prevent="submit">
      <div class="flex items-center max-w-[980px]">
        <input
          type="text"
          class="h-16 overflow-y-auto pt-2 border-0 hover:border-0 focus:border-0 focus:ring-0 !shadow-none focus:!outline-none w-full text-slate-300 font-medium text-md"
          placeholder="Ketik pesan...."
          name="message"
          v-model="form.message"
        />
          <button
            type="submit"
            class="fixed z-10 right-5 text-center items-center text-slate-200 hover:text-slate-300"
          >
            <i class="bx bxs-send bx-sm"></i>
          </button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";
import TextInput from "./../TextInput.vue";

const props = defineProps({
  receiver: Object,
  messages: Array,
});

const form = useForm({
  message: "",
});

const submit = () => {
  form.post(route("chat.store", props.receiver.id), {
    onSuccess: () => {
      form.reset("message");
    },
  });
};
</script>
