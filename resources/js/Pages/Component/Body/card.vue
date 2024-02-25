<template>
    <section>
        <div
            class="grid grid-cols-5 h-screen gap-x-16 gap-y-6 px-36 py-16 mt-7 mx-auto w-3/4 grid-rows-2"
        >
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
            <div>
                <div class="rounded-2xl" style="border: 5px solid #3cb72b">
                    <img :src="Meat" alt="" />
                    <h4 class="text-center">meat</h4>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            Meat: "",
            vegetable: "",
        };
    },
    mounted() {
        // Set imageUrl menggunakan properti asset dari Laravel
        this.Meat = "/assets/icon/meat.png";
        this.vegetable = "/assets/icon/vegetable.png";
    },
};
</script>
