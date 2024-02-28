<template>
    <section class="container w-3/4 mx-auto">
        <div
            class="grid grid-cols-2 md:grid-cols-5 gap-4 items-center mt-12 mb-16 w-3/4 mx-auto"
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
</template>

<style>
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
    },
};
</script>
