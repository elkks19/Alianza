<template>
  <h1>💖 Hello World!</h1>
  <p>Welcome to your Electron application.</p>
  <RouterLink to="/prueba">Prueba</RouterLink>
  <br />
  <RouterLink to="/">Home</RouterLink>
  <RouterView />
</template>

<script>
console.log('👋 This message is being logged by "App.vue", included via Vite');
</script>
