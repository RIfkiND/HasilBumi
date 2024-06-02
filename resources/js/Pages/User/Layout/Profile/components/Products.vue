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
    {
        id: 2,
        name: "Product 2",
        quantity: 20,
        price: 9.99,
        inStock: 1,
        published: 1,
    },
    {
        id: 3,
        name: "Product 3",
        quantity: 15,
        price: 3.99,
        inStock: 1,
        published: 0,
    },
    {
        id: 4,
        name: "Product 4",
        quantity: 8,
        price: 6.99,
        inStock: 0,
        published: 1,
    },
    {
        id: 5,
        name: "Product 5",
        quantity: 12,
        price: 4.99,
        inStock: 1,
        published: 0,
    },
    {
        id: 6,
        name: "Product 6",
        quantity: 25,
        price: 8.99,
        inStock: 1,
        published: 1,
    },
    {
        id: 7,
        name: "Product 7",
        quantity: 30,
        price: 2.99,
        inStock: 0,
        published: 1,
    },
    {
        id: 8,
        name: "Product 8",
        quantity: 18,
        price: 7.99,
        inStock: 1,
        published: 0,
    },
    {
        id: 9,
        name: "Product 9",
        quantity: 22,
        price: 5.49,
        inStock: 0,
        published: 1,
    },
    {
        id: 10,
        name: "Product 10",
        quantity: 16,
        price: 9.49,
        inStock: 1,
        published: 0,
    },
    {
        id: 11,
        name: "Product 11",
        quantity: 14,
        price: 1.99,
        inStock: 0,
        published: 1,
    },
    {
        id: 12,
        name: "Product 12",
        quantity: 19,
        price: 6.49,
        inStock: 1,
        published: 0,
    },
    {
        id: 13,
        name: "Product 13",
        quantity: 23,
        price: 8.49,
        inStock: 1,
        published: 1,
    },
    {
        id: 14,
        name: "Product 14",
        quantity: 26,
        price: 4.49,
        inStock: 0,
        published: 1,
    },
    {
        id: 15,
        name: "Product 15",
        quantity: 11,
        price: 2.49,
        inStock: 1,
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
const brand = ref("");
const quantity = ref("");
const price = ref("");
const stock = ref("");
const publish = ref(false);

const submitAddProductForm = () => {
    // Lakukan logika untuk menyimpan data produk baru
    const newProduct = {
        image: productImage.value,
        name: productName.value,
        category: category.value,
        brand: brand.value,
        quantity: quantity.value,
        price: price.value,
        stock: stock.value,
        publish: publish.value,
    };
    console.log("New Product:", newProduct);

    // Reset nilai field
    productImage.value = "";
    productName.value = "";
    category.value = "";
    brand.value = "";
    quantity.value = "";
    price.value = "";
    stock.value = "";
    publish.value = false;

    // Tutup form setelah disubmit
    showAddProductForm.value = false;
};

const handleImageChange = (event) => {
    // Mengambil file gambar yang dipilih oleh pengguna
    const selectedFile = event.target.files[0];

    // Jika pengguna memilih gambar
    if (selectedFile) {
        // Mengubah gambar menjadi URL data
        const reader = new FileReader();
        reader.readAsDataURL(selectedFile);
        reader.onload = () => {
            // Menyimpan URL data gambar ke dalam variabel productImage
            productImage.value = reader.result;
        };
    }
};

// Props untuk menerima produk dan indeks dari komponen induk
const props = defineProps({
    product: Object,
    index: Number,
});

// Edit
const showEditProductForm = ref(false);
const editedProduct = ref({
    image: "",
    name: "",
    category: "",
    brand: "",
    quantity: "",
    price: "",
    stock: "",
    publish: false,
});

const prepareEditProduct = (product) => {
    // Menetapkan nilai produk yang akan diedit ke editedProduct
    editedProduct.value = {
        image: product.image,
        name: product.name,
        category: product.category,
        brand: product.brand,
        quantity: product.quantity,
        price: product.price,
        stock: product.stock,
        publish: product.publish,
    };

    // Menampilkan formulir edit
    showEditProductForm.value = true;
};

// delete product method
// const deleteProduct = (product, index) => {
//     Swal.fire({
//         title: "Are you Sure",
//         text: "This actions cannot undo!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         cancelButtonText: "no",
//         confirmButtonText: "yes, delete!",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             try {
//                 router.delete("products/destory/" + product.id, {
//                     onSuccess: (page) => {
//                         this.delete(product, index);
//                         Swal.fire({
//                             toast: true,
//                             icon: "success",
//                             position: "top-end",
//                             showConfirmButton: false,
//                             title: page.props.flash.success,
//                         });
//                     },
//                 });
//             } catch (err) {
//                 console.log(err);
//             }
//         }
//     });
// };
</script>
<template>
    <section class="p-3 sm:p-5">
        <!-- end -->
        <div class="mx-auto max-w-screen-xl px-4 lg:px-">
            <!-- Start coding here -->
            <div
                class="bg-white relative shadow-md sm:rounded-lg overflow-hidden"
            >
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-6"
                >
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only"
                                >Search</label
                            >
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
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
                    >
                        <button
                            type="button"
                            @click.prevent="showAddProductForm = true"
                            class="text-textColor border-2 border-primaryColor bg-white hover:bg-primaryColor focus:ring-2 focus:ring-primaryColor font-medium rounded-lg text-sm px-4 py-2 focus:outline-none"
                        >
                            Add product
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table
                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-4 py-3">Category</th>
                                <th scope="col" class="px-4 py-3">Brand</th>
                                <th scope="col" class="px-4 py-3">Quantity</th>
                                <th scope="col" class="px-4 py-3">Price</th>
                                <th scope="col" class="px-4 py-3">Stock</th>
                                <th scope="col" class="px-4 py-3">Publish</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(product, index) in products.slice(
                                    0,
                                    10
                                )"
                                :key="product.id"
                                class="border-b"
                            >
                                <th
                                    scope="row"
                                    class="px-4 py-3 font-medium text-textColor whitespace-nowrap"
                                >
                                    <!-- {{ product.title }} -->
                                    Fruit Dragon
                                </th>
                                <td class="px-2 py-3 text-center">
                                    {{ product.name }}
                                </td>
                                <td class="px-2 py-3 text-center">
                                    {{ product.name }}
                                </td>
                                <td class="px-2 py-3 text-center">
                                    {{ product.quantity }}
                                </td>
                                <td class="px-4 py-3">${{ product.price }}</td>
                                <td class="px-4 py-3">
                                    <span
                                        v-if="product.inStock === 0"
                                        class="text-textColor text-xs font-semibold mr-2 px-2.5 py-0.5"
                                    >
                                        inStock
                                    </span>
                                    <span
                                        v-else
                                        class="text-Red text-xs font-semibold"
                                    >
                                        Out of Stock
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <button
                                        v-if="product.published === 0"
                                        type="button"
                                        class="px-3 py-2 text-xs font-medium text-center bg-primaryColor rounded-full text-white focus:ring-2 focus:outline-none focus:ring-primaryColor"
                                    >
                                        Published
                                    </button>
                                    <button
                                        v-else
                                        type="button"
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-Red rounded-full focus:ring-2 focus:outline-none focus:ring-Red"
                                    >
                                        UnPublished
                                    </button>
                                </td>
                                <td class="px-4 py-3 flex items-center">
                                    <div
                                        class="bg-white text-textColor rounded flex items-center gap-4"
                                    >
                                        <a
                                            href="#"
                                            @click.prevent="
                                                showEditProductForm = true
                                            "
                                            class="block py-2 px-4 bg-primaryColor text-white rounded-full"
                                            >Edit</a
                                        >
                                        <a
                                            href="#"
                                            @click.prevent="
                                                deleteProduct(product, index)
                                            "
                                            class="block py-2 px-4 text-sm bg-Red text-white rounded-full"
                                            >Delete</a
                                        >
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav
                    class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
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
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Add Product</h2>
                <form
                    @submit.prevent="submitAddProductForm"
                    class="mt-8 grid grid-cols-2 gap-4"
                >
                    <div class="col-span-2">
                        <div class="mb-4">
                            <label
                                for="productImage"
                                class="block text-gray-700"
                                >Product Image</label
                            >
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
                        <label for="productName" class="block text-gray-700"
                            >Product Name</label
                        >
                        <input
                            type="text"
                            id="productName"
                            v-model="productName"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700"
                            >Category</label
                        >
                        <input
                            type="text"
                            id="category"
                            v-model="category"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700"
                            >Brand</label
                        >
                        <input
                            type="text"
                            id="brand"
                            v-model="brand"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700"
                            >Quantity</label
                        >
                        <input
                            type="number"
                            id="quantity"
                            v-model="quantity"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700"
                            >Price</label
                        >
                        <input
                            type="number"
                            id="price"
                            v-model="price"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="block text-gray-700"
                            >Stock</label
                        >
                        <input
                            type="number"
                            id="stock"
                            v-model="stock"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="publish" class="block text-gray-700"
                            >Publish</label
                        >
                        <input
                            type="checkbox"
                            id="publish"
                            v-model="publish"
                            class="mt-1 p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                        />
                    </div>
                    <div class="col-span-2 justify-self-center">
                        <div class="flex justify-center">
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
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
                <form
                    @submit.prevent="submitEditProductForm"
                    class="mt-8 grid grid-cols-2 gap-4"
                >
                    <div class="col-span-2">
                        <div class="mb-4">
                            <label
                                for="editProductImage"
                                class="block text-gray-700"
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
                        <label for="editProductName" class="block text-gray-700"
                            >Product Name</label
                        >
                        <input
                            type="text"
                            id="editProductName"
                            v-model="editedProduct.name"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label for="editCategory" class="block text-gray-700"
                            >Category</label
                        >
                        <input
                            type="text"
                            id="editCategory"
                            v-model="editedProduct.category"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="editBrand" class="block text-gray-700"
                            >Brand</label
                        >
                        <input
                            type="text"
                            id="editBrand"
                            v-model="editedProduct.brand"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="editQuantity" class="block text-gray-700"
                            >Quality</label
                        >
                        <input
                            type="number"
                            id="editQuantity"
                            v-model="editedProduct.quantity"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="editPrice" class="block text-gray-700"
                            >Price</label
                        >
                        <input
                            type="number"
                            id="editPrice"
                            v-model="editedProduct.price"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="editStock" class="block text-gray-700"
                            >Stock</label
                        >
                        <input
                            type="number"
                            id="editStock"
                            v-model="editedProduct.stock"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="editPublish" class="block text-gray-700"
                            >Publish</label
                        >
                        <input
                            type="checkbox"
                            id="editPublish"
                            v-model="editedProduct.publish"
                            class="mt-1 p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                        />
                    </div>
                    <div class="col-span-2">
                        <div class="flex justify-center">
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
