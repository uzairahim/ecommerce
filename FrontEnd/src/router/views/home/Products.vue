<template>
    <div class="promo-section">
        <h3 class="text-center text-uppercase text">Our Feature Products</h3>
        <b-container fluid>
        <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" v-for="(product,index) in allProducts" :key="index">
                    <img alt="promotion banner" :src="product['image']">
                </div>
            </div>
        </b-container>
    </div>
</template>

<script>
    import axios from "../../../axios"

    export default {
        data() {
            return {
                allProducts:{},
            }
        },
        methods:{
            getProduct(){
                axios.get('products').then((res) => {
                    this.allProducts = res.data.data
                }).catch((error) => {
                    console.log(error)
                })
            }
        },
        created() {
            this.getProduct();
        }
    }
</script>

<style>
    .promo-section {
        overflow: hidden;
        width: 100%;
        margin-top:45px
    }
    .promo-section img {
        width: 100%;
        margin-bottom:20px
    }
    .text{
        color: #8b8b8b;
        text:bold;
        font-family: revert;
    }
</style>