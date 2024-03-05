<template>
    <header
        class="flex items-center py-2 bg-white justify-between fixed w-full z-50"
    >
        <div class="ml-14 text-2xl font-bold" style="color: #292c2b">
            Hasil <span style="color: #3cb72b">Bumi.</span>
        </div>
<<<<<<< HEAD
        <nav class="text-base flex gap-8 font-medium" style="color: #292c2b">
            <Link :href="route('login')" class="text-textColor hover:text-primaryColor text-decoration-none">Home</Link>
            <Link :href="route('login')" class="text-textColor hover:text-primaryColor text-decoration-none">Store</Link>
            <Link :href="route('login')" class="text-textColor hover:text-primaryColor text-decoration-none">Landing</Link>
            <Link :href="route('login')" class="text-textColor hover:text-primaryColor text-decoration-none">Profile</Link>
=======
        <nav
            class="text-base flex gap-8 font-medium items-center"
            style="color: #292c2b"
        >
            <a href="#" class="hover:text-primaryColor">Home</a>
            <a href="#" class="hover:text-primaryColor">Store</a>
            <a href="#" class="hover:text-primaryColor">Landing</a>
            <a href="#" class="hover:text-primaryColor">Profile</a>
>>>>>>> 547bba5f4f14300a594e645ec3a140be28346dd4
        </nav>
        <label
            for="search"
            class="flex border p-0.5 pl-5 rounded-3xl pr-2"
            style="border: 1px solid #4a514e"
        >
            <input type="text" class="focus:outline-none" /><a
                href="#"
                class="px-3 py-1"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="20px"
                    viewBox="0 0 50 50"
                >
                    <path
                        d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"
                    ></path></svg
            ></a>
        </label>

        <div v-if="authenticated" class="flex items-center relative">
            <!-- Profil bulat -->
            <div
                class="rounded-full border cursor-pointer shadow-white-lg flex items-center justify-center text-xl font-bold border-primaryColor text-textColor w-10 h-10 mr-6"
                @click="toggleDropdown"
            >
                {{ user.name.substring(0, 1).toUpperCase() }}

                <!-- Dropdown konten -->
                <div
                    class="absolute top-10 right-0 mt-2 w-48 text-base bg-white rounded-md shadow-lg z-10"
                    v-if="dropdownOpen"
                    @click.away="dropdownOpen = false"
                >
                    <span class="block px-4 py-2">{{ user.name }}</span>
                    <a
                        href="#"
                        class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                        @click="editProfile"
                    >
                        Edit Profile
                    </a>
                    <Link
                        href="#"
                        class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                        @click="logout"
                    >
                        Logout
                </Link>
                </div>
            </div>
        </div>
        <div v-else class="flex gap-5 mr-10">
            <button
                class="bg-white p-2 border rounded-lg text-base w-24 font-semibold text-textColor hover:bg-primaryColor hover:text-white"
                style="border: solid 2px #3cb72b"
            >
<<<<<<< HEAD
                <Link :href="route('login')" class="text-textColor hover:text-primaryColor text-decoration-none">Sign in</Link>
=======
                <Link :href="route('view.login')">Sign in</Link>
>>>>>>> 547bba5f4f14300a594e645ec3a140be28346dd4
            </button>
            <button
                class="p-2 rounded-lg text-base w-24 font-semibold hover:bg-teal-dark hover:cursor-pointer"
                style="background-color: #3cb72b; color: #fff"
            >
<<<<<<< HEAD
                <Link :href="route('register')" class="text-textColor hover:text-white text-decoration-none">Sign up</Link>
=======
                <Link :href="route('view.register')">Sign up</Link>
>>>>>>> 547bba5f4f14300a594e645ec3a140be28346dd4
            </button>
        </div>
    </header>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage , router } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const { authenticated, user } = usePage().props;
const dropdownOpen = ref(false);

const toggleDropdown = () => {
    dropdownOpen.value = !dropdownOpen.value;
};

const closeDropdown = () => {
    dropdownOpen.value = false;
};

const editProfile = () => {
    // Navigasi ke halaman edit profil
};

const logout = () => {

    router.post(route('auth.logout'))
    location.reload();
};
const search  = ref("");

watch(search ,(value)=>{
    router.get(route('Api.Search'), {search : value},{
        preserveState: true,
        replace :tue
    });
});

</script>
