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
      <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
        <div
          class="flex flex-col items-center justify-between p-6 space-y-3 md:flex-row md:space-y-0 md:space-x-4"
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
                  class="block w-full p-2 pl-10 text-sm bg-white border rounded-lg border-primaryColor text-textColor focus:border-primaryColor focus:ring focus:ring-primaryColor"
                  placeholder="Search"
                  required=""
                />
              </div>
            </div>
          </div>
          <div
            class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3"
          >
            <button
              type="button"
              @click.prevent="showAddProductForm = true"
              class="px-4 py-2 text-sm font-medium rounded-lg bg-hijau-1 hover:ring-2 hover:ring-primaryColor focus:outline-none text-primaryColor"
            >
            <i class='bx bx-plus-medical'></i>
              Tambahkan produk
            </button>
          </div>
        </div>
        <div class="w-full p-3">
          <table
            class="w-full text-sm text-left border-opacity-50 text-textColor border-slate-200"
          >
            <thead class="pb-3 capitalize border-b-2 text-2xs text-textColor border-white-50">
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
                class="border-b-2 border-white-50"
              >
                <td
                  scope="row"
                  class="px-4 font-medium text-textColor whitespace-nowrap"
                >
                  {{ index + 1 }}
                </td>

                <td
                  scope="row"
                  class="px-4 font-medium text-textColor whitespace-nowrap"
                >
                  {{ product.name }}
                </td>
                <td class="px-4 font-medium text-textColor whitespace-nowrap">
                  {{ product.category.name }}
                </td>

                <td class="px-4 font-medium text-textColor whitespace-nowrap">
                  {{ product.stock }}
                </td>
                <td class="px-4 font-medium text-textColor whitespace-nowrap">Rp.{{ product.price }}</td>
                <td class="px-4 font-medium text-textColor whitespace-nowrap">
                  {{ product.satuan.symbol }}
                </td>
                <td class="px-4 font-medium text-textColor whitespace-nowrap">
                  <span
                    v-if="product.stock > 0"
                    class="text-xs font-semibold text-primaryColor whitespace-nowrap"
                  >
                    inStock
                  </span>
                  <span v-else class="text-xs font-semibold truncate text-Red">
                    Out of Stock
                  </span>
                </td>
                <!--Aksi Icon-->
                <td class="flex items-center px-4 mx-2 font-medium text-textColor whitespace-nowrap">
                  <div
                    :id="`${product.id}`"
                    class="flex items-center gap-4 bg-white rounded text-textColor"
                  >
                  <div class="relative z-50 block">
                    <div
                      class="flex items-center justify-center w-8 h-8 rounded-full dropdown dropdown-left hover:bg-white-50 hover:cursor-pointer"
                      tabindex="0"
                    >
                      <button class="relative">
                        <i
                          class="m-auto mt-1 bx bx-dots-vertical-rounded bx-xs text-slate-200"
                        ></i>
                      </button>
                      <ul class="w-40 bg-white rounded-md shadow dropdown-content menu">
                        <li class="w-full py-1 rounded-md hover:bg-white-50">
                          <a
                            @click.prevent="openEditModal(product)"
                            class="flex hover:text-slate-300"
                          >
                            <i class="bx bx-pencil text-[#F3CA52] text-[16px]"></i>
                            Edit
                          </a>
                        </li>
                        <li class="w-full py-1 rounded-md hover:bg-white-50">
                          <a
                            @click.prevent="deleteProduct(product, index)"
                            class="flex hover:text-slate-300"
                          >
                            <i class="bx bx-trash text-Red text-[16px]"></i>
                            Hapus
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  </div>
                </td>
              </tr>
              <tr v-if="product === 0">
                <td colspan="8" class="px-4 py-3 font-bold text-center">
                  There are no products.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <nav
          class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
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
                class="flex items-center justify-center px-3 py-2 text-sm leading-tight bg-white border border-gray-300 text-textColor"
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
      class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 bg-text-grey"
    >
      <div
        class="bg-white p-8 rounded shadow-lg z-100 w-1/2 max-h-[80vh] overflow-y-auto"
      >
        <h2 class="mb-4 text-2xl font-bold">Add Product</h2>
        <form @submit.prevent="submitAddProductForm" class="grid grid-cols-2 gap-4 mt-8">
          <div class="col-span-2">
            <div class="mb-4">
              <label for="productImage" class="block mb-2 text-gray-700">Tambahkan gambar produk</label>
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
                class="w-full mt-1"
              ></ckeditor>
            </div>
          </div>
          <div class="col-span-2 justify-self-center">
            <div class="flex justify-center">
              <button
                type="button"
                class="inline-flex items-center px-4 py-2 mr-2 text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out bg-white border-2 rounded-md text-primaryColor border-primaryColor"
                @click="showAddProductForm = false"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="inline-flex items-center px-4 py-2 mr-2 text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out bg-white border-2 rounded-md text-primaryColor border-primaryColor"
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
      class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 bg-text-grey"
    >
      <div
        class="bg-white p-8 rounded shadow-lg z-100 w-1/2 max-h-[80vh] overflow-y-auto"
      >
        <h2 class="mb-4 text-2xl font-bold">Edit Product</h2>
        <form @submit.prevent="updateProduct" class="grid grid-cols-2 gap-4 mt-8">
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
                  class="relative w-32 h-32 mb-4 mr-4"
                >
                  <img class="w-full h-full rounded" :src="`/${pimage.url}`" alt="" />
                  <span
                    class="absolute top-0 right-8 transform -translate-y-1/2 w-3.5 h-3.5 bg-red-400 border-2 border-red dark:border-gray-800 rounded-full"
                  >
                    <span
                      @click="deleteImage(pimage, index)"
                      class="absolute text-xs font-bold transform -translate-x-1/2 -translate-y-1/2 text-red top-1/2 left-1/2"
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
                class="w-full mt-1"
              ></ckeditor>
            </div>
          </div>
          <div class="col-span-2 justify-self-center">
            <div class="flex justify-center">
              <button
                type="button"
                class="inline-flex items-center px-4 py-2 mr-2 text-xs font-semibold tracking-widest capitalize transition duration-150 ease-in-out bg-white border-2 rounded-md text-primaryColor border-primaryColor"
                @click="showEditProductForm = false"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="inline-flex items-center px-4 py-2 mr-2 text-xs font-semibold tracking-widest capitalize transition duration-150 ease-in-out bg-white border-2 rounded-md text-primaryColor border-primaryColor"
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
