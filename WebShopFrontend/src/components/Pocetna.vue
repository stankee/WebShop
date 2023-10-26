<template>
  <video playsinline autoplay muted loop id="bgvid">
    <source src="../assets/videos/video.mp4" type="video/mp4" />
  </video>

  <div class="container col-xxl-10 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-4 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img
          src="../assets/img/circle.png"
          id="image"
          class="d-block mx-lg-auto img-fluid"
          alt="circle"
          width="500"
          height="500"
          loading="lazy"
        />
      </div>
      <div class="col-lg-6">
        <h1 class="display-6 text-white fw-bold lh-1 mb-3">
          Welcome to our WebShop!
        </h1>
        <p class="lead text-white">
          At our WebShop, we offer a wide range of high-quality products to meet
          all your needs. Whether you're looking for the latest tech gadgets,
          trendy fashion items, home essentials, or unique gifts, we've got you
          covered
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-secondary btn-lg px-5 me-md-2">
            Order now!
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
</template>

<script setup>

</script>

<style>
video {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
}
body {
  background: url("../assets/videos/video.mp4") rgba(0, 0, 0, 0.2);
  background-blend-mode: multiply;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

#image {
  border-radius: 100%;
  opacity: 0.8;
}

#image:hover {
  opacity: 1;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}

.b-example-divider {
  width: 100%;
  height: 4rem;
  background-color: rgba(0, 0, 0, 0.1);
  border: solid rgba(0, 0, 0, 0.15);
  border-width: 1px 0;
  box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
}

.b-example-vr {
  flex-shrink: 0;
  width: 1.5rem;
  height: 100vh;
}

.bi {
  vertical-align: -0.125em;
  fill: currentColor;
}

.btn-bd-primary {
  --bd-violet-bg: #712cf9;
  --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

  --bs-btn-font-weight: 600;
  --bs-btn-color: var(--bs-white);
  --bs-btn-bg: var(--bd-violet-bg);
  --bs-btn-border-color: var(--bd-violet-bg);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-hover-bg: #6528e0;
  --bs-btn-hover-border-color: #6528e0;
  --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
  --bs-btn-active-color: var(--bs-btn-hover-color);
  --bs-btn-active-bg: #5a23c8;
  --bs-btn-active-border-color: #5a23c8;
}
.bd-mode-toggle {
  z-index: 1500;
}
</style>
