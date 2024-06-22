<script setup>
import { router, usePage } from "@inertiajs/vue3";
import { ref, defineProps } from "vue";

const products = ref([
  // your array of products
  {
    id: 1,
    name: "Product 1",
    quantity: 10,
    price: 5.99,
    inStock: 0,
    published: 0,
  },
]);

// defineProps({
//     products: Array,
// });

const dropdownOpen = ref(false);

// Props to receive product and index from the parent component
const showAddProductForm = ref(false);
const productImage = ref("");
const productName = ref("");
const category = ref("");
const quantity = ref("");
const price = ref("");
const stock = ref("");
const publish = ref(false);

// Props untuk menerima produk dan indeks dari komponen induk
const props = defineProps({
  product: Object,
  index: Number,
});

// Edit
const deleteProduct = (product, index) => {
  Swal.fire({
    title: "Are you Sure",
    text: "This actions cannot undo!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "no",
    confirmButtonText: "yes, delete!",
  }).then((result) => {
    if (result.isConfirmed) {
      try {
        router.delete("/products/" + product.id, {
          onSuccess: (page) => {
            this.delete(product, index);
            Swal.fire({
              toast: true,
              icon: "success",
              position: "top-end",
              showConfirmButton: false,
              title: page.props.flash.success,
            });
          },
        });
      } catch (err) {
        console.log(err);
      }
    }
  });
};
</script>
<template>
  <section class="max-w-full font-inter">
    <!-- end -->
    <div class="mx-auto">
      <!-- Start coding here -->
      <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
        <div
          class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-6"
        >
          <div class="w-full md:w-1/2">
            <form class="flex items-center">
              <label for="simple-search" class="sr-only">Search</label>
              <div class="relative w-full">
                <div
                  class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none"
                >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <input
                  type="text"
                  id="simple-search"
                  class="bg-white border border-primaryColor text-textColor text-sm rounded-lg focus:border-primaryColor focus:ring focus:ring-primaryColor block w-full pl-10 p-2"
                  placeholder="Search"
                  required=""
                />
              </div>
            </form>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table
            class="w-full text-sm text-left text-textColor border-slate-200 border-opacity-50"
          >
            <thead class="text-2xs text-textColor capitalize">
              <tr>
                <th scope="col" class="px-5 py-3 text-center truncate">Payment Date</th>
                <th scope="col" class="px-5 py-3 truncate">Payment Code</th>
                <th scope="col" class="px-4 py-3">Name</th>
                <th scope="col" class="px-4 py-3">Quantity</th>
                <th scope="col" class="px-4 py-3 truncate">Total Price</th>
                <th scope="col" class="px-5 py-3 truncate">Payment Type</th>
                <th scope="col" class="px-3 py-3 truncate">Status</th>
                <th scope="col" class="px-5 py-3 truncate">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="(product, index) in products.slice(0, 10)"
                :key="product.id"
              >
                <th
                  scope="row"
                  class="px-12 py-3 font-medium text-textColor whitespace-nowrap"
                >
                  Image
                </th>
                <th
                  scope="row"
                  class="px-14 py-3 font-medium text-textColor whitespace-nowrap"
                >
                  <!-- {{ product.title }} -->
                  Fruit Dragon
                </th>
                <td class="py-4 text-center">
                  {{ product.name }}
                </td>

                <td class="px-2 py-3 text-center">
                  {{ product.quantity }}
                </td>
                <td class="px-4 py-3 text-center">${{ product.price }}</td>
                <td class="px-4 py-3 text-center">
                  <span
                    v-if="product.inStock === 0"
                    class="text-primaryColor text-xs font-semibold mr-2 px-2.5 py-0.5"
                  >
                    inStock
                  </span>
                  <span v-else class="text-Red text-xs font-semibold truncate">
                    Out of Stock
                  </span>
                </td>
                <td class="py-3">
                  <button
                    v-if="product.published === 0"
                    type="button"
                    class="px-3 py-2 text-xs font-medium text-center bg-hijau-1 rounded-full text-primaryColor focus:ring-2 focus:outline-none focus:ring-primaryColor"
                  >
                    Published
                  </button>
                  <button
                    v-else
                    type="button"
                    class="px-3 py-2 text-xs font-medium text-center text-merah-2 bg-merah-1 rounded-full focus:ring-2 focus:outline-none focus:ring-Red"
                  >
                    Unpublished
                  </button>
                </td>
                <td class="px-5 py-3 items-center">
                  <div class="block relative z-50">
                    <div
                      class="dropdown dropdown-left w-8 h-8 rounded-full hover:bg-white-50 hover:cursor-pointer flex justify-center items-center"
                      tabindex="0"
                    >
                      <button class="relative">
                        <i
                          class="bx bx-dots-vertical-rounded bx-xs text-slate-200 m-auto"
                        ></i>
                      </button>
                      <ul class="dropdown-content menu shadow bg-white rounded-md w-40">
                        <li class="py-1 w-full hover:bg-white-50 rounded-md">
                          <Link
                            @click.prevent="deleteProduct(product, index)"
                            class="hover:text-slate-300 flex"
                          >
                            <i class="bx bx-trash text-Red text-[16px]"></i>
                            Hapus
                          </Link>
                        </li>
                        <li class="py-1 w-full hover:bg-white-50 rounded-md">
                          <Link
                            @click.prevent="showEditProductForm = true"
                            class="hover:text-slate-300 flex"
                          >
                            <i class="bx bx-pencil text-Red text-[16px]"></i>
                            Edit
                          </Link>
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <nav
          class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 relative"
          aria-label="Table navigation"
        >
          <span class="text-sm font-normal text-textColor">
            Showing
            <span class="font-semibold text-textColor">1-10</span>
            of
            <span class="font-semibold text-textColor">1000</span>
          </span>
          <ul class="inline-flex items-stretch -space-x-px">
            <li>
              <a
                href="#"
                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-textColor bg-white rounded-l-lg border border-gray-300"
              >
                <span class="sr-only">Previous</span>
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-textColor bg-white border border-gray-300"
                >1</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-textColor bg-white border border-gray-300"
                >2</a
              >
            </li>
            <li>
              <a
                href="#"
                aria-current="page"
                class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-textColor bg-primary-50 border border-primary-300"
                >3</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300"
                >...</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300"
                >100</a
              >
            </li>
            <li>
              <a
                href="#"
                class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-textColor bg-white rounded-r-lg border border-gray-300"
              >
                <span class="sr-only">Next</span>
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <transition name="modal">
    <div
      v-if="showAddProductForm"
      class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50 font-inter"
    >
      <div class="bg-white p-8 rounded shadow-lg z-100 w-1/3">
        <h2 class="text-2xl font-bold mb-4">Add Product</h2>
        <form
          @submit.prevent="submitAddProductForm"
          class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-2"
        >
          <div class="col-span-1 lg:col-span-2">
            <div class="mb-4">
              <label for="productImage" class="block text-gray-700">Product Image</label>
              <!-- Tambahkan input untuk gambar produk -->
              <input
                type="file"
                id="productImage"
                accept="image/*"
                class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                v-on:change="handleImageChange"
                required
              />
            </div>
          </div>
          <div class="mb-4">
            <label for="productName" class="block text-gray-700">Product Name</label>
            <input
              type="text"
              id="productName"
              v-model="productName"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="category" class="block text-gray-700">Category</label>
            <input
              type="text"
              id="category"
              v-model="category"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>

          <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Quantity</label>
            <input
              type="number"
              id="quantity"
              v-model="quantity"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="price" class="block text-gray-700">Price</label>
            <input
              type="number"
              id="price"
              v-model="price"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="stock" class="block text-gray-700">Stock</label>
            <input
              type="number"
              id="stock"
              v-model="stock"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="publish" class="block text-gray-700">Publish</label>
            <input
              type="checkbox"
              id="publish"
              v-model="publish"
              class="mt-1 p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
            />
          </div>
          <div class="col-span-1 lg:col-span-2 justify-self-center">
            <div class="flex justify-center flex-wrap lg:flex-wrap gap-3">
              <button
                type="button"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                @click="showAddProductForm = false"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
              >
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </transition>

  <transition name="modal">
    <div
      v-if="showEditProductForm"
      class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50 font-inter"
    >
      <div class="bg-white p-8 rounded shadow-lg z-100 w-1/3">
        <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
        <form
          @submit.prevent="submitEditProductForm"
          class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-2"
        >
          <div class="col-span-1 lg:col-span-2">
            <div class="mb-4">
              <label for="editProductImage" class="block text-gray-700"
                >Product Image</label
              >
              <!-- Tambahkan input untuk gambar produk -->
              <input
                type="file"
                id="editProductImage"
                accept="image/*"
                class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                v-on:change="editedImage.image"
                required
              />
            </div>
          </div>
          <div class="mb-4">
            <label for="editProductName" class="block text-gray-700">Product Name</label>
            <input
              type="text"
              id="editProductName"
              v-model="editedProduct.name"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>

          <div class="mb-4">
            <label for="editCategory" class="block text-gray-700">Category</label>
            <input
              type="text"
              id="editCategory"
              v-model="editedProduct.category"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>

          <div class="mb-4">
            <label for="editQuantity" class="block text-gray-700">Quality</label>
            <input
              type="number"
              id="editQuantity"
              v-model="editedProduct.quantity"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="editPrice" class="block text-gray-700">Price</label>
            <input
              type="number"
              id="editPrice"
              v-model="editedProduct.price"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="editStock" class="block text-gray-700">Stock</label>
            <input
              type="number"
              id="editStock"
              v-model="editedProduct.stock"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="editPublish" class="block text-gray-700">Publish</label>
            <input
              type="checkbox"
              id="editPublish"
              v-model="editedProduct.publish"
              class="mt-1 p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
            />
          </div>
          <div class="col-span-1 lg:col-span-2">
            <div class="flex justify-center flex-wrap lg:flex-wrap gap-3">
              <button
                type="button"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                @click="showEditProductForm = false"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
              >
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </transition>
</template>
