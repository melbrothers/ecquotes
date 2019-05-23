<template>
  <div>
    <tool-bar v-on:toggleDrawer="drawer = !drawer" :drawer="drawer"></tool-bar>
    <main>
      <v-content>
        <v-container fluid class="pa-0">
          <v-layout row>
            <v-flex xs12>
              <div class="sign-up-box">
                <h1>Compare. Request. Choose. Order</h1>
                <h2>Your one-stop for all electrical products</h2>
                 <v-btn class="signup-btn mt-4">Sing up</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row wrap>
            <v-flex xs8 class="intro-box-1">
              <div class="px-5 py-3">
                <h1 >Trusted within the industry</h1>
                <h2>Save time and money by ordering and requesting quotes from the biggest range of electrical wholesalers and products within Australia.</h2>
              </div>
             
            </v-flex>
            <v-flex xs4 class="intro-box-1" align-self-center>
               <div class="intro-img">
                <img src="https://via.placeholder.com/300" alt="image">
              </div>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
    </main>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import ToolBar from '~/components/ToolBar'

export default {
  name: 'welcome-view',
  layout: 'default',
  components: {
    'tool-bar': ToolBar,
  },

  metaInfo () {
    return { title: this.$t('home') }
  },

  computed: mapGetters({
    authenticated: 'authCheck'
  }),

  data: () => ({
    title: window.config.appName,
    drawer: false
  })
}
</script>
<style lang="scss" scoped>
  .sign-up-box, .intro-box-1 {
    display: flex;
    flex-direction: column;
    min-height: 400px;
  }
  .sign-up-box{
    align-items: center;
    justify-content: center;
    background: var(--v-primary-base);
    h1, h2 {
      color: #fff;
      font-weight: 500;
    }
    h1 {
      font-size: 5rem;
      word-spacing: 10px;
    }
    h2 {
      font-size: 2rem;
    }
  }
  .intro-box-1 {
    background: #fff;
    align-items: flex-start;
    justify-content: flex-start;
    h1, h2 {
      font-weight: 500;
    }
    h1 {
      font-size: 3rem;
      color: var(--v-primary-base);
    }
    h2 {
      font-size: 1.4rem;
    }
  }
  .signup-btn {
    color: var(--v-primary-base);
    font-weight: bold;
    font-size: 16px;
    text-transform: none;
  }
</style>
