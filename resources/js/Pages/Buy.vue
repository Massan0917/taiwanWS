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
    <title>devices</title>

    <body>
        <img src="img/QR.png" alt="サムネイル" class="thumbnail">
        <p class="tytle">Thank you!</p>
        <div>you can get it at convenience store</div>
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
    .tytle {
      font-size: 20px;
      font-weight: bold;
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
