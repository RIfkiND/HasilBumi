<template>
    <div>
      <div class="search-box h-10 text-slate-300">
        <div class="flex justify-between border-b border-slate-100 px-5 pb-1">
          <form class="flex justify-center items-center">
            <i class="fa fa-search"></i>
            <input
              type="search"
              class="font-light border-0 hover:border-0 focus:border-0 focus:ring-0 !shadow-none focus:!outline-none"
              placeholder="Search"
            />
          </form>
          <div class="flex justify-center items-center">
            <button class="relative">
              <i class="fa fa-message"></i>
              <i class="fa fa-plus absolute -top-2 text-sm"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="user-list h-screen overflow-y-auto">
        <ul>
          <li v-for="user in recentMessages" :key="user.user_id">
            <Link
              :href="route('chat.index', user.user_id)"
              class="flex px-5 py-3 transition hover:cursor-pointer hover:bg-slate-100"
            >
              <div class="pr-4">
                <img
                  v-if="user?.avatar !== null"
                  src="https://cdn-icons-png.flaticon.com/512/194/194938.png"
                  width="50"
                />
                <i
                  v-else
                  class="fa fa-user-circle text-gray-300 text-5xl"
                ></i>
              </div>

              <div>
                <h3 class="text-md text-violet-500">{{ user.name }}</h3>
                <UserStatus :user="user" />
                <p class="h-5 overflow-hidden text-sm font-light text-gray-400">
                  {{ user.message }}
                </p>
              </div>
            </Link>
          </li>
        </ul>
      </div>
    </div>
  </template>

<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";
import UserStatus from '../UserStatus.vue';

defineProps({
    recentMessages: Array,
    receiver: Object,
});
//   const getChatLink = (prop.receiver) => {
//   console.log('User ID:', props.receiver.id);
//   if (!props.receiver || !props.receiver.id) {
//     return '#';
//   }

//   return  `/chat/${props.receiver.id}`
// };
</script>

<style scoped>
/* Add any scoped styles here if necessary */
</style>
