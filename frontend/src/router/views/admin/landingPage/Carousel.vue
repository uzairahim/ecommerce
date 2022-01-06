<template>
    <Layout>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="mb-0 h3 text-uppercase text-warning">Carousel</span>
                        <button class="float-right btn btn-primary" v-b-modal.addCarouselModal
                                @click="addCarouselModal">
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
                                 v-for="(carousel,index) in carousel_data" :key="index">
                                <h3 class="text-capitalize img-text">{{carousel['title']}}</h3>
                                <img :src="carousel['image']" alt="" class="img-fluid">
                            </div>
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
    import Layout from "../../../layouts/main";
    import addProductModal from "./add/carousel";
    import appConfig from "@/app.config";
    import {carouselMethods} from "@/state/helpers";

    /**
     * Advanced table component
     */
    export default {
        page: {
            title: "Carousel",
            meta: [{name: "description", content: appConfig.description}]
        },
        data() {
            return {
                add_form: false,
                loaded: false
            };
        },
        computed: {
            carousel_data() {
                return this.$store.state.carousel.carousels
            }
        },
        components: {
            Layout, addProductModal
        },
        methods: {
            ...carouselMethods,
            addCarouselModal() {
                this.add_form = true;
            },
        },
        mounted() {

            this.loaded = true;
            this.getCarousels().then(res => {
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

    .badge-danger {
        background-color: rgba(255, 14, 14, 0.815);
    }

    .btn-width {
        width: 35px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .card-heading {
        color: #c89e1e;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .border-box {
        border: 1px solid #EFE9F4;
        box-sizing: border-box;
        box-shadow: 3px 3px 6px rgba(56, 46, 70, 0.1);
        padding: 5px;
        border-radius: 8px;
        position: relative;
    }

    .img-fluid {
        max-width: 328px;
        height: 250px;
    }
</style>
