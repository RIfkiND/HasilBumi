<template>
    <!-- <div class=" bg-white h-screen mt-0">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-5/12">
                    <div class="hero-content">
                        <h1
                            class="mb-5 text-4xl font-bold !leading-[1.208] text-textColor"
                        >
                            Sumber
                            <span class="text-primaryColor">Kekayaan</span
                            >,<br />
                            Ladang
                            <span class="text-primaryColor">Berkah</span>, Hasil
                            <br />
                            <span class="text-primaryColor"> Bumi</span>, Negeri
                            Sejahtera!
                        </h1>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-6/12">
                    <div class="lg:ml-auto lg:text-right">
                        <div class="relative z-10 inline-block pt-11 lg:pt-0">
                            <img
                                :src="imageUrl"
                                alt="hero"
                                class="max-w-full lg:ml-auto"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            class="absolute bottom-0 w-full"
        >
            <path
                fill="#3CB72B"
                fill-opacity="1"
                d="M0,128L34.3,128C68.6,128,137,128,206,112C274.3,96,343,64,411,74.7C480,85,549,139,617,149.3C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,64C1097.1,53,1166,43,1234,48C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
            ></path>
        </svg>
    </div> -->

    <!-- <div class="bg-white h-screen mt-0">
        <div class="container mx-auto px-4">
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 items-center"
            >
                <div class="py-6 lg:py-0">
                    <h1
                        class="text-5xl md:text-6xl lg:text-5xl font-bold mb-3 text-textColor"
                    >
                        Sumber
                        <span class="text-primaryColor">Kekayaan</span>,<br />
                        Ladang
                        <span class="text-primaryColor">Berkah</span>, Hasil
                        <br />
                        <span class="text-primaryColor"> Bumi</span>, Negeri
                        Sejahtera!
                    </h1>
                    <h2 class="typed-text-output"></h2>
                </div>
                <div>
                    <img class="w-full" :src="imageUrl" alt="" />
                </div>
            </div>
        </div>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            class=""
        >
            <path
                fill="#3CB72B"
                fill-opacity="1"
                d="M0,128L34.3,128C68.6,128,137,128,206,112C274.3,96,343,64,411,74.7C480,85,549,139,617,149.3C685.7,160,754,128,823,106.7C891.4,85,960,75,1029,64C1097.1,53,1166,43,1234,48C1302.9,53,1371,75,1406,85.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
            ></path>
        </svg>
    </div> -->

    <section
        class="pt-20 lg:pt-39 pb-17.5 bg-white min-h-screen relative overflow-hidden"
    >
        <div class="max-w-screen-xl mx-auto px-4 sm:px-8 xl:px-0">
            <div
                class="flex flex-col lg:flex-row items-center gap-7.5 xl:gap-14"
            >
                <div
                    class="lg:max-w-md w-full md:text-center sm:text-center mx-12"
                >
                    <h1
                        class="font-bold text-heading-6 sm:text-heading-4 lg:text-heading-3 text-textColor mb-5 text-4xl md:text-center lg:text-left"
                    >
                        Sumber
                        <span class="text-primaryColor">Kekayaan</span>,<br />
                        Ladang
                        <span class="text-primaryColor">Berkah</span>, Hasil
                        <br />
                        <span class="text-primaryColor"> Bumi</span>, Negeri
                        Sejahtera!
                    </h1>
                </div>
                <div class="lg:max-w-lg w-full md:max-w-lg">
                    <img :src="imageUrl" alt="about" class="w-full h-auto" />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
                fill="#3CB72B"
                fill-opacity="1"
                class="absolute bottom-0 left-0 w-full -mt-8"
                d="M0,128L80,149.3C160,171,320,213,480,224C640,235,800,213,960,186.7C1120,160,1280,128,1360,112L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
            ></path>
        </svg>
    </section>
</template>

<script>
export default {
    data() {
        return {
            imageUrl: "",
            imgBg: "",
        };
    },
    mounted() {
        // Set imageUrl menggunakan properti asset dari Laravel
        this.imageUrl = "/assets/img/Profile.svg";
        this.imgBg = "/assets/img/bg-profile.svg";
    },
};
</script>
