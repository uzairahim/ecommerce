<template>
  <div class="loader-wrapper">
  <div class="image-loader">
        <b-spinner variant="primary" style="width: 3rem; height: 3rem;" label="Large Spinner"></b-spinner>
  </div>
</div>
</template>

<style>
/* loader */
.loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    bottom: 0;
    right: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 50;
}
/* .image-loader {
    background-image: url(../../../assets/logo-blue.png);
    width: 100px;
    height: 100px;
    background-repeat: no-repeat;
    background-size: cover;
} */
.image-loader,
.image-loader::before,
.image-loader::after {
    height: 50px;
    width: 50px;
    margin-left: -5px;
    margin-top: -5px;
    /* box-shadow: 0 0 0 2px #7b7b7b;
    border-radius: 50%; */
    opacity: 1;
    position: absolute;
    animation: pulse 1.5s infinite ease-out;
    z-index: 9999;
}
.image-loader, .image-loader::before, .image-loader::after {
    top: 50%;
    left: 50%;
}
.image-loader::before {
    animation-delay: 0.2s;
}
.image-loader::after {
    animation-delay: 0.4s;
}
</style>