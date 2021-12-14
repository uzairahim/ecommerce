import axios from '../../axios';
export const state = {
    products : []
}

export const mutations = {
    GET_PRODUCTS(state, products) {
        state.products = products.data
    },
    ADD_PRODUCT(state, product) {
        state.products.unshift(product.data)
    }
}

export const getters = {

}

export const actions = {

    getProducts({commit}) {
        return new Promise((resolve, reject) => {
            axios.get('/products').then((response) => {
                commit('GET_PRODUCTS',response.data);
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },

    addProduct({commit}, {data}) {
        return new Promise((resolve, reject) => {
            axios.post('upload-product',data).then((response) => {
                commit('ADD_PRODUCT',response.data)
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },
}
