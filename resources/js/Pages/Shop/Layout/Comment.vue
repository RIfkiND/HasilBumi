<style></style>
<template>
    <section
        class="float-left w-full max-w-lg py-5 mx-auto antialiased bg-white text-dark lg:py-16 font-inter"
    >
        <div class="max-w-2xl px-4 mx-auto">
            <div class="flex items-center justify-between mb-2">
                <h2
                    class="text-lg font-bold capitalize lg:text-2xl text-dark dark:text-white"
                >
                    komentar
                </h2>
            </div>
            <form class="relative mb-3" @submit.prevent="submitAddCommentForm">
                <input type="hidden" v-model="productId" />
                <div class="rating">
                    <input
                        type="radio"
                        name="rating-4"
                        class="bg-primaryColor mask mask-star-2"
                        v-for="star in 5"
                        :key="star"
                        :value="star"
                        v-model="star_ratings"
                    />
                </div>
                <div
                    class="relative px-3 pt-1 pb-4 mb-4 border-2 rounded-lg rounded-t-lg border-white-50"
                >
                    <div class="flex">
                        <textarea
                            id="comment"
                            v-model="comments"
                            rows="6"
                            class="w-full text-sm bg-white border-0 text-slate-300 focus:ring-0 focus:outline-none"
                            placeholder="Ketik pesan..."
                            required
                        >
                        </textarea>
                        <div
                            class="absolute top-0 right-0 float-right h-full mt-5 overflow-hidden -translate-y-12 border-2 rounded-lg w-50 border-white-50 translate-x-60 sm:hidden md:flex lg:flex"
                        >
                            <video
                                class="w-full h-full bg-center bg-cover"
                                ref="videoElement"
                                v-if="!isCameraOn"
                                autoplay
                            ></video>
                        </div>
                    </div>
                    <!-- icons untuk inputan file, audio dan camera -->
                    <div
                        class="absolute z-10 flex w-full space-x-2 -translate-y-2 left-4"
                    >
                        <span
                            class="hover:cursor-pointer"
                            @click="toggleCamera"
                            data-bs-toggle="tooltip"
                            data-bs-placement="bottom"
                            title="Rekaman video"
                        >
                            <svg
                                class="w-5 h-5 text-xs text-slate-200 hover:text-gray-400"
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
                                class="w-5 h-5 text-xs text-slate-200 hover:text-gray-400"
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
                        </span>
                        <label
                            class="hover:cursor-pointer"
                            for="image-file"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="File"
                        >
                            <svg
                                class="w-5 h-5 text-xs text-slate-200 hover:text-gray-400"
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
                        <input
                            type="file"
                            ref="fileInput"
                            accept="image/*"
                            id="image-file"
                            class="hidden"
                            @change="handleFileChange"
                            multiple
                        />
                        <span
                            class="hover:cursor-pointer"
                            @click="toggleMicrophone"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Perekam suara"
                        >
                            <svg
                                class="w-5 h-5 text-xs text-slate-200 hover:text-gray-400"
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
                                class="w-5 h-5 text-xs text-slate-200 hover:text-gray-400"
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
                    </div>
                </div>
                <button
                    type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-hoverPrimary rounded-md hover:bg-teal-dark"
                >
                    Kirim komentar
                </button>
            </form>
            <div
                class="divide-y-2 divide-white-50"
                v-for="comment in UserComment"
                :key="comment.id"
            >
                <article class="p-6 mt-5 text-base rounded-lg">
                    <footer class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <p
                                class="inline-flex items-center mr-3 text-sm font-semibold capitalize text-dark"
                            >
                                <img
                                    class="mr-2 bg-center bg-cover rounded-full w-7 h-7"
                                    :src="`/storage/User/Avatar/${comment.user.avatar_user}`"
                                    alt="Aji setiyawan"
                                />{{ comment.user.name }}
                            </p>
                            <p class="text-sm text-slate-200">
                                <time
                                    pubdate
                                    datetime="2022-02-08"
                                    title="February 8th, 2022"
                                    >{{ comment.formatted_created_at }}</time
                                >
                            </p>
                        </div>
                        <button
                            id="dropdownComment1Button"
                            data-dropdown-toggle="dropdownComment1"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Pengaturan"
                            class="relative inline-flex items-center justify-center w-4 h-4 p-3 text-sm font-medium text-center rounded-full text-slate-200 hover:text-slate-300 focus:outline-none hover:bg-white-50"
                            type="button"
                        >
                            <svg
                                class="absolute w-6 h-6"
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
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownComment1"
                            class="z-10 flex items-center justify-center hidden px-2 py-2 bg-white rounded-md shadow w-36"
                        >
                            <ul
                                class="block px-2 mt-3 space-y-1 text-sm text-left text-slate-300"
                                aria-labelledby="dropdownMenuIconHorizontalButton"
                            >
                                <li class="mx-7">
                                    <Link
                                        href="#"
                                        class="flex gap-2 py-2 text-slate-300 hover:bg-white-50 hover:cursor-pointer px-[35px] rounded-md text-center"
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
                                <li class="mx-7">
                                    <Link
                                        href="#"
                                        class="flex gap-2 py-2 text-slate-300 hover:bg-white-50 hover:cursor-pointer px-[35px] rounded-md text-center"
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
                                <li class="mx-7">
                                    <Link
                                        href="#"
                                        class="flex gap-2 py-2 text-slate-300 hover:bg-white-50 hover:cursor-pointer px-[35px] rounded-md text-center"
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

                    <template v-for="star in 5">
                        <span>
                            <i
                                v-if="star <= comment.star_rating"
                                class="fa-solid fa-star text-primaryColor"
                            ></i>
                            <i
                                v-else
                                class="fa-solid fa-star text-gray-400"
                            ></i>
                        </span>
                    </template>

                    <p class="text-slate-300">
                        {{ comment.comments }}
                    </p>
                    <div class="avatar" v-for="image in comment.rating_images">
                        <div class="w-24 pt-3 p-2 unded pt">
                            <img :src="`/${image.url}`" />
                        </div>
                    </div>
                    <div class="flex items-center mt-3 space-x-4">
                        <button
                            type="button"
                            class="flex items-center text-sm font-medium text-slate-200 hover:text-slate-300"
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
                            class="flex items-center text-sm font-medium text-slate-200 hover:text-slate-300"
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

<script setup>
import { router, Link, usePage } from "@inertiajs/vue3";
import { ref, computed } from "vue";
const props = defineProps({
    detailProduct: Object,
    UserComment: Array,
});
const CommentAvatar = computed(() => {
    return props.UserComment.user.avatar_user
        ? `/storage/User/Avatar/${props.UserComment.user.avatar_user}`
        : null;
});
const rating = ref(3);
const comments = ref("");
const star_ratings = ref("");
const images = ref([]);
const productId = ref(props.detailProduct.id);
const handleFileUpload = (event) => {
    const file = event.target.files[0];
    images.value.push(file);
};
const handleFileChange = (event) => {
    const fileList = event.target.files;
    images.value = Array.from(fileList);

    const imagePreviews = [];
    for (let i = 0; i < fileList.length; i++) {
        const url = URL.createObjectURL(fileList[i]);
        imagePreviews.push({ url });
    }
    previewImages.value = imagePreviews;
};

const submitAddCommentForm = async () => {
    const formData = new FormData();
    formData.append("product_id", productId.value);
    formData.append("comments", comments.value);
    formData.append("star_rating", star_ratings.value);
    for (const image of images.value) {
        formData.append("url[]", image);
    }

    try {
        await router.post(route("user.comment"), formData, {
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
                resetFormData();
            },
        });
    } catch (err) {
        console.log(err);
    }
};
const resetFormData = () => {
    comments.value = "";
    star_ratings.value = "";
    images.value = [];
};
</script>
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
                const stream = await navigator.mediaDevices.getUserMedia({
                    audio: true,
                });
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
                    this.videoStream =
                        await navigator.mediaDevices.getUserMedia({
                            video: true,
                        });
                    this.$refs.videoElement.srcObject = this.videoStream;
                } else {
                    this.videoStream
                        .getTracks()
                        .forEach((track) => track.stop());
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
