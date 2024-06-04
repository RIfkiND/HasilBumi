<template>
    <div
        class="relative flex flex-col min-w-0 break-words w-full shadow-md rounded-lg bg-blueGray-100 border-0"
    >
        <div class="rounded-t bg-white mb-0 px-6 py-6">
            <div class="text-center flex justify-between">
                <h6 class="text-blueGray-700 text-xl font-bold">My Profile</h6>
            </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
            <form class="grid grid-cols-2 gap-4">
                <div class="ml-2 md:mr-3 text-center">
                    <!-- Photo File Input -->
                    <input
                        type="file"
                        ref="photoInput"
                        class="hidden"
                        @change="previewPhoto"
                    />

                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="photo"
                    >
                        <div class="flex justify-center items-center gap-3">
                            <div
                                v-if="!photoPreview"
                                class="avatar placeholder"
                            >
                                <div
                                    class="bg-neutral text-neutral-content rounded-full w-24 h-24 flex items-center justify-center"
                                >
                                    <span class="text-2xl">D</span>
                                </div>
                            </div>

                            <div v-if="photoPreview" class="avatar">
                                <span
                                    class="block w-24 h-24 rounded-full m-auto shadow"
                                    :style="{
                                        'background-size': 'cover',
                                        'background-repeat': 'no-repeat',
                                        'background-position': 'center center',
                                        'background-image': `url(${photoPreview})`,
                                    }"
                                ></span>
                            </div>
                        </div>
                    </label>

                    <div>
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2"
                            @click="selectPhoto"
                        >
                            Ganti poto
                        </button>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="font-semibold text-text-grey text-lg">
                        Ubah Biodata
                    </h3>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Nama</span>
                        <span class="mr-3">Ilham Fauzi</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showForm = true"
                            >Ubah</a
                        >
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Tanggal Lahir</span>
                        <span class="mr-3">10 agustus 2024</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showDateForm = true"
                            >Ubah tanggal lahir</a
                        >
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Jenis kelamin</span>
                        <span class="mr-3">Pria</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showGenderForm = true"
                            >Ubah</a
                        >
                    </div>
                    <hr
                        class="mt-6 border-b-1 w-full col-span-2 border-blueGray-300"
                    />
                    <h3 class="font-semibold text-text-grey text-lg">
                        Ubah kontak
                    </h3>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Email</span>
                        <span class="mr-3">baru@example.com</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            >Ubah</a
                        >
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">NomorHp</span>
                        <span class="mr-3">081111111111</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            >Ubah</a
                        >
                    </div>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>

    <transition name="modal">
        <div
            v-if="showForm"
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Ubah Nama</h2>

                <p class="text-md text-textColor opacity-70">
                    Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama
                    sudah benar.
                </p>
                <form @submit.prevent="submitForm" class="mt-8">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700"
                            >Nama</label
                        >
                        <input
                            type="text"
                            id="name"
                            v-model="newName"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="flex justify-center">
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                            @click="showForm = false"
                        >
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </transition>

    <transition name="modal">
        <div
            v-if="showDateForm"
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Ubah Tanggal Lahir</h2>
                <p class="text-md text-textColor opacity-70">
                    Kamu hanya dapat mengatur tanggal lahir satu kali. Pastikan
                    tanggal lahir sudah benar.
                </p>
                <form @submit.prevent="submitDateForm" class="mt-8">
                    <div class="flex justify-evenly flex-wrap">
                        <div class="mb-4">
                            <label for="day" class="block text-gray-700"
                                >Hari</label
                            >
                            <select
                                id="day"
                                v-model="birthDate.day"
                                class="mt-1 block w[100px] p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                                required
                            >
                                <option
                                    v-for="day in days"
                                    :key="day"
                                    :value="day"
                                >
                                    {{ day }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="month" class="block text-gray-700"
                                >Bulan</label
                            >
                            <select
                                id="month"
                                v-model="birthDate.month"
                                class="mt-1 block w-[200px] p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                                required
                            >
                                <option
                                    v-for="month in months"
                                    :key="month"
                                    :value="month"
                                >
                                    {{ month }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="year" class="block text-gray-700"
                                >Tahun</label
                            >
                            <select
                                id="year"
                                v-model="birthDate.year"
                                class="mt-1 block w-[100px] p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                                required
                            >
                                <option
                                    v-for="year in years"
                                    :key="year"
                                    :value="year"
                                >
                                    {{ year }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                            @click="showDateForm = false"
                        >
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </transition>

    <transition name="modal">
        <div
            v-if="showGenderForm"
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Ubah Kelamin</h2>
                <form @submit.prevent="submitGenderForm" class="mt-8">
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700"
                            >Kelamin</label
                        >
                        <select
                            id="gender"
                            v-model="gender"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        >
                            <option value="" disabled>Pilih Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                            @click="showGenderForm = false"
                        >
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </transition>
</template>

<script setup>
import { ref, watch } from "vue";

const photoInput = ref(null);
const photoPreview = ref(null);

const selectPhoto = () => {
    photoInput.value.click();
};

const previewPhoto = (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            photoPreview.value = e.target.result;
        };
        reader.readAsDataURL(file);
    }
};

const showForm = ref(false);
const newName = ref("");

const submitForm = () => {
    // Handle form submission logic here
    console.log(`New name: ${newName.value}`);
    showForm.value = false;
};

const showDateForm = ref(false);
const birthDate = ref({
    day: null,
    month: null,
    year: null,
});

// Days, months, and years arrays
const days = Array.from({ length: 31 }, (_, i) => i + 1);
const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];
const currentYear = new Date().getFullYear();
const years = Array.from(
    { length: currentYear - 1944 + 1 },
    (_, i) => 1944 + i
);

// Form submission handlers
const submitNameForm = () => {
    // Handle name form submission
    console.log(`Nama baru: ${newName.value}`);
    showNameForm.value = false;
};

const submitDateForm = () => {
    // Handle date form submission
    console.log(
        `Tanggal Lahir: ${birthDate.value.day}-${birthDate.value.month}-${birthDate.value.year}`
    );
    showDateForm.value = false;
};

const showGenderForm = ref(false);
const gender = ref("");

const submitGenderForm = () => {
    // Handle gender form submission
    console.log(`Kelamin: ${gender.value}`);
    showGenderForm.value = false;
};
</script>
