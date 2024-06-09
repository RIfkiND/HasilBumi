<template>
  <div class="border-r-1 border-white-50">
    <div class="search-box h-10 text-slate-300 py-1">
      <div class="flex justify-between border-b-2 border-white-50 px-5 pb-3">
        <form class="flex justify-start text-start -translate-x-5 items-center">
          <div class="relative">
            <input
              type="search"
              class="peer border-none text-md rounded-md focus:ring-slate-300 focus:ring-1 focus:text-slate-300 py-2 pl-10 pr-3 bg-transparent placeholder:text-slate-200 placeholder:focus:text-slate-300"
              placeholder="Cari..."
            />
            <i
              class="fa fa-search text-slate-200 absolute left-3 top-1/2 transform -translate-y-1/2 peer-focus:text-slate-300"
            ></i>
          </div>
        </form>
        <div class="flex justify-center items-center ">
          <div class="flex justify-center items-center">
            <button class="relative m-auto text-center w-12 h-12 hover:bg-white-50 rounded-full">
              <i class="bx bxs-chat text-slate-200 bx-sm mt-2"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="user-list h-screen overflow-y-auto">
      <ul class="divide-y-2 divide-white-50 mt-4">
        <li v-for="user in recentMessages" :key="user.user_id" class="hover:bg-white-50 transition">
          <Link
            :href="route('chat.index', user.user_id)"
            class="px-5 py-3 transition hover:cursor-pointer w-full"
          >
            <div class="flex justify-between items-center">
              <div class="pr-4">
                <div class="flex px-3">
                  <div v-if="user.is_online">
                    <div class="avatar online">
                      <div class="w-16 h-16 rounded-full">
                        <img
                          v-if="user?.avatar !== null"
                          src="https://cdn-icons-png.flaticon.com/512/194/194938.png"
                        />
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <div class="w-16 h-16 rounded-full">
                      <img
                        v-if="user?.avatar !== null"
                        src="https://cdn-icons-png.flaticon.com/512/194/194938.png"
                      />
                    </div>
                  </div>
                  <div class="block px-3">
                    <h3 class="text-lg text-dark font-semibold">{{ user.name }}</h3>
                    <span class="overflow-hidden text-md text-slate-300">
                      {{ user.message }}
                    </span>
                  </div>
                </div>
              </div>
              <UserStatus :user="user" class="mr-5 text-sm" />
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
import UserStatus from "../UserStatus.vue";

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
