<style>
.footer-top {
  display: inline-block;
  width: 100%;
  height: 220px;
  position: fixed;
  top: 0;
}
</style>

<template>
  <div class="footer-top bg-teal-dark"></div>
  <div class="flex items-center justify-center min-h-screen bg-white font-inter">
    <div
      class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
    >
      <Link
        :href="route('Home')"
        class="no-underline float-left mx-3 my-4 left-3 absolute"
      >
        <div
          class="w-12 h-12 rounded-full hover:bg-white-50 hover:cursor-pointer text-3xl justify-center items-center flex"
        >
          <i class="bx bx-left-arrow-alt text-dark"></i>
        </div>
      </Link>
      <!-- left side -->
      <div class="flex flex-col justify-center p-8 md:p-12">
        <img
          :src="'Assets/img/ilustration/ilustration7.png'"
          class="d-flex justify-center align-center mx-auto mb-3"
          alt="Design key"
          style="width: 180px; height: 180px"
        />
        <span class="mb-2 text-2xl font-bold text-textColor text-center fs-3"
          >Reset Password</span
        >
        <span class="font-light text-gray-400 mb-8 text-center text-sm">
          The security of your account is very important to us!
        </span>
        <div class="py-2">
          <label for="email" class="text-md text-textColor mb-2"
            >Password <span class="text-danger">*</span>
          </label>
          <input
            type="email"
            class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium text-md focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
            name="email"
            id="email"
            autocomplate="false"
          />
        </div>
        <!-- Aktifkan untuk validasi email-->
        <!-- <span class="text-center d-flex my-1 text-danger"> We cannot find your email</span> -->
        <Link
          href="#"
          class="w-full bg-teal text-md p-2 mt-2 rounded-lg text-white font-medium bg-gradient-to-t from-primaryColor to-hoverPrimary hover:from-hoverPrimary hover:to-primaryColor text-decoration-none"
        >
          <span class="d-flex justify-center align-items-center"> Reset Password </span>
        </Link>
        <Link
          :href="route('view.login')"
          class="flex justify-center align-center mx-auto mt-4 text-textColor text-decoration-none hover:text-teal"
        >
          <i class="bx bx-chevron-left bx-sm"></i>Kembali ke login
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
