<template>
  <Header @search="searching" />
  <!-- shop wrapper -->
  <div
    class="container flex items-center justify-center w-full px-5 py-20 mx-auto bg-cyan-800"
  >
    <!-- Slider wrapper -->
    <div class="relative w-full">
      <!-- Single Slider -->
      <div
        v-show="sliderIndex === indexSlider"
        v-for="(product, indexSlider) in sliders"
        :key="indexSlider"
      >
        <img
          :src="product.image"
          alt="Meat"
          class="w-full h-[400px] object-cover object-center rounded-md shadow"
        />
      </div>
      <!-- Single Slider end -->

      <!-- Arrows prev -->
      <button
        @click="prevSlider"
        class="absolute flex items-center justify-center w-10 h-10 text-gray-700 transition bg-white rounded-full opacity-50 hover:shadow-lg active:scale-90 left-2 top-1/2 hover:opacity-100"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5"
          />
        </svg>
      </button>
      <!-- Arrows prev end -->

      <!-- Arrows next -->
      <button
        @click="nextSlider"
        class="absolute flex items-center justify-center w-10 h-10 text-gray-700 transition bg-white rounded-full opacity-50 hover:shadow-lg active:scale-90 right-2 top-1/2 hover:opacity-100"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5"
          />
        </svg>
      </button>
      <!-- Arrows next end -->
    </div>
  </div>
  <div
    class="container grid items-start gap-6 pt-4 pb-16 md:grid-cols-4 grid-cols- font-inter"
  >
    <!-- ./sidebar -->
    <div
      class="hidden col-span-1 px-4 pb-6 overflow-hidden bg-white rounded shadow md:block font-inter"
    >
      <!-- Categories -->
      <div class="divide-y-2 divide-white-50 space-y-7">
        <!-- Kategori Barang -->
        <div>
          <h3 class="pt-3 mb-3 text-xl font-semibold capitalize text-dark">Categories</h3>
          <div
            class="space-y-2"
            v-for="category in Categories"
            :key="category.id"
            :value="category.id"
          >
            <div class="flex items-center">
              <input
                type="checkbox"
                :id="'category-' + category.id"
                v-model="selectedCategoriesRef"
                :value="category.id"
                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
              />
              <label :for="'category-' + category.id" class="ml-3 text-slate-300">
                {{ category.name }}
              </label>
              <div class="ml-auto text-sm text-slate-300">
                &lpar;{{ category.products_count }}&rpar;
              </div>
            </div>
          </div>
        </div>

        <!-- Rating -->
        <div>
          <h3 class="pt-3 mb-3 text-xl font-semibold capitalize text-dark">Rating</h3>
          <div class="flex flex-col gap-2">
            <div class="space-y-2">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  name="cat-4"
                  id="cat-4"
                  class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                />
                <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="flex items-center">
              <input
                type="checkbox"
                name="cat-1"
                id="cat-1"
                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
              />
              <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-regular fa-star"></i></span>
              </div>
            </div>
            <div class="space-y-2">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  name="cat-4"
                  id="cat-4"
                  class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                />
                <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="space-y-2">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  name="cat-4"
                  id="cat-4"
                  class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                />
                <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="space-y-2">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  name="cat-4"
                  id="cat-4"
                  class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                />
                <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                  <span><i class="fa-solid fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                </div>
              </div>
            </div>
            <div class="space-y-2">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  name="cat-4"
                  id="cat-4"
                  class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                />
                <div class="flex gap-1 text-base text-[#F3CA52] ml-auto">
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                  <span><i class="fa-regular fa-star"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Ratin End -->

        <!-- Brands -->
        <!-- <div class="pt-4">
                    <h3 class="mb-3 text-xl font-semibold capitalize text-dark">
                        Brands
                    </h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-1"
                                id="brand-1"
                                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                            />
                            <label for="brand-1" class="ml-3 text-slate-300"
                                >Cooking Color</label
                            >
                            <div class="ml-auto text-sm text-slate-300">
                                &lpar;15&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-2"
                                id="brand-2"
                                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                            />
                            <label for="brand-2" class="ml-3 text-slate-300"
                                >Magniflex</label
                            >
                            <div class="ml-auto text-sm text-slate-300">
                                &lpar;9&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-3"
                                id="brand-3"
                                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                            />
                            <label for="brand-3" class="ml-3 text-slate-300"
                                >Ashley</label
                            >
                            <div class="ml-auto text-sm text-slate-300">
                                &lpar;21&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-4"
                                id="brand-4"
                                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                            />
                            <label for="brand-4" class="ml-3 text-slate-300"
                                >M & D</label
                            >
                            <div class="ml-auto text-sm text-slate-300">
                                &lpar;10&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-5"
                                id="brand-5"
                                class="rounded-sm cursor-pointer accent-primaryColor focus:ring-0"
                            />
                            <label for="brand-5" class="ml-3 text-slate-300"
                                >Olympic</label
                            >
                            <div class="ml-auto text-sm text-slate-300">
                                &lpar;5&rpar;
                            </div>
                        </div>
                    </div>
                </div> -->

        <!-- Price -->
        <div class="pt-4">
          <h3 class="mb-3 text-xl font-semibold capitalize text-dark">Harga</h3>
          <div class="flex items-center mt-4">
            <input
              type="text"
              name="min"
              id="min"
              v-model="filterPrices.prices[0]"
              class="w-full px-3 py-1 text-center bg-white border-2 rounded shadow-sm outline-none border-white-50 focus:border-slate-200 text-slate-300"
              placeholder="Rp0"
            />
            <span class="mx-3 text-dark">-</span>
            <input
              type="text"
              name="max"
              v-model="filterPrices.prices[1]"
              id="max"
              class="w-full px-3 py-1 text-center bg-white border-2 rounded shadow-sm outline-none border-white-50 focus:border-slate-200 text-slate-300"
              placeholder="Rp0"
            />
          </div>
          <button
            @click="priceFilter()"
            class="block w-full px-4 py-2 mt-4 font-medium text-white capitalize rounded-md bg-hoverPrimary hover:cursor-pointer hover:bg-teal-dark text-md"
          >
            <i class="bx bx-money"></i>
            Filter
          </button>
        </div>
        <!-- Price End -->

        <!-- Satuan -->
        <div class="pt-4">
          <h3 class="mb-3 text-xl font-medium capitalize text-dark">Satuan</h3>
          <div class="flex flex-row flex-wrap items-center gap-2">
            <div
              v-for="satuan in Satuans"
              :key="satuan.id"
              :value="satuan.id"
              class="size-selector"
            >
              <input
                type="radio"
                name="size"
                :id="'satuan-' + satuan.id"
                v-model="selectedSatuan"
                class="sr-only"
                :value="satuan.id"
              />
              <label
                :for="'satuan-' + satuan.id"
                class="flex items-center justify-center p-1 text-xs capitalize border-2 rounded-sm shadow-sm cursor-pointer border-white-50 text-slate-200 active:bg-primaryColor active:text-white"
                @click="selectSatuan(satuan.id)"
              >
                {{ satuan.symbol }}
              </label>
            </div>
          </div>
          <button
          @click="reset"
            class="block w-full px-4 py-2 mt-4 font-medium text-white capitalize rounded-md bg-hoverPrimary hover:cursor-pointer hover:bg-teal-dark text-md"
          >
            <i class="px-1 text-white fa-solid fa-magnifying-glass"></i>
            Reset
          </button>
        </div>

        <!-- Satuan End -->
      </div>
    </div>

    <!-- products -->
    <div class="col-span-3">
      <!-- Radio filter -->
      <div class="flex items-center mb-4">
        <select
          name="sort"
          id="sort"
          class="px-4 py-3 text-sm capitalize bg-white rounded shadow-sm outline-none w-44 text-dark border-white-50 border-1"
        >
          <option>terbaru</option>
          <option>terlaris</option>
          <option>termurah</option>
          <option>rekomendasi</option>
        </select>
      </div>
      <!-- Radio End -->

      <!-- List Product -->
      <Product :dataProducts="products" />
      <!-- List Product -->
    </div>

    <!-- ./products -->
  </div>
  <!-- ./shop wrapper -->

  <Footer />
</template>

<script setup>
import Product from "./Components/Product.vue";
import Header from "../Component/Header.vue";
import Footer from "../Component/Footer.vue";
import { Link, usePage, router, useForm } from "@inertiajs/vue3";
import { ref, computed, watch } from "vue";

const props = defineProps({
  products: Array,
  Categories: Array,
  selectedCategories: Array,
  selectedPrices: Object,
  search: Object,
});


const reset =() =>{
    router.visit(route('Shop.main'))
}
const searching = (key) => {
  router.get(route("Shop.search"), { search: key }, { preserveState: true });
};
const { Satuans, selectedSatuans } = usePage().props;

const selectedCategoriesRef = ref(props.selectedCategories || []);

const selectedSatuan = ref(selectedSatuans.length > 0 ? selectedSatuans[0] : null);

watch(selectedSatuan, (newSatuan) => {
  updateFilteredProducts();
});

watch(selectedCategoriesRef, (newCategories, oldCategories) => {
  if (JSON.stringify(newCategories) !== JSON.stringify(oldCategories)) {
    updateFilteredProducts();
  }
});

const filterPrices = useForm({
  prices: [props.selectedPrices.from, props.selectedPrices.to],
});

const priceFilter = async () => {
  await filterPrices
    .transform((data) => ({
      ...data,
      prices: {
        from: filterPrices.prices[0],
        to: filterPrices.prices[1],
      },
    }))
    .get(route("Shop.main"), {
      preserveState: true,
      replace: true,
    });
};

// const updateFilteredSatuanProducts = async () => {
//     try {
//         await router.get(route('Shop.main'), {
//             satuans: [selectedSatuan.value],
//         }, {
//             preserveState: true,
//             replace: true,
//         });
//     } catch (error) {
//         console.error("Error updating filtered products:", error);
//     }
// };

const updateFilteredProducts = async () => {
  try {
    const params = {
      categories: selectedCategoriesRef.value,
    };

    if (selectedSatuan.value) {
      params.satuans = [selectedSatuan.value];
    }

    await router.get(route("Shop.main"), params, {
      preserveState: true,
      replace: true,
    });
  } catch (error) {
    console.error("Error updating filtered products:", error);
  }
};

const sliders = ref([
  {
    image: product1,
  },
  {
    image: product2,
  },
  {
    image: product3,
  },
]);

const sliderIndex = ref(0);

function prevSlider() {
  if (sliderIndex.value) {
    sliderIndex.value--;
  } else {
    sliderIndex.value = sliders.value.length - 1;
  }
}

function nextSlider() {
  if (sliderIndex.value < sliders.value.length - 1) {
    sliderIndex.value++;
  } else {
    sliderIndex.value = 0;
  }
}

const product1 = "/assets/products/pohon1.jpg";
const product2 = "/assets/products/pohon2.jpg";
const product3 = "/assets/products/pohon3.jpg";
const product4 = "/assets/products/product4.jpg";
const product5 = "/assets/products/product5.jpg";
const product6 = "/assets/products/product6.jpg";
const product7 = "/assets/products/product7.jpg";
const product8 = "/assets/products/product8.jpg";
const product9 = "/assets/products/product9.jpg";
const product10 = "/assets/products/product10.jpg";
const product11 = "/assets/products/product11.jpg";
const product12 = "/assets/products/product12.jpg";
</script>
