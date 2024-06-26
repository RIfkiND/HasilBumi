<template>
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-2 text-sm mt-5 font-inter">
      <Link :href="route('Home')">
        <i class="fa-solid fa-house text-slate-300"></i>
      </Link>
      <span class="text-sm text-slate-200">
        <i class="fa-solid fa-chevron-right"></i>
      </span>
      <Link :href="route('Shop.main')">
        <span class="text-slate-200 font-medium hover:text-slate-300">Shop</span>
      </Link>
      <span class="text-sm text-slate-200">
        <i class="fa-solid fa-chevron-right"></i>
      </span>
      <Link>
        <span class="text-slate-200 font-medium hover:text-slate-300">{{
          detailProduct.category.name
        }}</span>
      </Link>
      <span class="text-sm text-slate-200">
        <i class="fa-solid fa-chevron-right"></i>
      </span>
      <Link>
        <span class="text-slate-200 font-medium hover:text-slate-300">{{
          detailProduct.name
        }}</span>
      </Link>
    </div>
    <!-- ./breadcrumb -->

    <!-- product-detail -->
    <div
      class="container grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 font-inter"
    >
      <div class="relative mb-10">
        <div
          class="w-full lg:h-[480px] bg-white-50 overflow-hidden rounded-md sm:h-[280px] md:h-[350px]"
        >
          <img :src="currentImage" alt="" class="w-full h-full" id="image-main" />
        </div>
        <div class="grid grid-cols-6 gap-2 mt-3">
          <div
            v-for="(image, index) in detailProduct.product_image"
            :key="index"
            @mouseenter="changeMainImage(image.url)"
            @mouseleave="resetMainImage"
          >
            <img
              :src="`/${image.url}`"
              class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
            />
          </div>
        </div>
      </div>
      <div>
        <h2 class="text-3xl font-bold capitalize mb-3 sm:text-sm md:text-md lg:text-4xl">
          {{ detailProduct.name }}
        </h2>
        <div class="flex items-center mb-4">
          <div class="flex text-sm text-primaryColor divide-x-2 divide-white-50">
            <div class="flex relative">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <span class="text-center text-sm mr-1 ml-2">
              <Link class="mx-3 text-dark hover:border-b-2 hover:border-primaryColor"
                >5.3</Link
              >
            </span>
            <div class="grid grid-cols-2 gap-2 text-center">
              <span class="mt-1/2 text-center text-sm text-dark capitalize">
                <Link
                  class="text-center ml-3 mr-1 hover:border-b-2 hover:border-primaryColor text-dark"
                  >5,3rb</Link
                >
                penilaian
              </span>
              <div class="text-center border-l-2 border-white-50">
                <span class="text-sm text-dark capitalize">26rb terjual</span>
              </div>
            </div>
          </div>
        </div>
        <div class="space-y-2">
          <p class="text-dark font-semibold space-x-2">
            <span>status: </span>
            <span class="text-primaryColor" v-if="statusProduct === 'In Stock'">{{
              statusProduct
            }}</span>
            <span class="text-pink" v-else>{{ statusProduct }}</span>
          </p>
          <p class="space-x-2">
            <span class="text-dark font-semibold">Category: </span>
            <span class="text-slate-300">{{ detailProduct.category.name }}</span>
          </p>
          <p class="space-x-2">
            <span class="text-dark font-semibold">SKU: </span>
            <span class="text-slate-300">BE45VGRT</span>
          </p>
        </div>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
          <p class="text-xl text-primaryColor font-semibold">Rp{{ detailProduct.price }}</p>
        </div>

        <p class="mt-4 text-slate-300">
          Explore keajaiban alam dengan produk kami yang terbuat dari bahan-bahan alami
          pilihan, menghadirkan kebaikan langsung dari tumbuhan ke dalam rutinitas harian
          Anda. Nikmati kelembutan dan keefektifan produk kami yang ramah lingkungan, sambil
          mendukung keberlanjutan alam.
        </p>

        <div class="mt-4">
          <h3 class="text-sm text-dark capitalize font-semibold">Quantity</h3>
          <div class="flex">
            <button
              v-if="count >= 1"
              @click="decrement"
              type="button"
              class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none text-slate-300 active:bg-white-50 transition border-1 border-white-50 rounded-bl-md rounded-tl-md"
            >
              -
            </button>
            <button
              class="h-8 w-8 text-base flex items-center justify-center text-slate-300 border-1 border-white-50 px-4"
              disabled
            >
              {{ count }}
            </button>
            <button
              v-if="count <= 10"
              @click="increment"
              type="button"
              class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none text-slate-300 active:bg-white-50 transition border-1 border-white-50 rounded-br-md rounded-tr-md"
            >
              +
            </button>
          </div>
        </div>

        <div class="mt-6 flex gap-3 pt-3 pb-5">
          <Link
            class="bg-hoverPrimary text-white px-8 py-2 font-medium rounded-md capitalize flex items-center gap-2 transition no-underline hover:bg-primaryColor"
          >
            <i class="fa-solid fa-bag-shopping"></i> Beli sekarang
          </Link>
          <Link
            class="border-1 border-dark text-dark px-8 py-2 font-medium rounded capitalize flex items-center gap-2 hover:bg-dark no-underline group hover:cursor-pointer transition duration-2000"
            @click="popupSuccess"
          >
            <i class="bx bx-shopping-bag text-primaryColor text-[20px] outline-none"></i>
            <span class="group-hover:text-white outline-none">Tambahkan ke keranjang</span>
          </Link>
        </div>
      </div>
    </div>
    <!-- ./product-detail -->

    <!-- shop -->
    
    <!-- SHOP END -->

    <!-- description -->
    <div class="container pb-16 font-inter mx-3">
      <h3
        class="border-b-2 border-white-50 font-roboto text-dark pb-3 font-semibold text-lg"
      >
        Spesifikasi produk
      </h3>
      <div class="w-full pt-6 text-md">
        <div v-html="detailProduct.deskripsi" class="text-dark"></div>

        <!-- component -->
        <div class="flex flex-col font-inter py-8">
          <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full">
              <div class="overflow-hidden">
                <table
                  class="w-24 h-24 table-auto text-dark text-sm mt-10 divide-y-2 divide-white-50"
                >
                  <thead class="text-slate-300">
                    <tr class="capitalize text-sm">
                      <th scope="col" class="py-2 px-4 font-semibold">nama produk</th>
                      <th scope="col" class="py-2 px-4 font-semibold">
                        harga &#40;Rp&#41;
                      </th>
                      <th scope="col" class="py-2 px-4 font-semibold">rating</th>
                      <th scope="col" class="py-2 px-4 font-semibold">ulasan</th>
                      <th scope="col" class="py-2 px-4 font-semibold">
                        kebijakan pengembalian
                      </th>
                      <th scope="col" class="py-2 px-4 font-semibold">satuan</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <tr class="capitalize border-b-2 border-white-50">
                      <td
                        class="px-6 py-4 whitespace-nowrap text-sm font-light text-gray-900"
                      >
                        {{ detailProduct.name }}
                      </td>
                      <td
                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                      >
                        {{ detailProduct.price }}
                      </td>
                      <td
                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                      >
                        5/10
                      </td>
                      <td
                        class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                      >
                        5500
                      </td>
                      <td
                        class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                      >
                        Garansi 1 tahun
                      </td>
                      <td
                        class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                      >
                        {{ detailProduct.satuan.symbol }}
                      </td>
                    </tr>
                  </tbody>
                </table>
                <Comment />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    <div class="container pb-16 font-inter">
      <h2 class="text-2xl font-medium text-dark capitalize mb-6">produk lainnya</h2>
      <!-- Show produk -->
      <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <Link
          :href="route('Shop.Product', { id: product.id })"
          class="bg-white shadow rounded-md overflow-hidden"
          v-for="product in visibleProducts"
          :key="product.id"
        >
          <div class="relative flex justify-center items-center group">
            <div class="w-full h-[190px] overflow-hidden bg-cover bg-center">
              <img
                :src="`/${product.image}`"
                :alt="product.id"
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
                {{ product.title }}
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
            <div class="text-xs ml-3 px-2 capitalize text-center flex text-slate-300 gap-1">
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
    <!-- ./related product -->
    <div class="col-span-3 flex justify-center items-center mt-4">
      <div class="flex items-center w-full gap-4">
        <div class="flex-grow border-t border-gray-300 opacity-35"></div>
        <button class="btn-outline-shop" @click="loadMoreProducts">
          Tampilkan lebih banyak
        </button>
        <div class="flex-grow border-t border-gray-300 opacity-35"></div>
      </div>
    </div>
  </template>

  <script setup>
  import { Link, usePage } from "@inertiajs/vue3";
  import Userstatus from "~/components/UserStatus.vue";
  import Comment from "./Comment.vue";
  import { computed, ref } from "vue";

  const props = defineProps({
    detailProduct: Object,
    status: Object,
    relatedProduct: Array,
  });

  const products = ref([]);

  const relatedProductsinfo = () => {
    products.value = props.relatedProduct.map((product) => ({
      id: product.id,
      image: product.first_image ? product.first_image.url : "",
      title: product.name,
      price: product.price,
      satuan: product.satuan.symbol,
      category: product.category.name,
      provinsi: product.seller.provinsi,
      kota: product.seller.kota,
    }));
  };

  // Call relatedProductsinfo to initialize products.value
  relatedProductsinfo();

  const visibleCount = ref(12);

  const visibleProducts = computed(() => {
    return products.value.slice(0, visibleCount.value);
  });

  const loadMoreProducts = () => {
    visibleCount.value += 4;
  };
  </script>

  <script>
  export default {
    data() {
      return {
        user1: "",
        user2: "",
        user3: "",
        product1: "",
        product2: "",
        product3: "",
        product4: "",
        product5: "",
        product6: "",
        product7: "",
        product8: "",
        product9: "",
        product10: "",
        product11: "",
        product12: "",
        count: 1,
        currentImage: "",
        mainImage: "",
        statusProduct: "In Stock",
      };
    },
    mounted() {
      this.user1 = "/assets/img/users/ajiw.png";
      this.user2 = "/assets/img/users/aji.jpg";
      this.user3 = "/assets/img/users/profil.JPG";
      this.product1 = "/assets/products/pohon1.jpg";
      this.product2 = "/assets/products/pohon2.jpg";
      this.product3 = "/assets/products/pohon3.jpg";
      this.product4 = "/assets/products/pohon4.jpg";
      this.product5 = "/assets/products/pohon5.jpg";
      this.product6 = "/assets/products/pohon6.jpg";
      this.product7 = "/assets/products/product7.jpg";
      this.product8 = "/assets/products/product8.jpg";
      this.product9 = "/assets/products/product9.jpg";
      this.product10 = "/assets/products/product10.jpg";
      this.product11 = "/assets/products/product11.jpg";
      this.product12 = "/assets/products/product12.jpg";

      if (this.detailProduct.product_image.length > 0) {
        const firstImageUrl = this.detailProduct.product_image[0].url.startsWith("/")
          ? this.detailProduct.product_image[0].url
          : `/${this.detailProduct.product_image[0].url}`;

        this.mainImage = firstImageUrl;
        this.currentImage = this.mainImage;

        console.log("Initial main image:", this.mainImage);
        console.log("Initial current image:", this.currentImage);
      }
    },
    methods: {
      increment() {
        if (this.count < 10) {
          this.count++;
        } else if (this.count <= 10) {
          Swal.fire({
            icon: "info",
            title: "Perhatian",
            text: "Anda telah mencapai jumlah minimal pembelian untuk produk ini",
            allowEnterKey: true,
            timer: 3000,
            iconColor: "#ffe066",
          });
        }
      },
      decrement() {
        if (this.count > 1) {
          this.count--;
        } else if (this.count >= 1) {
          Swal.fire({
            icon: "info",
            title: "Perhatian",
            text: "Anda telah mencapai jumlah maksimal pembelian untuk produk ini",
            allowEnterKey: true,
            timer: 3000,
            iconColor: "#ffe066",
          });
        }
      }, //Code selesai disini untuk membatasi nilai max dan min

      // Di bawah ini adalah kode untuk menampilkan gambar ketika di hover
      changeMainImage(imageSrc) {
        this.currentImage = imageSrc.startsWith("/") ? imageSrc : `/${imageSrc}`;
      },
      // Reset the main image to the original main image
      resetMainImage() {
        this.currentImage = this.mainImage;
      },

      popupSuccess() {
        Swal.fire({
          title: "Sukses",
          text: "Produk berhasil di tambahkan",
          icon: "success",
          timer: 3000,
          allowEnterKey: true,
          iconColor: "#3CB72B",
          heightAuto: true,
        });
      },

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
