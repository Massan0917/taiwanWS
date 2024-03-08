<script setup>
  import { defineComponent,ref } from 'vue';
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
        <div class="list-item" v-for="number in [1,2]" :key="number">
            <img :src="`img/device${number}1.jpg`" alt="サムネイル" class="image">
            <div class="text">
                <p class="tytle">device-{{number}}</p>
                <a class="a-link" href="info-1">look this device</a>
            </div>
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
    .list-item {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
    .a-link{
        color: blue!important;
        text-align: right;
    }
    .tytle{
        font-size: 30px;
        font-weight: bold;
    }
    .image {
    width: 100px;  /* 幅を100pxに設定 */
    height: 100px; /* 高さを100pxに設定 */
    object-fit: cover; /* 画像のアスペクト比を保ちつつ、指定した幅と高さに収まるように調整 */
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
