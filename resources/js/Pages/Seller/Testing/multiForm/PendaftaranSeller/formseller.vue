<style>
/*Tambahkan style jika perlu*/
</style>

<template>
  <!-- component -->
  <div class="min-h-screen bg-white p-6 flex items-center justify-center font-inter">
    <div class="container max-w-screen-lg mx-auto p-3">
      <div class="bg-white rounded-md shadow-lg p-4 px-4 py-5 md:p-8 mb-5">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="p-2">
            <div class="card-person ml-2 md:mx-auto">
                <div class="-mt-5">
                    <h2 class="text-[28px] font-bold mb-0 text-dark">Pendaftaran Seller</h2>
                    <p class="text-sm text-slate-300">Daftarkan dirimu sekarang!</p>
                </div>
                <div class="mt-3">
                    <div
                        class="w-full h-[190px] border-3 border-dashed bg-white-50 border-slate-200 rounded-md mt-4 mb-2 flex justify-center items-center"
                    >
                        <label for="input-foto" class="block m-auto">
                            <i class="bx bxs-camera-plus text-5xl text-slate-200 cursor-pointer ml-[13px]"></i>
                            <p class="text-sm text-slate-200 text-center after:content-['*'] after:ml-1 after:text-pink">Foto anda</p>
                            <input type="file" accept="image/*" class="w-full h-full cursor-pointer text-transparent hidden" id="input-foto">
                        </label>
                    </div>
                    <div
                        class="w-full h-[190px] border-3 border-dashed bg-white-50 border-slate-200 rounded-md mt-4 flex justify-center items-center" id="previewGambar"
                    >
                        <label for="input-foto" class="block m-auto">
                            <i class="bx bxs-camera-plus text-5xl text-slate-200 cursor-pointer ml-1"></i>
                            <p class="text-sm text-slate-200 text-center after:content-['*'] after:ml-1 after:text-pink">Foto KTP</p>
                            <input type="file" accept="image/*" class="w-full h-full cursor-pointer text-transparent hidden" id="input-foto">
                        </label>
                    </div>
                </div>
            </div>
          </div>
          <div class="mr-5 lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label
                  for="full_name"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Nama lengkap</label
                >
                <input
                  type="text"
                  name="full_name"
                  id="full_name"
                  class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                />
              </div>

              <div class="md:col-span-5">
                <label
                  for="email"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Email</label
                >
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder=""
                />
              </div>

              <div class="md:col-span-3">
                <label
                  for="password"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Password</label
                >
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder=""
                />
              </div>

              <div class="md:col-span-2">
                <label
                  for="telp"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >No.Telp</label
                >
                <input
                  type="tel"
                  maxlength="12"
                  name="notelp"
                  id="telp"
                  class="h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder="+62"
                />
              </div>

              <div class="md:col-span-2">
                <div class="md:col-span-2">
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

              <div class="md:col-span-1">
                <label
                  for="kode-pos"
                  class="text-slate-300 after:content-['*'] after:text-pink after:ml-1"
                  >Kode Pos</label
                >
                <input
                  type="text"
                  name="kode-pos"
                  id="kode-pos"
                  class="transition-all flex items-center h-10 border mt-1 rounded px-2 w-full bg-white focus:ring-2 focus:ring-primaryColor outline-none"
                  placeholder="**53"
                />
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
</template>

<script setup>

</script>
