import axios from '../../axios';
export const state = {
    carousels : []
}

export const mutations = {
    GET_CAROUSELS(state, carousels) {
        state.carousels = carousels.data
    },
    ADD_CAROUSEL(state, carousel) {
        state.carousels.unshift(carousel.data)
    }
}

export const getters = {

}

export const actions = {

    getCarousels({commit}) {
        return new Promise((resolve, reject) => {
            axios.get('/carousel-images').then((response) => {
                commit('GET_CAROUSELS',response.data);
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },

    addCarousel({commit}, {data}) {
        return new Promise((resolve, reject) => {
            axios.post('upload-carousel',data).then((response) => {
                commit('ADD_CAROUSEL',response.data)
                resolve(response.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },
}
