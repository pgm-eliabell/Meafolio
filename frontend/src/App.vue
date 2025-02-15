<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
  <TestTemplate/>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import TestTemplate from './components/TestTemplate.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    TestTemplate
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
