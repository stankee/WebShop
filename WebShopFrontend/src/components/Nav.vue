<template>

<header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container-fluid">
          <!-- Toggle Button -->
          <button
            class="navbar-toggler shadow-none border-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- SideBar -->
          <div
            class="sidebar offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
          <!-- Sidebar Header -->
            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title fs-1" id="offcanvasNavbarLabel">
                Shop
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white shadow-none fs-4"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <!-- Sidebar Body -->
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-5">
                <li class="nav-item mx-4">
                  <a class="nav-link active text-light fs-2" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link text-light fs-2" href="/women">Women</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link text-light fs-2" href="/men">Men</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link text-light fs-2" href="/accessories">Accessories</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link text-light fs-2" href="/aboutus">About us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="user-info" v-if="isLoggedIn">
          <a href="" class="username">{{ username }}</a>
          <button @click="logout" class="btn btn-outline-danger" id="logout">Logout</button>
        </div>
      </nav>
    </header>
</template>

<script setup>
import { ref } from "vue";
import { useRoute, useRouter } from "vue-router";

const isLoggedIn = ref(!!localStorage.getItem("token"));
const username = ref(localStorage.getItem("username"));
const route = useRoute();
const router = useRouter();


function logout() {
  isLoggedIn.value = false;
  localStorage.clear();
  router.push("/login");
}


</script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
/* Navigacija */
#navbar {
  padding: 10px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  align-items: center;
  z-index: 1000;
  font-family: "Bebas Neue", sans-serif;
}

@media(max-width: 991px){
  .sidebar{
    background-color: rgba(43, 131, 169, 0.15);
    backdrop-filter: blur(7px);
  }
}




</style>