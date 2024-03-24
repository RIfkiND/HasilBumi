<template>
    <!-- Home Page -->
    <section class="flex items-center flex-wrap justify-center gap-5 ">
        <div class="layout-hero">
            <h1 class="font-bold text-content  sm:text-4xl">
                Sumber
                <span class="text-primaryColor">Kekayaan</span>,
                <!-- <br /> -->
                Ladang
                <span class="text-primaryColor">Berkah</span>, Hasil
                <!-- <br /> -->
                <span class="text-primaryColor"> Bumi</span>, Negeri Sejahtera!
            </h1>
            <p>
                produce success, prosperity and let's take care of our bodies by
                eating nutritious food
            </p>
            <button
                class="inline-block text-primaryColor button-border border-b-hoverPrimary hover:text-white hover:bg-primaryColor px-8 py-2 rounded-full my-2 mx-0">
                Shop Now &#8594
            </button>
        </div>

        <div class="">
            <img :src="imageUrl" alt="" class="max-w-full py-10 px-0" width="600px" />
        </div>
    </section>
    <!-- Home Page End -->

    <!-- Feature Page -->

    <!-- <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img :src="featureDriver" alt="Delivery" class="w-15 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Free Shipping</h4>
                    <p class="text-gray-500 text-sm">Order over $200</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="assets/images/icons/money-back.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Money Rturns</h4>
                    <p class="text-gray-500 text-sm">30 days money returs</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img :src="featureDriver" alt="Delivery" class="w-15 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-sm">Customer support</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Feature Page end -->

    <!-- Populer Page -->

    <!-- <section class="mx-auto" style="max-width: 80%;">
        <h2>Populer Shop</h2>
        <div class="flex item-center justify-center gap-5 px-5 lg:flex-nowrap">
            <div class=" bg-teal">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?q=80&w=1968&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="400px" class="object-cover bg-cover">
                <h3 class="">Vegetable</h3>

            </div>
            <div class=" bg-teal">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?q=80&w=1968&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="400px" class="object-cover bg-cover">
                <h3 class="">Vegetable</h3>

            </div>
            <div class=" bg-teal">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?q=80&w=1968&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="400px" class="object-cover bg-cover">
                <h3 class="">Vegetable</h3>

            </div>
            <div class=" bg-teal">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?q=80&w=1968&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="400px" class="object-cover bg-cover">
                <h3 class="">Vegetable</h3>

            </div>
            <div class=" bg-teal">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?q=80&w=1968&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="400px" class="object-cover bg-cover">
                <h3 class="">Vegetable</h3>

            </div>
        </div>
    </section> -->


    <section>
    <div class="mt-16 mx-auto" style="max-width: 80%;">
        <h3 class="text-gray-600 text-2xl font-medium">Populer Shop</h3>

        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6 relative">
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1575218823251-f9d243b6f720?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
                </div>
                <div class="px-2 py-2 absolute">
                    <h3 class="text-gray-700 uppercase">Vegetable</h3>
                    <span class="text-gray-500 mt-2">healthy and nutritious</span>
                </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover"
                    style="background-image: url('https://media.istockphoto.com/id/861188910/photo/different-types-of-food-on-rustic-wooden-table.webp?b=1&s=170667a&w=0&k=20&c=zJ2AGlYkAHwkSZ18monpquAvvTQ5UurNIxxRLF4oqu0=')">

                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">Meat</h3>
                    <span class="text-gray-500 mt-2">healthy and nutritious</span>
                </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover"
                    style="background-image: url('https://media.istockphoto.com/id/157581211/photo/grain-and-cereal-composition.webp?b=1&s=170667a&w=0&k=20&c=VvT8sVlKl982HQxoqqgr9qoyVC8ExYA7LhuzzbB6cSo=')">

                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">Grain</h3>
                    <span class="text-gray-500 mt-2">healthy and nutritious</span>
                </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1523033904333-243d0283acae?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA2fHxmcnVpdHxlbnwwfHwwfHx8MA%3D%3D')">

                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">Fruit</h3>
                    <span class="text-gray-500 mt-2">healthy and nutritious</span>
                </div>
            </div>
            <button class="btn btn--left absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="btn-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="btn btn--right absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="btn-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <!-- @click="handleLeftButtonClick" :disabled="leftButtonClicked"
            @click="handleRightButtonClick" :disabled="rightButtonClicked" -->
        </div>
    </div>
    </section>
    <!-- Populer Page End -->




    <!-- Card Page -->
    <!-- <section class="container w-3/4 mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-12 mb-16 w-3/4 mx-auto">
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Meat" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <!-- hover -->
    <!--  text-textColor hover:bg-primaryColor hover:text-white -->

    <!-- <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Vegetable" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Fruit" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Forest" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Grain" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Industri" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Ship" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Processed" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Spice" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div class="rounded-2xl p-5 px-8" style="border: 1px solid #3cb72b">
                    <img :src="Textile" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
        </div>
    </section> -->
    <!--
    <section class="w-4/5 mx-auto">
        <div class="flex items-center justify-center gap-5 ">
            <div class="p-10 bg-primaryColor ">
                <div class="">
                    <img :src="Meat" alt="" class="w-full">
                    <h3>Meat</h3>
                </div>
            </div>
            <div class="p-10 bg-primaryColor ">
                <div class="">
                    <img :src="Meat" alt="" class="w-full">
                    <h3>Meat</h3>
                </div>
            </div>
            <div class="p-10 bg-primaryColor ">
                <div class="">
                    <img :src="Meat" alt="" class="w-full">
                    <h3>Meat</h3>
                </div>
            </div>
            <div class="p-10 bg-primaryColor ">
                <div class="">
                    <img :src="Meat" alt="" class="w-full">
                    <h3>Meat</h3>
                </div>
            </div>
            <div class="p-10 bg-primaryColor ">
                <div class="">
                    <img :src="Meat" alt="" class="w-full">
                    <h3>Meat</h3>
                </div>
            </div>
        </div>
    </section> -->

    <section>
        <div class="mt-20 mx-auto max-w-5xl">
            <div class="container flex items-center justify-center gap-4 flex-nowrap md:flex-wrap">
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Meat" alt="" class="w-full icons" />
                        <h3 class="mt-4">Meat</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Vegetable" alt="" class="w-full icons" />
                        <h3 class="mt-4">Vegetable</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Grain" alt="" class="w-full icons" />
                        <h3 class="mt-4">Grain</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Forest" alt="" class="w-full icons" />
                        <h3 class="mt-4">Forest</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Industri" alt="" class="w-full icons" />
                        <h3 class="mt-4">Industri</h3>
                    </div>
                </a>
            </div>
            <div class="container flex items-center justify-center gap-4 flex-nowrap md:flex-wrap mt-2">
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Ship" alt="" class="w-full icons" />
                        <h3 class="mt-4">Ship</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Processed" alt="" class="w-full icons" />
                        <h3 class="mt-4">Processed</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Spice" alt="" class="w-full icons" />
                        <h3 class="mt-4">Spice</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Textile" alt="" class="w-full icons" />
                        <h3 class="mt-4">Textile</h3>
                    </div>
                </a>
                <a href="#" class="w-auto h-auto mx-auto  rounded-md shadow-md overflow-hidden p-4 card">
                    <div class="flex flex-col justify-center items-center">
                        <img :src="Fruit" alt="" class="w-full icons" />
                        <h3 class="mt-4">Fruit</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Card Page End -->

    <!-- Testi Page -->

    <section>
        <div class="container my-14 md:my-24">
            <div class="flex flex-wrap items-center py-16">

                <!-- ABOUT IMAGE -->
                <div class="w-full md:w-5/12 lg:w-6/12">
                    <div class="mb-8">
                        <img class="w-full h-auto"
                            src="https://media.istockphoto.com/id/843696046/photo/fruits-and-vegetables-at-the-farmers-market.webp?b=1&s=170667a&w=0&k=20&c=_JWAwTqjf0x5DuSsaUtcgswF-HSQ78HYqs3x5XGwQyQ="
                            alt="about-image">
                    </div>
                </div>

                <!-- ABOUT TEXT -->
                <div class="w-full md:w-7/12 lg:w-6/12 pl-10">
                    <div class="mb-8">

                        <!-- Title -->
                        <h2 class="text-4xl font-bold mb-3 text-textColor">buy healthy necessities</h2>
                        <!-- List -->
                        <div class="text-textColor">
                            <h3 class="font-semibold"><span class="text-primaryColor">&#x2713;</span> Cheap shopping
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur officia delectus
                                eaque suscipit sunt inventore ab illum beatae,</p>
                            <h3 class="font-semibold"><span class="text-primaryColor">&#x2713;</span> fresh quality</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, sequi ullam ipsa mollitia
                                placeat vero aut quisquam nulla autem omnis vel possimus labore est.</p>
                            <h3 class="font-semibold"><span class="text-primaryColor">&#x2713;</span> affordable prices
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eligendi laboriosam
                                iste cupiditate beatae porro voluptatum expedita saepe!</p>
                            <h3 class="font-semibold"><span class="text-primaryColor">&#x2713;</span> easy payment</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi iusto et aliquam a
                                cupiditate sit, modi repellat.</p>
                        </div>

                    </div>
                </div> <!-- END ABOUT TEXT -->

            </div> <!-- End flex -->
        </div> <!-- End container -->
    </section>

    <!-- Testi Page End -->

</template>

<style>
.button-border {
    border: 2px solid #3cb72b;
    transition: background 0.5s;
}

.text-content {
    font-size: 50px;
    line-height: 1.05;
    margin: 25px 0;
}

.layout-hero {
    flex-basis: 50%;
    min-width: 300px;
    max-width: 550px;
}

h4 {
    text-transform: capitalize;
    font-size: 20px;
}

.card {
    border: 2px solid #3cb72b;
    color: #3cb72b;
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transition: 0.3s ease-in-out;
    background-color: #3cb72b;
    cursor: pointer;
    transform: translateY(-10px);
    color: #fff;
}

.card:hover .icons {
    filter: invert(1);
}

.btn {
    background-color: #fff;
    border: none;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    cursor: pointer;

    display: flex;
    align-items: center;
    justify-content: center;
}

.btn:hover {
    background-color: #3cb72b;
    stroke: #fff;
}

.btn:hover .btn-icon {
    stroke: #fff;
}

.btn-icon {
    height: 30px;
    width: 30px;
    stroke: #087f5b;
}

/* .btn--left {
    transform: translate(-50%, -50%);
}

.btn--right {
    transform: translate(50%, -50%);
} */

@media only screen and (max-width: 800px) {
    .text-content {
        font-size: 36px;
    }
}

@media only screen and (max-width: 500px) {
    .text-content {
        font-size: 32px;
    }
}
</style>

<script>

export default {

    data() {
        return {
            Meat: "",
            Vegetable: "",
            Fruit: "",
            Forest: "",
            Grain: "",
            Industri: "",
            Ship: "",
            Processed: "",
            Spice: "",
            Textile: "",
            imageUrl: "",
            imgBg: "",
            featureDriver: "",
            featureFruit: "",
            featurePayment: "",
            Hutan: "",

            leftButtonClicked: false,
            rightButtonClicked: false
        };
    },
    mounted() {
        // Set imageUrl menggunakan properti asset dari Laravel
        this.Meat = "/assets/icon/meat.svg";
        this.Vegetable = "/assets/icon/vegetable.svg";
        this.Fruit = "/assets/icon/fruit.svg";
        this.Forest = "/assets/icon/forest.svg";
        this.Grain = "/assets/icon/grain.svg";
        this.Industri = "/assets/icon/industri.svg";
        this.Ship = "/assets/icon/perahu.svg";
        this.Processed = "/assets/icon/processed.svg";
        this.Spice = "/assets/icon/spice.svg";
        this.Textile = "/assets/icon/textile.svg";
        this.Hutan = "/assets/icon/Hutan.svg";

        this.imageUrl = "/assets/img/Profile.svg";
        this.imgBg = "/assets/img/bg-profile.svg";

        this.featureFruit = "/assets/icon/Fitur-Sayur.svg"
        this.featurePayment = "/assets/icon/Fitur-Payment.svg"
        this.featureDriver = "/assets/icon/Fitur-Driver.svg"
    },

    methods: {
        handleLeftButtonClick() {
            this.leftButtonClicked = true;
            // Tambahkan logika atau pemanggilan fungsi yang sesuai di sini
        },
        handleRightButtonClick() {
            this.rightButtonClicked = true;
            // Tambahkan logika atau pemanggilan fungsi yang sesuai di sini
        }
    }
};
</script>
