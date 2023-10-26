<template>
  <div id="app">
    <!-- Navigacija -->
    <Nav/>
    <!-- Pocetna -->
    <div class="scrollable-content">
      <div class="center-content">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useRoute, useRouter } from "vue-router";


const route = useRoute();
const router = useRouter();



</script>

<style>

.username{
  font-family: 'Bebas Neue', sans-serif;
  font-size: 22px;
  margin-right: 10px;
}

.user-info {
  display: flex;
  align-items: center;
  padding-right: 10px;
}

#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.center-content {
  padding-top: 180px;
  position: relative;
}

.container-fluid {
  font-family: "Bebas Neue", sans-serif;
}

body {
  overflow: auto; /* Omogući skrolovanje celog sadržaja */
}

.scrollable-content {
  height: 100vh; /* Postavite visinu roditeljskog elementa na visinu ekrana */
  overflow-y: auto; /* Omogući vertikalno skrolovanje unutar roditeljskog elementa */
}
</style>

<script>
import Nav from "./components/Nav.vue";

export default {
  components: {
    Nav,
  },
};
</script>
