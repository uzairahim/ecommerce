<template>
    <div class="loader-wrapper">
        <div class="image-loader"></div>
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
    .image-loader {
        background-image: url(../../../assets/images/logo-1.png);
        width: 100px;
        height: 100px;
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }
    .image-loader,
    .image-loader::before,
    .image-loader::after {
        height: 70px;
        width: 70px;
        margin-left: -5px;
        margin-top: -5px;
        box-shadow: 0 0 0 4px #e5e5e5;
        border-radius: 50%;
        opacity: 1;
        position: absolute;
        animation: pulse 1.5s infinite ease-in-out;
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