<template>
    <Header/>
    <Body :detailProduct="products" :status="sellerIsOnline" :relatedProduct="allProducts" :TotalRating="TotalRating" :TotalUlasan="TotalUlasan" :joinedTime="joinedTime" :totalProducts="totalProducts" :comments="comments"/>
    <Footer/>
</template>
<script setup>
    import Header from '@/User/Layout/Component/Header.vue'
    import Body from './Layout/bodyproduct.vue'
    import Footer from '@/User/Layout/Component/Footer.vue'
    defineProps({
        products:Object,
        allProducts:Array,
        sellerIsOnline:Object,
        joinedTime: String,
        totalProducts:Number,
        TotalRating :Number,
        comments: Array,
        TotalUlasan:Number,
    })


</script>
