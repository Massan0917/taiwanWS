<script setup>
  import { defineComponent,ref } from 'vue';
  function goToBuy() {
    window.location.href = 'buy';  
  }
  function goToSubscribe() {
    window.location.href = 'subscribe';  
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
    <title>devices</title>

    <body>
        <img src="img/device11.jpg" alt="サムネイル" class="thumbnail">
        <img src="img/device12.jpg" alt="サムネイル" class="thumbnail">
        <img src="img/device13.jpg" alt="サムネイル" class="thumbnail">
        <p class="tytle" >device-1</p>
        thank you for this time at NCKU!<br>
        we had really good time!<br>
        <div style="text-align: center;">
            <button class="btn-square1" v-on:click="goToBuy()">rent it</button><br>
        </div>
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
    .btn-square1 {
      display: inline-block;
      padding: 0.5em 1em;
      margin: 0 1em 1em 0;
      text-decoration: none;
      background: #668ad8;/*ボタン色*/
      color: #FFF;
      border-bottom: solid 4px #627295;
      border-radius: 3px;
      font-size: 20px;
    }
    .btn-square2 {
      display: inline-block;
      padding: 0.5em 1em;
      margin: 0 1em 1em 0;
      text-decoration: none;
      background: orange;/*ボタン色*/
      color: #FFF;
      border-bottom: solid 4px #627295;
      border-radius: 3px;
    }
    .tytle{
        font-size: 30px;
        font-weight: bold;
    }
</style>
