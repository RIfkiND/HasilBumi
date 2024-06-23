<script setup>
defineProps({
    dataTotal :Object
})

</script>

<template>
    <div class="mb-4 font-inter">
        <div
            class="grid grid-cols-1 lg:grid-cols-1 xl:grid-cols-3 pb-3 gap-4 bg-white"
        >
            <div class="flex flex-col shadow-md px-12 py-4">
                <div class="flex flex-row items-center justify-between">
                    <div class="mr-4">
                        <span class="items-center px-2 py-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="items-center w-8 h-8 m-auto"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-semibold text-primaryColor">
                            {{ dataTotal }}
                        </div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Published
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col shadow-md px-12 py-4">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex mr-4">
                        <span
                            class="items-center px-4 py-4 m-auto bg-red-200 rounded-full hover:bg-red-300"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="items-center w-8 h-8 m-auto text-red-500 hover:text-red-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-semibold text-primaryColor">
                            100
                        </div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Total Order
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col shadow-md px-12 py-4">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex mr-4">
                        <span
                            class="items-center px-4 py-4 m-auto bg-yellow-200 rounded-full hover:bg-yellow-300"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="items-center w-8 h-8 m-auto text-red-500 hover:text-red-600"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                                />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-primaryColor">
                            {{ dataTotal }}
                        </div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Total Products
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>