<template>
  <body>
    <navbar />
    <div class="h-screen py-8 font-inter">
      <div class="container px-4 mx-auto">
        <div class="mx-auto md:w-3/4">
          <h1 class="mb-4 text-2xl font-semibold">Keranjang</h1>
        </div>
        <div
          class="relative grid justify-center gap-4"
          style="grid-template-columns: repeat(3, 20%)"
        >
          <div class="col-span-3 lg:col-span-2">
            <div class="w-full">
              <div class="p-6 mb-2 bg-white rounded-lg shadow-md">
                <div class="flex items-center gap-4">
                  <input
                    type="checkbox"
                    class="w-5 h-5 rounded cursor-pointer"
                    v-model="selectAll"
                    @change="toggleAllCheckboxes"
                  />
                  <p class="mb-0 text-base font-semibold">Pilih Semua</p>
                </div>
              </div>
              <div>
                <div
                  v-for="item in cartItems.items"
                  :key="item.id"
                  class="px-6 mb-2 bg-white rounded-lg shadow-md"
                >
                  <div class="pt-2 pl-12">
                    <h3 class="text-lg font-semibold">Nama Toko</h3>
                  </div>
                  <div class="flex gap-4 pt-3">
                    <div>
                      <input
                        id="checked-checkbox"
                        type="checkbox"
                        value=""
                        class="w-5 h-5 rounded cursor-pointer"
                        v-model="item.checked"
                      />
                    </div>
                    <div class="flex items-start justify-between gap-6">
                      <div class="h-20 w-30">
                        <img
                          class="h-full"
                          :src="`/${item.product.first_image.url}`"
                          :alt="`Product image of ${item.product.name}`"
                        />
                      </div>
                      <p class="text-lg font-medium">
                        {{ item.product.name }}
                      </p>
                    </div>
                  </div>
                  <div class="py-2">
                    <div class="flex items-center justify-between">
                      <div class="ml-14">
                        <p class="mb-0 font-bold">Rp{{ item.product.price }}</p>
                      </div>
                      <div class="flex items-center gap-4">
                        <a
                          href="#"
                          class="inline-block cursor-pointer"
                          :class="{
                            'text-red-500': isLiked,
                          }"
                          @click.prevent="toggleLike"
                          data-bs-toggle="tooltip"
                        >
                          <transition name="fade" mode="out-in">
                            <span v-if="isLiked" key="liked">
                              <i class="w-6 h-6 text-red-500 fa-solid fa-heart"></i>
                            </span>
                            <span v-else key="not-liked">
                              <i class="w-6 h-6 text-red-500 fa-regular fa-heart"></i>
                            </span>
                          </transition>
                        </a>
                        <a
                          class="inline-block cursor-pointer text-primaryColor"
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
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                          </svg>
                        </a>

                        <div>
                          <button
                            @click="decrement(item)"
                            class="px-3 py-1 border rounded-md mr-2"
                          >
                            -
                          </button>
                          <span class="px-3 py-1 border">{{ item.quantity }}</span>
                          <button
                            @click="increment(item)"
                            class="px-3 py-1 border rounded-md ml-2"
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
            <div class="sticky p-6 bg-white rounded-lg shadow-md">
              <h2 class="mb-4 text-lg font-semibold">Pembelian</h2>

              <div class="flex justify-between mb-2">
                <span>Total</span>
                <span>Rp {{ cartItems.total }}</span>
              </div>
              <button class="w-full px-4 py-2 mt-4 text-white rounded-lg bg-primaryColor">
                Beli ({{ cartItems.count }})
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
import { usePage, router } from "@inertiajs/vue3";
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

const increment = (item) => {
  if (item.quantity < 100) {
    item.quantity++;
    updateQuantity(item);
  }
};

const decrement = (item) => {
  if (item.quantity > 1) {
    item.quantity--;
    updateQuantity(item);
  }
};

const updateQuantity = (item) => {
  router.put(
    route("cart.update", item.product_id),
    {
      quantity: item.quantity,
    },
    {
      preserveScroll: true,
      onSuccess: () => {
        console.log("Quantity updated successfully");
      },
      onError: () => {
        console.log("Failed to update quantity");
      },
    }
  );
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
