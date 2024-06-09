<template>
  <!-- <Header/> -->
  <div
    class="flex flex-col items-center border-b bg-dark text-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32 font-inter"
  >
    <a href="#" class="text-4xl font-bold text-primaryColor capitalize">Checkout</a>
    <div
      class="mt-2 py-3 text-xs sm:mt-0 sm:ml-auto sm:text-base bg-slate-300 p-5 rounded-full"
    >
      <div class="relative">
        <ul
          class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4"
        >
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a
              class="flex h-6 w-6 items-center justify-center rounded-full bg-primaryColor text-xs font-semibold text-white"
              href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M5 13l4 4L19 7"
                /></svg
            ></a>
            <span class="font-semibold text-white capitalize">Belanja</span>
          </li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 text-slate-200"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a
              class="flex h-6 w-6 items-center justify-center rounded-full bg-primaryColor text-xs font-semibold text-white ring ring-border-secondary ring-offset-2"
              href="#"
              >2</a
            >
            <span class="font-semibold text-white capitalize">Shipping</span>
          </li>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 text-slate-200"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a
              class="flex h-6 w-6 items-center justify-center rounded-full bg-border-secondary text-xs font-semibold text-white"
              href="#"
              >3</a
            >
            <span class="font-semibold text-white capitalize">Payment</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32 mt-10 font-inter">
    <div class="px-4 pt-20">
      <p class="text-xl font-semibold">Ringkasan Pesanan</p>
      <p class="text-slate-300">
        Periksa item Anda. Dan pilih metode pengiriman yang sesuai.
      </p>
      <div
        class="mt-8 rounded-lg border bg-white px-2 sm:px-6 divide-y-2 divide-white-50"
      >
        <div v-for="index in 4" :key="index" class="py-2">
          <div class="flex flex-col bg-white sm:flex-row py-2">
            <label class="flex cursor-pointer label sm:flex-row">
              <input
                type="checkbox"
                class="checkbox checkbox-primary mx-4 border-2 border-white-50"
                id="myChecked"
              />
            </label>
            <img
              class="m-2 h-24 w-28 rounded-md border object-cover object-center"
              src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
              alt=""
            />
            <div class="flex w-full flex-col px-4 py-4">
              <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
              <span class="float-right text-slate-200 text-sm">Varian : Putih, XL</span>
              <p class="text-lg font-bold text-primaryColor mt-1">Rp350.000</p>
            </div>
          </div>
        </div>
        <div class="flex flex-row py-2">
          <label class="flex cursor-pointer label">
            <input
              type="checkbox"
              class="checkbox checkbox-primary mx-4 border-2 border-white-50"
              id="select-all"
            />
            <span class="flex flex-row text-slate-300 text-lg font-semibold"
              >Pilih semuanya (4)</span
            >
          </label>
        </div>
      </div>
      <div class="mt-5">
        <p class="mt-8 text-lg font-semibold capitalize">Metode pengiriman</p>
        <p class="text-slate-300 border-b-2 pb-4 border-white-50">
          Silahkan pilih untuk metode pengiriman produk anda
        </p>
        <form class="mt-3 grid gap-6">
          <div class="relative">
            <input class="peer hidden" id="radio_1" type="radio" name="radio" />
            <span
              class="peer-checked:border-primaryColor absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-slate-200 bg-white"
            ></span>
            <label
              class="peer-checked:border-2 peer-checked:border-primaryColor flex cursor-pointer border-2 border-white-50 rounded-lg p-4"
              for="radio_1"
            >
              <img class="w-14 object-contain rounded-md" :src="pengiriman1" alt="JNE" />
              <div class="ml-5">
                <span class="mt-2 font-semibold text-slate-300">JNE</span>
                <p class="text-slate-200 text-sm leading-6 pr-10">
                  Layanan pengiriman dengan biaya lebih murah namun waktu pengiriman lebih
                  lama
                </p>
              </div>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_2" type="radio" name="radio" />
            <span
              class="peer-checked:border-primaryColor absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-slate-200 bg-white"
            ></span>
            <label
              class="peer-checked:border-2 peer-checked:border-primaryColor flex cursor-pointer border-2 border-white-50 rounded-lg p-4"
              for="radio_2"
            >
              <img
                class="w-14 object-contain rounded-md"
                :src="pengiriman2"
                alt="antar aja"
              />
              <div class="ml-5">
                <span class="mt-2 font-semibold text-slate-300">Antar aja</span>
                <p class="text-slate-200 text-sm leading-6 pr-10">
                  Layanan pengiriman yang menjanjikan barang sampai tujuan pada hari
                  berikutnya.
                </p>
              </div>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_3" type="radio" name="radio" />
            <span
              class="peer-checked:border-primaryColor absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-slate-200 bg-white"
            ></span>
            <label
              class="peer-checked:border-2 peer-checked:border-primaryColor flex cursor-pointer border-2 border-white-50 rounded-lg p-4"
              for="radio_3"
            >
              <img class="w-14 object-contain rounded-md" :src="pengiriman3" alt="J&T" />
              <div class="ml-5">
                <span class="mt-2 font-semibold text-slate-300">J&amp;T</span>
                <p class="text-slate-200 text-sm leading-6 pr-10">
                  Layanan pengiriman cepat dan andal dengan estimasi pengiriman yang lebih
                  singkat
                </p>
              </div>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_4" type="radio" name="radio" />
            <span
              class="peer-checked:border-primaryColor absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-slate-200 bg-white"
            ></span>
            <label
              class="peer-checked:border-2 peer-checked:border-primaryColor flex cursor-pointer border-2 border-white-50 rounded-lg p-4"
              for="radio_4"
            >
              <img
                class="w-14 object-contain rounded-md"
                :src="pengiriman4"
                alt="Ninja Xpress"
              />
              <div class="ml-5">
                <span class="mt-2 font-semibold text-slate-300"
                  >Ninja <span class="italic">Xpress</span></span
                >
                <p class="text-slate-200 text-sm leading-6 pr-10">
                  Layanan pengiriman ekspres yang menjanjikan barang sampai tujuan lebih
                  cepat
                </p>
              </div>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_5" type="radio" name="radio" />
            <span
              class="peer-checked:border-primaryColor absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-slate-200 bg-white"
            ></span>
            <label
              class="peer-checked:border-2 peer-checked:border-primaryColor flex cursor-pointer border-2 border-white-50 rounded-lg p-4"
              for="radio_5"
            >
              <img
                class="w-14 object-contain rounded-md"
                :src="pengiriman5"
                alt="Sicepat"
              />
              <div class="ml-5">
                <span class="mt-2 font-semibold text-slate-300"
                  >Sicepat <span class="italic">Xpres</span></span
                >
                <p class="text-slate-200 text-sm leading-6 pr-10">
                  Layanan pengiriman untuk paket besar dan berat dengan waktu pengiriman
                  yang cepat dan harga terjangkau
                </p>
              </div>
            </label>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-10 px-4 lg:mt-0 pt-10">
    <!-- Metode Pembayaran -->
      <div class="mb-32">
        <p class="mt-8 text-lg font-semibold capitalize">Metode pembayaran</p>
        <p class="text-slate-300 border-b-2 pb-4 border-white-50">
          Silahkan pilih untuk metode pembayaran
        </p>
        <form class="mt-4">
          <div class="flex flex-row flex-wrap gap-3">
            <div class="relative">
              <input class="peer hidden" id="radio_6" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_6"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran1"
                    alt="Alfamart"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_7" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_7"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran2"
                    alt="BCA"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_8" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_8"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran3"
                    alt="BNI"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_9" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_9"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran4"
                    alt="Indomart"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_10" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_10"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran5"
                    alt="Qris"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_11" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_11"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran6"
                    alt="Visa"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_12" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_12"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran7"
                    alt="Shoppe Pay"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_13" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_13"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran8"
                    alt="Permata Bank"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_14" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_14"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran9"
                    alt="Ovo"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_15" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_15"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran10"
                    alt="akulaku"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_16" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_16"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran11"
                    alt="Gopay"
                  />
                </div>
              </label>
            </div>
            <div class="relative">
              <input class="peer hidden" id="radio_17" type="radio" name="radio" />
              <span
                class="peer-checked:border-primaryColor absolute block border-slate-200 bg-white"
              ></span>
              <label
                class="peer-checked:border-2 peer-checked:border-primaryColor cursor-pointer border-2 border-white-50 rounded-lg"
                for="radio_17"
              >
                <div class="w-20 h-14 rounded-md relative">
                  <img
                    class="w-full h-full object-contain rounded-md absolute"
                    :src="pembayaran12"
                    alt="Kredivo"
                  />
                </div>
              </label>
            </div>
          </div>
        </form>
      </div>
        <!-- Total -->
      <p class="text-xl font-semibold">Rincian Pembayaran</p>
      <p class="text-slate-300 border-b-2 pb-4 border-white-50">
        Untuk pesanan Anda silahkan selesaikan dengan memberikan pembayaran
      </p>
      <div>
        <div class="mt-8 border-white-50 divide-y-2 divide-white-50">
          <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">Harga barang</p>
            <p class="font-semibold text-slate-300">Rp399.000</p>
          </div>
          <!-- <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">Diskon</p>
            <p class="font-semibold text-slate-300">Rp19.950</p>
          </div>
          <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">Voucher</p>
            <p class="flex font-semibold text-slate-300">
              <i class="bx bxs-discount flex bx-sm mr-2 text-primaryColor"></i>
              5%
            </p>
          </div> -->
          <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">
              biaya pengiriman
            </p>
            <p class="font-semibold text-error"><span class="mr-2">-</span>Rp18.000</p>
          </div>
          <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">biaya admin</p>
            <p class="font-semibold text-error"><span class="mr-2">-</span>Rp3.000</p>
          </div>
          <div class="flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">subtotal</p>
            <p class="font-semibold text-slate-300">Rp399.000</p>
          </div>
          <div class="mt-6 flex items-center justify-between py-3">
            <p class="text-md font-semibold text-slate-300 capitalize">
              total pembayaran
            </p>
            <div class="block">
              <p class="text-2xl font-bold text-dark">Rp400.050</p>
              <p class="text-sm font-medium text-dark">Anda hemat (Rp19.950)</p>
            </div>
          </div>
        </div>
      </div>
      <button
        class="mt-4 mb-8 w-full rounded-md border-2 border-primaryColor text-primaryColor hover:text-white hover:bg-primaryColor px-6 py-3 font-medium text-md transition"
      >
        Bayar sekarang
      </button>
    </div>
  </div>
  <Footer />
</template>

<script setup>
import Footer from "@/User/Layout/Component/Footer.vue";
import Header from "@/User/Layout/Component/Header.vue";

// Pengiriman
const pengiriman1 = "/assets/pengiriman/jne.png";
const pengiriman2 = "/assets/pengiriman/antaraja.png";
const pengiriman3 = "/assets/pengiriman/jdant.jpg";
const pengiriman4 = "/assets/pengiriman/ninja.png";
const pengiriman5 = "/assets/pengiriman/sicepat.png";

// Pembayaran
const pembayaran1 = "/assets/pembayaran/alfamart.png";
const pembayaran2 = "/assets/pembayaran/bca.png";
const pembayaran3 = "/assets/pembayaran/bni.png";
const pembayaran4 = "/assets/pembayaran/indomart.png";
const pembayaran5 = "/assets/pembayaran/qris.png";
const pembayaran6 = "/assets/pembayaran/visa.png";
const pembayaran7 = "/assets/pembayaran/shoppepay.png";
const pembayaran8 = "/assets/pembayaran/permatabank.png";
const pembayaran9 = "/assets/pembayaran/ovo.png";
const pembayaran10 = "/assets/pembayaran/akulaku.png";
const pembayaran11 = "/assets/pembayaran/gopay.png";
const pembayaran12 = "/assets/pembayaran/kredivo.png";
</script>
