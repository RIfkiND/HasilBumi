<template>
    <div class="flex flex-row shadow-md justify-self-start">
        <div
            class="flex flex-col p-4 bg-white rounded-r-lg rounded-lg overflow-hidden"
        >
            <div v-if="!photoUrl" class="flex items-center gap-3">
                <div class="avatar placeholder">
                    <div
                        class="bg-neutral text-neutral-content rounded-full w-12"
                    >
                        <span class="text-2xl"> {{ initial }}</span>
                    </div>
                </div>
                <span class="text-xl capitalize text-indigo-500">{{
                    $page.props.auth.user.name
                }}</span>
            </div>

            <div v-else class="flex items-center gap-3">
                <div class="avatar placeholder">
                    <div
                        class="bg-neutral text-neutral-content rounded-full w-12"
                    >
                        <span class="text-xl">{{ initial }}</span>
                    </div>
                </div>
                <span class="text-xl capitalize text-indigo-500">{{
                    $page.props.auth.user.name
                }}</span>
            </div>

            <div class="border-t mt-6 border-slate-200 opacity-50"></div>
            <ul class="flex flex-col py-4">
                <li>
                    <Link
                        :href="route('userProfile')"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
                    >
                        <span
                            class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                            ><i class="bx bx-user"></i
                        ></span>
                        <span class="text-sm font-medium">Profile</span>
                    </Link>
                </li>
                <li v-if="$page.props.auth.seller">
                    <Link
                        :href="route('userProducts')"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
                    >
                        <span
                            class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                            ><i class="bx bx-shopping-bag"></i
                        ></span>
                        <span class="text-sm font-medium">Product</span>
                    </Link>
                </li>
                <li v-else>
                    <Link
                        :href="route('userStore')"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
                    >
                        <span
                            class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                            ><i class="bx bx-store"></i
                        ></span>
                        <span class="text-sm font-medium">Open Store</span>
                    </Link>
                </li>

                <li v-if="$page.props.auth.seller">
                    <Link
                        :href="route('userHistory')"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
                    >
                        <span
                            class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                            ><i class="bx bx-history"></i
                        ></span>
                        <span class="text-sm font-medium">History</span>
                    </Link>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
                    >
                        <span
                            class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                            ><i class="bx bx-chat"></i
                        ></span>
                        <span class="text-sm font-medium">Chats</span>
                        <span
                            class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-hoverPrimary"
                            >5</span
                        >
                    </a>
                </li>
                <li>
                    <Link
                        class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-primaryColor"
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
const page = usePage();
const initial = computed(() =>
    page.props.auth.user.name.charAt(0).toUpperCase()
);
const photoPreview = ref(null);

const photoUrl = computed(() => {
    return (
        photoPreview.value ||
        (page.props.auth.user.avatar_user
            ? page.props.auth.user.avatar_user
            : null)
    );
});

const Logout = async () => {
    router.post(route("auth.logout"));
    location.reload();
};
</script>
