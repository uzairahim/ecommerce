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


                        <div class="row" v-if="!loaded">
                            <div class="border-box mr-2 mb-3"
                                 v-for="(product,index) in product_data" :key="index">
                                    <h3 class="text-capitalize img-text">{{product['title']}}</h3>
                                    <img :src="product['image']" alt=""
                                         @click="openGallery(index)" class="img-fluid">
                            </div>
                        </div>
                        <LightBox
                                ref="lightbox"
                                :media="media"
                                :show-caption="true"
                                :show-light-box="popup"
                        />
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
    import Layout from "../../../layouts/main";
    import addProductModal from "./add/Product";
    import appConfig from "@/app.config";
    import {productMethods} from "@/state/helpers";
    import LightBox from 'vue-it-bigger';

    import('vue-it-bigger/dist/vue-it-bigger.min.css');
    /**
     * Advanced table component
     */
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
                return this.$store.state.product.products
            },
            media() {
                return this.$store.state.product.products.map((product) => {
                    return {
                        id: product.id,
                        src: product.image,
                        type: 'image',
                        thumb: product.image,
                        caption: product.title
                    }
                })
            }
        },
        components: {
            Layout, addProductModal, LightBox
        },
        methods: {
            ...productMethods,
            addProductModal() {
                this.add_form = true;
            },
            openGallery(index) {
                this.popup = true;
                this.$refs.lightbox.showImage(index);
            },

        },
        mounted() {
            this.loaded = true;
            this.getProducts().then(res => {
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
