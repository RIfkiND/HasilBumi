<!-- UserStatus.vue -->
<template>
    <span :class="user.is_online ? 'bg-green-500' : 'bg-red-500'" class="status-indicator"></span>
  </template>

  <script setup>
  import { defineProps, onMounted } from 'vue';

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

  <style scoped>
  .status-indicator {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin-right: 5px;
  }
  </style>
