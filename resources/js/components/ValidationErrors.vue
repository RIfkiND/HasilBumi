<script setup>
defineProps(['errors'])
</script>

<template>
    <div v-if="errors">
        <div class="font-medium text-red-600">
            Whoops! Something went wrong.
        </div>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>