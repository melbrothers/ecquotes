<template>
  <v-toolbar fixed app dark clipped-left color="#14476B">
    <v-toolbar-side-icon @click.stop="toggleDrawer" v-if="authenticated"></v-toolbar-side-icon>
    <v-toolbar-title>
      <router-link :to="{ name: 'welcome' }" class="white--text">
        {{ appName }}
      </router-link>
    </v-toolbar-title>
    <v-spacer></v-spacer>

    <!-- Authenticated -->
    <template v-if="authenticated">
      <v-menu origin="center center" offset-y :nudge-bottom="10" transition="scale-transition">
        <v-btn flat slot="activator"><v-icon left>person</v-icon>{{ user.name }}</v-btn>
        <v-list class="pa-0">
          <v-list-tile v-for="(item,index) in account_items" @click="accountMenuItemClicked(item.action)" ripple="ripple" :disabled="item.disabled" :target="item.target" rel="noopener" :key="index">
            <v-list-tile-action v-if="item.icon">
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-menu>
    </template>

    <!-- Guest -->
    <template v-else>
      <v-btn flat :to="{ name: 'about' }">{{ $t('About') }}</v-btn>
      <v-btn flat :to="{ name: 'terms' }">{{ $t('Terms') }}</v-btn>
      <v-btn flat :to="{ name: 'login' }">{{ $t('login') }}</v-btn>
    </template>
  </v-toolbar>

</template>

<script lang="ts">
import i18n from '../plugins/vue-i18n'
import { Component, Vue, Prop } from 'vue-property-decorator'
import { Getter } from 'vuex-class'

@Component
export default class ToolBar extends Vue {
    @Prop(Boolean)
    private drawer!: boolean

    @Getter('authCheck')
    private authenticated!: boolean

    appName = 'Ecquotes'
    busy = false
    account_items = [
      {
        icon: 'account_circle',
        href: '#',
        title: i18n.t('account'),
        action: 'profile'
      },
      {
        icon: 'fullscreen_exit',
        href: '#',
        title: i18n.t('logout'),
        action: 'logout'
      }
    ]

    created() {
        console.log(this.authenticated)
    }
//   computed: mapGetters({
//     user: 'authUser',
//     authenticated: 'authCheck'
//   }),

//     toggleDrawer () {
//       this.$emit('toggleDrawer')
//     }
//   methods: {

//     async logout () {
//       this.busy = true

//       if (this.drawer) {
//         this.toggleDrawer()
//       }

//       // Log out the user.
//       await this.$store.dispatch('logout')
//       this.busy = false

//       // Redirect to login.
//       this.$router.push({ name: 'login' })
//     },
//     accountMenuItemClicked(action) {
//       switch (action) {
//         case 'profile':
//           this.$router.push({ name: 'settings.profile' })
//           break;
//         case 'logout':
//           this.logout();
//           break;
//       }
//     },
//   }
}
</script>

<style lang="stylus" scoped>
.toolbar__title .router-link-active
  text-decoration: none

</style>
