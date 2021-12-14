<template>
    <div class="spinner">
        <span class="title">FPM</span><br>
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</template>
<style>
    .title{
        color: #288297a8;
        font-size: 26px;
        font-weight: 700;
        font-family: 'Sarabun';
    }
    .title {
        animation: blinker 1.5s linear infinite;

    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
    .spinner > div {
        width: 18px;
        height: 18px;
        border: 1px solid rgba(222, 222, 222, 0.65);
        background-color: #f3f3f3;
        border-radius: 100%;
        display: inline-block;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .spinner .bounce1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    .spinner .bounce2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {
        0%, 80%, 100% { -webkit-transform: scale(0) }
        40% { -webkit-transform: scale(1.0) }
    }

    @keyframes sk-bouncedelay {
        0%, 80%, 100% {
            -webkit-transform: scale(0);
            transform: scale(0);
        } 40% {
              -webkit-transform: scale(1.0);
              transform: scale(1.0);
          }
    }
</style>