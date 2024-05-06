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
    <div class="footer-top bg-primaryColor"></div>
    <div class="flex items-center justify-center min-h-screen bg-white d-fixed font-inter">
      <div
        class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <Link :href="route('Home')" class="no-underline float-left mx-1 my-5 left-2 absolute">
            <div class="w-12 h-12 rounded-full hover:bg-white-50 hover:cursor-pointer text-3xl justify-center items-center flex">
                <i class='bx bx-left-arrow-alt text-dark'></i>
            </div>
        </Link>
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-12 mx-4">
          <span class="mb-2 text-4xl font-bold text-textColor">Register</span>
          <span class="font-light text-gray-400 mb-8">
            Register now with us for the best experience!
          </span>
          <form @submit.prevent="form.post(route('auth.register'))" method="POST">
          <div class="py-2">
            <label for="username" class="mb-2 text-md text-textColor after:content-['*'] after:text-pink after:ml-1">Username</label>
            <input
              type="text"
              class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
              name="username"
              id="username"
              v-model="form.name"
              autocomplate="false"
              required
            />
          </div>
          <div class="py-2">
            <label for="email" class="mb-2 text-md text-textColor after:content-['*'] after:text-pink after:ml-1">Email</label>
            <input
              type="email"
              class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer"
              name="email"
              id="email"
              v-model="form.email"
              autocomplate="false"
            />
            <span class="text-pink text-md hidden peer-invalid:block my-2">Masukan email yang valid</span>
          </div>
          <div class="row">
            <div class="col">
                <div class="py-2">
                    <label for="pass" class="mb-2 text-md text-textColor after:content-['*'] after:text-pink after:ml-1">Password</label>
                    <input
                    type="password"
                    name="pass"
                    id="pass"
                    v-model="form.password"
                    autocomplate="false"
                    required
                    class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
                    />
                </div>
            </div>
            <div class="col">
                <div class="py-2">
                    <label for="pass" class="mb-2 text-md text-textColor after:content-['*'] after:text-pink after:ml-1">Confirm Password</label>
                    <input
                    type="password"
                    name="pass"
                    id="pass"
                    autocomplate="false"
                    class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
                    required
                    />
                </div>
            </div>
          </div>
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2 hover:cursor-pointer" style="accent-color:#3CB72B;"/>
              <span class="text-md">I agree to <Link href="/terms-and-conditions" target="_blank" class="text-textColor text-decoration-none hover:text-teal hover:cursor-pointer">Terms and Conditions</Link></span>
            </div>
          </div>
          <button
            type="submit"
            :disabled="form.processing"
            class="w-full bg-teal text-md p-2 rounded-lg mb-3 text-white hover:bg-teal-dark"
          >
            Sign up
          </button>
        </form>
          <span class="text-center text-xs text-gray-300 mb-3">Or</span>
            <Link class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-white-50 no-underline text-slate-200 relative hover:border-2 hover:border-slate-200 hover:text-slate-300 mb-3" :href="route('google.login')">
                <span class="absolute text-center w-2 h-2 rounded-full mb-3 lg:left-[260px] md:left-[155px] sm:left-[180px] left-[90px]">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path fill="#EA4335 " d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z"/>
                    <path fill="#34A853" d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z"/>
                    <path fill="#4A90E2" d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z"/>
                    <path fill="#FBBC05" d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z"/>
                </svg>
                </span>
                <span>Sign in with Google</span>
            </Link>
          <div class="text-center text-gray-400">
            Already have an account?
            <span><Link :href="route('view.login')" class="text-textColor text-decoration-none hover:text-teal hover:cursor-pointer">Sign in</Link></span>
          </div>
        </div>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            :src="'Assets/img/bg-register.png'"
            alt="Petani Menanam Sayuran"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
            loading="lazy"
          />
        </div>
      </div>
    </div>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { reactive } from "vue";

defineProps({ errors: Object });

const form = useForm({
  name:null,
  email: null,
  password: null,
})


</script>
