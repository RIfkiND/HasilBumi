<template>
    <div class="flex items-center justify-center min-h-screen bg-white">
      <div
        class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-12">
          <span class="mb-2 text-4xl font-bold text-textColor">Login</span>
          <span class="font-light text-gray-400 mb-8">
            Sign in now with us for the best experience!
          </span>
          <div class="py-2">
            <label for="email" class="mb-2 text-md text-textColor">Email</label>
            <input
              type="email"
              class="w-full bg-white p-2 border border-gray-300 rounded-md focus:border-colorBorder"
              name="email"
              id="email"
              autocomplate="false"
            />
          </div>
          <div class="py-2">
            <label for="pass" class="mb-2 text-md text-textColor">Password</label>
            <input
              type="password"
              name="pass"
              id="pass"
              autocomplate="false"
              class="w-full bg-white p-2 border border-gray-300 rounded-md focus:border-colorBorder"
            />
          </div>
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2 hover:cursor-pointer" style="accent-color:#3CB72B;"/>
              <span class="text-md">Remember me</span>
            </div>
            <span class="text-md text-black hover:cursor-pointer hover:text-textColor hover:underline">Forget password</span>
          </div>
          <button
            class="w-full bg-teal text-md p-2 rounded-lg mb-3 text-white hover:bg-teal-dark"
          >
            Sign In
          </button>
          <span class="text-center text-xs text-gray-300 mb-3">Or</span>
          <button
            class="w-full border border-gray-300 text-md p-2 rounded-lg mb-3 hover:bg-black hover:text-textColor hover:border-colorBorder"
          >
            <img :src="'Assets/img/google.svg'" alt="Icons-google" class="w-6 h-6 inline mr-2" />
            <a :href="route('google.login')" class="text-md">Sign in with Google</a>
          </button>
          <div class="text-center text-gray-400">
            Don't have an account?
            <span class="text-black hover:cursor-pointer hover:text-textColor hover:underline"><Link :href="route('register')">Sign up</Link></span>
          </div>
        </div>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            :src="'Assets/img/bg-login.png'"
            alt="Petani Memetik Buah"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
        </div>
      </div>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
</script>
<style scoped>

</style>
