<template>
    <section class="bg-white text-dark py-5 lg:py-16 antialiased font-inter float-left w-full">
        <div class="bg-white min-h-screen px-5 py-5">
            <div v-if="isDataLoad" class="relative mx-auto justify-center items-center">
                <v-skeleton-loader type="card" class="w-40 h-40 mx-auto absolute -top-40"></v-skeleton-loader>
            </div>
            <div v-else>
                <img :src="ficture" alt="gambar-1" class="w-40 h-40 rounded-sm mx-auto">
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data: function(){
            return {
                isDataLoad: true,
                ficture: "/assets/products/pohon1.jpg",
            }
        },
        mounted(){
            this.loadData();
        },
        methods: {
            async loadData(){
                await new Promise((resolve) => {
                    setTimeout(resolve, 2000)
                });
                this.isDataLoad = false;
            },
        }
    }
</script>
