import { mapState, mapGetters, mapActions } from 'vuex'

export const authComputed = {
  ...mapState('auth', {
    currentUser: (state) => state.currentUser,
  }),
  ...mapGetters('auth', ['loggedIn','currentUser']),
}

export const layoutComputed = {
  ...mapState('layout', {
    layoutType: (state) => state.layoutType,
    layoutWidth: (state) => state.layoutWidth,
  }),
}

export const carouselComputed = {
  ...mapState('carousel', {
    carousels: (state) => state.carousels
  }),
  ...mapGetters('carousel',['allCarousels'])
}


export const authMethods = mapActions('auth', ['logIn', 'logOut', 'register', 'resetPassword','updatedPassword','passwordResetEmail','tokenVerification','addUser'])

export const layoutMethods = mapActions('layout', ['changeLayoutType'])

export const carouselMethods = mapActions('carousel', ['getCarousels','addCarousel'])

export const productMethods = mapActions('product', ['getProducts','addProduct'])
