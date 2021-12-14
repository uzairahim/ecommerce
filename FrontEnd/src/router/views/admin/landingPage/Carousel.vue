<template>
    <Layout>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="mb-0 h3 text-uppercase">Carousel</span>
                        <button class="float-right btn btn-primary" v-b-modal.addCarouselModal @click="addCarouselModal">
                            Add
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-between align-items-center mr-2"
                                 v-for="(carousel,index) in carousel_data" :key="index">
                                <div class="position-relative">
                                    <h3 class="text-capitalize img-text text-info">{{carousel['title']}}</h3>
                                    <img :src="carousel['image']" alt="" style="height: 250px;width: 300px;">
                                </div>
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
                add_form: false
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
            this.getCarousels()
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
        color: #27b3d4;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


</style>
