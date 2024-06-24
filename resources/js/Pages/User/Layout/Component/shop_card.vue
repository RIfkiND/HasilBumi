<template>
    <body>
        <navbar />
        <div class="h-screen py-8 font-inter">
            <div class="container mx-auto px-4">
                <h1 class="text-2xl font-semibold mb-4">Keranjang</h1>
                <div class="flex md:flex-row gap-4 relative">
                    <div class="md:w-3/4">
                        <div class="w-full">
                            <div class="bg-white rounded-lg shadow-md p-6 mb-2">
                                <div class="flex items-center gap-4">
                                    <!-- <p class="text-left font-semibold">
                                        Product
                                    </p>
                                    <div class="flex gap-48">
                                        <p class="text-left font-semibold">
                                            Price
                                        </p>
                                        <p class="text-left font-semibold">
                                            Quantity
                                        </p>
                                        <p class="text-left font-semibold">
                                            Total
                                        </p>
                                    </div> -->
                                    <input
                                        type="checkbox"
                                        class="w-5 h-5 rounded"
                                    />
                                    <p class="mb-0 text-base font-semibold">
                                        Shop Bagi Bagi THR
                                    </p>
                                </div>
                            </div>
                            <div >
                                <div v-for="item in cartItems.items" :key="item.id"
                                    class="bg-white rounded-lg shadow-md px-6 mb-2"
                                >
                                    <div class="py-4 flex gap-4">
                                        <div>
                                            <input
                                                checked
                                                id="checked-checkbox"
                                                type="checkbox"
                                                value=""
                                                class="w-5 h-5 bg-primaryColor"
                                            />
                                        </div>
                                        <div
                                            class="flex items-start justify-between"
                                        >
                                            <div class="h-16 w-16 mr-4">
                                                <img
                                                    class="h-full"
                                                    :src="`/${item.product.first_image.url}`"
                                                  :alt="`Product image of ${item.product.name}`"
                                                />
                                            </div>
                                            <p class="font-medium text-lg">
                                                {{ item.product.name }}
                                            </p>
                                            <!-- <p>Rp250.000</p> -->
                                            <!-- <div class="">
                                        </div> -->
                                        </div>
                                    </div>
                                    <div class="py-4">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div class="ml-14">
                                                <p class="mb-0 font-bold">
                                                    Rp{{ item.product.price }}

                                                </p>
                                            </div>
                                            <div
                                                class="flex items-center gap-4"
                                            >
                                                <a
                                                    href="#"
                                                    class="inline-block"
                                                    style="color: red"
                                                >
                                                    <i
                                                        class="fa-solid fa-heart h-6 w-6"
                                                    ></i>
                                                </a>
                                                <a
                                                    href="#"
                                                    class="text-primaryColor inline-block"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Delete"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="w-7 h-7"
                                                        width="18"
                                                        height="18"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        fill="none"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    >
                                                        <path
                                                            stroke="none"
                                                            d="M0 0h24v24H0z"
                                                            fill="none"
                                                        />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path
                                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                                                        />
                                                        <path
                                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                                                        />
                                                    </svg>
                                                </a>

                                                <div>
                                                    <button
                                                        class="border rounded-md py-2 px-3 mr-2"
                                                    >
                                                        -
                                                    </button>
                                                    <span
                                                        class="text-center w-8"
                                                        >{{item.quantity}}</span
                                                    >
                                                    <button
                                                        class="border rounded-md py-2 px-3 ml-2"
                                                    >
                                                        +
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- More product rows -->
                            </div>

                        </div>
                    </div>
                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6 sticky">
                            <h2 class="text-lg font-semibold mb-4">
                                Pembelian
                            </h2>
                            
                            <div class="flex justify-between mb-2">
                                <span>Total</span>
                                <span>Rp {{ cartItems.total }}</span>
                            </div>
                            <button
                                class="bg-primaryColor text-white py-2 px-4 rounded-lg mt-4 w-full"
                            >
                                Beli (3)
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </body>
</template>

<script setup>
import Footer from "./Footer.vue";
import Header from "./Header.vue";
import navbar from "./navbar.vue";
import { ref } from "vue";
import {usePage} from "@inertiajs/vue3"
const page = usePage();
const cartItems = ref(page.props.cartItems);
let count = ref(0);
</script>
