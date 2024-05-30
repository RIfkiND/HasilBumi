<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
body {
    font-family: "Roboto", sans-serif;
}
a {
    text-decoration: none;
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

.nav-menu {
    display: flex;
    position: relative;
}

.nav-menu::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    border-radius: 5px;
    background: white;
    bottom: -3px;
    transform: scaleX(0);
    transition: transform 0.2s;
    transform-origin: right;
}

.nav-menu:hover::after {
    transform-origin: left;
    transform: scaleX(1);
}
</style>

<template>
    <!-- header atas -->
    <header class="py-2 shadow-sm bg-white w-full">
        <div
            class="container flex items-center justify-evenly md:gap-4 sm:gap-6"
        >
            <a
                :href="route('Home')"
                class="flex gap-1 text-2xl font-bold text-textColor hover:text-textColor"
            >
                Hasil <span class="text-primaryColor">Bumi.</span>
            </a>

            <div class="w-full max-w-xl relative hidden lg:flex">
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
                    class="text-center text-textColor relative hover:text-textColor md:block hidden"
                >
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart icon-style"></i>
                    </div>
                    <div class="text-xs leading-3">Favorite</div>
                    <div
                        class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-danger text-white text-xs"
                    >
                        8
                    </div>
                </Link>
                <Link
                    :href="route('Home.ShopCart')"
                    class="text-center text-textColor relative hover:text-textColor hidden md:block"
                >
                    <div class="text-primaryColor">
                        <i class="bx bxs-cart text-[29px]"></i>
                    </div>
                    <div class="text-xs leading-3">Keranjang</div>
                    <div
                        class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-danger text-white text-xs"
                    >
                        8
                    </div>
                </Link>
                <div class="flex gap-3 mx-5 md:flex" v-if="!authenticated">
                    <Link :href="route('view.login')" class="btn-header-outline"
                        >Login</Link
                    >
                    <Link :href="route('view.register')" class="btn-header-full"
                        >Register</Link
                    >
                    <!-- <Link
                        :href="route('sellerform')"
                        class="text-primaryColor px-6 py-2 rounded-full border-1 button-border flex justify-center items-center hover:text-primaryColor"
                    >
                        Daftar
                        <div>
                            <i class="bx bx-right-arrow-alt ml-1"></i>
                        </div>
                    </Link> -->
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
                            @click="profileDropdown = false"
                        >
                            <ul class="px-0" aria-labelledby="user-menu-button">
                                <li class="py-2 px-4 style-bg">
                                    <Link
                                        :href="route('userProfile')"
                                        class="block text-sm truncate mb-1 text-left style-text"
                                    >
                                        Akun Saya
                                    </Link>
                                </li>

                                <li class="card-hover py-2 px-4 style-bg">
                                    <Link
                                        href="#"
                                        class="block text-sm mb-1 text-left style-text"
                                        @click="logout"
                                    >
                                        Logout
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div v-if="authenticated" class="py-2">
                    <!-- INi Hover
                                hover:bg-primaryColor hover:text-white
                            -->
                    <!-- <span
                                    class="block text-sm text-neutral-500 mb-2"
                                    >{{ user.email }}</span
                                > -->
                    <span
                        class="block text-md truncate text-textColor font-bold"
                        >{{ user.name }}</span
                    >
                </div>

                <button
                    @click="toggleMobileMenu"
                    class="block md:hidden text-textColor transition"
                >
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
    <!-- end header atas -->

    <!-- navbar pc -->
    <nav class="hidden md:block bg-primaryColor">
        <div class="container flex items-center">
            <div
                class="px-8 py-3 md:flex items-center cursor-pointer relative group bg-primaryColor hover:bg-hoverPrimary"
                @mouseover="toggleDropdown(true)"
                @mouseleave="toggleDropdown(false)"
            >
                <span class="text-white">
                    <i class="fa-solid fa-bars stroke-primaryColor"></i>
                </span>

                <!-- dropdown -->

                <div
                    v-if="dropdownOpen"
                    class="absolute flex top-full left-0 bg-white shadow-md py-2 z-50"
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
                <div class="flex items-center space-x-6 capitalize">
                    <Link :href="route('Home')" class="nav-menu text-white"
                        >Home</Link
                    >
                    <Link :href="route('Shop.main')" class="nav-menu text-white"
                        >Shop</Link
                    >
                    <Link href="#" class="nav-menu text-white">About us</Link>
                    <Link href="#" class="nav-menu text-white">Contact us</Link>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar pc -->

    <!-- Mobile -->
    <nav
        v-if="mobileMenuOpen"
        class="bg-primaryColor md:hidden py-3 absolute w-full z-50"
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
                    href="#"
                    class="block text-white py-2 px-4 hover:bg-hoverPrimary transition"
                >
                    Home
                </a>
                <a
                    href="#"
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

<!--                                          @click="editProfile"
-->
