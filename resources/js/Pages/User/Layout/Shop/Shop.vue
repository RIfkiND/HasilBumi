<template>
    <Header />
    <!-- shop wrapper -->
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
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-1"
                                id="cat-1"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-1" class="text-slate-300 ml-3"
                                >Meat</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;15&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-2"
                                id="cat-2"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-2" class="text-slate-300 ml-3"
                                >Vegetable</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;9&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-3"
                                id="cat-3"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-3" class="text-slate-300 ml-3"
                                >Fruits</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;21&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Forest</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;10&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Industri</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;20&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Grain</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;3&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Ship</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;9&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Processed</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;12&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Spice</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;90&rpar;
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name="cat-4"
                                id="cat-4"
                                class="accent-primaryColor rounded-sm cursor-pointer focus:ring-0"
                            />
                            <label for="cat-4" class="text-slate-300 ml-3"
                                >Textile</label
                            >
                            <div class="ml-auto text-slate-300 text-sm">
                                &lpar;100&rpar;
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
                    <div class="flex items-center gap-2 md:flex-wrap">
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-xs"
                                class="hidden"
                            />
                            <label
                                for="size-xs"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >mg
                            </label>
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-sm"
                                class="hidden"
                            />
                            <label
                                for="size-sm"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >cg</label
                            >
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-m"
                                class="hidden"
                            />
                            <label
                                for="size-m"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >dg</label
                            >
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-xl"
                                class="hidden"
                            />
                            <label
                                for="size-xl"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >gr</label
                            >
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-xl"
                                class="hidden"
                            />
                            <label
                                for="size-xl"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >dag</label
                            >
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-xl"
                                class="hidden"
                            />
                            <label
                                for="size-xl"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >hg</label
                            >
                        </div>
                        <div class="size-selector">
                            <input
                                type="radio"
                                name="size"
                                id="size-xl"
                                class="hidden"
                            />
                            <label
                                for="size-xl"
                                class="text-xs border-2 border-white-50 rounded-sm flex items-center justify-center cursor-pointer shadow-sm text-slate-200 capitalize p-1 active:bg-primaryColor active:text-white"
                                >kg</label
                            >
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="mt-4 w-full py-2 bg-hoverPrimary hover:cursor-pointer hover:bg-teal-dark rounded-md block px-4 text-white font-medium capitalize text-md"
                    >
                        <i
                            class="fa-solid fa-magnifying-glass text-white px-1"
                        ></i>
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
            <div
                class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            >
                <a
                    :href="route('Shop.Product')"
                    class="bg-white shadow inline-block rounded-md overflow-hidden hover:cursor-pointer hover:brightness-95 group-hover:brightness-50 transition"
                    v-for="index in 12"
                    :key="index"
                >
                    <div
                        class="relative flex justify-center items-center group"
                    >
                        <div class="w-full h-[160px] overflow-hidden">
                            <img
                                :src="product1"
                                alt="product 1"
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
                        <Link class="no-underline pt-5">
                            <h4
                                class="capitalize font-semibold text-xl mb-1 text-dark transition"
                            >
                                pohon jati asli | untuk bahan material
                            </h4>
                        </Link>
                        <div
                            class="capitalize text-[10px] flex gap-2 text-center"
                        >
                            <span
                                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                                >bebas pengembalian</span
                            >
                            <span
                                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                                >cicilan</span
                            >
                        </div>
                        <div
                            class="flex items-baseline space-x-2 capitalize mb-2 mt-2"
                        >
                            <span
                                class="text-md text-primaryColor font-semibold"
                                >Rp650.000</span
                            >
                            <span class="text-sm text-slate-200 line-through"
                                >rp.1.500,000</span
                            >
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
                            Bandung
                        </div>
                    </div>
                </a>
            </div>
            <!-- List Product -->
            <div class="col-span-3 flex justify-center items-center mt-4">
                <button class="btn-outline-shop">Learn More</button>
            </div>
        </div>

        <!-- ./products -->
    </div>
    <!-- ./shop wrapper -->

    <Footer />
</template>

<script setup>
import Header from "../Component/Header.vue";
import Footer from "../Component/Footer.vue";
const product1 = "/assets/products/product1.jpg";
const product2 = "/assets/products/product2.jpg";
const product3 = "/assets/products/product3.jpg";
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
