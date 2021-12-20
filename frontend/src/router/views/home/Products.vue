<template>
    <div>
        <div class="promo-section">
            <h3 class="text-center text-uppercase text">Our Feature Products</h3>
            <b-container fluid>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" v-for="(product,index) in allProducts"
                         :key="index">
                        <img alt="promotion banner" :src="product['image']">
                    </div>
                </div>
            </b-container>
        </div>
    </div>
</template>

<script>
    import {productMethods} from "@/state/helpers";
    export default {
        computed: {
            allProducts() {
                return this.$store.state.product.products
            }
        },
        methods: {
            ...productMethods
        },
        created() {
            this.getProducts()
        }
    }
</script>

<style>
    .promo-section {
        background-color: white;
        overflow: hidden;
        width: 100%;
        margin-top: 45px;
        padding-top: 10px;
    }

    .promo-section img {
        width: 100%;
        margin-bottom: 20px
    }

    .text {
        color: #8b8b8b;
        text: bold;
        font-family: revert;
    }
</style>