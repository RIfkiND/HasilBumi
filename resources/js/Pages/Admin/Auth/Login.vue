<!-- component -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

  html, body{
    font-family: 'Roboto', sans-serif;
  }

  .break-inside {
    -moz-column-break-inside: avoid;
    break-inside: avoid;
  }

  body {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    min-height: 100vh;
    line-height: 1.5;
  }

    @keyframes bounce-right {
        0%, 20%, 50%, 80%, 100% {
            transform: translateX(0);
        }
        40% {
            transform: translateX(15px);
        }

        60% {
            transform: translateX(5px);
        }
    }

    .animate-bounce-right {
        animation: bounce-right 2s infinite;
    }
</style>

<template>
<body class="bg-white font-inter">
  <!-- Example -->
  <div class="flex min-h-screen">

    <!-- Container -->
    <div class="flex flex-row w-full">

      <!-- Sidebar -->
      <div class='hidden lg:flex flex-col justify-between bg-primaryColor lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
        <div class="flex items-center justify-start space-x-3">
            <Link :href="route('Home')" class="hover:cursor-pointer text-3xl justify-center items-center flex no-underline">
                <div class="w-12 h-12 rounded-full hover:bg-teal-dark text-3xl justify-center items-center flex">
                    <i class='bx bx-left-arrow-alt text-dark'></i>
                </div>
            </Link>
        </div>
        <div class="space-y-5 mb-6">
            <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold text-dark">Masukan akun Admin anda 
                Hallo Admin 👋
            </h1>
            <Link
                class="inline-block flex-none px-5 text-center py-3 border-2 rounded-lg font-medium text-white hover:bg-teal-dark relative border-p-2 hover:cursor-pointer no-underline" >
                <span class="mr-2">Masuk</span>
                <span class="text-white absolute text-lg text-center animate-bounce-right">
                    <i class='bx bx-right-arrow-alt bx-sm'></i>
                </span>
            </Link>
        </div>
        <p class="font-medium text-white text-center mt-5 text-md">
            © 2024 <a :href="route('Home')" class="font-medium no-underline text-dark hover:underline">Hasil Bumi.</a>
        </p>
      </div>

      <!-- Login -->
      <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
        <!-- Login box -->
        <div class="flex flex-1 flex-col  justify-center space-y-5 max-w-md">
            <div class="flex flex-col space-y-2 text-center mb-3">
                <h2 class="text-3xl md:text-4xl font-bold">Masuk ke akun</h2>
                <p class="text-md md:text-xl">  masuk Admin untuk melakukan Setting</p>
            </div>
          <div class="flex flex-col max-w-md space-y-3">
            <input type="email" placeholder="Email"
              class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-white-50 rounded-lg font-medium placeholder:font-normal bg-white focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer" />
              <span class="text-sm text-pink hidden peer-invalid:block">Masukan email yang valid</span>
            <input type="password" placeholder="Password"
              class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-white-50 rounded-lg font-medium placeholder:font-normal bg-white focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300" />
            <button class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-primaryColor text-white">Sign in</button>   
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>