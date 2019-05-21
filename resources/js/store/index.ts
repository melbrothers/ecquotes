import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import auth from './modules/auth';
import message from './modules/message';

Vue.use(Vuex);


export default new Vuex.Store({
  strict: process.env.NODE_ENV !== 'production',
  modules: {
      auth,
      message
  },
  plugins: [createPersistedState({ storage: window.sessionStorage })]
})
