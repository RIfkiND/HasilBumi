<template>
    <!-- <main class="grid lg:grid-cols-2 place-items-center pb-8 md:pb-24 mt-0 h-96">
        <div class="py-6 md:order-1 md:block">
            <img :src="imageUrl" alt="Profile" />
        </div>
        <div>
            <h2
                class="text-5xl lg:text-6xl xl:text-4xl font-bold lg:tracking-tight xl:tracking-tighter"
            >
                Sumber <span class="text-primaryColor">Kekayaan</span>,<br />
                Ladang <span class="text-primaryColor">Berkah</span>, Hasil
                <br />
                <span class="text-primaryColor">Bumi</span>, Negeri Sejahtera!
            </h2>
        </div>

        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            class="md:row-span-2"
            style="
                grid-row: 2;
                grid-column: 1 / -1;
                align-self: end;
                margin-bottom: 0;
            "
        >
            <path
                fill="#3CB72B"
                fill-opacity="1"
                d="M0,128L30,160C60,192,120,256,180,266.7C240,277,300,235,360,202.7C420,171,480,149,540,165.3C600,181,660,235,720,234.7C780,235,840,181,900,181.3C960,181,1020,235,1080,224C1140,213,1200,139,1260,122.7C1320,107,1380,149,1410,170.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
            ></path>
        </svg>
    </main> -->

    <section
        class="pt-20 lg:pt-39 pb-17.5 bg-white min-h-screen relative overflow-hidden"
    >
        <div class="max-w-screen-xl mx-auto px-4 sm:px-8 xl:px-0">
            <div
                class="flex flex-col lg:flex-row items-center gap-7.5 xl:gap-14 mx-auto"
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
