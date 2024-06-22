<template>
  <div class="flex flex-row shadow-md justify-self-start font-inter">
    <div class="flex flex-col p-4 bg-white rounded-r-lg rounded-lg overflow-hidden">
      <div v-if="!photoUrl" class="flex items-center gap-3">
        <div class="avatar placeholder">
          <div class="bg-dark text-neutral-content rounded-full w-12">
            <span class="text-xl font-bold text-white"> {{ initial }}</span>
          </div>
        </div>
        <span class="text-xl capitalize text-dark">{{ $page.props.auth.user.name }}</span>
      </div>

      <div v-else class="flex items-center gap-3">
        <div class="avatar placeholder">
          <div class="text-neutral-content rounded-full w-12 bg-dark">
            <span class="text-md font-bold text-white">{{ initial }}</span>
          </div>
        </div>
        <span class="text-xl capitalize">{{ $page.props.auth.user.name }}</span>
      </div>

      <div class="border-t-2 mt-6 border-white-50 opacity-50"></div>
      <ul class="flex flex-col py-4">
        <li class="capitalize">
          <Link
            :href="route('userProfile')"
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-user"></i
            ></span>
            <span class="text-sm font-medium">Profile</span>
          </Link>
        </li>
        <li v-if="$page.props.auth.seller" class="capitalize">
          <Link
            :href="route('userProducts')"
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-shopping-bag"></i
            ></span>
            <span class="text-sm font-medium">Product</span>
          </Link>
        </li>
        <li v-else class="capitalize">
          <Link
            :href="route('userStore')"
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-store"></i
            ></span>
            <span class="text-sm font-medium">Open Store</span>
          </Link>
        </li>

        <li v-if="$page.props.auth.seller" class="capitalize">
          <Link
            :href="route('userHistory')"
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-history"></i
            ></span>
            <span class="text-sm font-medium">History</span>
          </Link>
        </li>
        <li class="capitalize">
          <Link
            href="/chat"
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-chat"></i
            ></span>
            <span class="text-sm font-medium">Chat seller</span>
            <div class="badge badge-primary w-4 h-4 p-2 translate-x-6">
              <span class="text-white text-[9px] font-semibold">2</span>
            </div>
          </Link>
        </li>
        <li class="capitalize">
          <Link
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-slate-300 hover:text-primaryColor"
            @click="Logout"
          >
            <span
              class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
              ><i class="bx bx-log-out"></i
            ></span>
            <span class="text-sm font-medium">Logout</span>
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>
<script setup>
import { Link, usePage, router } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import route from "../../../../../../../vendor/tightenco/ziggy/src/js/index";
const page = usePage();
const initial = computed(() => page.props.auth.user.name.charAt(0).toUpperCase());
const photoPreview = ref(null);

const photoUrl = computed(() => {
  return (
    photoPreview.value ||
    (page.props.auth.user.avatar_user ? page.props.auth.user.avatar_user : null)
  );
});

const Logout = async () => {
  router.post(route("auth.logout"));
  location.reload();
};
</script>
