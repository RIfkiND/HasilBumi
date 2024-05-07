<template>
    <div>
      <h1 v-if="errors">{{ errors }}</h1>
      <h1 v-if="success">{{ success }}</h1>
      <button @click="becomeSeller">Become a Seller</button>
    </div>
  </template>

  <script setup>
  import { ref, } from 'vue';
import { router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';


  const { props } = usePage();
  const errors = ref(props.errors);
  const success = ref(props.success);
  const becomeSeller = async () => {
  try {
    const response = await router.post(route('seller.becomeSeller'));
    if (response && response.data && response.data.success) {

      router.get(route('view.seller.pendaftaran'))
    }
    else{
        location.reload()
    }
  } catch (error) {

    errors.value = error.response.data.errors;
    success.value = null;
  }
};
  </script>
