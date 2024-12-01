<template>
    <h3>釣り日記</h3>
    <!-- <div id="app">
        <table border>
            <tr>
                <th v-for="h in tableHeader" v-bind:name="h.id">{{h.text}}</th>
            </tr>
            <tr v-for="d in tableData">
                <td v-for="h in tableHeader" v-bind:name="h.id">{{d[h.id]}}</td>
            </tr>
        </table>
    </div> -->
</template>

<script setup>
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
