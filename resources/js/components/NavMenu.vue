<template>
  <div>
    <v-toolbar flat color="#748C5D">
      <v-list>
        <v-list-tile>
          <v-list-tile-title class="title">
            {{ name }}
          </v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-toolbar>
    <v-divider></v-divider>
    <v-list>
      <v-list-tile
        value="true"
        v-for="(item, i) in items"
        :key="i"
        :to="item.route"
        avatar
        ripple
      >
        <v-list-tile-avatar>
          <v-icon light >{{item.icon}}</v-icon>
        </v-list-tile-avatar>
        <v-list-tile-content>
          <v-list-tile-title v-text="item.title" ></v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile >
    </v-list>
  </div>
</template>

<script>
  export default {
    data () {
      const user = this.$store.getters.authUser;
      return {
        name: this.$t('nav_menu_title'),
        items: [
          { title: 'Home', icon: 'dashboard', route: { name: 'home' }, permission: user.isWholesaleAdmin | user.isCompanyAdmin| user.isCompanyUser },

        ]
      }
    }
  }
</script>
