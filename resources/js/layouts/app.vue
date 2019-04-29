<template>
  <v-app light>
    <v-navigation-drawer 
      v-if="authenticated" 
      persistent 
      v-model="drawer" 
      :mini-variant.sync="mini"
      enable-resize-watcher 
      app
    >
      <nav-menu></nav-menu>
    </v-navigation-drawer>
    <tool-bar v-on:toggleDrawer="drawer = !drawer" :drawer="drawer"></tool-bar>
    <v-content>
      <v-container fluid grid-list-md>
        <transition name="page" mode="out-in">
          <router-view></router-view>
        </transition>
      </v-container>
    </v-content>
    <feedback-message></feedback-message>
    <page-footer></page-footer>
  </v-app>
</template>

<script>
import { mapGetters } from 'vuex'

import NavMenu from '~/components/NavMenu'
import ToolBar from '~/components/ToolBar'
import FeedbackMessage from '~/components/FeedbackMessage'
import PageFooter from '~/components/PageFooter'

export default {
  components: {
    'nav-menu': NavMenu,
    'tool-bar': ToolBar,
    'feedback-message': FeedbackMessage,
    'page-footer': PageFooter
  },

  computed: mapGetters({
    authenticated: 'authCheck'
  }),

  data () {
    return {
      drawer: false,
      mini: true,
    }
  }
}
</script>
