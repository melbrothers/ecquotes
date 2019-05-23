import Vue from 'vue'
import Vuetify from 'vuetify'
import store from './store'
import router from './router'
import { i18n } from './plugins'
import App from './components/App.vue'
import './components'

Vue.use(Vuetify, {
  theme: {
    primary: '#2066AB',
    secondary: '#189AC9',
    accent: '#6ABED1',
    error: '#B50F12',
    info: '#4F9950',
    success: '#F05633',
    warning: '#B0C781'
  }, options: {
    customProperties: true
  }
});

Vue.config.productionTip = false;

new Vue({
  el: '#app',
  i18n,
  store,
  router,
  ...App
});
