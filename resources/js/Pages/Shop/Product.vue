<template>
    <Header/>
    <Body :detailProduct="products" :status="sellerIsOnline"/>
    <Footer/>
</template>
<script setup>
    import Header from '@/User/Layout/Component/Header.vue'
    import Body from './Layout/bodyproduct.vue'
    import Footer from '@/User/Layout/Component/Footer.vue'
    defineProps({
        products:Object,
        sellerIsOnline:Object,
    })


</script>
