<template>
    <h3>釣り日記</h3>
    
</template>

<script>
import { ref } from "vue"

/** 取得日記データ */
const diaries = ref<[]>([]);

/** 表示用データ */

/**  */

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
