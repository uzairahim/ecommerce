<template>
    <div class="position-relative">
        <loading v-if="loaded"></loading>
        <Navbar></Navbar>
        <div id="hexagon" v-if="!loaded">
            <VueSlickCarousel v-if="carouselData.length>0" class="home-slider" :arrows="true" v-bind="settings">
                <div v-for="(carousel,index) in carouselData" class="img_setting" :key="index"
                     :style="{'backgroundImage': 'url('+carousel['image']+')'}">
                    <span class="title h3"></span>
                </div>
                <!--            <img :src="carousel['image']" class="img-fluid" v-for="(carousel,index) in carouselData" :key="index">-->
            </VueSlickCarousel>
        </div>
    </div>
</template>

<script>
    import VueSlickCarousel from 'vue-slick-carousel'
    import 'vue-slick-carousel/dist/vue-slick-carousel.css'
    // optional style for arrows & dots
    import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
    import {carouselMethods} from "@/state/helpers";
    import loading from "../animation/loading";
    import Navbar from "./Navbar";

    export default {
        data() {
            return {
                loaded: false,
                settings: {
                    "lazyLoad": "ondemand",
                    "dots": false,
                    "fade": true,
                    "infinite": true,
                    "speed": 2000,
                    "autoplay": true,
                    "autoplaySpeed": 3000,
                    "slidesToShow": 1,
                    "slidesToScroll": 1
                }
            }
        },
        computed: {
            carouselData() {
                return this.$store.state.carousel.carousels
            }
        },
        components: {VueSlickCarousel, loading, Navbar},
        methods: {
            ...carouselMethods,
        },
        mounted() {
            this.loaded = true;
            this.getCarousels().then(res => {
                this.loaded = false
            }).catch(error => {
                this.loaded = false
            });
        }
    }
</script>

<style>
    body {
        overflow-x: hidden;
    }

    #hexagon img {
        width: 100%;
        background-color: red;
        height: 600px;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 50% 100%, 0 90%);
    }

    .img_setting {
        background-repeat: no-repeat;
        background-position: center;
        height: 570px;
        clip-path: polygon(0 0, 100% 0, 100% 94%, 50% 100%, 50% 100%, 0 94%);
        width: fit-content;
    }

    .title {
        font-weight: bold;
        color: #23b4d0;
    }
</style>