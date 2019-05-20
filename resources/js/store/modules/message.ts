import * as types from '../mutation-types'
import { MessageState } from '../types'
import { GetterTree, MutationTree, ActionTree } from 'vuex'

// state
export const state: MessageState = {
  type: '',
  title: '',
  text: '',
  modal: false,
  show: false
};

// mutations
export const mutations: MutationTree<MessageState> = {
  [types.RESPONSE_MSG] (state, payload) {
    Object.assign(state, { ...payload, show: true })
  },
  [types.CLEAR_MSG] (state) {
    Object.assign(state, { type: '', text: '', title: '', modal: false, show: false })
  }
}

// actions
export const actions: ActionTree<MessageState, any> = {
  responseMessage ({ commit, state }, payload) {
    commit(types.RESPONSE_MSG, payload);
    if (!state.modal) {
      setTimeout(() => { commit(types.CLEAR_MSG) }, 6500)
    }
  },
  clearMessage ({ commit }) {
    commit(types.CLEAR_MSG)
  }
}

// getters
export const getters: GetterTree<MessageState, any> = {
  responseMessage: state => {
    return { ...state }
  }
};

export default {
    state,
    getters,
    actions,
    mutations
}
