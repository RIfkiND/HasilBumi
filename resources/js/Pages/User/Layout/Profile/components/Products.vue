<script setup>
import { router, usePage, Link } from "@inertiajs/vue3";
import { ref, computed, watch } from "vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import { Plus } from "@element-plus/icons-vue";

defineProps({
  dataProducts: Array,
});

const search = ref("");
const emit = defineEmits(["search"]);
watch(search, (value) => {
  emit("search", value);
});

const pageTo = (url) => {
  router.get(url);
};
const Categories = usePage().props.Categories;
const Satuans = usePage().props.Satuans;

const editor = ref(ClassicEditor);
const editorConfig = {
  height: "450px",
  toolbar: [
    "heading",
    "|",
    "bold",
    "italic",
    "link",
    "bulletedList",
    "numberedList",
    "|",
    "insertTable",
    "|",
    "mediaEmbed",
    "|",
    "undo",
    "redo",
  ],
  table: {
    toolbar: ["tableColumn", "tableRow", "mergeTableCells"],
  },
  language: "nl",
};

const productImages = ref([]);
const showEditProductForm = ref(false);
const showAddProductForm = ref(false);

const handleFileChange = (file) => {
  console.log(file);
  productImages.value.push(file);
};

const dialogImageUrl = ref("");
const dialogVisible = ref(false);

const handlePictureCardPreview = (file) => {
  dialogImageUrl.value = file.url;
  dialogVisible.value = true;
};

const handleRemove = (file) => {
  console.log(file);
};

const id = ref("");
const name = ref("");
const price = ref("");
const stock = ref("");
const deskripsi = ref("");
const images = ref([]);
const category_id = ref("");
const satuan_id = ref("");

const submitAddProductForm = async () => {
  const formData = new FormData();
  formData.append("name", name.value);
  formData.append("price", price.value);
  formData.append("stock", stock.value);
  formData.append("deskripsi", deskripsi.value);
  formData.append("category_id", category_id.value);
  formData.append("satuan_id", satuan_id.value);
  for (const image of productImages.value) {
    formData.append("url[]", image.raw);
  }

  try {
    await router.post(route("product.add"), formData, {
      onSuccess: (page) => {
        Swal.fire({
          toast: true,
          icon: "success",
          position: "top-end",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          title: page.props.flash.success,
        });
        dialogVisible.value = false;
        resetFormData();
      },
    });
  } catch (err) {
    console.log(err);
  }

  showAddProductForm.value = false;
};
const resetFormData = () => {
  id.value = "";
  name.value = "";
  price.value = "";
  stock.value = "";
  deskripsi.value = "";
  images.value = [];
};

const openEditModal = (product, index) => {
  console.log(product, index);

  id.value = product.id;
  name.value = product.name;
  price.value = product.price;
  stock.value = product.stock;
  deskripsi.value = product.deskripsi;
  satuan_id.value = product.satuan_id;
  category_id.value = product.category_id;
  images.value = product.product_image;

  showEditProductForm.value = true;
  dialogVisible.value = true;
};
//update product method
const updateProduct = async () => {
  const formData = new FormData();
  formData.append("name", name.value);
  formData.append("price", price.value);
  formData.append("stock", stock.value);
  formData.append("deskripsi", deskripsi.value);
  formData.append("category_id", category_id.value);
  formData.append("satuan_id", satuan_id.value);
  formData.append("_method", "PUT");
  for (const image of productImages.value) {
    formData.append("url[]", image.raw);
  }

  try {
    await router.post("/product/update/prosess/" + id.value, formData, {
      onSuccess: (page) => {
        resetFormData();
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
  showEditProductForm.value = false;
};

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
        router.delete(route("product.delete", product.id), {
          onSuccess: (page) => {
            this.delete(product, index);
            Swal.fire({
              toast: true,
              icon: "success",
              position: "top-end",
              showConfirmButton: false,
              timer: 2000,
              timerProgressBar: true,
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

const deleteImage = async (pimage, index) => {
  try {
    await router.delete(route("image.delete", +pimage.id), {
      onSuccess: (page) => {
        images.value.splice(index, 1);
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
};
</script>
<template>
  <section class="max-w-full">
    <!-- end -->
    <div class="mx-auto">
      <!-- Start coding here -->
      <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
        <div
          class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-6"
        >
          <div class="w-full md:w-1/2">
            <div class="flex items-center">
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
                  v-model="search"
                  type="text"
                  id="simple-search"
                  class="bg-white border border-primaryColor text-textColor text-sm rounded-lg focus:border-primaryColor focus:ring focus:ring-primaryColor block w-full pl-10 p-2"
                  placeholder="Search"
                  required=""
                />
              </div>
            </div>
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
            class="w-full text-sm text-left text-textColor border-slate-200 border-opacity-50"
          >
            <thead class="text-2xs text-textColor capitalize">
              <tr>
                <th scope="col" class="px-4 py-3 truncate">No</th>
                <th scope="col" class="px-4 py-3 truncate">Product name</th>
                <th scope="col" class="px-4 py-3">Category</th>
                <th scope="col" class="px-4 py-3">Stock</th>
                <th scope="col" class="px-4 py-3">Price</th>
                <th scope="col" class="px-4 py-3">Satuan</th>
                <th scope="col" class="px-4 py-3">Status</th>
                <th scope="col" class="px-4 py-3 text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="(product, index) in dataProducts.data"
                :key="index"
                class="border-b"
              >
                <th
                  scope="row"
                  class="px-4 py-3 font-medium text-textColor whitespace-nowrap"
                >
                  {{ index + 1 }}
                </th>

                <th
                  scope="row"
                  class="px-4 py-3 font-medium text-textColor whitespace-nowrap"
                >
                  {{ product.name }}
                </th>
                <td class="px-4 py-3 text-center">
                  {{ product.category.name }}
                </td>

                <td class="px-4 py-3 text-center">
                  {{ product.stock }}
                </td>
                <td class="px-4 py-3">Rp.{{ product.price }}</td>
                <td class="px-4 py-3">
                  {{ product.satuan.symbol }}
                </td>
                <td class="px-3 py-3">
                  <span
                    v-if="product.stock > 0"
                    class="text-primaryColor text-xs font-semibold mr-2 px-2.5 py-0.5"
                  >
                    inStock
                  </span>
                  <span v-else class="text-Red text-xs font-semibold truncate">
                    Out of Stock
                  </span>
                </td>
                <!--Aksi Icon-->
                <td class="px-4 py-3 flex items-center">
                  <div
                    :id="`${product.id}`"
                    class="bg-white text-textColor rounded flex items-center gap-4"
                  >
                    <a
                      href="#"
                      @click.prevent="openEditModal(product)"
                      class="block py-2 px-4 bg-primaryColor text-white rounded-full"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-blue-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2
                      2 0 112.828
                      2.828L11.828 15H9v-2.828l8.586-8.586z"
                        /></svg
                    ></a>
                    <a
                      href="#"
                      @click.prevent="deleteProduct(product, index)"
                      class="block py-2 px-4 text-sm bg-Red text-white rounded-full"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-red-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5
                      4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        /></svg
                    ></a>
                    <a
                      href="#"
                      @click.prevent="deleteProduct(product, index)"
                      class="block py-2 px-4 text-sm bg-bl bg-blue text-white rounded-full"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-red-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"
                        ></path>
                        <path
                          d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              <tr v-if="product === 0">
                <td colspan="8" class="px-4 py-3 text-center font-bold">
                  There are no products.
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
            <span class="font-semibold text-textColor"
              >1-{{ dataProducts.per_page }}</span
            >
            of
            <span class="font-semibold text-textColor">{{ dataProducts.total }}</span>
          </span>
          <ul class="inline-flex items-stretch -space-x-px">
            <li v-for="(product, index) in dataProducts.links" :key="index">
              <a
                href="#"
                @click="pageTo(product.url)"
                :class="{
                  ' bg-blue text-dark hover:text-white hover:cursor-text hover:bg-primaryColor':
                    product.active,
                }"
                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-textColor bg-white border border-gray-300"
                v-html="product.label"
              ></a>
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
      <div
        class="bg-white p-8 rounded shadow-lg z-100 w-1/2 max-h-[80vh] overflow-y-auto"
      >
        <h2 class="text-2xl font-bold mb-4">Add Product</h2>
        <form @submit.prevent="submitAddProductForm" class="mt-8 grid grid-cols-2 gap-4">
          <div class="col-span-2">
            <div class="mb-4">
              <label for="productImage" class="block text-gray-700 mb-2">Tambahkan gambar produk</label>
              <!-- Tambahkan input untuk gambar products -->
              <el-upload
                v-model:file-list="productImages"
                list-type="picture-card"
                :on-preview="handlePictureCardPreview"
                :on-remove="handleRemove"
                :on-change="handleFileChange"
                class="w-full h-full"
              >
                <el-icon>
                  <Plus />
                </el-icon>
              </el-upload>
            </div>
          </div>
          <div class="mb-4">
            <label for="productName" class="block text-gray-700">Product Name</label>
            <input
              type="text"
              id="productName"
              v-model="name"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="category" class="block text-gray-700">Category</label>
            <select
              id="category"
              v-model="category_id"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            >
              <option disabled value="">Pilih Category</option>
              <option
                v-for="category in Categories"
                :key="category.id"
                :value="category.id"
              >
                {{ category.name }}
              </option>
            </select>
          </div>
          <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Stock</label>
            <input
              type="number"
              id="quantity"
              v-model="stock"
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
            <label for="stock" class="block text-gray-700">satuan</label>
            <select
              type="number"
              v-model="satuan_id"
              id="stock"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            >
              <option value="" disabled>Pilih Satuan</option>
              <option v-for="satuan in Satuans" :key="satuan.id" :value="satuan.id">
                {{ satuan.satuan }} | {{ satuan.symbol }}
              </option>
            </select>
          </div>
          <div class="col-span-2">
            <div class="mb-4">
              <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
              <ckeditor
                :editor="editor"
                v-model="deskripsi"
                :config="editorConfig"
                class="mt-1 w-full"
              ></ckeditor>
            </div>
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
  <!--update-->
  <transition name="modal">
    <div
      v-if="showEditProductForm"
      class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
    >
      <div
        class="bg-white p-8 rounded shadow-lg z-100 w-1/2 max-h-[80vh] overflow-y-auto"
      >
        <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
        <form @submit.prevent="updateProduct" class="mt-8 grid grid-cols-2 gap-4">
          <div class="col-span-2">
            <div class="mb-4">
              <label for="productImage" class="block text-gray-700">Product Image</label>
              <!-- Tambahkan input untuk gambar products -->
              <el-upload
                v-model:file-list="productImages"
                list-type="picture-card"
                :on-preview="handlePictureCardPreview"
                :on-remove="handleRemove"
                :on-change="handleFileChange"
              >
                <el-icon>
                  <Plus />
                </el-icon>
              </el-upload>
            </div>
          </div>
          <div class="col-span-2">
            <div class="mb-4">
              <label for="productImage" class="block text-gray-700"
                >List Product Images</label
              >
              <div class="flex flex-wrap">
                <div
                  v-for="(pimage, index) in images"
                  :key="pimage.id"
                  class="relative w-32 h-32 mr-4 mb-4"
                >
                  <img class="w-full h-full rounded" :src="`/${pimage.url}`" alt="" />
                  <span
                    class="absolute top-0 right-8 transform -translate-y-1/2 w-3.5 h-3.5 bg-red-400 border-2 border-red dark:border-gray-800 rounded-full"
                  >
                    <span
                      @click="deleteImage(pimage, index)"
                      class="text-red text-xs font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                      >x</span
                    >
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <label for="productName" class="block text-gray-700">Product Name</label>
            <input
              type="text"
              id="productName"
              v-model="name"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            />
          </div>
          <div class="mb-4">
            <label for="category" class="block text-gray-700">Category</label>
            <select
              id="category"
              v-model="category_id"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            >
              <option disabled value="">Pilih Category</option>
              <option
                v-for="category in Categories"
                :key="category.id"
                :value="category.id"
              >
                {{ category.name }}
              </option>
            </select>
          </div>
          <div class="mb-4">
            <label for="quantity" class="block text-gray-700">Stock</label>
            <input
              type="number"
              id="quantity"
              v-model="stock"
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
            <label for="stock" class="block text-gray-700">satuan</label>
            <select
              type="number"
              v-model="satuan"
              id="stock"
              class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
              required
            >
              <option value="" disabled>Pilih Satuan</option>
              <option v-for="satuan in Satuans" :key="satuan.id" :value="satuan.id">
                {{ satuan.satuan }}| {{ satuan.symbol }}
              </option>
            </select>
          </div>
          <div class="col-span-2">
            <div class="mb-4">
              <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
              <ckeditor
                :editor="editor"
                v-model="deskripsi"
                :config="editorConfig"
                class="mt-1 w-full"
              ></ckeditor>
            </div>
          </div>
          <div class="col-span-2 justify-self-center">
            <div class="flex justify-center">
              <button
                type="button"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs capitalize tracking-widest transition ease-in-out duration-150 mr-2"
                @click="showEditProductForm = false"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs capitalize tracking-widest transition ease-in-out duration-150 mr-2"
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