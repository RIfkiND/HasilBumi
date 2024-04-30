<template></template>
<script setup>
import { onMounted, onUpdated } from 'vue';
const props = defineProps({
    status: {
        type: Object,
        default: {}
    },
});

function showSwal() {
    Swal.fire(
        props.status.action,
        props.status.text,
        props.status.type
    )
}

onMounted(() => {
    if (props.status) {
        showSwal()
    }
})

onUpdated(() => {
    if (props.status) {
        showSwal()
    }
})
</script>
