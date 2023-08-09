<script setup>
import { ref } from 'vue';
import { RouterView } from 'vue-router';

const msg = ref('Hello, Vuejs with Laravel');

console.log(msg.value);
</script>

<template>
    <h1> Hello, Vuejs with Laravel </h1>
    <RouterView></RouterView>
</template>