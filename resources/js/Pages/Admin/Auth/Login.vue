<!-- component -->
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

html,
body {
    font-family: "Roboto", sans-serif;
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
    0%,
    20%,
    50%,
    80%,
    100% {
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
                <div
                    class="flex-col justify-between hidden lg:flex bg-primaryColor lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg"
                >
                    <div class="flex items-center justify-start space-x-3">
                        <Link
                            :href="route('Home')"
                            class="flex items-center justify-center text-3xl no-underline hover:cursor-pointer"
                        >
                            <div
                                class="flex items-center justify-center w-12 h-12 text-3xl rounded-full hover:bg-teal-dark"
                            >
                                <i class="bx bx-left-arrow-alt text-dark"></i>
                            </div>
                        </Link>
                    </div>
                    <div class="mb-6 space-y-5">
                        <h1
                            class="font-extrabold lg:text-3xl xl:text-5xl xl:leading-snug text-dark"
                        >
                            Masukan akun Admin anda Hallo Admin 👋
                        </h1>
                        <Link
                            class="relative flex-none inline-block px-5 py-3 font-medium text-center text-white no-underline border-2 rounded-lg hover:bg-teal-dark border-p-2 hover:cursor-pointer"
                        >
                            <span class="mr-2">Masuk</span>
                            <span
                                class="absolute text-lg text-center text-white animate-bounce-right"
                            >
                                <i class="bx bx-right-arrow-alt bx-sm"></i>
                            </span>
                        </Link>
                    </div>
                    <p class="mt-5 font-medium text-center text-white text-md">
                        © 2024
                        <a
                            :href="route('Home')"
                            class="font-medium no-underline text-dark hover:underline"
                            >Hasil Bumi.</a
                        >
                    </p>
                </div>

                <!-- Login -->
                <div
                    class="relative flex flex-col items-center justify-center flex-1 px-10"
                >
                    <!-- Login box -->
                    <div
                        class="flex flex-col justify-center flex-1 max-w-md space-y-5"
                    >
                        <form  @submit.prevent="submit">
                            <div
                                class="flex flex-col mb-3 space-y-2 text-center"
                            >
                                <h2 class="text-3xl font-bold md:text-4xl">
                                    Masuk ke akun
                                </h2>
                                <p class="text-md md:text-xl">
                                    masuk Admin untuk melakukan Setting
                                </p>
                            </div>
                            <div class="flex flex-col max-w-md space-y-3">
                                <input
                                    type="email"
                                    placeholder="Email"
                                    v-model="form.email"
                                    class="flex px-3 py-2 font-medium bg-white border-2 rounded-lg md:px-4 md:py-3 border-white-50 placeholder:font-normal focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer"
                                />
                                <span
                                    class="hidden text-sm text-pink peer-invalid:block"
                                    >Masukan email yang valid</span
                                >
                                <input
                                    type="password"
                                    v-model="form.password"
                                    placeholder="Password"
                                    class="flex px-3 py-2 font-medium bg-white border-2 rounded-lg md:px-4 md:py-3 border-white-50 placeholder:font-normal focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300"
                                />
                                <button
                                    class="flex items-center justify-center flex-none px-3 py-2 font-medium text-white border-2 border-black rounded-lg md:px-4 md:py-3 bg-primaryColor"
                                >
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
import { reactive } from "vue";

const form = reactive({
    email: null,
    password: null,
});

function submit() {
    router.post("admin.auth", form);
}
</script>
