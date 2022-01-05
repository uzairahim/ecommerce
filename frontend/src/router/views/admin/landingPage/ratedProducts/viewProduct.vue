<template>
    <div class="boxWrapper mt-3">
        <div class="box-inner mb-3"
             v-for="(product,index) in products" :key="index" :title="product['title']">
            <h5 class="img-text">{{product['title']}}</h5>
            <img :src="product['image']" alt=""
                 @click="openGallery(index)" class="img-fluid">
        </div>
        <LightBox
                ref="lightbox"
                :media="media"
                :show-caption="true"
                :show-light-box="popup"
        />
    </div>
</template>

<script>
    import LightBox from 'vue-it-bigger';
    import('vue-it-bigger/dist/vue-it-bigger.min.css');
    export default {
        data(){
            return{
                popup:false
            }
        },
        props:{
            products:{
                type:Array
            }
        },
        components: {
            LightBox
        },
        computed:{
            media() {
                return this.products.map((product) => {
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
        methods: {
            openGallery(index) {
                console.log(index)
                this.popup = true;
                this.$refs.lightbox.showImage(index);
            },

        },

    }
</script>
<style>
    .boxWrapper {
        width: 100%;
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        column-gap: 1rem;
    }
    .box-inner {
        width: 100%;
        max-width: calc(100% / 4 - 1rem);
        flex: 0 0 calc(100% / 4 - 1rem);
        border: 1px solid #EFE9F4;
        box-sizing: border-box;
        box-shadow: 3px 3px 6px rgba(56, 46, 70, 0.1);
        padding: 5px;
        border-radius: 8px;
        position: relative;
        cursor: pointer;
    }
    .img-text {
        width: 100%;
        margin-bottom: 0;
        padding-block: 15px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (max-width: 576px) {
        .box-inner {
            width: 100%;
            max-width: calc(100% / 1 - 0px);
            flex: 0 0 calc(100% / 1 - 0px);
        }
    }
</style>