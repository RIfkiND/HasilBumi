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
            <div class="grid grid-cols-2 gap-4">
                <div class="ml-2 md:mr-3 text-center">
                    <!-- Photo File Input -->
                    <input
                        type="file"
                        ref="photoInput"
                        class="hidden"
                        @change="selectPhoto"
                    />

                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="photo"
                    >
                    <div class="flex justify-center items-center gap-3">
                        <div v-if="!avatarUrl" class="avatar placeholder">
                          <div class="bg-slate-200 text-neutral-content rounded-full w-24 h-24 flex items-center justify-center">
                            <span class="text-2xl">{{ initial }}</span>
                          </div>
                        </div>
                    
                        <div v-else class="avatar">
                              <div class="w-24 rounded-full">

                          <img
                            class="block w-24 h-24 rounded-full m-auto shadow"
                            :src="avatarUrl"
                            :alt="$page.props.auth.user.name"
                          />
                           </div>
                        </div>
                      </div>
                    </label>

                        <div>
                            <button
                                type="button"
                            @click.prevent="showAvatar = true"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2"

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
                        <span class="mr-3">{{
                            $page.props.auth.user.name
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showForm = true"
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
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Tanggal Lahir</span>
                        <span class="mr-3">{{
                            $page.props.auth.user.tgl_lahir
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showDateForm = true"
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
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Jenis kelamin</span>
                        <span class="mr-3">{{
                            $page.props.auth.user.jenis_kelamin
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showGenderForm = true"
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
                    </div>
                    <hr
                        class="mt-6 border-b-1 w-full col-span-2 border-blueGray-300"
                    />
                    <h3 class="font-semibold text-text-grey text-lg">
                        Ubah kontak
                    </h3>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Email</span>
                        <span class="mr-3">{{
                            $page.props.auth.user.email
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
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
                                />
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">NomorHp</span>
                        <span class="mr-3">{{
                            $page.props.auth.user.no_hp
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
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
                    </div>
                </div>
            </div>
            <!-- form -->
        </div>
    </div>


    <transition name="modal">
        <div v-if="showAvatar" class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50">
          <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
            <h2 class="text-2xl font-bold mb-4">Avatar image</h2>
            <p class="text-md text-textColor opacity-70">Ubah Avatar Sesuai keinginan mu</p>
            <form @submit.prevent="upload" class="mt-8">
              <div class="mb-4">
                <label for="avatar_user" class="block text-gray-700">Upload Avatar</label>
                <input type="file" name="avatar_user" id="avatar_user" @change="handleFileChangeAvatar" class="form-control" />
                <img v-if="imagePreviewUrl" :src="imagePreviewUrl" alt="Avatar Preview" class="mt-4 w-full h-auto" />
              </div>
              <div class="flex justify-center flex-wrap gap-3">
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2" @click="showAvatar = false">Batal</button>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </transition>
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
                <form @submit.prevent="submit" class="mt-8">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700"
                            >Nama</label
                        >
                        <input
                            type="text"
                            id="name"
                            v-model="profile.name"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div class="flex justify-center flex-wrap gap-3">
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
                            @click="showForm = false"
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
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/3">
                <h2 class="text-2xl font-bold mb-4">Ubah Tanggal Lahir</h2>
                <p class="text-md text-textColor opacity-70">
                    Kamu hanya dapat mengatur tanggal lahir satu kali. Pastikan
                    tanggal lahir sudah benar.
                </p>
                <form @submit.prevent="submit" class="mt-8">
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
                    <div class="flex justify-center flex-wrap gap-3">
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
                            @click="showDateForm = false"
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
                <form @submit.prevent="submit" class="mt-8">
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700"
                            >Kelamin</label
                        >
                        <select
                            id="gender"
                            v-model="profile.jenis_kelamin"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        >
                            <option value="" disabled>Pilih Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="flex justify-center flex-wrap gap-3">
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
                            @click="showGenderForm = false"
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
import { ref, watch, computed, reactive } from "vue";
import { usePage, router, useForm } from "@inertiajs/vue3";
import { UploadFilled } from '@element-plus/icons-vue'
const page = usePage();
const initial = computed(() =>
    page.props.auth.user.name.charAt(0).toUpperCase()
);
const userId = page.props.auth.user.id;

const user = page.props.auth.user;
const avatarUrl = computed(() => {
  return user.avatar_user ? `/storage/User/Avatar/${user.avatar_user}` : null;
});

const birthDate = ref({
    day: null,
    month: null,
    year: null,
});

const birthform = computed(() => {
    if (birthDate.value.day && birthDate.value.month && birthDate.value.year) {
        return `${birthDate.value.day}-${birthDate.value.month}-${birthDate.value.year}`;
    } else {
        return null;
    }
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
//form
const showGenderForm = ref(false);
const showForm = ref(false);

const ShowPhoneForm = ref(false);
//form-end

//submit
const showAvatar = ref(false);

//upload
const imagePreviewUrl = ref(null);
const form = useForm({
  avatar_user: null,
});

function handleFileChangeAvatar(event) {
  form.avatar_user = event.target.files[0];
  if (form.avatar_user) {
    imagePreviewUrl.value = URL.createObjectURL(form.avatar_user);
  }
}

function upload() {
  const formData = new FormData();
  formData.append('avatar_user', form.avatar_user);
  formData.append("_method", 'PUT');

  router.post(route('user.edit', { id: userId }), formData, {
    onSuccess: () => {
      showAvatar.value = false;
    },
    onError: (errors) => {
      console.error(errors);
    },
    headers: {
      'Content-Type': 'multipart/form-data',
    },
  });
}

const profile = reactive({
    name: null,
    tgl_lahir:birthform,
    no_hp:null,
    jenis_kelamin:null
});
//end
function submit() {
    const updatedProfile = {};

    if (profile.name !== null && profile.name !== page.props.auth.user.name) {
        updatedProfile.name = profile.name;
    }

    if (
        profile.tgl_lahir !== null &&
        profile.tgl_lahir !== page.props.auth.user.tgl_lahir
    ) {
        updatedProfile.tgl_lahir = profile.tgl_lahir;
    }

    if (
        profile.no_hp !== null &&
        profile.no_hp !== page.props.auth.user.no_hp
    ) {
        updatedProfile.no_hp = profile.no_hp;
    }

    if (
        profile.jenis_kelamin !== null &&
        profile.jenis_kelamin !== page.props.auth.user.jenis_kelamin
    ) {
        updatedProfile.jenis_kelamin = profile.jenis_kelamin;
    }


    router.put(route("user.edit", { id: userId }), updatedProfile);
}
</script>
