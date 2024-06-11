<template>
  <div class="-translate-y-5 block">
    <div
      class="search-box h-20 text-slate-300 flex justify-between px-5 pb-5 py-2 bg-hoverPrimary items-center"
    >
      <form
        class="flex justify-start text-start -translate-x-5 translate-y-5 items-center"
      >
        <div class="relative">
          <input
            type="search"
            class="peer bg-white text-md rounded-md py-2 pl-10 placeholder:text-slate-200 border-none focus:ring-2 focus:ring-slate-300"
            placeholder="Cari..."
          />
          <i
            class="fa fa-search text-slate-200 z-10 absolute left-3 top-1/2 transform -translate-y-1/2 peer-focus:text-slate-300 peer-focus:z-10"
          ></i>
        </div>
      </form>
      <div class="block">
        <div class="dropdown dropdown-bottom flex justify-center items-center translate-y-5 relative" tabindex="0">
          <button class="relative m-auto translate-x-8 text-center w-12 h-12 hover:bg-[#4fdf69] rounded-full">
              <i class='bx bx-dots-vertical-rounded bx-sm mt-1 text-white'></i>
          </button>
          <ul
            class="dropdown-content relative menu p-2 shadow bg-white rounded-lg w-56"
          >
          <h3 class="text-dark font-semibold text-lg p-2 capitalize">Filter chat</h3>
            <li class="flex hover:bg-white-50 py-1 rounded-md text-slate-300 text-md">
                <Link class="hover:text-slate-300 flex">
                    <i class='bx bxs-message-alt-dots text-hoverPrimary text-[16px]'></i> Chat yang belum dibaca
                </Link>
            </li>
            <li class="flex hover:bg-white-50 py-1 rounded-md text-slate-300 text-md">
                <Link class="hover:text-slate-300 flex">
                    <i class='bx bxs-chat text-hoverPrimary text-[16px]'></i> Semua chat
                </Link>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="user-list h-screen overflow-y-auto">
      <ul class="divide-y-2 divide-white-50">
        <li
          v-for="user in recentMessages"
          :key="user.user_id"
          class="hover:bg-white-50 transition"
        >
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
                  <div class="flex px-3 justify-center items-center">
                    <div class="block">
                        <h3 class="text-lg text-dark font-semibold flex gap-1">
                            {{ user.name }}
                            <div class="badge badge-primary w-4 h-4 p-2">
                                <span class="text-white text-[9px] font-semibold">2</span>
                            </div>
                        </h3>
                        <span class="overflow-hidden text-md text-slate-300">
                        {{ user.message }}
                        </span>
                    </div>
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
