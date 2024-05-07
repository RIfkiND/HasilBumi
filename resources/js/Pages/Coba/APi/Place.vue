<template>
    <input
      id="autocomplete"
      type="text"
      placeholder="Street"
      class="mt-5 bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
    />
  </template>

  <script setup>
  import { onMounted } from 'vue';

  onMounted(() => {
    const autocomplete = new google.maps.places.Autocomplete(
      document.getElementById("autocomplete")
    );
    autocomplete.setComponentRestrictions({
      country: ["id"] 
    });
  });
  </script>
