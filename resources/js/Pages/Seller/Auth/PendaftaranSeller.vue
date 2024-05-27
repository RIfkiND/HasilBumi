<style>
/*Tambahkan style jika perlu*/
</style>

<template>
  <!-- component -->
  <div class="bg-teal-dark -z-50 absolute"></div>
    <div class="min-h-screen bg-white p-6 flex items-center justify-center font-inter relative z-50">
    <div class="container max-w-screen-lg m-auto py-4">
      <div class="bg-white rounded-md shadow-lg py-5 px-4 p-5 md:p-8 mb-5">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="p-2 py-2">
            <div class="card-person ml-2 md:mx-auto">
                <div class="-mt-5 flex">
                    <Link :href="route('Home')">
                        <div class="w-12 h-12 rounded-full hover:bg-white-50 hover:cursor-pointer text-3xl justify-center items-center flex">
                            <i class='bx bx-left-arrow-alt text-dark'></i>
                        </div>
                    </Link>
                    <div class="block ml-5">
                        <h2 class="text-[25px] font-bold mb-0 text-dark">Pendaftaran Seller</h2>
                        <p class="text-sm text-slate-300">Daftarkan dirimu sekarang!</p>
                    </div>
                </div>
                <div>
                    <img :src="sellerIlustration" alt="Gambar" class="w-full h-full bg-center bg-cover">
                </div>
            </div>
          </div>
          <div class="mr-5 lg:col-span-2">
            <div class="grid gap-3 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-3 relative">
                <label
                  for="full_name"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Nama lengkap</label
                >
                <i class='bx bx-user bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer'></i>
                <input
                  type="text"
                  name="full_name"
                  id="full_name"
                  class="h-10 border mt-1 rounded pl-2 pr-10 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                />
              </div>
              <div class="md:col-span-2 relative">
                <label
                  for="full_name"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Nama Toko</label
                >
                <i class='bx bx-store bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer'></i>
                <input
                  type="text"
                  name="nama_toko"
                  id="nameToko"
                  class="h-10 border mt-1 rounded pl-2 pr-10 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                />
              </div>
              <div class="md:col-span-3 relative">
                <label
                  for="telp"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >No.Telp
                </label>
                <i class='bx bx-phone bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer'></i>
                <input
                  type="number"
                  name="notelp"
                  min="0"
                  max="999999999999"
                  maxlength="12"
                  id="telp"
                  class="h-10 border mt-1 rounded pl-2 pr-6 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder="+62"
                />
              </div>
              <div class="md:col-span-2 relative">
                <label
                  for="kode-pos"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Kode Pos</label
                >
                <i class='bx bx-mail-send bx-sm text-slate-200 absolute right-3 float-right top-8 sm:text-xm cursor-pointer'></i>
                <input
                  type="number"
                  name="kode-pos"
                  maxlength="4"
                  id="kode-pos"
                  class="transition-all flex items-center h-10 border mt-1 rounded pl-2 pr-6 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder="**53"
                />
              </div>
              <div class="md:col-span-3">
                <div class="md:col-span-3">
                    <label
                        for="city"
                        class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                        >Kota
                    </label>
                    <select id="city" class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none" aria-label="Default select example">
                        <option value="1" selected>Bandung</option>
                        <option value="2">Bekasi</option>
                        <option value="3">Bogor</option>
                        <option value="4">Cianjur</option>
                        <option value="5">Ciamis</option>
                        <option value="6">Cirebon</option>
                        <option value="7">Garut</option>
                    </select>
                </div>
              </div>
              <div class="md:col-span-2">
                <div class="md:col-span-2">
                    <label
                        for="provinsi"
                        class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                        >Provinsi
                    </label>
                  <select id="provinsi" class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none" aria-label="Default select example">
                        <option value="1">Nanggroe Aceh Darussalam</option>
                        <option value="2">Sumatera Utara</option>
                        <option value="3">Sumatera Selatan</option>
                        <option value="4">Sumatera Barat</option>
                        <option value="5">Bengkulu</option>
                        <option value="6">Riau</option>
                        <option value="7">Kepulauan Riau</option>
                        <option value="8" selected>Jawa Barat</option>
                        <option value="9">Jawa Tengah</option>
                        <option value="9">Jawa Timur</option>
                    </select>
                </div>
              </div>
            <div class="md:col-span-3 relative">
                <label
                  for="person-poto"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  > Foto Anda
                    <i class='bx bx-camera bx-sm text-slate-200 absolute right-3 float-right top-8 z-10 sm:text-xm cursor-pointer'></i>
                  </label>
                <div class="h-10 border mt-1 rounded px-2 w-full bg-white outline-none relative flex py-[6px]" id="potan">
                    <input
                        type="file"
                        accept="image/*"
                        name="potoPoto"
                        id="person-poto"
                        class="text-transparent pl-1 pr-5 cursor-pointer hidden"
                        placeholder=""
                    />
                    <div id="viewPersonPoto"></div>
                </div>
            </div>
            <div class="md:col-span-2 relative">
                <label
                  for="poto-ktp"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >
                  Foto KTP
                  <i class='bx bx-camera bx-sm text-slate-200 absolute right-2 float-right top-8 z-10 sm:text-xm cursor-pointer'></i>
                  </label
                >
                <div class="h-10 border mt-1 rounded px-2 w-full bg-white outline-none relative flex py-[6px]" id="pokan">
                    <input
                        type="file"
                        accept="image/*"
                        name="potoktp"
                        id="poto-ktp"
                        class="text-transparent bg-cover bg-center cursor-pointer hidden"
                        placeholder=""
                    />
                    <div id="viewPotoKtp"></div>
                </div>
            </div>
              <div class="md:col-span-5">
                <div class="inline-flex items-center">
                  <input type="checkbox" name="acc" id="acc" class="accent-teal" />
                  <label for="acc" class="ml-2 text-[13px] text-slate-300"
                    >Saya setuju dengan persyaratan ini</label
                  >
                </div>
              </div>

              <div class="float-left">
                <div class="inline-flex items-end">
                  <button
                    class="bg-teal hover:bg-teal-dark active:bg-teal text-white font-semibold py-2 px-5 rounded-md"
                    type="submit" id="btn"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<Footer />
</template>

<script setup>
  import { onMounted } from 'vue';
  import { Link } from '@inertiajs/vue3';
  import Footer  from "@/User/Layout/Component/Footer.vue";
  import Navbar  from "@/User/Layout/Component/Header.vue";
  const sellerIlustration = "/assets/img/ilustration/ilustration6.png";
  onMounted(() => {
    // Poto sendiri
    const inputFilePoto = document.getElementById('person-poto');
    const imagePreview = document.getElementById('viewPersonPoto');
    const potan = document.getElementById('potan');

    // Poto KTP
    const potoKtp = document.getElementById('poto-ktp');
    const viewPotoKtp = document.getElementById('viewPotoKtp');
    const pokan = document.getElementById('pokan');

    inputFilePoto.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.classList.add('h-32', 'object-cover', 'rounded-sm', 'bg-cover','bg-center','justify-self-start','relative','hover:brightness-50','hover:transition');
          potan.classList.add('py-5','items-center', 'justify-items-start', 'flex', 'justify-start','h-36');
          imagePreview.appendChild(img);
        }
        reader.readAsDataURL(file);
      }
    }),

    potoKtp.addEventListener('change', function() {
        const file = this.files[0];
      if (file) {
          const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
          img.src = e.target.result;
            img.classList.add('h-32', 'object-cover', 'rounded-sm', 'bg-cover','bg-center','justify-self-start','relative','hover:brightness-50','hover:transition');
          pokan.classList.add('py-5','items-center', 'justify-items-start', 'flex', 'justify-start','h-36');
          viewPotoKtp.appendChild(img);
        }
        reader.readAsDataURL(file);
      }
    })
  });
</script>
