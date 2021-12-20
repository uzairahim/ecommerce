import Vue from 'vue'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import Vuelidate from 'vuelidate'
import VueMask from 'v-mask'
import * as VueGoogleMaps from 'vue2-google-maps'
import VueSweetalert2 from 'vue-sweetalert2'
import VueApexCharts from 'vue-apexcharts'
import router from './router/index'
import store from '@/state/store'
import vco from "v-click-outside"
import "@/design/index.scss";
import Sparkline from 'vue-sparklines';

Vue.use(BootstrapVue);

Vue.config.productionTip = false

Vue.use(Vuelidate);
Vue.use(VueMask)
Vue.use(VueSweetalert2)
Vue.use(require('vue-chartist'))
Vue.use(vco)
Vue.use(Sparkline)
Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyCJaXDeYb4B0QIUyBvB2Wx7GOa0s5ppi-k',
    libraries: 'places',
  },
  installComponents: true
})
Vue.component('apexchart', VueApexCharts)
Vue.prototype.stripeKey = 'pk_test_51JybfvJYdtnFrFKHNqf8GaB7Dhx6eI7dEDTBAzIsZnfN0IrZDWgfAm5pM6pNMUGRRvDRPKfs1FYmzUfNBhvtfHh400s4z6rPP6'
Vue.prototype.globalURL = window.location.origin
new Vue({
  router,
  store,
  render: h => h(App),
}).$mount('#app')
