<template>
    <Layout>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="mb-0 h3 text-uppercase text-warning">Products</span>
                        <button class="float-right btn btn-primary" v-b-modal.addProductModal @click="addProductModal">
                            Add
                        </button>
                    </div>
                    <div class="card-body">
                        <b-row v-if="loaded">
                            <b-col>
                                <span class="skeleton">
                                    <b-skeleton-img animation="fade"></b-skeleton-img>
                                </span>
                            </b-col>
                            <b-col>
                                <span class="skeleton">
                                    <b-skeleton-img animation="fade"></b-skeleton-img>
                                </span>
                            </b-col>
                            <b-col>
                                <span class="skeleton">
                                    <b-skeleton-img animation="fade"></b-skeleton-img>
                                </span>
                            </b-col>
                        </b-row>
                        <div class="row" v-if="!loaded" v-for="(type,index) in product_data">
                            <div class="card-header" style="width: 1024px">
                                <p class="mb-0 h3 text-uppercase text-warning">{{index.replace('_',' ')}}</p>
                            </div>
                                <viewProduct :products="type"></viewProduct>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="dataTables_paginate paging_simple_numbers float-right">
                            <ul class="pagination pagination-rounded mb-0">
                                <!-- pagination -->
                                <!-- <b-pagination v-model="currentPage" :total-rows="rows" :per-page="perPage"></b-pagination> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <addProductModal v-if="add_form"/>

    </Layout>
</template>

<script>
    import Layout from "../../../../layouts/main";
    import addProductModal from "../add/ratedProduct";
    import appConfig from "@/app.config";
    import {ratedProductMethods} from "@/state/helpers";
    import viewProduct from "./viewProduct";

    export default {
        page: {
            title: "Products",
            meta: [{name: "description", content: appConfig.description}]
        },
        data() {
            return {
                add_form: false,
                popup: false,
                loaded: false,
                lastBool: false
            };
        },
        computed: {
            product_data() {
                return this.$store.state.ratedProduct.rated_products
            }
        },
        components: {
            Layout, addProductModal,viewProduct
        },
        methods: {
            ...ratedProductMethods,
            addProductModal() {
                this.add_form = true;
            }
        },
        mounted() {
            this.loaded = true;
            this.getRatedProducts().then(res => {
                this.loaded = false
            }).catch(error => {
                this.loaded = false
            });
        }
    };
</script>

<style scoped>
    #toast {
        color: white;
    }

    .border-box {
        border: 1px solid #EFE9F4;
        box-sizing: border-box;
        box-shadow: 3px 3px 6px rgba(56, 46, 70, 0.1);
        padding: 5px;
        border-radius: 8px;
        position: relative;
        cursor: pointer;
    }
    .img-fluid{
        max-width: 328px;
        height: 250px;
    }
</style>
