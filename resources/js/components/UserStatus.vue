<!-- UserStatus.vue -->
<template>
  <span v-if="user.is_online" class="capitalize text-primaryColor opacity-50">
    online
  </span>
  <span v-else class="capitalize text-slate-200">
    offline
  </span>
</template>

<script setup>
import { defineProps, onMounted } from "vue";

const props = defineProps({
  user: {
    type: Object,
    required: true,
  },
});
onMounted(() => {
  console.log(props.user); // Debug: Check if the `user` object has `is_online`
});
</script>
