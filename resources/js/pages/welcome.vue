<template>
  <div>
    <tool-bar v-on:toggleDrawer="drawer = !drawer" :drawer="drawer"></tool-bar>
    <main>
      <v-content>
        <v-container fluid class="pa-0">
          <v-layout row justify-center>
            <v-flex xs12>
              <div class="sign-up-box">
                <h1>Compare. Request. Choose. Order</h1>
                <h2>Your one-stop for all electrical products</h2>
                 <v-btn class="signup-btn mt-4">Sign up</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row wrap class="intro-box">
            <v-flex xs8 >
              <div class="px-5 py-3">
                <h1 >Trusted within the industry</h1>
                <h2>Save time and money by ordering and requesting quotes from the biggest range of electrical wholesalers and products within Australia.</h2>
              </div>
             
            </v-flex>
            <v-flex xs4 align-self-center >
               <div class="intro-img">
                <img src="https://via.placeholder.com/300" alt="image">
                <v-btn color="primary">Find out more</v-btn>
              </div>
            </v-flex>
          </v-layout>

          <v-layout row text-xs-center class="intro-box bg-color-1 ma-4">
            <v-flex xs12>
              <div class="recommendation pa-4">
                <h1>It's an amazing tool I use on a day to day basis. Simplicity and the amount of time saved it crucial for my business." </h1>
                <h2>- John Snow</h2>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-2 ma-4">
            <v-flex xs12>
              <div class="pa-4">
                <h1>Compare Electrical Products: </h1>
                <p>Easily find and compare items and prices from the biggest range of electrical products in on location.</p>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-3 ma-4">
            <v-flex xs12>
              <div class="pa-4">
                <h1>Request Quote: </h1>
                <p>Quotes can be sent out to every wholesaler in one click, saving you time from sending the same order out to each individual suppliers.</p>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-4 ma-4">
            <v-flex xs12>
              <div class="pa-4">
                <h1>Reverse Actions: </h1>
                <p>Wholesalers have the option to bid for the lowest price for an order you have requested.</p>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-5 ma-4">
            <v-flex xs12>
              <div class="pa-4">
                <h1>Order management: </h1>
                <p>Manage all incoming orders, transactions and jobs in one simple platform, giving you the ability to keep track of orders and prices, and easily chase up on any issues you have with your orders.</p>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-6 ma-4">
            <v-flex xs12>
              <div class="pa-4">
                <h1>Employee Integration: </h1>
                <p>Integrate your employees with this system and manage all of their orders and jobs in one place.</p>
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
  .sign-up-box, .intro-box {
    display: flex;
    min-height: 400px;
    &.bg-color-1 {
      background: #e5e5e5;
    }
    &.bg-color-2 {
      background: var(--v-secondary-base);
      h1, h2, p {
        color: #fff;
      }
    }
    &.bg-color-3 {
      background: var(--v-accent-base);
      h1, h2, p {
        color: #fff;
      }
    }
    &.bg-color-4 {
      background: var(--v-success-base);
      h1, h2, p {
        color: #fff;
      }
    }
    &.bg-color-5 {
      background: var(--v-warning-base);
      h1, h2, p {
        color: #fff;
      }
    }
    &.bg-color-6 {
      background: var(--v-info-base);
      h1, h2, p {
        color: #fff;
      }
    }
  }
  .sign-up-box{
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: var(--v-primary-base);
    h1, h2 {
      color: #fff;
      font-weight: 500;
    }
    h1 {
      font-size: 6vw;
      word-spacing: 10px;
    }
    h2 {
      font-size: 2rem;
    }
  }
  .intro-box {
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
    p {
      font-size: 1.2rem;
    }
    .intro-img {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  }
  .signup-btn {
    color: var(--v-primary-base);
    font-weight: bold;
    font-size: 1.2rem;
    text-transform: none;
  }
  .recommendation {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    h1, h2 {
      width: 50vw;
      color: rgb(91, 91, 91);
    }
  }

  .box-1 {
    color: #fff;
  }
</style>
