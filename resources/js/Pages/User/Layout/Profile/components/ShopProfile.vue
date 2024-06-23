<template>
    <div
        v-if="$page.props.auth.seller"
        class="relative flex flex-col min-w-0 break-words w-full shadow-md rounded-lg bg-blueGray-100 border-0"
    >
        <div class="rounded-t bg-white mb-0 px-6 py-6">
            <div class="text-center flex justify-between">
                <h6 class="text-blueGray-700 text-xl font-bold">Toko</h6>
            </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
            <div class="grid grid-cols-2 gap-4">
                <div class="ml-2 md:mr-3 text-center">
                    <!-- Photo File Input -->
                    <div class="mb-6">
                        <input
                            type="file"
                            ref="photoInput"
                            class="hidden"
                            @input="avatar.avatar_user = $event.target.files[0]"
                        />

                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="photo"
                        >
                            <div class="flex justify-center items-center gap-3">
                                <div v-if="!tokoUrl" class="avatar placeholder">
                                    <div
                                        class="bg-slate-200 text-neutral-content rounded-full w-24 h-24 flex items-center justify-center"
                                    >
                                        <span class="text-2xl">
                                            {{ initial }}</span
                                        >
                                    </div>
                                </div>

                                <div v-else class="avatar">
                                    <div class="w-24 rounded-full">
      
                                <img
                                  class="block w-24 h-24 rounded-full m-auto shadow"
                                  :src="tokoUrl"
                                  :alt="$page.props.auth.seller.nama_toko"
                                />
                                 </div>
                              </div>
                            </div>
                        </label>
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2"
                        @click.prevent="showTokoPhoto = true"
                        >
                            Ganti Photo 
                        </button>
                    </div>

                    <div class="relative">
                        <label
                            for="poto-ktp"
                            class="text-slate-300 after:content-['*'] after:text-pink after:ml-1 mb-4"
                        >
                            Foto Toko
                            <!-- <i
                                class="bx bx-camera bx-sm text-slate-200 absolute right-2 float-right top-8 z-10 sm:text-xm cursor-pointer"
                            ></i> -->
                        </label>
                    
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="font-semibold text-text-grey text-lg">
                        Ubah Toko
                    </h3>
                    <div class="flex items-center text-sm">
                        <span class="w-[114px]">Nama Toko</span>
                        <span class="mr-3">{{
                            $page.props.auth.seller.nama_toko
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showFormShop = true"
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
                        <span class="w-[114px]">Alamat Toko</span>
                        <span class="mr-3">{{
                            $page.props.auth.seller.provinsi
                        }} - {{
                            $page.props.auth.seller.kota 
                        }}</span>
                        <a
                            href="#"
                            class="text-primaryColor hover:text-hoverPrimary font-semibold"
                            @click.prevent="showAddressForm = true"
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
                    <h3 class="font-semibold text-text-grey text-lg">Kontak</h3>
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
                            $page.props.auth.seller.no_telp_toko
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
        <div class="flex items-center justify-center mt-2 mb-4">
            <button class="btn-no-full">Simpan</button>
        </div>
    </div>
    <div v-else></div>
    <transition name="modal">
        <div v-if="showTokoPhoto " class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50">
          <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
            <h2 class="text-2xl font-bold mb-4">Avatar image</h2>
            <p class="text-md text-textColor opacity-70">Ubah Avatar Sesuai keinginan mu</p>
            <form @submit.prevent="uploadtoko" class="mt-8">
              <div class="mb-4">
                <label for="avatar_user" class="block text-gray-700">Upload Avatar</label>
                <input type="file" name="avatar_user" id="avatar_user" @change="handleFileChangetoko" class="form-control" />
                <img v-if="imagePreviewUrl" :src="imagePreviewUrl" alt="Avatar Preview" class="mt-4 w-full h-auto" />
              </div>
              <div class="flex justify-center flex-wrap gap-3">
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2" @click="showTokoPhoto  = false">Batal</button>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </transition>
    <transition name="modal">
        <div
            v-if="showFormShop"
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white p-8 rounded shadow-lg z-100 w-1/4">
                <h2 class="text-2xl font-bold mb-4">Ubah Nama</h2>

                <p class="text-md text-textColor opacity-70">
                    Kamu hanya dapat mengubah nama Toko 1 kali pastikan nama
                    sudah benar
                </p>
                <form @submit.prevent="submit" class="mt-8">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700"
                            >Nama Toko</label
                        >
                        <input
                            type="text"
                            id="name"
                            v-model="profile.name"
                            class="mt-1 block w-full p-2 bg-white border border-[#333] rounded-md focus:border-primaryColor focus:ring focus:ring-primaryColor"
                            required
                        />
                    </div>
                    <div
                        class="flex justify-center flex-wrap lg:flex-wrap gap-3"
                    >
                        <button
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                            @click="showFormShop = false"
                        >
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                            @click="showFormShop = false"
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
            v-if="showAddressForm"
            class="fixed inset-0 flex items-center justify-center bg-text-grey bg-opacity-50 z-50"
        >
            <div class="bg-white max-w-full p-8 rounded shadow-lg z-100 w-1/3">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Ubah Alamat Toko</h2>
                    <p class="text-md text-textColor opacity-70">
                        Kamu hanya dapat mengubah alamat 1 kali
                    </p>
                    <form @submit.prevent="submit" class="mt-8">
                        <div
                            class="grid lg:grid-cols-2 gap-4 grid-cols-1 items-center"
                        >
                            <div class="mb-4">
                                <label
                                    for="telp"
                                    class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                                    >No.Telp_Toko
                                </label>
                                <i
                                    class="bx bx-phone bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer"
                                ></i>
                                <input
                                    type="number"
                                    name="notelp"
                                    min="0"
                                    max="999999999999"
                                    maxlength="12"
                                    v-model="profile.no_telp_toko"
                                    class="h-10 border mt-1 rounded pl-2 pr-6 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                                    placeholder="+62"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="kode-pos"
                                    class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                                    >Kode Pos</label
                                >
                                <i
                                    class="bx bx-mail-send bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer"
                                ></i>
                                <input
                                    type="number"
                                    name="kode-pos"
                                    maxlength="4"
                                    v-model="profile.kode_pos"
                                    class="transition-all flex items-center h-10 border mt-1 rounded pl-2 pr-6 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                                    placeholder="**53"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="city"
                                    class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                                    >Kota
                                </label>
                                <select
                                    v-model="profile.kota"
                                    class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                                    aria-label="Default select example"
                                >
                                    <option value="Bandung" selected>Bandung</option>
                                    <option value="Bekasi">Bekasi</option>
                                    <option value="Bogor">Bogor</option>
                                    <option value="Cianjur">Cianjur</option>
                                    <option value="Ciamis">Ciamis</option>
                                    <option value="Cirebon">Cirebon</option>
                                    <option value="Garut">Garut</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="provinsi"
                                    class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                                    >Provinsi
                                </label>
                                <select
                                    v-model="profile.provinsi"
                                    class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                                    aria-label="Default select example"
                                >
                                    <option value="Nanggroe Aceh Darussalam">
                                        Nanggroe Aceh Darussalam
                                    </option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Riau">Riau</option>
                                    <option value="kepulauan Riau<">Kepulauan Riau</option>
                                    <option value="Jawa Barat" selected>
                                        Jawa Barat
                                    </option>
                                    <option value="9">Jawa Tengah</option>
                                    <option value="9">Jawa Timur</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="flex justify-center flex-wrap lg:flex-wrap gap-3"
                        >
                            <button
                                type="button"
                                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                                @click="showAddressForm = false"
                            >
                                Batal
                            </button>
                            <button
                                type="submit"
                                class="inline-flex items-center px-4 py-2 bg-white text-primaryColor border-2 border-primaryColor rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 mr-2"
                                @click="showAddressForm = false"
                            >
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </transition>
</template>

<script setup>
import { ref, computed, reactive, onMounted } from "vue";
import { usePage, router, useForm } from "@inertiajs/vue3";
import { Plus } from "@element-plus/icons-vue";
import { ElMessage } from "element-plus";

const page = usePage();
const photoInput = ref(null);
const photoPreview = ref(null);
const initial = computed(() =>
    page.props.auth.seller.nama_toko.charAt(0).toUpperCase()
);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~Image~~~~~~~~~~~~~~~~~~
const selectPhoto = () => {
    photoInput.value.click();
};
const photoUrl = computed(() => {
    return (
        photoPreview.value ||
        (page.props.auth.user.avatar_user
            ? page.props.auth.seller.photo_toko
            : null)
    );
});
//~~~~~~~~~~~~~~~~~~~~~~~~imageUpload
const TokoImage= ref('')
const handleFileChange = (file) => {
    console.log(file)
    TokoImage.value.push(file)
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~END Image~~~~~~~~~~~
const showFormShop = ref(false);
const showAddressForm = ref(false);
const showTokoPhoto = ref(false);
//form-end

//submit
const sellerId = page.props.auth.seller.id;
const seller = page.props.auth.seller;
const tokoUrl = computed(() => {
  return seller.photo_toko ? `/storage/Toko/Avatar/${seller.photo_toko}` : null;
});
//submit


//upload
const imagePreviewUrl = ref(null);
const toko = useForm({
    photo_toko: null,
});
function handleFileChangetoko(event) {
  toko.photo_toko = event.target.files[0];
  if ( toko.photo_toko) {
    imagePreviewUrl.value = URL.createObjectURL( toko.photo_toko);
  }
}

function uploadtoko() {
  const formData = new FormData();
  formData.append('photo_toko',  toko.photo_toko);
  formData.append("_method", 'PUT');

  router.post(route('seller.edit', { id: sellerId }), formData, {
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
    no_hp: null,
    kode_pos: null,
    kota: null,
    provinsi: null,
    foto_ktp: null,
});

function submit() {
    const updatedProfile = {};

    if (profile.name !== null && profile.name !== page.props.auth.user.name) {
        updatedProfile.name = profile.name;
    }

    if (
        profile.no_hp !== null &&
        profile.no_hp !== page.props.auth.user.no_hp
    ) {
        updatedProfile.no_hp = profile.no_hp;
    }

    router.put(route("user.edit", { id: userId }), updatedProfile);
}
</script>
