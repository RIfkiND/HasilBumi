<template>
  <Navbar />
  <div class="min-h-screen bg-[#F6F4EB] py-5 font-inter">
    <!-- Header Toko -->
    <div class="bg-white border-2 border-white-50 mx-5 rounded-md">
      <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="flex items-center">
          <img class="h-16 w-16 rounded-full" :src="profile" alt="Store Logo" />
          <div class="ml-4">
            <h1 class="text-2xl font-bold">SharenStore.id</h1>
            <p class="text-slate-200 text-sm font-medium">Aktif 5 menit yang lalu</p>
          </div>
        </div>
        <div class="flex gap-3">
          <Link
            :href="route('chat.index')"
            class="bg-hoverPrimary text-white font-medium rounded-md capitalize flex items-center gap-2 p-2 transition no-underline hover:bg-primaryColor text-sm justify-center"
          >
            <i class="bx bxs-message-dots mt-[2px]"></i>Chat penjual
          </Link>
          <Link
            class="bg-hijau-1 hover:ring-2 hover:ring-primaryColor font-medium rounded-md p-2 text-sm hover:text-primaryColor outline-none text-primaryColor gap-2"
          >
            <i class="bx bx-plus mt-[2px]"></i>Ikuti
          </Link>
        </div>
      </div>
    </div>

    <!-- Informasi Toko -->
    <div class="bg-white mt-4 mx-5 rounded-md border-2 border-white-50">
      <div class="container mx-auto px-4 py-8 rounded-md">
        <h2 class="text-xl font-bold uppercase">Informasi Toko</h2>
        <div class="flex items-center">
          <div class="flex gap-7">
            <div class="space-y-5 border-r-2 pr-10 border-white-50">
              <div class="flex justify-between gap-5 mt-4">
                <label class="text-slate-300 capitalize">Pengikut</label>
                <span class="text-primaryColor">5 rb</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="text-slate-300 capitalize">Bergabung</label>
                <span class="text-primaryColor">1 tahun yang lalu</span>
              </div>
            </div>
            <div class="space-y-5 border-r-2 pr-10 border-white-50">
              <div class="flex justify-between gap-5 mt-4">
                <label class="text-slate-300 capitalize">Presentasi chat dibales</label>
                <span class="text-primaryColor">99%</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="text-slate-300 capitalize">Penilaian</label>
                <span class="text-primaryColor">76 rb</span>
              </div>
            </div>
            <div class="space-y-5">
              <div class="flex justify-between gap-5 mt-4">
                <label class="text-slate-300 capitalize">Produk</label>
                <span class="text-primaryColor">5,2 rb</span>
              </div>
              <div class="flex justify-between gap-5">
                <label class="text-slate-300 capitalize">Rating</label>
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
    <div class="bg-white mt-4 mx-5 rounded-md border-2 border-white-50 py-4 px-4">
      <h2 class="text-xl font-bold mb-4 uppercase">Kategori</h2>
      <div class="flex space-x-2">
        <div v-for="category in categories" :key="category.id">
          <div class="w-full px-2 justify-center items-center">
            <div class="avatar block">
              <div class="w-24 rounded-full relative justify-center items-center">
                <img :src="category.image" class="bg-center bg-cover"/>
              </div>
              <h3 class="font-medium text-md text-slate-300 text-center uppercase mt-3 truncate">
                {{ category.name }}
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Produk Unggulan -->
    <div class="mt-4 mx-4 px-4 py-3">
      <h2 class="text-xl font-bold mb-4 uppercase">Produk terlaris</h2>
      <!-- Show produk -->
      <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <Link
          class="bg-white shadow rounded-md overflow-hidden"
          v-for="product in featuredProducts"
          :key="product.id"
        >
          <div class="relative flex justify-center items-center group">
            <div class="w-full h-[190px] overflow-hidden bg-cover bg-center">
              <img
                :src="product.image"
                class="w-full h-full bg-cover bg-center transition hover:cursor-pointer hover:brightness-50 group-hover:brightness-50"
              />
            </div>
            <div class="absolute gap-2 hidden group-hover:flex">
              <Link
                href="#"
                class="text-white text-lg w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                title="view product"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
              </Link>
              <Link
                href="#"
                class="text-white text-lg w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                title="add to wishlist"
                @click="popupFavorite"
              >
                <i class="fa-solid fa-heart"></i>
              </Link>
            </div>
          </div>
          <div class="pt-3 pb-3 px-3">
            <Link class="no-underline">
              <h4 class="capitalize font-semibold text-xl mb-1 text-dark transition">
                {{ product.name }}
              </h4>
            </Link>
            <div class="capitalize text-[10px] flex gap-2 text-center">
              <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >{{ product.category }}</span
              >
              <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >{{ product.satuan }}</span
              >
            </div>
            <div class="flex items-baseline space-x-2 capitalize mb-2 mt-2">
              <span class="text-md text-primaryColor font-semibold"
                >Rp{{ product.price }}</span
              >
            </div>
            <div class="flex items-center divide-white-50 space-x-2 divide-x-2">
              <div class="flex gap-1 text-xs text-[#F3CA52]">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
              </div>
              <div class="text-xs text-slate-300 ml-3 px-2">1,5rb Terjual</div>
            </div>
          </div>
          <div class="flex items-center divide-white-50 space-x-2 divide-x-2 pb-3">
            <div class="flex gap-1 text-xs text-[#37B5B6] ml-4">
              <i class="bx bxs-car"></i>
              <span class="px-1">1-3 hari</span>
            </div>
            <div
              class="text-xs ml-3 px-2 capitalize text-center flex text-slate-300 gap-1"
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
import { Link } from "@inertiajs/vue3";
import Navbar from "@/User/Layout/Component/navbar.vue";
import Footer from "@/User/Layout/Component/Footer.vue";
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
        { id: 4, name: "kursi", image: "./assets/products/product5.jpg" },
      ],
      featuredProducts: [
        {
          id: 1,
          name: "Produk 1",
          category: "Meat",
          price: "Rp100.000",
          image: "./assets/products/pohon1.jpg",
          satuan: "ton",
          kota: "bandung",
        },
        {
          id: 2,
          name: "Produk 2",
          category: "Meat",
          price: "Rp200.000",
          image: "./assets/products/product1.jpg",
          satuan: "kg",
          kota: "cikarang",
        },
        {
          id: 3,
          name: "Produk 3",
          category: "Meat",
          price: "Rp300.000",
          image: "./assets/products/pohon6.jpg",
          satuan: "ton",
          kota: "ciamis",
        },
        {
          id: 4,
          name: "Produk 4",
          category: "Meat",
          price: "Rp400.000",
          image: "./assets/products/product2.jpg",
          satuan: "kg",
          kota: "banjar",
        },
        {
          id: 5,
          name: "Produk 5",
          category: "Meat",
          price: "Rp100.000",
          image: "./assets/products/pohon1.jpg",
          satuan: "ton",
          kota: "bandung",
        },
        {
          id: 6,
          name: "Produk 6",
          category: "Meat",
          price: "Rp200.000",
          image: "./assets/products/product1.jpg",
          satuan: "kg",
          kota: "cikarang",
        },
        {
          id: 7,
          name: "Produk 7",
          category: "Meat",
          price: "Rp300.000",
          image: "./assets/products/pohon6.jpg",
          satuan: "ton",
          kota: "ciamis",
        },
        {
          id: 8,
          name: "Produk 8",
          category: "Meat",
          price: "Rp400.000",
          image: "./assets/products/product2.jpg",
          satuan: "kg",
          kota: "banjar",
        },
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
