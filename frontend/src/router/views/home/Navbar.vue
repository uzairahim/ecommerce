<template>
    <nav class="navbar-wrapper" :class="navBackground">
        <div class="container d-flex justify-content-between align-items-center">
            <ul class="m-0 p-0 list-unstyled">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
            </ul>
            <a href=""><img src="@/assets/images/logo-1.png" alt="" class="logo"/> </a>
            <ul class="m-0 p-0 list-unstyled">
                <li class="nav-item">
                    <a href="#about-us" class="nav-link text-white">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-us" class="nav-link text-white">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        data(){
          return {
              navBackground:''
          }
        },
        methods:{
            changeBackground(){
                if(window.scrollY > 300){
                    this.navBackground = "setBlackBackGround"
                }
                if(window.scrollY <50){
                    this.navBackground = "setTransparentBackGround"
                }
            }
        },
        mounted() {
            window.addEventListener('scroll', this.changeBackground);
        }
    }
</script>

<style>
    .navbar-wrapper {
        position: fixed;
        top: 0;
        z-index: 1;
        width: 100%;
        padding: 1px 0;
    }

    .navbar-wrapper .logo {
        max-width: 120px;
    }

    .navbar-wrapper ul li {
        display: inline-block;
    }
    .setBlackBackGround{
        background-color: rgba(38, 37, 37, 0.95);
    }
    .setTransparentBackGround{
        background-color: rgba(0, 0, 0, 0);
    }
</style>