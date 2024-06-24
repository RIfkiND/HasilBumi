<template>
    <Navbar />
    <body>
   
        <!-- wrapper -->
        <div 
            class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16 font-inter"
        >
            <!-- wishlist -->
            <div v-for="item in Whislist" class="col-span-12 space-y-4"
            :key="item" >
                <div
                    class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded"
                >
                    <div class="w-28">
                        <img
                        :src="`/${item.product.first_image.url}`"
                           :alt="`product ${item + 1}`"
                            class="w-full"
                        />
                    </div>
                    <div class="w-1/3">
                        <h2
                            class="text-textColor text-xl font-medium uppercase"
                        >
                            {{ item.product.name }}
                        </h2>
                        <p class="text-textColor text-sm">
                            Availability:
                            <span v-if="!item.product == 0" class="text-hoverPrimary font-semibold"
                                >In Stock</span
                            >
                            <span v-else class="text-hoverPrimary font-semibold"
                            >Out ofStock</span
                        >
                        </p>
                    </div>
                    <div class="text-lg font-semibold">Rp{{item.product.price}}</div>
                    <a href="#" class="btn-wislisht">add to cart</a>

                    <div
                        class="text-gray-600 cursor-pointer hover:text-primary"
                    >
                        <a
                          @click.prevent="removeFromWishlist(item.id)"
                       
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
                    </div>
                </div>
            </div>
            <!-- ./wishlist -->
        </div>
        <!-- ./wrapper -->
    </body>

    <Footer />
</template>

<script setup>
import Footer from "./Footer.vue";
import Navbar from "./navbar.vue";
import { useForm } from '@inertiajs/vue3'
defineProps ({
    Whislist:Array
})


const form = useForm({
  product_id: null,
});

const removeFromWishlist = async (id) => {
  
  try {
    await form.delete(route('wishlist.destroy', id), {
      onSuccess: (page) => {
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
  }
};

</script>

<style></style>
