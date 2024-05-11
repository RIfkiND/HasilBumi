<template>
  <!-- breadcrumb -->
  <div class="container py-4 flex items-center gap-2 text-sm mt-5 font-inter">
    <Link :href="route('Home')">
      <i class="fa-solid fa-house text-slate-300"></i>
    </Link>
    <span class="text-sm text-slate-200">
      <i class="fa-solid fa-chevron-right"></i>
    </span>
    <Link>
      <span class="text-slate-200 font-medium hover:text-slate-300">Shop</span>
    </Link>
    <span class="text-sm text-slate-200">
      <i class="fa-solid fa-chevron-right"></i>
    </span>
    <Link>
      <span class="text-slate-200 font-medium hover:text-slate-300">Kategori</span>
    </Link>
    <span class="text-sm text-slate-200">
      <i class="fa-solid fa-chevron-right"></i>
    </span>
    <Link>
      <span class="text-slate-200 font-medium hover:text-slate-300">Kategori</span>
    </Link>
  </div>
  <!-- ./breadcrumb -->

  <!-- product-detail -->
  <div
    class="container grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 font-inter"
  >
    <div>
      <img :src="product1" alt="product" class="w-full rounded-md" />
      <div class="grid grid-cols-5 gap-4 mt-4">
        <img
          :src="product2"
          alt="product2"
          class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
        />
        <img
          :src="product3"
          alt="product2"
          class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
        />
        <img
          :src="product4"
          alt="product2"
          class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
        />
        <img
          :src="product5"
          alt="product2"
          class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
        />
        <img
          :src="product6"
          alt="product2"
          class="w-full cursor-pointer rounded-md bg-cover bg-center h-full hover:ring-2 hover:ring-primaryColor"
        />
      </div>
    </div>

    <div>
      <h2 class="text-3xl font-bold uppercase mb-2">pohon jati asli</h2>
      <div class="flex items-center mb-4">
        <div class="flex gap-1 text-sm text-primaryColor">
          <span><i class="fa-solid fa-star"></i></span>
          <span><i class="fa-solid fa-star"></i></span>
          <span><i class="fa-solid fa-star"></i></span>
          <span><i class="fa-solid fa-star"></i></span>
          <span><i class="fa-solid fa-star"></i></span>
          <Link
            Link
            class="mt-1/2 text-center text-sm text-dark mr-3 ml-2 hover:border-b-2 hover:border-primaryColor"
          >
            5.3
          </Link>
        </div>
        <div class="inline-block">
          <div class="grid grid-cols-3 divide-x gap-2 text-center">
            <span
              class="mt-1/2 text-center text-sm text-dark capitalize border-l border-l-1 px-1"
            >
              <Link
                class="text-center ml-3 mr-1 hover:border-b-2 hover:border-primaryColor text-dark"
                >5,3rb</Link
              >penilaian
            </span>
            <div class="mt-1/2 text-center text-sm text-dark capitalize px-1">
              <span class="text-center ml-3">5,8rb terjual</span>
            </div>
          </div>
        </div>
        <div></div>
      </div>
      <div class="space-y-2">
        <p class="text-dark font-semibold space-x-2">
          <span>Availability: </span>
          <span class="text-pink">In Stock</span>
        </p>
        <p class="space-x-2">
          <span class="text-dark font-semibold">Brand: </span>
          <span class="text-slate-300">Jati lokal</span>
        </p>
        <p class="space-x-2">
          <span class="text-dark font-semibold">Category: </span>
          <span class="text-slate-300">Perhutanan</span>
        </p>
        <p class="space-x-2">
          <span class="text-dark font-semibold">SKU: </span>
          <span class="text-slate-300">BE45VGRT</span>
        </p>
      </div>
      <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
        <p class="text-xl text-primaryColor font-semibold">Rp5.000,000</p>
        <p class="text-base text-gray-400 line-through">Rp9.500,000</p>
      </div>

      <p class="mt-4 text-slate-300">
        Explore keajaiban alam dengan produk kami yang terbuat dari bahan-bahan alami
        pilihan, menghadirkan kebaikan langsung dari tumbuhan ke dalam rutinitas harian
        Anda. Nikmati kelembutan dan keefektifan produk kami yang ramah lingkungan, sambil
        mendukung keberlanjutan alam.
      </p>

      <div class="mt-4">
        <h3 class="text-sm text-dark capitalize mb-2 font-semibold">Quantity</h3>
        <div
          class="flex border border-slate-200 text-slate-300 divide-x divide-slate-200 w-max"
        >
          <div
            class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none text-slate-300 active:bg-white-50 transition"
          >
            -
          </div>
          <div class="h-8 w-8 text-base flex items-center justify-center text-slate-300">
            1
          </div>
          <div
            class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none text-slate-300 active:bg-white-50 transition"
          >
            +
          </div>
        </div>
      </div>

      <div class="mt-6 flex gap-3 pt-3 pb-5">
        <Link
          class="bg-hoverPrimary text-white px-8 py-2 font-medium rounded-md hover:bg-primaryColor capitalize flex items-center gap-2 transition no-underline"
        >
          <i class="fa-solid fa-bag-shopping"></i> Beli sekarang
        </Link>
        <Link
          class="border-2 border-slate-200 text-slate-300 px-8 py-2 font-medium rounded capitalize flex items-center gap-2 hover:bg-white-50 no-underline group"
        >
          <i class="bx bx-shopping-bag text-slate-300 bx-xs outline-none"></i>
          <span class="group-hover:text-slate-300 outline-none">masukan keranjang</span>
        </Link>
      </div>
    </div>
  </div>
  <!-- ./product-detail -->

  <!-- description -->
  <div class="container pb-16 font-inter">
    <h3 class="border-b border-slate-300 font-roboto text-dark pb-3 font-semibold">
      Product details
    </h3>
    <div class="w-full pt-6">
      <div class="text-dark">
        <p>
          Dalam setiap tetes produk kami yang berasal dari keajaiban alam, terdapat
          kebaikan langsung dari tumbuhan yang menginspirasi kecantikan dan kesehatan.
          Dipersembahkan dengan cinta dan dedikasi, produk kami menawarkan pengalaman unik
          yang merangkul kekayaan alami tanaman yang tumbuh di sekitar kita. Setiap bahan
          dipilih dengan teliti, memastikan kualitas terbaik yang memberikan manfaat
          optimal untuk kulit dan tubuh Anda.
        </p>
        <p>
          Kami menghormati keberagaman alam dengan mempertahankan kemurnian bahan alami
          dalam setiap produk kami. Dengan penelitian mendalam dan praktik berkelanjutan,
          kami menghadirkan solusi alami untuk perawatan kulit dan kecantikan, menjadikan
          pengalaman perawatan diri Anda menjadi lebih menyegarkan dan berkesan. Tanpa
          tambahan bahan kimia yang berbahaya, produk kami memberikan kelembutan dan
          nutrisi yang dibutuhkan oleh kulit Anda.
        </p>
        <p>
          Dengan harapan untuk mempromosikan keberlanjutan dan kesadaran lingkungan, kami
          juga berkomitmen untuk menggunakan kemasan ramah lingkungan yang dapat didaur
          ulang. Bergabunglah dengan kami dalam perjalanan menuju kecantikan yang bersih,
          sehat, dan berkelanjutan, sambil merayakan keajaiban alam yang mempesona dari
          tumbuhan di sekitar kita.
        </p>
      </div>
      <!-- component -->
      <div class="flex flex-col font-inter">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
          <div class="py-2 inline-block min-w-full">
            <div class="overflow-hidden">
              <table class="w-20 h-20 table-auto text-dark text-sm mt-10 divide-y-2 divide-white-50">
                <thead class="text-slate-300">
                  <tr class="capitalize text-sm">
                    <th scope="col" class="py-2 px-4 font-semibold">nama produk</th>
                    <th scope="col" class="py-2 px-4 font-semibold">
                      harga &#40;Rp&#41;
                    </th>
                    <th scope="col" class="py-2 px-4 font-semibold">rating</th>
                    <th scope="col" class="py-2 px-4 font-semibold">ulasan</th>
                    <th scope="col" class="py-2 px-4 font-semibold">
                      kebijakan pengembalian
                    </th>
                    <th scope="col" class="py-2 px-4 font-semibold uppercase">sku</th>
                    <th scope="col" class="py-2 px-4 font-semibold">satuan</th>
                    <th scope="col" class="py-2 px-4 font-semibold">deskripsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b border-white-50 capitalize">
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm font-light text-gray-900"
                    >
                      pohon jati
                    </td>
                    <td
                      class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                    >
                      5.000,000
                    </td>
                    <td
                      class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                    >
                      5/10
                    </td>
                    <td
                      class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                    >
                      5500
                    </td>
                    <td
                      class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                    >
                      Garansi 1 tahun
                    </td>
                    <td
                      class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                    >
                      02BJDBC12
                    </td>
                    <td
                      class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                    >
                      kg
                    </td>
                    <td
                      class="text-sm text-slate-300 font-light px-6 py-4 whitespace-nowrap"
                    >
                      Kayu yang awet tidak mudah rapuh
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./description -->

  <!-- related product -->
  <div class="container pb-16 font-inter">
    <h2 class="text-2xl font-medium text-dark capitalize mb-6">produk lainnya</h2>
    <!-- Show produk -->
    <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <div class="bg-white shadow rounded-md overflow-hidden" v-for="index in 20" :key="index">
            <div class="relative flex justify-center items-center group">
            <div class="w-full h-[170px] overflow-hidden">
                <img
                :src="product1"
                alt="product 1"
                class="w-full h-full bg-cover bg-center transition hover:cursor-pointer hover:brightness-50 group-hover:brightness-50"
                />
            </div>
            <div class="absolute gap-2 hidden group-hover:flex">
                <Link
                href="#"
                class="text-white text-lg w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                title="view product"
                >
                <i class="fa-solid fa-magnifying-glass"></i>
                </Link>
                <Link
                href="#"
                class="text-white text-lg w-10 h-10 rounded-full bg-dark flex items-center justify-center opacity-60 hover:opacity-90 transition"
                title="add to wishlist"
                >
                <i class="fa-solid fa-heart"></i>
                </Link>
            </div>
            </div>
            <div class="pt-3 pb-3 px-3">
            <Link class="no-underline">
                <h4 class="capitalize font-semibold text-xl mb-1 text-dark transition">
                    pohon jati asli | untuk bahan material
                </h4>
            </Link>
            <div class="capitalize text-[10px] flex gap-2 text-center">
                <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >bebas pengembalian</span
                >
                <span
                class="px-1 border-1 text-primaryColor rounded-sm border-primaryColor text-[10px] italic"
                >cicilan</span
                >
            </div>
            <div class="flex items-baseline space-x-2 capitalize mb-2 mt-2">
                <span class="text-md text-primaryColor font-semibold">Rp650.000</span>
                <span class="text-sm text-slate-200 line-through">rp.1.500,000</span>
            </div>
            <div class="flex items-center divide-white-50 space-x-2 divide-x-2">
                <div class="flex gap-1 text-xs text-[#F3CA52]">
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                <span><i class="fa-solid fa-star"></i></span>
                </div>
                <div class="text-xs text-slate-300 ml-3 px-2">1,5rb Terjual</div>
            </div>
            </div>
            <div class="flex items-center divide-white-50 space-x-2 divide-x-2 pb-3">
                <div class="flex gap-1 text-xs text-[#37B5B6] ml-4">
                    <i class="bx bxs-car"></i>
                    <span class="px-1">1-3 hari</span>
                </div>
                <div class="text-xs ml-3 px-2 capitalize text-center flex text-slate-300 gap-1">
                    <svg class="w-4 h-4 text-xs text-slate-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                    </svg> Bandung
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- ./related product -->
</template>
<script setup>
import { Link } from "@inertiajs/vue3";

const product1 = "/assets/products/pohon1.jpg";
const product2 = "/assets/products/pohon2.jpg";
const product3 = "/assets/products/pohon3.jpg";
const product4 = "/assets/products/pohon4.jpg";
const product5 = "/assets/products/pohon5.jpg";
const product6 = "/assets/products/pohon6.jpg";
const product7 = "/assets/products/product7.jpg";
const product8 = "/assets/products/product8.jpg";
const product9 = "/assets/products/product9.jpg";
const product10 = "/assets/products/product10.jpg";
const product11 = "/assets/products/product11.jpg";
const product12 = "/assets/products/product12.jpg";

</script>
