<template>
    <h3>釣り日記aaa</h3>
    
</template>

<script setup>
import { ref, onMounted } from 'vue'

/** 取得日記データ */
const diaries = ref([]);

onMounted(async () => {
    try {
        console.log("onMounted");
        await axios.get('getDiaryList').then(response => {
            console.log("response.data::", response.data);
            diaries.value = response.data;
        });
    } catch(error) {
        window.alert(error);
    }
})

</script>


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
