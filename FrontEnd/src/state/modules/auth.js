import axios from '../../axios';

export const state = {
    currentUser: JSON.parse(localStorage.getItem('auth.currentUser')),
    profileStatus: [],
    newUser:[]
}

export const mutations = {
    SET_CURRENT_USER(state, newValue) {
        state.currentUser = newValue;
        saveState('auth.currentUser', newValue)
    },
    UPDATE_PROFILE(state, profileStatus) {
        state.profileStatus = profileStatus
    },
    USER_ADDED(state,newUser){
        state.newUser=newUser
    }
}

export const getters = {
    // Whether the user is currently logged in.
    loggedIn(state) {
        return !!state.currentUser
    },
    currentUser(state) {
        return state.currentUser
    }
}

export const actions = {


    // This is automatically run in `src/state/store.js` when the app
    // starts, along with any other actions named `init` in other modules.
    // eslint-disable-next-line no-unused-vars
    init({state, dispatch}) {
        dispatch('validate')
    },

    // Logs in the current user.
    logIn({commit, dispatch, getters}, {email, password} = {}) {
        if (getters.loggedIn) return dispatch('validate')


        return new Promise((resolve, reject) => {
            // eslint-disable-next-line no-unused-vars

            let formData = new FormData();
            formData.append("email", email);
            formData.append("password", password);

            axios.post('/login', formData, {
                headers: {
                    "Content-Type": "multipart/form-data"
                }
            }).then(function (response) {
                commit('SET_CURRENT_USER', response.data.data)
                localStorage.setItem("auth_token", response.data.data.access_token);
                localStorage.setItem("user", JSON.stringify(response.data.data));
                resolve(response.data.data);
            }).catch((error) => {
                reject(error)
            });
        });
    },

    // Logs out the current user.
    logOut({commit}) {
        // eslint-disable-next-line no-unused-vars
                commit('SET_CURRENT_USER', null);
                localStorage.removeItem('auth_token');
                localStorage.removeItem('user');
    },


    addUser({commit},{user}) {
        return new Promise((resolve, reject) => {
            axios.post('/add/user',user).then((response) => {
                commit('USER_ADDED', response.data.data)
                resolve(response.data.data);
            }).catch((error)=>{
                reject(error.response)
            });
        })
    },

    updatedPassword({commit}, {email, new_password, token}) {
        return new Promise((resolve, reject) => {
            let obj = {email: email, new_password: new_password, token: token};
            axios.post('/change_password', obj).then((response) => {
                commit('UPDATE_PROFILE', response.data.data);
                resolve(response.data);
            }).catch((error) => {
                commit('UPDATE_PROFILE', error.response);
                reject(error.response)
            });
        })
    },

    tokenVerification({commit}, {token}) {
        return new Promise((resolve, reject) => {
            let obj = {token: token};
            axios.post('/tokenverification', obj).then((response) => {
                commit('UPDATE_PROFILE', response.data.data);
                resolve(response.data);
            }).catch((error) => {
                commit('UPDATE_PROFILE', error.response);
                reject(error.response)
            });
        })
    },

    passwordResetEmail({commit}, {email}) {
        return new Promise((resolve, reject) => {
            let obj = {email: email};
            axios.post('/sendresetpasswordemail', obj).then(function (response) {
                resolve(response.data.data);
            }).catch((error) => {
                reject(error)
            });
        });

    },
    // Validates the current user's token and refreshes it
    // with new data from the API.
    // eslint-disable-next-line no-unused-vars
    validate({commit, state}) {
        if (!state.currentUser) {
            return Promise.resolve(null)
        }

        return Promise.resolve(state.currentUser);
    },
}

function saveState(key, state) {
    window.localStorage.setItem(key, JSON.stringify(state))
}
