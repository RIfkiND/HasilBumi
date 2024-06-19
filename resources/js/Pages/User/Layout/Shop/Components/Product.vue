<template>
      <!-- List Product -->
      <div
      class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
  >
      <Link
         :href="route('Shop.Product', { id: product.id })"
          class="bg-white shadow inline-block rounded-md overflow-hidden hover:cursor-pointer hover:brightness-95 group-hover:brightness-50 transition"
          v-for="(product, index) in visibleProducts"
          :key="index"
      >
          <div
              class="relative flex justify-center items-center group"
          >
              <div class="w-full h-[160px] overflow-hidden">
                  <img
                      :src="`/${product.image}`"
                      :alt="`product ${index + 1}`"
                      class="w-full h-full bg-cover bg-center"
                  />
              </div>
              <div class="absolute gap-2 hidden group-hover:flex">
                  <Link
                      href="#"
                      class="text-white text-lg cursor-pointer w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                      title="view product"
                  >
                      <i class="fa-solid fa-magnifying-glass"></i>
                  </Link>
                  <Link
                      href="#"
                      class="text-white text-lg cursor-pointer w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                      title="add to wishlist"
                  >
                      <i class="fa-solid fa-heart"></i>
                  </Link>
              </div>
          </div>
          <div class="pt-3 pb-3 px-3 cursor-pointer">
              <Link class="no-underline pt-4">
                  <h4
                      class="capitalize font-semibold text-xl mb-2 text-dark transition"
                  >
                      {{ product.title }}
                  </h4>
              </Link>
              <div
                  class="capitalize text-[10px] flex gap-2 text-center"
              >
                  <span
                      class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                  >
                     {{ product.category }}
                  </span>
                  <span
                      class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                  >
                      {{ product.satuan }}
                  </span>
              </div>
              <div
                  class="flex items-baseline space-x-2 capitalize mb-2 mt-2"
              >
                  <span
                      class="text-md text-primaryColor font-semibold"
                  >
                      {{ product.price }}
                  </span>
                  <span class="text-sm text-slate-200 line-through">
                      {{ product.oldPrice }}
                  </span>
              </div>
              <div
                  class="flex items-center divide-white-50 space-x-2 divide-x-2"
              >
                  <div class="flex gap-1 text-xs text-[#F3CA52]">
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-slate-300 ml-3 px-2">
                      1,5rb Terjual
                  </div>
              </div>
          </div>
          <div
              class="flex items-center divide-white-50 space-x-2 divide-x-2 pb-3"
          >
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
  <!-- List Product -->
  <div class="col-span-3 flex justify-center items-center mt-4">
      <div class="flex items-center w-full gap-4">
          <div
              class="flex-grow border-t border-gray-300 opacity-35"
          ></div>
          <button class="btn-outline-shop" @click="loadMoreProducts">
              Learn More
          </button>
          <div
              class="flex-grow border-t border-gray-300 opacity-35"
          ></div>
      </div>
  </div>
</template>


<script setup>
import {  ref, computed, watch  } from "vue";
import { Link } from '@inertiajs/vue3';

const props = defineProps ({
    dataProducts :  Array
})



const products = ref([]);

const updateProducts = () => {
    products.value = props.dataProducts.map(product => ({
        id: product.id,
        image: product.first_image ? product.first_image.url : '',
        title: product.name,
        price: product.price,
        satuan: product.satuan.symbol,
        category: product.category.name,
        provinsi: product.seller.provinsi,
        kota : product.seller.kota
    }));
};

updateProducts();


watch(() => props.dataProducts, updateProducts);



const visibleCount = ref(12);

const visibleProducts = computed(() => {
    return products.value.slice(0, visibleCount.value);
});

const loadMoreProducts = () => {
    visibleCount.value += 4; //
};

</script>