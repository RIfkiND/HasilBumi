<template>
  <Navbar />
  <div class="min-h-screen bg-[#F6F4EB] py-5 font-inter">
    <!-- Header Toko -->
    <div class="mx-5 bg-white border-2 rounded-md border-white-50">
      <div class="container flex items-center justify-between px-4 py-6 mx-auto">
        <div class="flex items-center">
          <img class="w-16 h-16 rounded-full" :src="tokoUrl" alt="Store Logo" />
          <div class="ml-4">
            <h1 class="text-2xl font-bold">{{ Stores.nama_toko }}</h1>
            <p v-if="Stores.user.is_online" class="text-sm font-medium text-slate-200">Online Now</p>
            <p v-else class="text-sm font-medium text-slate-200">{{ lastActive }}</p>
          </div>
        </div>
        <div class="flex gap-3">
          <Link
            :href="route('chat.index', Stores.user.id)"
            class="flex items-center justify-center gap-2 p-2 text-sm font-medium text-white no-underline capitalize transition rounded-md bg-hoverPrimary hover:bg-primaryColor"
          >
            <i class="bx bxs-message-dots mt-[2px]"></i>Chat penjual
          </Link>
          <Link
            class="gap-2 p-2 text-sm font-medium rounded-md outline-none bg-hijau-1 hover:ring-2 hover:ring-primaryColor hover:text-primaryColor text-primaryColor"
          >
            <i class="bx bx-plus mt-[2px]"></i>Ikuti
          </Link>
        </div>
      </div>
    </div>

    <!-- Informasi Toko -->
    <div class="mx-5 mt-4 bg-white border-2 rounded-md border-white-50">
      <div class="container px-4 py-8 mx-auto rounded-md">
        <h2 class="text-xl font-bold uppercase">Informasi Toko</h2>
        <div class="flex items-center">
          <div class="flex gap-7">
            <div class="pr-10 space-y-5 border-r-2 border-white-50">
              <div class="flex justify-between gap-5 mt-4">
                <label class="capitalize text-slate-300">Pengikut</label>
                <span class="text-primaryColor">5 rb</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="capitalize text-slate-300">Bergabung</label>
                <span class="text-primaryColor">{{ joinedTime }}</span>
              </div>
            </div>
            <div class="pr-10 space-y-5 border-r-2 border-white-50">
              <div class="flex justify-between gap-5 mt-4">
                <label class="capitalize text-slate-300">Presentasi chat dibales</label>
                <span class="text-primaryColor">99%</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="capitalize text-slate-300">Penilaian</label>
                <span class="text-primaryColor">{{ TotalUlasan }}</span>
              </div>
            </div>
            <div class="space-y-5">
              <div class="flex justify-between gap-5 mt-4">
                <label class="capitalize text-slate-300">Produk</label>
                <span class="text-primaryColor">{{  totalProducts }}</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="capitalize text-slate-300">Rating</label>
                <div class="flex items-center gap-2">
                  <div class="flex gap-1 text-xs text-[#F3CA52]">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span class="text-primaryColor">/ 1,2 rb</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kategori Produk -->
    <!-- <div class="px-4 py-4 mx-5 mt-4 bg-white border-2 rounded-md border-white-50">
      <h2 class="mb-4 text-xl font-bold uppercase">Kategori</h2>
      <div class="flex space-x-2">
        <div v-for="category in categories" :key="category.id">
          <div class="items-center justify-center w-full px-2">
            <div class="block avatar">
              <div class="relative items-center justify-center w-24 rounded-full">
                <img :src="category.image" class="bg-center bg-cover" />
              </div>
              <h3
                class="mt-3 font-medium text-center uppercase truncate text-md text-slate-300"
              >
                {{ category.name }}
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Produk Unggulan -->
    <div class="px-4 py-3 mx-4 mt-4">
      <h2 class="mb-4 text-xl font-bold uppercase">Produk terlaris</h2>
      <!-- Show produk -->
      <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <Link
          class="overflow-hidden bg-white rounded-md shadow"
          v-for="product in Stores.product"
          :key="product.id"
        >
          <div class="relative flex items-center justify-center group">
            <div class="w-full h-[190px] overflow-hidden bg-cover bg-center">
                <Link  :href="route('Shop.Product', { id: product.id })">
              <img
                :src="`/${product.first_image.url}`" :alt="`Image of ${product.name}`"
                class="w-full h-full transition bg-center bg-cover hover:cursor-pointer hover:brightness-50 group-hover:brightness-50"
              />
              </Link>
            </div>
            <div class="absolute hidden gap-2 group-hover:flex">
              <Link
                href="#"
                class="flex items-center justify-center w-10 h-10 text-lg text-white transition rounded-full bg-dark opacity-60 hover:opacity-90"
                title="view product"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
              </Link>
              <button
                href="#"
                class="flex items-center justify-center w-10 h-10 text-lg text-white transition rounded-full bg-dark opacity-60 hover:opacity-90"
                title="add to wishlist"
               @click.stop="addToWishlist(product.id)"
              >
                <i class="fa-solid fa-heart"></i>
              </button>
            </div>
          </div>
          <div class="px-3 pt-3 pb-3">
            <Link class="no-underline">
              <h4 class="mb-1 text-xl font-semibold capitalize transition text-dark">
                {{ product.name }}
              </h4>
            </Link>
            <div class="capitalize text-[10px] flex gap-2 text-center">
              <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >{{ product.category.name }}</span
              >
              <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >{{ product.satuan.symbol }}</span
              >
            </div>
            <div class="flex items-baseline mt-2 mb-2 space-x-2 capitalize">
              <span class="font-semibold text-md text-primaryColor"
                >Rp{{ product.price }}</span
              >
            </div>
            <div class="flex items-center space-x-2 divide-x-2 divide-white-50">
              <div class="flex gap-1 text-xs text-[#F3CA52]">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="px-2 ml-3 text-xs text-slate-300">1,5rb Terjual</div>
            </div>
          </div>
          <div class="flex items-center pb-3 space-x-2 divide-x-2 divide-white-50">
            <div class="flex gap-1 text-xs text-[#37B5B6] ml-4">
              <i class="bx bxs-car"></i>
              <span class="px-1">1-3 hari</span>
            </div>
            <div
              class="flex gap-1 px-2 ml-3 text-xs text-center capitalize text-slate-300"
            >
              <svg
                class="w-4 h-4 text-xs text-slate-300"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                />
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"
                />
              </svg>
              {{ product.kota }}
            </div>
          </div>
        </Link>
      </div>
    </div>
  </div>
  <Footer />
</template>
<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import {computed ,ref } from "vue"
import Navbar from "@/User/Layout/Component/navbar.vue";
import Footer from "@/User/Layout/Component/Footer.vue";

const props = defineProps ({
    Stores : Object,
    totalProducts:Number,
    lastActive: String,
    joinedTime: String,
    TotalUlasan:Number,
});

const avatar = props.Stores;
const tokoUrl = computed(() => {
  return avatar.photo_toko ? `/storage/Toko/Avatar/${avatar.photo_toko}` : null;
});


const form = useForm({
    product_id: null
});
const addToWishlist = async (productId) => {
    form.product_id = productId;

    try {
        await form.post(route("wishlist.store"), {
            onSuccess: (page) => {
                resetFormData();
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    title: page.props.flash.success,
                });
            },
        });
    } catch (err) {
        console.log(err);
    } finally {
        loading.value = false;
    }
};
</script>
<script>
export default {
  data() {
    return {
      profile: "",
      categories: [
        { id: 1, name: "fauna", image: "./assets/products/pohon1.jpg" },
        { id: 2, name: "flora", image: "./assets/products/pohon4.jpg" },
        { id: 3, name: "kasur", image: "./assets/products/product3.jpg" },
        { id: 4, name: "kursi", image: "./assets/prodcts/product5.jpg" },
      ],
    };
  },
  mounted() {
    this.profile = "./assets/img/users/aji.jpg";
  },
  methods: {
    popupFavorite() {
      Swal.fire({
        iconColor: "#3CB72B",
        position: "top-end",
        icon: "success",
        title: "Sukses",
        text: "Produk berhasil di tambahkan ke favorite",
        showConfirmButton: false,
        timer: 2000,
      });
    },
  },
};
</script>

<style scoped>
/* Tambahkan styling tambahan jika diperlukan */
</style>
