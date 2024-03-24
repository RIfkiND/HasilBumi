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
    <div class="flex items-center justify-center min-h-screen bg-white">
        <div
            class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
        >
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-12">
                <img
                    :src="'Assets/img/design-lock.png'"
                    class="d-flex justify-center align-center mx-auto mb-3"
                    alt="Design key"
                    style="width: 120px; height: 120px"
                />
                <span
                    class="mb-2 text-4xl font-bold text-textColor text-center fs-3"
                    >Forget Password</span
                >
                <span class="font-light text-gray-400 mb-8 text-center fs-6">
                    Enter your email and we'll send you a link to <br />
                    reset your password
                </span>
                <div class="py-2">
                    <label for="email" class="text-md text-textColor mb-2"
                        >Email <span class="text-danger">*</span>
                    </label>
                    <input
                        type="email"
                        class="w-full bg-white p-2 border border-gray-300 rounded-md focus:border-colorBorder"
                        name="email"
                        id="email"
                        autocomplate="false"
                    />
                </div>
                <!-- Aktifkan untuk validasi email-->
                <!-- <span class="text-center d-flex my-1 text-danger"> We cannot find your email</span> -->
                <a
                    href="#"
                    class="w-full bg-teal text-md p-2 mt-2 rounded-lg text-white hover:bg-teal-dark text-decoration-none"
                >
                    <span class="d-flex justify-center align-items-center">
                        Send <i class="bx bxs-send text-white mx-1"></i>
                    </span>
                </a>
                <Link
                    :href="route('view.login')"
                    class="d-inile-block justify-center align-center mx-auto mt-4 text-textColor text-decoration-none hover:text-teal"
                >
                    <i class="bx bx-chevron-left d-inline-block"></i>Back to
                    Login
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
