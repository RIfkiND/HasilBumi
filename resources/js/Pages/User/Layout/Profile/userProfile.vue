<script setup>
import Navbar from "../Component/navbar.vue";
import Footer from "../Component/Footer.vue";
</script>

<template>
    <Navbar />
    <section>
        <div class="container mx-auto">
            <div class="max-w-7xl mx-auto grid grid-cols-[1fr_4fr] gap-8">
                <div class="flex flex-row shadow-lg mt-12 justify-self-start">
                    <div
                        class="flex flex-col p-4 bg-white rounded-r-3xl overflow-hidden"
                    >
                        <div class="flex items-center gap-3 pt-12">
                            <div class="avatar placeholder">
                                <div
                                    class="bg-neutral text-neutral-content rounded-full w-12"
                                >
                                    <span class="text-xl">D</span>
                                </div>
                            </div>
                            <span class="text-xl capitalize text-indigo-500">
                                nama
                            </span>
                        </div>
                        <ul class="flex flex-col py-4">
                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-user"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >Profile</span
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-shopping-bag"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >Pesanan</span
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-chat"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >Chat</span
                                    >
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-bell"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >History</span
                                    >
                                    <span
                                        class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500"
                                        >5</span
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-bell"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >Order</span
                                    >
                                    <span
                                        class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500"
                                        >5</span
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                                >
                                    <span
                                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                                        ><i class="bx bx-log-out"></i
                                    ></span>
                                    <span class="text-sm font-medium"
                                        >Logout</span
                                    >
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>Kolom 2</div>
            </div>
        </div>
    </section>

    <Footer />
</template>
