import Vue from 'vue'
import App from './App.vue'
<<<<<<< HEAD
=======
import vuetify from './plugins/vuetify';
import store from './store'
import router from './router'
>>>>>>> e3269a0abe0221ac8c82de63984b442136bfe38d

Vue.config.productionTip = false

new Vue({
<<<<<<< HEAD
  render: h => h(App),
=======
  vuetify,
  store,
  router,
  render: h => h(App)
>>>>>>> e3269a0abe0221ac8c82de63984b442136bfe38d
}).$mount('#app')
