<template>
    <div id="hexagon">
        <vue-slick-carousel class="home-slider" :arrows="true" v-bind="settings">
<!--                <div v-for="(carousel,index) in carouselData" style="width: fit-content" :key="index" :style="{'backgroundImage': 'url('+carousel['image']+')'}">-->
<!--                    {{carouselData[0]}}-->
<!--                </div>-->
            <img :src="carousel['image']" class="img-fluid" v-for="(carousel,index) in carouselData" :key="index">
        </vue-slick-carousel>
    </div>
</template>

<script>
    import VueSlickCarousel from 'vue-slick-carousel'
    import 'vue-slick-carousel/dist/vue-slick-carousel.css'
    // optional style for arrows & dots
    import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
    import {carouselMethods} from "@/state/helpers";

    export default {
        data() {
            return {
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
        components: {VueSlickCarousel},
        methods:{
            ...carouselMethods,
        },
        mounted() {
            this.getCarousels()
        }
    }
</script>

<style>
    body {
        overflow-x: hidden;
    }

    #hexagon img{
        width: 100%;
        background-color: red;
        height: 750px;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 50% 100%, 0 90%);
    }
</style>