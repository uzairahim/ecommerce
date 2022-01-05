import axios from '../../axios';
export const state = {
    rated_products : []
}

export const mutations = {
    GET_PRODUCTS(state, products) {
        state.rated_products = products.data
    },
    ADD_PRODUCT(state, product) {
        state.rated_products[product.data.type].push(product.data)
    },
}

export const getters = {

}

export const actions = {

    getRatedProducts({commit}) {
        return new Promise((resolve, reject) => {
            axios.get('/rated-products').then((response) => {
                commit('GET_PRODUCTS',response.data);
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },

    addRatedProduct({commit}, {data}) {
        return new Promise((resolve, reject) => {
            axios.post('upload-rated-product',data).then((response) => {
                commit('ADD_PRODUCT',response.data)
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },
}
