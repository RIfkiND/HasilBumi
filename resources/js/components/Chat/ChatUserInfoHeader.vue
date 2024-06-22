<template>
  <div class="user-info-header bg-white-50 px-5 py-[12px]">
    <div class="flex justify-between">
      <div class="flex items-center">
        <img
          v-if="receiver?.avatar !== null"
          src="https://cdn-icons-png.flaticon.com/512/194/194938.png"
          width="50"
        />
        <i v-else class="fa fa-user-circle text-gray-300 text-5xl"></i>
        <div class="block pl-4">
          <h3 class="text-lg text-dark font-semibold">
            {{ receiver?.name }}
          </h3>
            <span class="italic text-sm font-medium text-slate-200 mb-5">
              Mengetik...
            </span>
        </div>
      </div>
      <div class="flex items-center justify-center">
        <Link
          :href="route('Home')"
          class="flex text-dark font-semibold capitalize text-md px-6 py-[12px] rounded-full hover:bg-[#e0dede] transition"
        >
          <i class="bx bx-left-arrow-alt mr-1 bx-sm"></i>Kembali
        </Link>
      </div>
    </div>
  </div>

</template>

<script setup>
import { computed } from "vue";
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";
defineProps({
  recentMessages: Array,
  receiver: Object,
});
</script>
