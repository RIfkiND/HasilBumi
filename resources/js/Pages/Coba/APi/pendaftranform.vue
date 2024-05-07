<!-- resources/js/Pages/Seller/Register.vue -->
<template>
    <div>
      <form @submit.prevent="submitForm">
        <input type="text" v-model="form.no_hp" placeholder="Phone Number">
        <input type="text" v-model="form.nama_toko" placeholder="Store Name">
        <input type="text" v-model="form.nip" placeholder="NIP">
        <input type="text" v-model="form.kota" placeholder="City">
        <input type="text" v-model="form.provinsi" placeholder="Province">
        <input type="file" @change="onFileChange">
        <button type="submit">Submit</button>
      </form>
    </div>
  </template>

  <script setup>
  import { reactive } from 'vue';
 import { router } from '@inertiajs/vue3';


  const form = reactive({
    no_hp: '',
    nama_toko: '',
    nip: '',
    kota: '',
    provinsi: '',
    foto_toko: null,
  });

  const submitForm = async () => {
    try {
      const formData = new FormData();
      Object.entries(form.value).forEach(([key, value]) => {
        if (value !== null) {
          formData.append(key, value);
        }
      });

      const response = await router.post(route('seller.pendaftaran'), form);
      // Handle success response
    } catch (error) {
      // Handle error response
    }
  };

  const onFileChange = (event) => {
    form.value.foto_toko = event.target.files[0];
  };
  </script>
