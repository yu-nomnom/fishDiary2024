<script setup>
import { ref } from "vue"

const message = ref("Welcome to Laravel + Vue3!")
const count = ref(0)

const increment = () => {
    count.value++
}
</script>

<template>
    <div class="content">
        <h1>{{ message }}</h1>
        <button @click="increment">Count is: {{ count }}</button>
    </div>
</template>

<style scoped>
.content {
    text-align: center;
    padding: 20px;
}

button {
    padding: 8px 16px;
    margin-top: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
