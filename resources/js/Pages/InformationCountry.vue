<script setup>
  import { defineComponent,ref } from 'vue';
  function goToTop() {
    window.location.href = '/';  
  }
</script>

<template>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <title>Dropdown Form</title>

    <body>
        <div class="container">
            <div class="dropdown-container">
                <label for="from" class="label">from</label>
                <select v-model="from">
                    <!-- Options will be dynamically populated here -->
                    <option value="1">country?</option>
                    <option value="2">Taiwan</option>
                    <option value="3">Japan</option>
                </select>
                <label for="to" class="label">to</label>
                <select id="to">
                    <!-- Options will be dynamically populated here -->
                    <option value="1">country?</option>
                    <option value="2">Taiwan</option>
                    <option value="3">Japan</option>
                </select>
            </div>
            <h2 for="plugType" class="label" style="text-align:center">plug type</h2>
            <div class="column">
                <div v-if="from === '1'">
                    <p style="text-align:center">---</p>
                </div>
                <div v-else>
                    <p style="text-align:center">type A</p>
                </div>
                <p style="text-align:center">type A</p>
            </div>    
            <h2 for="seasons" class="label" style="text-align:center">seasons</h2>
            <div class="column">
                <p style="text-align:center">4 seasons</p>
                <p style="text-align:center">4 seasons</p>
            </div>   
        </div>
        <button class="btn-square" v-on:click="goToTop()">back to top</button><br>
    </body>
</template>
<style>
    body {
    font-family: Arial, sans-serif;
    }
    .container {
    width: 300px;
    margin: auto;
    padding-top: 50px;
    }
    .dropdown-container {
    margin-bottom: 20px;
    column-count: 2;
    }
    select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    }
    .line {
    border-top: 1px solid #000;
    margin: 20px 0;
    }
    .label {
    display: block;
    margin-bottom: 5px;
    }
    .column {
        column-count: 2;
    }
    h2 {
        padding: 0.5em;/*文字周りの余白*/
        color: #494949;/*文字色*/
        background: #fffaf4;/*背景色*/
        border-left: solid 5px #ffaf58;/*左線（実線 太さ 色）*/
    }
    .btn-square {
        display: inline-block;
        padding: 0.5em 1em;
        margin: 0 1em 1em 0;
        text-decoration: none;
        background: #668ad8;/*ボタン色*/
        color: #FFF;
        border-bottom: solid 4px #627295;
        border-radius: 3px;
    }
</style>
