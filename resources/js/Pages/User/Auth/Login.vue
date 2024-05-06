<template>
    <div>
      <div class="footer-top bg-teal-dark"></div>
      <div class="flex items-center justify-center min-h-screen bg-white font-inter">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <Link :href="route('Home')" class="no-underline float-left mx-2 my-5 left-1 absolute">
                <div class="w-12 h-12 rounded-full hover:bg-white-50 hover:cursor-pointer text-3xl justify-center items-center flex">
                    <i class='bx bx-left-arrow-alt text-dark'></i>
                </div>
            </Link>
          <!-- left side -->
          <div class="flex flex-col justify-center p-8 md:p-12 mx-4">
            <span class="mb-2 text-4xl font-bold text-textColor">Login</span>
            <span class="font-light text-gray-400 mb-8">
              Sign in now with us for the best experience!
            </span>
            <form @submit.prevent="handleLogin">
              <div class="py-2">
                <label for="email" class="mb-2 text-md text-textColor"
                  >Email <span class="text-danger">*</span>
                </label>
                <input
                  type="email"
                  class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer"
                  name="email"
                  id="email"
                  v-model="form.email"
                  autocomplete="false"
                />
                <span class="text-pink text-md hidden peer-invalid:block my-2">Masukan email yang valid</span>
                <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>
              </div>
              <div class="py-2">
                <label for="password" class="mb-2 text-md text-textColor"
                  >Password <span class="text-danger">*</span>
                </label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  autocomplete="false"
                  v-model="form.password"
                  class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
                  required
                />
                <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div>
              </div>
              <div class="flex justify-between w-full py-4">
                <div class="mr-24">
                  <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    class="mr-2 hover:cursor-pointer"
                    style="accent-color: #3cb72b"
                    v-model="form.remember"
                  />
                  <span class="text-md">Remember me</span>
                </div>
                <Link
                  :href="route('forget-password')"
                  class="text-textColor text-decoration-none hover:cursor-pointer hover:text-teal"
                  >Forget password ?</Link
                >
              </div>
              <button
                type="submit"
                class="w-full bg-teal text-md p-2 rounded-lg mb-3 text-white hover:bg-teal-dark d-inline-block justify-center align-center text-decoration-none text-center mx-auto"
              >
                Sign In
              </button>
            </form>
            <span class="text-center text-xs text-gray-300 mb-3">Or</span>
            <button @click = "handleGoogleLogin"
              class="w-full border border-gray-300 text-md p-2 rounded-lg mb-3 hover:bg-black hover:text-textColor hover:border-colorBorder"
            >
              <img
                src="Assets/img/google.svg"
                alt="Icons-google"
                class="w-6 h-6 inline mr-2"
              />
              <a :href="route('google.login')" class="text-md text-dark text-decoration-none">Sign in with Google</a>
            </button>
            <div class="text-center text-gray-400">
              Don't have an account?
              <span><Link :href="route('view.register')" class="text-textColor text-decoration-none hover:text-teal hover:cursor-pointer">Sign up</Link></span>
            </div>
          </div>
          <!-- right side -->
          <div class="relative">
            <img
              src="Assets/img/bg-login.png"
              alt="Petani Memetik Buah"
              class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { Link, useForm } from "@inertiajs/vue3";
  import Swal from "../../../components/Swal.vue";
  const form = useForm({
    email: null,
    password: null,
    remember: true,
  });

  const handleLogin = async () => {
    const response = await form.post(route('auth.login'));
    if (response.ok) {
      showSuccessAlert();
      redirectToMainPage();
    }
  };

  const handleGoogleLogin = () => {
     showSuccessAlert();
  redirectToMainPage();
}

  const showSuccessAlert = () => {
    Swal.fire({
      icon: 'success',
      title: 'Login Successful!',
      text: 'You have successfully logged in.',
      showCloseButton : false,
    });
  };

  const redirectToMainPage = () => {
    setTimeout(() => {
      route('Home');
    }, 2000);
  };
  </script>

  <style scoped>
  .footer-top {
      display: inline-block;
      width: 100%;
      height: 220px;
      position: fixed;
      top: 0;
  }
  </style>
