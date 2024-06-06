<template>
    <div class="user-info-header bg-primaryColor px-5 py-3">
      <div class="flex justify-between">
        <div class="flex items-center">
          <img
            v-if="receiver?.avatar !== undefined"
            src="https://cdn-icons-png.flaticon.com/512/194/194938.png"
            width="50"
          />
          <i v-else class="fa fa-user-circle text-gray-300 text-5xl"></i>

          <h3 class="text-md pl-4 text-gray-400">
            {{ receiver?.name }}
          </h3>

        </div>
        <div>
          <i class="fa fa-message text-slate-300"></i>
          <i class="fa fa-video ml-3 text-slate-200"></i>
          <i class="fa fa-phone ml-3 text-slate-200"></i>
        </div>
      </div>
    </div>
  </template>

  <script setup>


defineProps({receiver: Object, });
  </script>

  <style scoped>

  </style>
