<template>
    <div>
      <h1>Home Page</h1>
      <p>If you see this, the component is rendering.</p>
    </div>
  </template>
  
  <script>
  export default {
    name: 'HomePage',
    mounted() {
      console.log('HomePage component mounted');
    }
  };
  </script>