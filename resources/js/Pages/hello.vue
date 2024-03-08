<script setup>
  import { defineComponent,ref } from 'vue';
  function goToInfo() {
    window.location.href = 'information-country';  
  }
  function goToDevice() {
    window.location.href = 'list-of-device';  
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
  
  <body>

    <h1>ChatLoop </h1>
    <div style="text-align:center">supported by team2</div>

    <div class="btn-countainer">
      <button class="btn-square" v-on:click="goToInfo()">where can find?</button><br>
      <button class="btn-square" v-on:click="goToDevice()">rent device</button><br>
      <button class="btn-square" v-on:click="goToDevice()">buy device</button>
    </div>
  </body>
</template>
<style>
h1{
  text-align: center;
  font-size: 20px;
  color: #668ad8;
  margin: 40px 0;
  font-weight: bold;
  font-size: 30px;
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
  font-size: 25px;
}
.btn-countainer{
  text-align: center;
  margin-top: 50px;
}
</style>