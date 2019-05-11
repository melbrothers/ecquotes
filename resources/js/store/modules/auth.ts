import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

// state
export const state = {
  user: null,
  token: Cookies.get('token')
};

// mutations
export const mutations = {
  [types.SAVE_TOKEN] (state: any, { token, remember }: any) {
    state.token = token;
    Cookies.set('token', token, { expires: remember ? 365 : new Date()})
  },
  [types.FETCH_USER_SUCCESS] (state: any, { user }: any) {
    state.user = user
  },
  [types.FETCH_USER_FAILURE] (state: any) {
    state.token = null;
    Cookies.remove('token')
  },
  [types.LOGOUT] (state: any) {
    state.user = null;
    state.token = null

    Cookies.remove('token')
  },
  [types.UPDATE_USER] (state: any, { user }: any) {
    state.user = user
  }
}

// actions
export const actions = {
  saveToken ({ commit, dispatch }: any, payload: any) {
    commit(types.SAVE_TOKEN, payload)
  },

  async fetchUser ({ commit }: any) {
    try {
      const { data } = await axios.get('/api/user')

      commit(types.FETCH_USER_SUCCESS, { user: data })
    } catch (e) {
      commit(types.FETCH_USER_FAILURE)
    }
  },

  async updateUser ({ commit }: any, payload: any) {
    commit(types.UPDATE_USER, payload)
  },

  async logout ({ commit }: any) {
    try {
      await axios.post('/api/logout')
    } catch (e) { }

    commit(types.LOGOUT)
  }
};

// getters
export const getters = {
  authUser: (state:any) => state.user,
  authToken: (state:any) => state.token,
  authCheck: (state:any) => state.user !== null
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
