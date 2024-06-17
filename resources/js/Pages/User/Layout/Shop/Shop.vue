<template>
    <Header />
    <!-- shop wrapper -->
    <div
        class="container mx-auto w-full py-20 px-5 flex items-center justify-center bg-cyan-800"
    >
        <!-- Slider wrapper -->
        <div class="w-full relative">
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
                class="w-10 h-10 rounded-full bg-white hover:shadow-lg active:scale-90 transition absolute left-2 top-1/2 text-gray-700 flex items-center justify-center opacity-50 hover:opacity-100"
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
                class="w-10 h-10 rounded-full bg-white hover:shadow-lg active:scale-90 transition absolute right-2 top-1/2 text-gray-700 flex items-center justify-center opacity-50 hover:opacity-100"
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
        class="container grid md:grid-cols-4 grid-cols- gap-6 pt-4 pb-16 items-start font-inter"
    >
        <!-- ./sidebar -->
        <div
            class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hidden hidden md:block font-inter"
        >
            <!-- Categories -->
            <div class="divide-y-2 divide-white-50 space-y-7">
                <!-- Kategori Barang -->
                <div>
                    <h3
                        class="text-xl text-dark mb-3 capitalize pt-3 font-semibold"
                    >
                        Categories
                    </h3>
                    <div class="space-y-2"  v-for="category in Categories"
                    :key="category.id"
                    :value="category.id">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-1"
                                id="cat-1"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-1" class="text-slate-300 ml-3"
                                >{{ category.name }}</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;15&rpar;
                            </div>
                        </div>
                    
                    </div>
                </div>

                <!-- Rating -->
                <div>
                    <h3
                        class="text-xl text-dark mb-3 capitalize pt-3 font-semibold"
                    >
                        Rating
                    </h3>
                    <div class="flex flex-col gap-2">
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="cat-4"
                                    id="cat-4"
                                    class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                                />
                                <div
                                    class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                                >
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-1"
                                id="cat-1"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <div
                                class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                            >
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
                                    class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                                />
                                <div
                                    class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                                >
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="cat-4"
                                    id="cat-4"
                                    class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                                />
                                <div
                                    class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                                >
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="cat-4"
                                    id="cat-4"
                                    class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                                />
                                <div
                                    class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                                >
                                    <span
                                        ><i class="fa-solid fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="cat-4"
                                    id="cat-4"
                                    class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                                />
                                <div
                                    class="flex gap-1 text-base text-[#F3CA52] ml-auto"
                                >
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                    <span
                                        ><i class="fa-regular fa-star"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ratin End -->

                <!-- Brands -->
                <!-- <div class="pt-4">
                    <h3 class="text-xl text-dark mb-3 capitalize font-semibold">
                        Brands
                    </h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-1"
                                id="brand-1"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="brand-1" class="text-slate-300 ml-3"
                                >Cooking Color</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;15&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-2"
                                id="brand-2"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="brand-2" class="text-slate-300 ml-3"
                                >Magniflex</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;9&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-3"
                                id="brand-3"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="brand-3" class="text-slate-300 ml-3"
                                >Ashley</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;21&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-4"
                                id="brand-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="brand-4" class="text-slate-300 ml-3"
                                >M & D</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;10&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="brand-5"
                                id="brand-5"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="brand-5" class="text-slate-300 ml-3"
                                >Olympic</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;5&rpar;
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Price -->
                <div class="pt-4">
                    <h3 class="text-xl text-dark mb-3 capitalize font-semibold">
                        Harga
                    </h3>
                    <div class="mt-4 flex items-center">
                        <input
                            type="text"
                            name="min"
                            id="min"
                            class="w-full border-2 border-white-50 focus:border-slate-200 rounded px-3 py-1 text-slate-300 shadow-sm bg-white outline-none text-center"
                            placeholder="Rp0"
                        />
                        <span class="mx-3 text-dark">-</span>
                        <input
                            type="text"
                            name="max"
                            id="max"
                            class="w-full border-2 border-white-50 focus:border-slate-200 rounded px-3 py-1 text-slate-300 shadow-sm bg-white outline-none text-center"
                            placeholder="Rp0"
                        />
                    </div>
                </div>
                <!-- Price End -->

                <!-- Satuan -->
                <div class="pt-4">
                    <h3 class="text-xl text-dark mb-3 capitalize font-medium">
                        Satuan
                    </h3>
                    <div class="flex flex-row flex-wrap items-center gap-2">
                        <div v-for="satuan in Satuans" :key="satuan.id" :value="satuan.id" class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                :id="'size-' + satuan.id"
                                class="hidden"
                                :value="satuan.id"
                            />
                            <label
                                :for="'size-' + satuan.id"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                            >
                                {{ satuan.symbol }}
                            </label>
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="mt-4 w-full py-2 bg-hoverPrimary hover:cursor-pointer hover:bg-teal-dark rounded-md block px-4 text-white font-medium capitalize text-md"
                    >
                        <i class="fa-solid fa-magnifying-glass text-white px-1"></i>
                        cari sekarang
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
                    class="w-44 text-sm text-dark bg-white py-3 px-4 border-white-50 border-1 outline-none shadow-sm rounded capitalize"
                >
                    <option>terbaru</option>
                    <option>terlaris</option>
                    <option>termurah</option>
                    <option>rekomendasi</option>
                </select>
            </div>
            <!-- Radio End -->

            <!-- List Product -->
            <Product :dataProducts="products"/>
            <!-- List Product -->
            
        </div>

        <!-- ./products -->
    </div>
    <!-- ./shop wrapper -->

    <Footer />
</template>

<script setup>
import Product from "./Components/Product.vue"
import Header from "../Component/Header.vue";
import Footer from "../Component/Footer.vue";
import { Link,usePage } from "@inertiajs/vue3";
import { ref, computed  } from "vue";

defineProps ({
    products : Object
})

const Categories = usePage().props.Categories
const Satuans   = usePage().props.Satuans;

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
