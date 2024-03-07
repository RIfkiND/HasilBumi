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
                class="inline-block text-primaryColor button-border border-b-hoverPrimary hover:text-white hover:bg-primaryColor px-8 py-2 rounded-full my-2 mx-0"
            >
                Shop Now &#8594
            </button>
        </div>

        <div class="">
            <img
                :src="imageUrl"
                alt=""
                class="max-w-full py-10 px-0"
                width="600px"
            />
        </div>
    </section>
    <!-- Home Page End -->

    <!-- Feature Page -->

    <!-- <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="assets/images/icons/delivery-van.svg" alt="Delivery" class="w-12 h-12 object-contain">
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
                <img src="assets/images/icons/service-hours.svg" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-sm">Customer support</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Feature Page end -->

    <!-- Card Page -->
    <section class="container w-3/4 mx-auto">
        <div
            class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-12 mb-16 w-3/4 mx-auto"
        >
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Meat" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
    <!-- hover -->
    <!--  text-textColor hover:bg-primaryColor hover:text-white -->

    <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Vegetable" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Fruit" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Forest" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Grain" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Industri" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Ship" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Processed" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Spice" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div class="card flex flex-col items-center justify-center">
                <div
                    class="rounded-2xl p-5 px-8"
                    style="border: 1px solid #3cb72b"
                >
                    <img :src="Textile" alt="" class="icons w-16 mb-2" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Page End -->
</template>

<style>


.button-border{
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

@media only screen and (max-width: 800px) {
    .text-content{
        font-size: 36px;
    }
}
@media only screen and (max-width: 500px) {
    .text-content{
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

        this.imageUrl = "/assets/img/Profile.svg";
        this.imgBg = "/assets/img/bg-profile.svg";
    },
};
</script>
