<template>
    <!-- breadcrumb -->
    <div class="container flex items-center gap-2 py-4 mt-5 text-sm font-inter">
        <Link :href="route('Home')">
            <i class="fa-solid fa-house text-slate-300"></i>
        </Link>
        <span class="text-sm text-slate-200">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <Link :href="route('Shop.main')">
            <span class="font-medium text-slate-200 hover:text-slate-300"
                >Shop</span
            >
        </Link>
        <span class="text-sm text-slate-200">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <Link>
            <span class="font-medium text-slate-200 hover:text-slate-300">{{
                detailProduct.category.name
            }}</span>
        </Link>
        <span class="text-sm text-slate-200">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <Link>
            <span class="font-medium text-slate-200 hover:text-slate-300">{{
                detailProduct.name
            }}</span>
        </Link>
    </div>
    <!-- ./breadcrumb -->

    <!-- product-detail -->
    <div
        class="container grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 font-inter"
    >
        <div class="relative mb-10">
            <div
                class="w-full lg:h-[480px] bg-white-50 overflow-hidden rounded-md sm:h-[280px] md:h-[350px]"
            >
                <img
                    :src="currentImage"
                    alt=""
                    class="w-full h-full"
                    id="image-main"
                />
            </div>
            <div class="grid grid-cols-6 gap-2 mt-3">
                <div
                    v-for="(image, index) in detailProduct.product_image"
                    :key="index"
                    @mouseenter="changeMainImage(image.url)"
                    @mouseleave="resetMainImage"
                >
                    <img
                        :src="`/${image.url}`"
                        class="w-full h-full bg-center bg-cover rounded-md cursor-pointer hover:ring-2 hover:ring-primaryColor"
                    />
                </div>
            </div>
        </div>
        <div>
            <h2
                class="mb-3 text-3xl font-bold capitalize sm:text-sm md:text-md lg:text-4xl"
            >
                {{ detailProduct.name }}
            </h2>
            <div class="flex items-center mb-4">
                <div
                    class="flex text-sm divide-x-2 text-primaryColor divide-white-50"
                >
                    <div class="relative flex" v-for="star in 5">
                        <span>
                            <i
                                v-if="star <= TotalRating"
                                class="fa-solid fa-star"
                            ></i>
                            <i
                                v-else
                                class="fa-solid fa-star text-gray-400"
                            ></i>
                        </span>
                    </div>
                    <span class="ml-2 mr-1 text-sm text-center">
                        <Link
                            class="mx-3 text-dark hover:border-b-2 hover:border-primaryColor"
                            >{{ TotalRating }}</Link
                        >
                    </span>
                    <div class="grid grid-cols-2 gap-2 text-center">
                        <span
                            class="text-sm text-center capitalize mt-1/2 text-dark"
                        >
                            <Link
                                class="ml-3 mr-1 text-center hover:border-b-2 hover:border-primaryColor text-dark"
                                >{{ TotalUlasan }}</Link
                            >
                            penilaian
                        </span>
                        <div class="text-center border-l-2 border-white-50">
                            <span class="text-sm capitalize text-dark"
                                >26rb terjual</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-2">
                <p class="space-x-2 font-semibold text-dark">
                    <span>status: </span>
                    <span
                        class="text-primaryColor"
                        v-if="statusProduct === 'In Stock'"
                        >{{ statusProduct }}</span
                    >
                    <span class="text-pink" v-else>{{ statusProduct }}</span>
                </p>
                <p class="space-x-2">
                    <span class="font-semibold text-dark">Category: </span>
                    <span class="text-slate-300">{{
                        detailProduct.category.name
                    }}</span>
                </p>
                <p class="space-x-2">
                    <span class="font-semibold text-dark">SKU: </span>
                    <span class="text-slate-300">BE45VGRT</span>
                </p>
            </div>
            <div class="flex items-baseline mt-4 mb-1 space-x-2 font-roboto">
                <p class="text-xl font-semibold text-primaryColor">
                    Rp{{ detailProduct.price }}
                </p>
            </div>

            <p class="mt-4 text-slate-300">
                Explore keajaiban alam dengan produk kami yang terbuat dari
                bahan-bahan alami pilihan, menghadirkan kebaikan langsung dari
                tumbuhan ke dalam rutinitas harian Anda. Nikmati kelembutan dan
                keefektifan produk kami yang ramah lingkungan, sambil mendukung
                keberlanjutan alam.
            </p>

            <div class="mt-4">
                <h3 class="text-sm font-semibold capitalize text-dark">
                    Quantity
                </h3>
                <div class="flex">
                    <button
                        v-if="count >= 1"
                        @click="decrement"
                        type="button"
                        class="flex items-center justify-center w-8 h-8 text-xl transition cursor-pointer select-none text-slate-300 active:bg-white-50 border-1 border-white-50 rounded-bl-md rounded-tl-md"
                    >
                        -
                    </button>
                    <button
                        class="flex items-center justify-center w-8 h-8 px-4 text-base text-slate-300 border-1 border-white-50"
                        disabled
                    >
                        {{ count }}
                    </button>
                    <button
                        v-if="count <= 10"
                        @click="increment"
                        type="button"
                        class="flex items-center justify-center w-8 h-8 text-xl transition cursor-pointer select-none text-slate-300 active:bg-white-50 border-1 border-white-50 rounded-br-md rounded-tr-md"
                    >
                        +
                    </button>
                </div>
            </div>

            <div class="flex gap-3 pt-3 pb-5 mt-6">
                <Link
                    class="flex items-center gap-2 px-8 py-2 font-medium text-white no-underline capitalize transition rounded-md bg-hoverPrimary hover:bg-primaryColor"
                >
                    <i class="fa-solid fa-bag-shopping"></i> Beli sekarang
                </Link>
                <a
                    class="flex items-center gap-2 px-8 py-2 font-medium no-underline capitalize transition rounded border-1 border-dark text-dark hover:bg-dark group hover:cursor-pointer duration-2000"
                    @click="addToCart(detailProduct)"
                >
                    <i
                        class="bx bx-shopping-bag text-primaryColor text-[20px] outline-none"
                    ></i>
                    <span class="outline-none group-hover:text-white"
                        >Tambahkan ke keranjang</span
                    >
                </a>
            </div>
        </div>
    </div>
    <!-- ./product-detail -->

    <!-- shop -->
    <div
        class="flex items-center px-32 mb-10 border-2 rounded-md py-7 border-white-50"
    >
        <div class="mr-6 avatar">
            <div class="w-24 rounded-full">
                <img
                    v-if="detailProduct.seller.photo_toko == null"
                    :src="Shop"
                />
                <img v-else :src="tokoUrl" />
            </div>
        </div>
        <div class="flex gap-7">
            <div class="pr-10 ml-3 space-y-1 border-r-2 border-white-50">
                <div class="flex">
                    <div class="block -space-y-1">
                        <span class="text-xl font-bold text-left text-dark">{{
                            detailProduct.seller.nama_toko
                        }}</span>
                        <div v-if="status">
                            <span class="text-sm text-left text-slate-200"
                                >Aktif 15 menit yang lalu</span
                            >
                        </div>
                        <div v-else>
                            <span class="text-left text-primaryColor"
                                >Online</span
                            >
                        </div>
                        <div class="flex">
                            <div class="space-x-1"  v-for="star in 5">
                                <span
                                    ><i
                                        v-if="star <= TotalRating"
                                        class="fa-solid fa-star text-[#F3CA52] text-[10px]"
                                    ></i
                                ><i
                                        v-else
                                        class="bx bx-star text-[10px] text-slate-200"
                                    ></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <Link
                        :href="
                            route('chat.index', detailProduct.seller.user.id)
                        "
                        class="flex items-center justify-center gap-2 p-2 px-3 mt-3 text-sm font-medium text-white no-underline capitalize transition rounded-md bg-hoverPrimary hover:bg-primaryColor"
                    >
                        <i class="bx bxs-message-dots mt-[2px]"></i>Chat penjual
                    </Link>
                    <Link
                        :href="
                            route(
                                'seller.store',
                                detailProduct.seller.nama_toko
                            )
                        "
                        class="flex items-center justify-center gap-2 p-2 px-3 mt-3 text-sm font-medium no-underline capitalize transition rounded-md bg-hijau-1 text-primaryColor hover:ring-2 hover:ring-primaryColor hover:text-primaryColor"
                    >
                        <i class="bx bxs-store mt-[2px]"></i>Kunjungi toko
                    </Link>
                </div>
            </div>
            <div class="pr-10 space-y-5 border-r-2 border-white-50">
                <div class="flex justify-between gap-5 mt-4">
                    <label class="capitalize text-slate-200">Pengikut</label>
                    <span class="text-primaryColor">5 rb</span>
                </div>
                <div class="flex justify-between gap-5">
                    <label class="capitalize text-slate-200">Bergabung</label>
                    <span class="text-primaryColor">{{ joinedTime }}</span>
                </div>
            </div>
            <div class="pr-10 space-y-5 border-r-2 border-white-50">
                <div class="flex justify-between gap-5 mt-4">
                    <label class="capitalize text-slate-200"
                        >Presentasi chat dibales</label
                    >
                    <span class="text-primaryColor">99%</span>
                </div>
                <div class="flex justify-between gap-5">
                    <label class="capitalize text-slate-200">Penilaian</label>
                    <span class="text-primaryColor">{{ TotalUlasan }}</span>
                </div>
            </div>
            <div class="space-y-5">
                <div class="flex justify-between gap-5 mt-4">
                    <label class="capitalize text-slate-200">Produk</label>
                    <span class="text-primaryColor">{{ totalProducts }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP END -->

    <!-- description -->
    <div class="container pb-16 font-inter">
        <h3
            class="pb-3 text-lg font-semibold border-b-2 border-white-50 font-roboto text-dark"
        >
            Spesifikasi produk
        </h3>
        <div class="w-full pt-6 text-md">
            <div v-html="detailProduct.deskripsi" class="text-dark"></div>

            <!-- component -->
            <div class="flex flex-col py-8 font-inter">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="inline-block min-w-full py-2">
                        <div class="overflow-hidden">
                            <table
                                class="w-24 h-24 mt-10 text-sm divide-y-2 table-auto text-dark divide-white-50"
                            >
                                <thead class="text-slate-300">
                                    <tr class="text-sm capitalize">
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            nama produk
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            harga &#40;Rp&#41;
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            rating
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            ulasan
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            kebijakan pengembalian
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-4 py-2 font-semibold"
                                        >
                                            satuan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr
                                        class="capitalize border-b-2 border-white-50"
                                    >
                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            {{ detailProduct.name }}
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            {{ detailProduct.price }}
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            5/10
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-slate-300 whitespace-nowrap"
                                        >
                                            5500
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-slate-300 whitespace-nowrap"
                                        >
                                            Garansi 1 tahun
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-light text-slate-300 whitespace-nowrap"
                                        >
                                            {{ detailProduct.satuan.symbol }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <Comment
                                :detailProduct="detailProduct"
                                :UserComment="comments"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    <div class="container pb-16 font-inter">
        <h2 class="mb-6 text-2xl font-medium capitalize text-dark">
            produk lainnya
        </h2>
        <!-- Show produk -->
        <div
            class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5"
        >
            <Link
                :href="route('Shop.Product', { id: product.id })"
                class="overflow-hidden bg-white rounded-md shadow"
                v-for="product in visibleProducts"
                :key="product.id"
            >
                <div class="relative flex items-center justify-center group">
                    <div
                        class="w-full h-[190px] overflow-hidden bg-cover bg-center"
                    >
                        <img
                            :src="`/${product.image}`"
                            :alt="product.id"
                            class="w-full h-full transition bg-center bg-cover hover:cursor-pointer hover:brightness-50 group-hover:brightness-50"
                        />
                    </div>
                    <div class="absolute hidden gap-2 group-hover:flex">
                        <Link
                            href="#"
                            class="flex items-center justify-center w-10 h-10 text-lg text-white transition rounded-full bg-dark opacity-60 hover:opacity-90"
                            title="view product"
                        >
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </Link>
                        <Link
                            href="#"
                            class="flex items-center justify-center w-10 h-10 text-lg text-white transition rounded-full bg-dark opacity-60 hover:opacity-90"
                            title="add to wishlist"
                            @click="popupFavorite"
                        >
                            <i class="fa-solid fa-heart"></i>
                        </Link>
                    </div>
                </div>
                <div class="px-3 pt-3 pb-3">
                    <Link class="no-underline">
                        <h4
                            class="mb-1 text-xl font-semibold capitalize transition text-dark"
                        >
                            {{ product.title }}
                        </h4>
                    </Link>
                    <div class="capitalize text-[10px] flex gap-2 text-center">
                        <span
                            class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                            >{{ product.category }}</span
                        >
                        <span
                            class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                            >{{ product.satuan }}</span
                        >
                    </div>
                    <div
                        class="flex items-baseline mt-2 mb-2 space-x-2 capitalize"
                    >
                        <span class="font-semibold text-md text-primaryColor"
                            >Rp{{ product.price }}</span
                        >
                    </div>
                    <div
                        class="flex items-center space-x-2 divide-x-2 divide-white-50"
                    >
                        <div class="flex gap-1 text-xs text-[#F3CA52]">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="px-2 ml-3 text-xs text-slate-300">
                            1,5rb Terjual
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center pb-3 space-x-2 divide-x-2 divide-white-50"
                >
                    <div class="flex gap-1 text-xs text-[#37B5B6] ml-4">
                        <i class="bx bxs-car"></i>
                        <span class="px-1">1-3 hari</span>
                    </div>
                    <div
                        class="flex gap-1 px-2 ml-3 text-xs text-center capitalize text-slate-300"
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
                        {{ product.kota }}
                    </div>
                </div>
            </Link>
        </div>
    </div>
    <!-- ./related product -->
    <div class="flex items-center justify-center col-span-3 mt-4">
        <div class="flex items-center w-full gap-4">
            <div class="flex-grow border-t border-gray-300 opacity-35"></div>
            <button class="btn-outline-shop" @click="loadMoreProducts">
                Tampilkan lebih banyak
            </button>
            <div class="flex-grow border-t border-gray-300 opacity-35"></div>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage, router } from "@inertiajs/vue3";
import Userstatus from "~/components/UserStatus.vue";
import Comment from "./Comment.vue";
import { computed, ref } from "vue";

const Shop = "/assets/icon/Profile/icon.jpg";
const props = defineProps({
    detailProduct: Object,
    status: Object,
    relatedProduct: Array,
    joinedTime: String,
    totalProducts: Number,
    TotalUlasan: Number,
    comments: Array,
    TotalRating: Number,
});
const avatar = props.detailProduct.seller;

const tokoUrl = computed(() => {
    return avatar.photo_toko
        ? `/storage/Toko/Avatar/${avatar.photo_toko}`
        : null;
});
const products = ref([]);

const relatedProductsinfo = () => {
    products.value = props.relatedProduct.map((product) => ({
        id: product.id,
        image: product.first_image ? product.first_image.url : "",
        title: product.name,
        price: product.price,
        satuan: product.satuan.symbol,
        category: product.category.name,
        provinsi: product.seller.provinsi,
        kota: product.seller.kota,
    }));
};

// Call relatedProductsinfo to initialize products.value
relatedProductsinfo();

const visibleCount = ref(12);

const visibleProducts = computed(() => {
    return products.value.slice(0, visibleCount.value);
});

const loadMoreProducts = () => {
    visibleCount.value += 4;
};

const addToCart = async (product) => {
    console.log(product);
    try {
        await router.post(route("cart.store", product), {
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
    } catch (errors) {
        Swal.fire({
            toast: true,
            icon: "error",
            position: "top-end",
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false,
            title: "Failed to add to cart",
        });
        console.error(errors);
    }
};
const icon = "/assets/icon/Profile/icon.jpg";
</script>

<script>
export default {
    data() {
        return {
            user1: "",
            user2: "",
            user3: "",
            product1: "",
            product2: "",
            product3: "",
            product4: "",
            product5: "",
            product6: "",
            product7: "",
            product8: "",
            product9: "",
            product10: "",
            product11: "",
            product12: "",
            count: 1,
            currentImage: "",
            mainImage: "",
            statusProduct: "In Stock",
        };
    },
    mounted() {
        this.user1 = "/assets/img/users/ajiw.png";
        this.user2 = "/assets/img/users/aji.jpg";
        this.user3 = "/assets/img/users/profil.JPG";
        this.product1 = "/assets/products/pohon1.jpg";
        this.product2 = "/assets/products/pohon2.jpg";
        this.product3 = "/assets/products/pohon3.jpg";
        this.product4 = "/assets/products/pohon4.jpg";
        this.product5 = "/assets/products/pohon5.jpg";
        this.product6 = "/assets/products/pohon6.jpg";
        this.product7 = "/assets/products/product7.jpg";
        this.product8 = "/assets/products/product8.jpg";
        this.product9 = "/assets/products/product9.jpg";
        this.product10 = "/assets/products/product10.jpg";
        this.product11 = "/assets/products/product11.jpg";
        this.product12 = "/assets/products/product12.jpg";

        if (this.detailProduct.product_image.length > 0) {
            const firstImageUrl =
                this.detailProduct.product_image[0].url.startsWith("/")
                    ? this.detailProduct.product_image[0].url
                    : `/${this.detailProduct.product_image[0].url}`;

            this.mainImage = firstImageUrl;
            this.currentImage = this.mainImage;

            console.log("Initial main image:", this.mainImage);
            console.log("Initial current image:", this.currentImage);
        }
    },
    methods: {
        increment() {
            if (this.count < 10) {
                this.count++;
            } else if (this.count <= 10) {
                Swal.fire({
                    icon: "info",
                    title: "Perhatian",
                    text: "Anda telah mencapai jumlah minimal pembelian untuk produk ini",
                    allowEnterKey: true,
                    timer: 3000,
                    iconColor: "#ffe066",
                });
            }
        },
        decrement() {
            if (this.count > 1) {
                this.count--;
            } else if (this.count >= 1) {
                Swal.fire({
                    icon: "info",
                    title: "Perhatian",
                    text: "Anda telah mencapai jumlah maksimal pembelian untuk produk ini",
                    allowEnterKey: true,
                    timer: 3000,
                    iconColor: "#ffe066",
                });
            }
        }, //Code selesai disini untuk membatasi nilai max dan min

        // Di bawah ini adalah kode untuk menampilkan gambar ketika di hover
        changeMainImage(imageSrc) {
            this.currentImage = imageSrc.startsWith("/")
                ? imageSrc
                : `/${imageSrc}`;
        },
        // Reset the main image to the original main image
        resetMainImage() {
            this.currentImage = this.mainImage;
        },

        popupSuccess() {
            Swal.fire({
                title: "Sukses",
                text: "Produk berhasil di tambahkan",
                icon: "success",
                timer: 3000,
                allowEnterKey: true,
                iconColor: "#3CB72B",
                heightAuto: true,
            });
        },

        popupFavorite() {
            Swal.fire({
                iconColor: "#3CB72B",
                position: "top-end",
                icon: "success",
                title: "Sukses",
                text: "Produk berhasil di tambahkan ke favorite",
                showConfirmButton: false,
                timer: 2000,
            });
        },
    },
};
</script>
