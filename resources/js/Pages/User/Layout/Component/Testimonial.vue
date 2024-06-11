<style></style>
<template>
  <!-- Star Testimonial -->
  <section
    class="bg-grey h-full selection:bg-dark selection:text-white font-inter"
    for="faq"
  >
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
      <h2 class="text-4xl font-extrabold text-dark sm:text-5xl mb-4 text-center">
        Apa kata mereka?
      </h2>
      <p class="text-gray-400 fs-6 text-wrap text-center" style="margin-bottom: 85px">
        Beberapa orang yang telah menggunakan layanan kami dan memberikan feedback yang
        positif, Lorem ipsum dolor sit amet.
      </p>
      <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
        <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 bg-white">
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users1" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">Ali Husain</p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <i class="bx bx-star text-[#F3CA52]"></i>

                  <span class="text-sm text-dark ml-2">3/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Saya sangat senang dengan layanan yang diberikan oleh perusahaan ini. Mereka
            sangat responsif dan membantu saya menyelesaikan masalah dengan cepat dan
            efisien.
          </p>
        </blockquote>

        <blockquote
          class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 bg-white selection:bg-dark selection:text-white"
        >
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users2" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">
                Fauzan Fadilah
              </p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <i class="bx bx-star text-[#F3CA52]"></i>

                  <span class="text-sm text-dark ml-2">4/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Produk yang ditawarkan sangat berkualitas dan sesuai dengan yang saya
            harapkan. Saya sangat puas dengan pengalaman belanja di sini
          </p>
        </blockquote>

        <blockquote
          class="rounded-lg bg-gray-50 p-6 sm:p-8 bg-white shadow-md selection:bg-dark selection:text-white"
        >
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users1" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">Angga permana</p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <i class="bx bx-star text-[#F3CA52]"></i>

                  <span class="text-sm text-dark ml-2">2/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Tim mereka sangat profesional dan penuh dengan ide-ide kreatif. Mereka
            membantu kami mengembangkan strategi yang efektif dan berhasil meningkatkan
            penjualan kami secara signifikan!
          </p>
        </blockquote>
        <blockquote
          class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 bg-white selection:bg-dark selection:text-white"
        >
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users2" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">Novianti</p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <span class="text-sm text-dark ml-2">5/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Pelayanan pelanggan mereka luar biasa! Saya selalu merasa didengar dan
            didukung setiap kali menghubungi mereka. Terima kasih atas profesionalisme dan
            perhatian yang diberikan.
          </p>
        </blockquote>
        <blockquote
          class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 bg-white selection:bg-dark selection:text-white"
        >
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users2" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">
                Robert Albert ngabert
              </p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <span class="text-sm text-dark ml-2">2/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Produk mereka tidak hanya memenuhi harapan, tetapi juga melebihinya! Saya
            sangat terkesan dengan kualitas dan inovasi yang ditampilkan dalam setiap
            produk yang mereka tawarkan.
          </p>
        </blockquote>
        <blockquote
          class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 bg-white selection:bg-dark selection:text-white"
        >
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div
                class="w-12 rounded-full ring ring-primaryColor ring-offset-2"
              >
                <img alt="" :src="users1" class="rounded-full object-cover" />
              </div>
            </div>
            <div>
              <p class="mt-0.5 text-lg font-medium text-dark capitalize">Stev jobs</p>
              <div class="block justify-center gap-0.5 text-primaryColor">
                <div class="star flex">
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>
                  <i class="bx bxs-star text-[#F3CA52]"></i>

                  <i class="bx bx-star text-[#F3CA52]"></i>
                  <span class="text-sm text-dark ml-2">4/5</span>
                </div>
              </div>
            </div>
          </div>

          <p class="mt-4 text-slate-300">
            Saya tidak ragu untuk merekomendasikan perusahaan ini kepada siapa pun yang
            mencari solusi yang andal dan berkualitas tinggi. Mereka benar-benar
            memberikan nilai tambah bagi bisnis kami.
          </p>
        </blockquote>
      </div>
    </div>
  </section>
  <!-- End Testimonial -->
</template>
<script>
export default {
  data() {
    return {
      users1: "",
      users2: "",
    };
  },
  mounted() {
    this.users1 = "/assets/img/users/ajiw.png";
    this.users2 = "/assets/img/users/aji.jpg";
  },
};
</script>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
