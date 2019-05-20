import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'
import { AuthState } from '../types'
import { GetterTree, MutationTree, ActionTree } from 'vuex'

// state
export const state: AuthState = {
  user: null,
  token: Cookies.get('token')
};

// mutations
export const mutations: MutationTree<AuthState> = {
  [types.SAVE_TOKEN] (state, { token, remember }) {
    state.token = token;
    Cookies.set('token', token, { expires: remember ? 365 : new Date()})
  },
  [types.FETCH_USER_SUCCESS] (state, { user }) {
    state.user = user
  },
  [types.FETCH_USER_FAILURE] (state) {
    state.token = undefined;
    Cookies.remove('token')
  },
  [types.LOGOUT] (state) {
    state.user = undefined;
    state.token = undefined

    Cookies.remove('token')
  },
  [types.UPDATE_USER] (state, { user }) {
    state.user = user
  }
}

// actions
export const actions: ActionTree<AuthState, any> = {
  saveToken ({ commit, dispatch }, payload) {
    commit(types.SAVE_TOKEN, payload)
  },

  async fetchUser ({ commit }) {
    try {
      const { data } = await axios.get('/api/user')

      commit(types.FETCH_USER_SUCCESS, { user: data })
    } catch (e) {
      commit(types.FETCH_USER_FAILURE)
    }
  },

  async updateUser ({ commit }, payload) {
    commit(types.UPDATE_USER, payload)
  },

  async logout ({ commit }) {
    try {
      await axios.post('/api/logout')
    } catch (e) { }

    commit(types.LOGOUT)
  }
};

// getters
export const getters: GetterTree<AuthState, any> = {
  authUser: state => state.user,
  authToken: state => state.token,
  authCheck: state => state.user !== null
};

export default {
    state,
    getters,
    actions,
    mutations
}
