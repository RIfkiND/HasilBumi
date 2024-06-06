<style></style>
<template>
  <section
    class="bg-white text-dark py-5 lg:py-16 antialiased font-inter float-left w-full max-w-lg mx-auto"
  >
    <div class="max-w-2xl mx-auto px-4">
      <div class="flex justify-between items-center mb-2">
        <h2 class="text-lg lg:text-2xl font-bold text-dark dark:text-white capitalize">
          komentar
        </h2>
      </div>
      <form class="mb-3 relative" method="#" action="#">
        <div
          class="pb-5 pt-1 px-3 mb-4 rounded-lg rounded-t-lg border-2 border-white-50 relative"
        >
          <div class="flex">
            <textarea
              id="comment"
              rows="6"
              class="w-full text-sm text-slate-300 border-0 focus:ring-0 focus:outline-none bg-white py-2"
              placeholder="Ketik pesan..."
              required
            >
            </textarea>
            <!-- <div
              class="w-50 h-full mt-5 rounded-lg border-2 border-white-50 overflow-hidden float-right absolute top-0 right-0 translate-x-60 -translate-y-12 sm:hidden md:flex lg:flex"
            >
              <video
                class="w-full h-full bg-cover bg-center"
                ref="videoElement"
                v-if="!isCameraOn"
                autoplay
              ></video>
            </div> -->
          </div>
          <!-- icons untuk inputan file, audio dan camera -->
          <div class="flex absolute left-4 -translate-y-2 space-x-2 z-10 w-full mt-4">
            <!-- <span
              class="hover:cursor-pointer"
              @click="toggleCamera"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="Rekaman video"
            >
              <svg
                class="w-5 h-5 text-slate-200 text-xs hover:text-gray-400"
                v-if="!isCameraOn"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"
                />
                <path
                  stroke="currentColor"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
              </svg>
              <svg
                class="w-5 h-5 text-slate-200 text-xs hover:text-gray-400"
                v-else
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="currentColor"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"
                />
                <path
                  stroke="currentColor"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                />
              </svg>
            </span> -->
            <label
              class="hover:cursor-pointer"
              for="image-file"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Image"
            >
              <svg
                class="w-5 h-5 text-slate-200 text-xs hover:text-gray-400"
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
                  d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8"
                />
              </svg>
            </label>
            <input type="file" accept="*/image" id="image-file" class="hidden" />
            <span
              class="hover:cursor-pointer"
              @click="toggleMicrophone"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Perekam suara"
            >
              <svg
                class="w-5 h-5 text-slate-200 text-xs hover:text-gray-400 mr-5"
                v-if="!isMicrophoneOn"
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
                  d="M19 9v3a5.006 5.006 0 0 1-5 5h-4a5.006 5.006 0 0 1-5-5V9m7 9v3m-3 0h6M11 3h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3h-2a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"
                />
              </svg>
              <svg
                class="w-5 h-5 text-slate-200 text-xs hover:text-gray-400"
                v-else
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
                  d="M19 9v3a5.006 5.006 0 0 1-5 5h-4a5.006 5.006 0 0 1-5-5V9m7 9v3m-3 0h6M11 3h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3h-2a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"
                />
              </svg>
            </span>
            <div class="flex gap-2">
              <span class="text-slate-200 text-[14px] font-inter">Beri Rating : </span>
              <div class="rating w-16">
                <input
                  type="radio"
                  name="rating-2"
                  class="mask mask-star-2 bg-[#F3CA52]"
                />
                <input
                  type="radio"
                  name="rating-2"
                  class="mask mask-star-2 bg-[#F3CA52]"
                  checked
                />
                <input
                  type="radio"
                  name="rating-2"
                  class="mask mask-star-2 bg-[#F3CA52]"
                />
                <input
                  type="radio"
                  name="rating-2"
                  class="mask mask-star-2 bg-[#F3CA52]"
                />
                <input
                  type="radio"
                  name="rating-2"
                  class="mask mask-star-2 bg-[#F3CA52]"
                />
              </div>
            </div>
          </div>
        </div>
        <button
          type="submit"
          class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-hoverPrimary rounded-md hover:bg-teal-dark mb-5"
        >
          Kirim komentar
        </button>
      </form>
      <div class="divide-y-2 divide-white-50" v-for="index in 2" :key="index">
        <article class="p-6 text-base rounded-lg">
          <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center mb-3 space-x-5">
              <div class="flex">
                <div class="avatar mr-4">
                  <div class="w-8 h-8 rounded-full bg-cover bg-center ring-2 ring-primaryColor ring-offset-white ring-offset-2">
                    <img :src="user1" alt="Aji setiyawan" />
                  </div>
                </div>
                <div class="block">
                  <span
                    class="items-center text-sm text-dark font-semibold capitalize"
                  >
                    Aji setiyawan
                  </span>
                  <div class="flex gap-1">
                    <i class="bx bxs-star text-[10px] text-[#F3CA52]"></i>
                    <i class="bx bxs-star text-[10px] text-[#F3CA52]"></i>
                    <i class="bx bxs-star text-[10px] text-[#F3CA52]"></i>
                    <i class="bx bxs-star-half text-[10px] text-[#F3CA52]"></i>
                  </div>
                </div>
              </div>
              <p class="text-sm text-slate-200 flex mb-2">
                <time pubdate datetime="2022-02-08" title="February 8th, 2022"
                  >Feb 8, 2022</time
                >
              </p>
            </div>
            <div class="dropdown">
              <button
                type="button"
                tabindex="0"
                role="button"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Opsi"
                class="inline-flex items-center p-3 text-sm font-medium text-center text-slate-200 hover:text-slate-300 rounded-full focus:outline-none w-4 h-4 hover:bg-white-50 relative justify-center"
              >
                <svg
                  class="w-6 h-6 absolute"
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
                    stroke-width="2"
                    d="M12 6h.01M12 12h.01M12 18h.01"
                  />
                </svg>
              </button>
              <ul
                tabindex="0"
                class="dropdown-content z-[1] menu shadow rounded-box w-44 bg-white text-slate-300 mx-3"
              >
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"
                      />
                    </svg>
                    Edit
                  </Link>
                </li>
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"
                      />
                    </svg>
                    Remove
                  </Link>
                </li>
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z"
                      />
                    </svg>
                    Report
                  </Link>
                </li>
              </ul>
            </div>
          </footer>
          <p class="text-slate-300">
            Aku baru saja mencoba produk baru dari petani lokal di daerah kita. Rasanya
            sangat segar dan alami!
          </p>
          <div class="flex items-center mt-3 space-x-4">
            <button
              type="button"
              class="flex items-center text-sm text-slate-200 hover:text-slate-300 font-medium"
            >
              <svg
                class="mr-1 w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"
                />
              </svg>
              Balas
            </button>
            <button
              type="button"
              class="flex items-center text-sm text-slate-200 hover:text-slate-300 font-medium"
            >
              <svg
                class="w-4 h-4 mr-1"
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
                  d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"
                />
              </svg>
              Like
            </button>
          </div>
        </article>
        <article class="p-6 mb-3 text-base">
          <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center mb-3 space-x-5">
              <div class="flex">
                <div class="avatar mr-4">
                  <div class="w-8 h-8 rounded-full bg-cover bg-center ring-2 ring-primaryColor ring-offset-white ring-offset-2">
                    <img :src="user2" alt="Aji setiyawan" />
                  </div>
                </div>
                <div class="block">
                  <span
                    class="items-center text-sm text-dark font-semibold capitalize"
                  >
                    Rifki naufal dzaki
                  </span>
                  <div class="flex gap-1">
                    <i class="bx bxs-star text-[10px] text-[#F3CA52]"></i>
                    <i class="bx bxs-star text-[10px] text-[#F3CA52]"></i>
                    <i class="bx bxs-star-half text-[10px] text-[#F3CA52]"></i>
                  </div>
                </div>
              </div>
              <p class="text-sm text-slate-200 flex mb-2">
                <time pubdate datetime="2022-02-08" title="February 8th, 2022"
                  >Feb 8, 2022</time
                >
              </p>
            </div>
            <div class="dropdown">
              <button
                type="button"
                tabindex="0"
                role="button"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Opsi"
                class="inline-flex items-center p-3 text-sm font-medium text-center text-slate-200 hover:text-slate-300 rounded-full focus:outline-none w-4 h-4 hover:bg-white-50 relative justify-center"
              >
                <svg
                  class="w-6 h-6 absolute"
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
                    stroke-width="2"
                    d="M12 6h.01M12 12h.01M12 18h.01"
                  />
                </svg>
              </button>
              <ul
                tabindex="0"
                class="dropdown-content z-[1] menu shadow rounded-box w-44 bg-white text-slate-300 mx-3"
              >
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"
                      />
                    </svg>
                    Edit
                  </Link>
                </li>
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"
                      />
                    </svg>
                    Remove
                  </Link>
                </li>
                <li>
                  <Link
                    href="#"
                    class="flex gap-2 text-slate-300 hover:text-slate-300 hover:cursor-pointer px-[35px] rounded-md text-center"
                  >
                    <svg
                      class="w-5 h-5 text-slate-300"
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
                        d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z"
                      />
                    </svg>
                    Report
                  </Link>
                </li>
              </ul>
            </div>
          </footer>
          <p class="text-slate-300">
            Produknya adalah madu organik murni. Sangat lezat dan terasa begitu alami
            tanpa tambahan bahan kimia.
          </p>
          <div class="flex items-center mt-3 space-x-4">
            <button
              type="button"
              class="flex items-center text-sm text-slate-200 hover:text-slate-300 font-medium"
            >
              <svg
                class="mr-1.5 w-3.5 h-3.5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 18"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"
                />
              </svg>
              Balas
            </button>
            <button
              type="button"
              class="flex items-center text-sm text-slate-200 hover:text-slate-300 font-medium"
            >
              <svg
                class="w-4 h-4 mr-1"
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
                  d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"
                />
              </svg>
              Like
            </button>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  data() {
    return {
      //untuk real-time audio
      isMicrophoneOn: false,

      //untuk real-time camera
      isCameraOn: false,
      videoStream: null,
      user1: "",
      user2: "",
      user3: "",
    };
  },
  methods: {
    async toggleMicrophone() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        const audioTracks = stream.getAudioTracks();
        if (audioTracks.length > 0) {
          audioTracks[0].enabled = !this.isMicrophoneOn;
          this.isMicrophoneOn = !this.isMicrophoneOn;
        }
      } catch (error) {
        console.error("Error accessing microphone:", error);
      }
    },

    async toggleCamera() {
      try {
        if (!this.isCameraOn) {
          this.videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
          this.$refs.videoElement.srcObject = this.videoStream;
        } else {
          this.videoStream.getTracks().forEach((track) => track.stop());
          this.$refs.videoElement.srcObject = null;
        }
        this.isCameraOn = !this.isCameraOn;
      } catch (error) {
        console.error("Error accessing camera:", error);
      }
    },
  },
  mounted() {
    this.user1 = "/assets/img/users/ajiw.png";
    this.user2 = "/assets/img/users/aji.jpg";
    this.user3 = "/assets/img/users/profil.JPG";
  },
};
</script>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
