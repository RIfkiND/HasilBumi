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
            <Link :href="route('Home')" class="no-underline float-left mx-3 my-4 left-3 absolute">
                <div class="w-12 h-12 rounded-full hover:bg-white-50 hover:cursor-pointer text-3xl justify-center items-center flex">
                    <i class='bx bx-left-arrow-alt text-dark'></i>
                </div>
            </Link>
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
                    >Lupa kata sandi?</span
                >
                <span class="text-dark mb-8 text-center text-md">
                    Masukan email anda dan kami akan mengirimkan <br> tautan ke
                    email Anda
                </span>
                <div class="py-2">
                    <label for="email" class="text-md text-textColor mb-2"
                        >Email <span class="text-danger">*</span>
                    </label>
                    <input
                        type="email"
                        class="w-full bg-white p-2 border-2 border-white-50 rounded-lg font-medium text-md focus:outline-none focus:border-2 focus:border-primaryColor text-slate-300 peer"
                        name="email"
                        id="email"
                        autocomplate="false"
                    />
                    <span class="text-sm text-pink hidden peer-invalid:block my-2">Masukan email yang valid</span>
                </div>
                <Link
                    href="#"
                    class="w-full bg-teal text-md p-2 mt-2 rounded-lg text-white hover:bg-teal-dark text-decoration-none"
                >
                    <span class="d-flex justify-center align-items-center">
                        Kirim <i class="bx bxs-send text-white mx-1"></i>
                    </span>
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
    import { Link,useForm } from "@inertiajs/vue3";
</script>
