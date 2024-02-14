<script setup>
   import '@fortawesome/fontawesome-free/css/all.css'
    import 'material-design-icons-iconfont/dist/material-design-icons.css'
    import { Link } from '@inertiajs/vue3'
</script>

<template>
    <h1>Hello, world!</h1>
    <a :href="route('home')">Pergi ke halaman home</a>
</template>
