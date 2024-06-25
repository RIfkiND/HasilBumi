<template>
    <body>
        <navbar />
        <div class="h-screen py-8 font-inter">
            <div class="container mx-auto px-4">
                <div class="md:w-3/4 mx-auto">
                    <h1 class="text-2xl font-semibold mb-4">Keranjang</h1>
                </div>
                <div
                    class="grid gap-4 relative justify-center"
                    style="grid-template-columns: repeat(3, 20%)"
                >
                    <div class="col-span-3 lg:col-span-2">
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
                                        class="w-5 h-5 rounded cursor-pointer"
                                        v-model="selectAll"
                                        @change="toggleAllCheckboxes"
                                    />
                                    <p class="mb-0 text-base font-semibold">
                                        Pilih Semua
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div
                                    v-for="item in cartItems.items"
                                    :key="item.id"
                                    class="bg-white rounded-lg shadow-md px-6 mb-2"
                                >
                                    <div class="pl-12 pt-2">
                                        <h3 class="font-semibold text-lg">
                                            Nama Toko
                                        </h3>
                                    </div>
                                    <div class="pt-3 flex gap-4">
                                        <div>
                                            <input
                                                id="checked-checkbox"
                                                type="checkbox"
                                                value=""
                                                class="w-5 h-5 rounded cursor-pointer"
                                                v-model="item.checked"
                                            />
                                        </div>
                                        <div
                                            class="flex items-start justify-between gap-6"
                                        >
                                            <div class="h-20 w-30">
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
                                    <div class="py-2">
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
                                                    class="inline-block cursor-pointer"
                                                    :class="{
                                                        'text-red-500': isLiked,
                                                    }"
                                                    @click.prevent="toggleLike"
                                                    data-bs-toggle="tooltip"
                                                >
                                                    <transition
                                                        name="fade"
                                                        mode="out-in"
                                                    >
                                                        <span
                                                            v-if="isLiked"
                                                            key="liked"
                                                        >
                                                            <i
                                                                class="fa-solid fa-heart h-6 w-6 text-red-500"
                                                            ></i>
                                                        </span>
                                                        <span
                                                            v-else
                                                            key="not-liked"
                                                        >
                                                            <i
                                                                class="fa-regular fa-heart h-6 w-6 text-red-500"
                                                            ></i>
                                                        </span>
                                                    </transition>
                                                </a>
                                                <a
                                                    class="text-primaryColor inline-block cursor-pointer"
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
                                                        v-if="count >= 1"
                                                        @click="decrement"
                                                    >
                                                        -
                                                    </button>
                                                    <span
                                                        class="text-center w-8"
                                                    >
                                                        <!-- {{
                                                            item.quantity
                                                        }} -->
                                                        {{ count }}
                                                    </span>
                                                    <button
                                                        v-if="count <= 10"
                                                        @click="increment"
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
                    <div class="col-span-3 lg:col-span-1">
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
import { usePage } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const page = usePage();
const cartItems = ref(page.props.cartItems);
const isLiked = ref(false);

const toggleLike = () => {
    isLiked.value = !isLiked.value;
};
const selectAll = ref(false);

const toggleAllCheckboxes = () => {
    cartItems.value.items.forEach((item) => {
        item.checked = selectAll.value;
    });
};

const count = ref(1);

const increment = () => {
    if (count.value < 100) {
        count.value++;
    }
};

const decrement = () => {
    if (count.value > 1) {
        count.value--;
    }
};
</script>

<style>
.text-red-500 {
    color: red;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s, transform 0.3s;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
    transform: scale(0.8);
}
</style>
