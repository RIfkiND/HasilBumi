<!-- UserStatus.vue -->
<template>
  <div v-if="user.is_online">
    <span class="text-sm text-primaryColor opacity-40 font-semibold">Online</span>
  </div>
  <div v-else>
    <span class="text-sm text-dark opacity-40 font-semibold">Offline</span>
  </div>
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

<style scoped>
.status-indicator {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-right: 5px;
}
</style>
