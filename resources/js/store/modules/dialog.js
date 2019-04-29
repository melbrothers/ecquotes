import * as types from '../mutation-types'
import { type } from 'os';

// state
export const state = {
  isAddDialogOpen: false,
  isCopyDialogOpen: false,
}

// mutations
export const mutations = {
  [types.UPDATE_ADD_ITEM_DIALOG_STATUS] (state, { status }) {
    state.isAddDialogOpen = status
  },
  [types.UPDATE_COPY_ITEM_DIALOG_STATUS] (state, { status }) {
    state.isCopyDialogOpen = status
  },
  
}

// actions
export const actions = {
  async updateAddItemDialogStatus ({ commit }, payload) {
    commit(types.UPDATE_ADD_ITEM_DIALOG_STATUS, payload)
  },
  async updateCopyItemDialogStatus ({ commit }, payload) {
    commit(types.UPDATE_COPY_ITEM_DIALOG_STATUS, payload)
  }
}

// getters
export const getters = {
  isAddDialogOpen: state => state.isAddDialogOpen,
  isCopyDialogOpen: state => state.isCopyDialogOpen,
}
