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
            <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold text-dark">Masukan akun Anda dan temukan yang baru
                pengalaman
            </h1>
            <p class="text-lg text-white">Anda belum memiliki akun?</p>
            <Link
                class="inline-block flex-none px-5 text-center py-3 border-2 rounded-lg font-medium text-white hover:bg-teal-dark relative border-p-2 hover:cursor-pointer no-underline" :href="route('Seller.pendaftaran')">
                <span class="mr-2">Daftar jadi seller</span>
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
                <p class="text-md md:text-xl">Daftar atau masuk untuk melakukan pemesanan!</p>
            </div>
          <div class="flex flex-col max-w-md space-y-3">
            <input type="email" placeholder="Email"
              class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-white-50 rounded-lg font-medium placeholder:font-normal bg-white focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer" />
              <span class="text-sm text-pink hidden peer-invalid:block">Masukan email yang valid</span>
            <input type="password" placeholder="Password"
              class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-white-50 rounded-lg font-medium placeholder:font-normal bg-white focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300" />
            <button class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-primaryColor text-white">Sign in</button>
            <div class="flex justify-center items-center">
              <span class="w-full border border-white-50"></span>
              <span class="px-4">Or</span>
              <span class="w-full border border-white-50"></span>
            </div>
            <a class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-white-50 no-underline text-slate-200 relative hover:border-2 hover:border-slate-200 hover:text-slate-300" :href="route('google.login')">
              <span class="absolute text-center w-2 h-2 rounded-full left-[70px] mb-3 lg:left-[115px] md:left-[110px]">
                <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path fill="#EA4335 " d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z"/>
                  <path fill="#34A853" d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z"/>
                  <path fill="#4A90E2" d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z"/>
                  <path fill="#FBBC05" d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z"/>
              </svg>
              </span>
              <span>Sign in with Google</span>
            </a>
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
