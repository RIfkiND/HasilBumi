<template>
  <!-- header atas -->
  <header class="z-50 w-full py-2 bg-white shadow-sm font-inter">
    <div class="container flex items-center justify-between md:gap-4 sm:gap-6">
      <a
        :href="route('Home')"
        class="text-2xl font-bold text-textColor hover:text-textColor responsive"
      >
        Hasil <span class="text-primaryColor">Bumi.</span>
      </a>

      <nav>
        <ul class="flex items-center gap-6 mb-0">
          <li><Link :href="route('Home')" class="navbar-list">Home</Link></li>
          <li><Link :href="route('Shop.main')" class="navbar-list">Shop</Link></li>
          <li><a href="#" class="navbar-list">About Us</a></li>
          <li><a href="#" class="navbar-list">Contact Us</a></li>
        </ul>
      </nav>
      <div class="flex items-center gap-2 space-x-4">
        <Link
          :href="route('Home.Whistlist')"
          class="relative text-center text-textColor hover:text-textColor"
        >
          <div class="text-2xl">
            <i class="fa-regular fa-heart icon-style"></i>
          </div>
          <div class="text-xs leading-3">Favorite</div>
          <div
            class="absolute right-0 flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -top-1 bg-danger"
          >
            {{ user.totalWhislist }}
          </div>
        </Link>
        <Link
          :href="route('Home.ShopCart')"
          class="relative text-center text-textColor hover:text-textColor"
        >
          <div class="text-primaryColor">
            <i class="bx bxs-cart text-[29px]"></i>
          </div>
          <div class="text-xs leading-3">Keranjang</div>
          <div
            class="absolute right-0 flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -top-1 bg-danger"
          >
            {{ user.totalCart }}
          </div>
        </Link>
        <div class="flex gap-2" v-if="!$page.props.auth.user">
          <Link :href="route('view.login')" class="btn-header-outline">Login</Link>
          <Link :href="route('view.register')" class="btn-header-full btn-border"
            >Register</Link
          >
        </div>

        <div v-if="$page.props.auth.user" class="relative flex items-center">
          <!-- Profil bulat -->
          <div
            class="flex items-center justify-center w-10 h-10 mr-6 text-xl font-bold border rounded-full cursor-pointer shadow-white-lg border-primaryColor text-textColor"
            @click="profileToggleDropdown()"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              class="w-8 h-8 bg-white rounded-full stroke-primaryColor"
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
              class="absolute z-10 text-base bg-white rounded-md shadow-lg top-12"
              v-if="profileDropdown"
              @click="profileDropdown = false"
            >
              <ul class="px-0" aria-labelledby="user-menu-button">
                <li class="px-4 py-2 style-bg">
                  <Link
                    href="#"
                    class="block mb-1 text-sm text-left truncate style-text"
                    @click="editProfile"
                  >
                    Akun Saya
                  </Link>
                </li>

                <li class="px-4 py-2 card-hover style-bg">
                  <Link
                    href="#"
                    class="block mb-1 text-sm text-left style-text"
                    @click="logout"
                  >
                    Logout
                  </Link>
                </li>
              </ul>
            </div>
          </div>
          <div class="px-2 py-2">
            <!-- INi Hover
                                hover:bg-primaryColor hover:text-white
                            -->
            <!-- <span
                                    class="block mb-2 text-sm text-neutral-500"
                                    >{{ user.email }}</span
                                > -->
            <span class="block font-bold truncate text-md text-textColor">
              {{ $page.props.auth.user.name }}
            </span>
          </div>
        </div>

        <button
          @click="toggleMobileMenu"
          class="block transition md:hidden text-textColor"
        >
          <i class="fas fa-bars"></i>
        </button>
        <!-- <a
                    href="#"
                    class="relative text-center text-gray-700 transition hover:text-primary"
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

  <!-- Mobile -->
  <nav
    v-if="mobileMenuOpen"
    class="absolute z-50 w-full py-3 bg-primaryColor md:hidden"
    style="background-color: #51cf66"
  >
    <div class="container">
      <!-- Isi menu mobile -->

      <div class="py-4">
        <Link
          :href="route('Home')"
          class="block px-4 py-2 text-white transition hover:bg-hoverPrimary"
        >
          Home
        </Link>
        <a href="#" class="block px-4 py-2 text-white transition hover:bg-hoverPrimary">
          Shop
        </a>
        <a href="#" class="block px-4 py-2 text-white transition hover:bg-hoverPrimary">
          About us
        </a>
        <a href="#" class="block px-4 py-2 text-white transition hover:bg-hoverPrimary">
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

.btn-border:hover {
  box-shadow: inset 0 0 0 2px #3cb72b;
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

.style-bg {
  background-color: #fff;
}

.style-text {
  color: #292c2b;
}

.style-bg:hover {
  background-color: #3cb72b;
}

.style-bg:hover .style-text {
  color: #fff;
}
</style>

<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage, router } from "@inertiajs/vue3";
import { ref, watch, computed } from "vue";

const page = usePage();

const user = computed(() => page.props.auth.user);

const mobileMenuOpen = ref(false);
const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value;
};

// const dropdownOpen = ref(false);
// const toggleDropdown = (isOpen) => {
//     dropdownOpen.value = isOpen;
// };

// const profileDropdown = ref(false);
// const profileToggleDropdown = (isOpen) => {
//     profileDropdown.value = isOpen;
// };

const { authenticated } = usePage().props;
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

const logout = async () => {
  router.post(route("auth.logout"));
  location.reload();
};

// const search = ref("");

// watch(search, (value) => {
//     router.get(
//         route("Api.Search"),
//         { search: value },
//         {
//             preserveState: true,
//             replace: true,
//         }
//     );
// });
</script>
