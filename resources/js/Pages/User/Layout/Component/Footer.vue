<style>

</style>

<template>
  <footer class="bg-white font-inter selection:text-white selection:bg-dark">
    <div
      class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8"
    >
      <hr class="text-slate-200">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div>
          <div>
            <div class="text-2xl font-bold" style="color: #292c2b">
              Hasil <span style="color: #3cb72b">Bumi.</span>
            </div>
          </div>

          <p class="mt-4 max-w-xs text-gray-500">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate
            quae nam molestias.
          </p>

          <ul class="mt-3 flex gap-6">
            <li>
              <a
                href="https://facebook.com"
                rel="noreferrer"
                target="_blank"
                class="text-dark transition hover:opacity-75"
              >
                <i class="bx bxl-facebook-circle bx-sm"></i>
              </a>
            </li>

            <li>
              <a
                href="https://instagram.com"
                rel="noreferrer"
                target="_blank"
                class="text-dark transition hover:opacity-75"
              >
                <i class="bx bxl-instagram bx-sm"></i>
              </a>
            </li>

            <li>
              <a
                href="#"
                rel="noreferrer"
                target="_blank"
                class="text-dark transition hover:opacity-75"
              >
                <i class="bx bxl-twitter bx-sm"></i>
              </a>
            </li>

            <li>
              <a
                href="https://github.com/ajigo77"
                rel="noreferrer"
                target="_blank"
                class="text-dark transition hover:opacity-75"
              >
                <i class="bx bxl-github bx-sm"></i>
              </a>
            </li>

            <li>
              <a
                href="https://api.whatsapp.com/send?phone=6281563929896"
                rel="noreferrer"
                target="_blank"
                class="text-dark transition hover:opacity-75"
              >
                <i class="bx bxl-whatsapp bx-sm"></i>
              </a>
            </li>
          </ul>
          <hr class="text-slate-200 rounded-md">
            <div class="gap-3 mt-5">
                <p class="text-dark font-bold">Penghargaan</p><br>
                <div class="block">
                    <div class="flex gap-3">
                        <div class="w-24 h-20 rounded-md bg-white-50 mb-3 overflow-hidden" id="congrast">
                            <img :src=sertifikat_1 alt="Sertifikat" class="w-full h-full bg-cover bg-center">
                        </div>
                        <div class="w-24 h-20 rounded-md bg-white-50 overflow-hidden" id="congrast">
                            <img :src=sertifikat_2 alt="Sertifikat" class="w-full h-full bg-cover bg-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
          <div>
            <p class="text-dark font-bold">Tautan Navigasi</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Halaman Beranda
                </a>
              </li>

              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Kategori Produk
                </a>
              </li>

              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Tentang Kami
                </a>
              </li>

              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Hubungi Kami
                </a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-bold text-dark">Company</p>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  About
                </a>
              </li>

              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Meet the Team
                </a>
              </li>

              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Accounts Review
                </a>
              </li>
            </ul>
          </div>

          <div>
            <p class="font-bold text-dark">Legal</p>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Kontak Kami
                </a>
              </li>
              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor" id="faq">
                  FAQ
                </a>
              </li>
              <li>
                <a href="#" class="text-textColor transition hover:text-primaryColor">
                  Live Chat
                </a>
              </li>
            </ul>
          </div>
          <div>
            <p class="font-bold text-dark">Informasi Kontak</p>
            <ul class="mt-6 space-y-4 text-sm text-left">
              <li>
                <a
                  href="#"
                  class="text-textColor transition hover:text-primaryColor flex"
                >
                  <i class="bx bx-home-alt bx-xm"></i> : Ciamis
                </a>
              </li>

              <li>
                <a
                  href="mailto:ajistwn301@gmail.com"
                  class="text-textColor transition hover:text-primaryColor flex"
                >
                  <i class="bx bx-envelope bx-xm"></i> : ajistwn301@gmail.com
                </a>
              </li>
            </ul>
          </div>
          <div>
            <p class="font-bold text-dark">Gaya Bahasa</p>
            <div>
              <div class="relative mt-1.5">
                <input
                  type="text"
                  list="HeadlineActArtist"
                  id="HeadlineAct"
                  class="w-full rounded-lg border-white-50 p-2 bg-white text-textColor sm:text-sm [&::-webkit-calendar-picker-indicator]:opacity-0 border-1 focus:border-1 focus:border-primaryColor outline-none focus:ring-1 focus:ring-primaryColor cursor-pointer"
                  placeholder="Pilih bahasa"
                />

                <span class="absolute inset-y-0 end-0 flex w-8 items-center right-0">
                  <i class="bx bxs-down-arrow text-[10px] text-right text-slate-200"></i>
                </span>
              </div>

              <datalist name="HeadlineAct" id="HeadlineActArtist">
                <option>
                    <a class="block w-full">Indonesia</a>
                </option>
                <option>
                    <a class="block w-full">English</a>
                </option>
              </datalist>
            </div>
          </div>
          <div>
            <p class="font-bold text-dark">Dark Mode</p>
            <label
              for="AcceptConditions"
              class="relative h-8 w-14 cursor-pointer rounded-full bg-white-50 transition [-webkit-tap-highlight-color:_transparent] has-[:checked]:bg-dark"
            >
              <input
                type="checkbox"
                id="AcceptConditions"
                class="peer sr-only [&:checked_+_span_svg[data-checked-icon]]:block [&:checked_+_span_svg[data-unchecked-icon]]:hidden"
              />

              <span
                class="absolute inset-y-0 start-0 z-10 m-1 inline-flex size-6 items-center justify-center rounded-full bg-white text-slate-200 transition-all peer-checked:start-6 peer-checked:text-green-600"
                id="AcceptConditions"
              >
                <i class="bx bx-moon"></i>
              </span>
            </label>
          </div>
        </div>
      </div>
    </div>
      <p class="flex justify-center items-center text-md text-slate-200 w-full p-3 bg-white-50">
        <span class="text-center mt-2">&copy; 2024. Team HasilBumi.</span>
      </p>
  </footer>
</template>

<script>
export default {
  data() {
    return {
      sertifikat_1: "",
      sertifikat_2: "",
    };
  },
  mounted() {
    this.sertifikat_1 = "/assets/img/sertifikat1.png";
    this.sertifikat_2 = "/assets/img/sertifikat2.png";
  },
};
</script>
