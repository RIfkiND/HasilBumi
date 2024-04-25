<template>
    <!-- header atas -->
    <header class="py-2 shadow-sm bg-white w-full">
        <div
            class="container flex items-center justify-evenly md:gap-4 sm:gap-6"
        >
            <a
                href="#"
                class="text-2xl font-bold text-textColor hover:text-textColor responsive"
            >
                Hasil <span class="text-primaryColor">Bumi.</span>
            </a>

            <div class="w-full max-w-xl relative flex">
                <span
                    class="absolute left-4 top-1/2 Custransform-translate text-lg text-gray-400 hidden md:block"
                >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input
                    type="text"
                    name="search"
                    id="search"
                    class="w-full border border-r-0 border-colorBorder pl-12 py-2 pr-3 rounded-l-md focus:outline-none hidden md:flex bg-white"
                    placeholder="search"
                />
                <button
                    class="bg-primaryColor border border-colorBorder text-white px-8 rounded-r-md transition md:flex items-center hidden hover:bg-hoverPrimary"
                >
                    Search
                </button>
            </div>

            <div class="flex items-center space-x-4 gap-2">
                <Link
                    :href="route('Home.Whistlist')"
                    class="text-center text-textColor transition relative"
                >
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart icon-style"></i>
                    </div>
                    <div class="text-xs leading-3">Wishlist</div>
                    <div
                        class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-hoverPrimary text-white text-xs"
                    >
                        8
                    </div>
                </Link>
                <Link
                    :href="route('Home.ShopCart')"
                    class="text-center text-textColor transition relative"
                >
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping icon-style"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                    <div
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-hoverPrimary text-white text-xs"
                    >
                        2
                    </div>
                </Link>
                <div class="flex gap-2" v-if="!authenticated">
                    <Link
                        :href="route('view.login')"
                        class="text-primaryColor transition px-6 py-2 rounded-md border-2 button-border hover:text-white hover:bg-primaryColor"
                        >Login</Link
                    >
                    <Link
                        :href="route('view.register')"
                        class="text-white bg-primaryColor px-6 py-2 rounded-md hover:bg-white hover:text-primaryColor hover:border-2 hover:border-primaryColor transition"
                        >Register</Link
                    >
                </div>

                <div v-if="authenticated" class="flex items-center relative">
                    <!-- Profil bulat -->
                    <div
                        class="rounded-full border cursor-pointer shadow-white-lg flex items-center justify-center text-xl font-bold border-primaryColor text-textColor w-10 h-10 mr-6"
                        @click="profileToggleDropdown()"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            class="w-8 h-8 rounded-full bg-white stroke-primaryColor"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                            />
                        </svg>

                        <!-- Dropdown konten -->
                        <div
                            class="absolute top-12 text-base bg-white rounded-md shadow-lg z-10"
                            v-if="profileDropdown"
                            @click.away="profileDropdown = false"
                        >
                            <div class="text-neutral-500 py-2 px-2">
                                <!-- INi Hover
                                hover:bg-primaryColor hover:text-white
                            -->
                                <!-- <span
                                    class="block text-sm text-neutral-500 mb-2"
                                    >{{ user.email }}</span
                                > -->
                                <span
                                    class="block text-sm truncate dark:text-gray-400 mb-1"
                                    >{{ user.name }}</span
                                >
                            </div>
                            <ul class="px-0" aria-labelledby="user-menu-button">
                                <li
                                    class="card-hover card-hoverSecondary py-2 px-2"
                                >
                                    <Link
                                        href="#"
                                        class="block text-sm text-textColor truncate mb-1 text-left"
                                        @click="editProfile"
                                    >
                                        Akun Saya
                                    </Link>
                                </li>

                                <li class="card-hover py-2 px-2">
                                    <Link
                                        href="#"
                                        class="block text-sm text-textColor mb-1 text-left"
                                        @click="logout"
                                    >
                                        Logout
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button
                    @click="toggleMobileMenu"
                    class="block md:hidden text-textColor transition"
                >
                    <i class="fas fa-bars"></i>
                </button>
                <!-- <a
                    href="#"
                    class="text-center text-gray-700 hover:text-primary transition relative"
                >
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a> -->
            </div>
        </div>
    </header>
    <!-- end header atas -->

    <!-- navbar pc -->
    <nav class="hidden md:block bg-primaryColor">
        <div class="container flex">
            <div
                class="px-8 py-4 md:flex items-center cursor-pointer relative group bg-primaryColor hover:bg-hoverPrimary"
                @mouseover="toggleDropdown(true)"
                @mouseleave="toggleDropdown(false)"
            >
                <span class="text-white">
                    <i class="fa-solid fa-bars stroke-primaryColor"></i>
                </span>

                <!-- dropdown -->

                <div
                    v-if="dropdownOpen"
                    class="absolute flex top-full left-0 bg-white shadow-md py-2 z-50 font-bold"
                >
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Meat</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Vegetable</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Fruits</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Forest</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Grain</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Industri</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Ship</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Processed</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Spice</span
                        >
                    </a>
                    <a
                        href="#"
                        class="flex items-center px-6 py-3 hover:bg-gray-100 transition w-full"
                    >
                        <span
                            class="ml-6 text-sm text-textColor hover:text-primaryColor"
                            >Textile</span
                        >
                    </a>
                </div>
            </div>

            <div
                class="flex items-center justify-between flex-grow md:pl-12 py-2"
            >
                <div class="flex items-center space-x-6 capitalize font-bold">
                    <a
                        href="index.html"
                        class="text-neutral-700 hover:text-white transition"
                        >Home</a
                    >
                    <a
                        href="pages/shop.html"
                        class="text-textColor hover:text-white transition"
                        >Shop</a
                    >
                    <a
                        href="#"
                        class="text-textColor hover:text-white transition"
                        >About us</a
                    >
                    <a
                        href="#"
                        class="text-textColor hover:text-white transition"
                        >Contact us</a
                    >
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar pc -->

    <!-- Mobile -->
    <nav
        v-if="mobileMenuOpen"
        class="bg-primaryColor md:hidden py-3 absolute w-full"
        style="background-color: #51cf66"
    >
        <div class="container">
            <!-- Isi menu mobile -->
            <div class="w-full max-w-xl relative flex">
                <span
                    class="absolute left-4 top-1/2 Custransform-translate text-lg text-gray-400 md:block"
                >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input
                    type="text"
                    name="search"
                    id="search"
                    class="w-full border border-r-0 border-colorBorder pl-12 py-2 pr-3 rounded-l-md focus:outline-none md:flex bg-white"
                    placeholder="search"
                />
                <button
                    class="bg-primaryColor border border-colorBorder text-white px-8 rounded-r-md transition md:flex items-center hover:bg-hoverPrimary"
                >
                    Search
                </button>
            </div>

            <div class="py-4">
                <a
                    href="index.html"
                    class="block text-white py-2 px-4 hover:bg-hoverPrimary transition"
                >
                    Home
                </a>
                <a
                    href="pages/shop.html"
                    class="block text-white py-2 px-4 hover:bg-hoverPrimary transition"
                >
                    Shop
                </a>
                <a
                    href="#"
                    class="block text-white py-2 px-4 hover:bg-hoverPrimary transition"
                >
                    About us
                </a>
                <a
                    href="#"
                    class="block text-white py-2 px-4 hover:bg-hoverPrimary transition"
                >
                    Contact us
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile end -->
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
body {
    font-family: "Roboto", sans-serif;
}
a {
    text-decoration: none;
}

.button-border {
    border: 2px solid #3cb72b;
}

.icon-style {
    color: #3cb72b;
}

.Custransform-translate {
    transform: translate(0, -50%);
}

.card-hover:hover {
    background-color: #3cb72b;
}

.card-hover:hover .card-hoverSecondary {
    color: #fff;
}
</style>

<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage, router } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const mobileMenuOpen = ref(false);
const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
};

const dropdownOpen = ref(false);
const toggleDropdown = (isOpen) => {
    dropdownOpen.value = isOpen;
};

// const profileDropdown = ref(false);
// const profileToggleDropdown = (isOpen) => {
//     profileDropdown.value = isOpen;
// };

const { authenticated, user } = usePage().props;
const profileDropdown = ref(false);
const profileToggleDropdown = () => {
    profileDropdown.value = !profileDropdown.value;
};

// const closeDropdown = () => {
//     profileDropdownClose.value = false;
// };

const editProfile = () => {
    // Navigasi ke halaman edit profil
};

const logout = () => {
    router.post(route("auth.logout"));
    location.reload();
};
const search = ref("");

watch(search, (value) => {
    router.get(
        route("Api.Search"),
        { search: value },
        {
            preserveState: true,
            replace: true, // Perbaikan typo disini, seharusnya true bukan 'tue'
        }
    );
});
</script>
