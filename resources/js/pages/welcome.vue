<template>
  <div>
    <tool-bar v-on:toggleDrawer="drawer = !drawer" :drawer="drawer"></tool-bar>
    <main>
      <v-content>
        <v-container fluid class="pa-0">
          <v-layout row justify-center>
            <v-flex xs12>
              <div class="sign-up-box">
                <h1>Compare. Request. Order. Manage</h1>
                <h2>Your one stop shop for all your ordering needs completely FREE.</h2>
                 <v-btn class="signup-btn mt-4">Sign up</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row wrap class="intro-box">
            <v-flex md8 align-self-center>
              <div class="px-5 py-3">
                <h1 >Trusted within the industry.</h1>
                <h2>Save time and money by ordering and requesting quotes from the biggest range of electrical wholesalers and products within Australia.</h2>
              </div>
             
            </v-flex>
            <v-flex md4 align-self-center hidden-xs-only>
               <div class="intro-img">
                <img src="/images/builder1.jpg" alt="image">
                <v-btn color="primary">Find out more</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row text-xs-center class="intro-box bg-color-1 ma-4">
            <v-flex xs12 align-self-center>
              <div class="recommendation pa-4">
                <h1>It's an amazing tool I use on a day to day basis. Simplicity and the amount of time saved it crucial for my business." <br>- John Snow</h1>
              </div>
            </v-flex>
          </v-layout>
          <v-layout class="intro-box bg-color-2 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1>Compare Electrical Products: </h1>
                <p>Easily find and compare items and prices from the biggest range of electrical products in on location.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
                <img src="/images/comEl.png" alt="compare image" />
            </v-flex>
          </v-layout>
          <v-layout row class="intro-box bg-color-3 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1>Request Quote: </h1>
                <p>Quotes can be sent out to every wholesaler in one click, saving you time from sending the same order out to each individual suppliers.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <img src="../../images/pig.png" alt="pig" />
            </v-flex>

          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-4 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1>Reverse Actions: </h1>
                <p>Wholesalers have the option to bid for the lowest price for an order you have requested.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <img src="../../images/bid.png" alt="bid image" width="400"/>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-5 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1>Order management: </h1>
                <p>Manage all incoming orders, transactions and jobs in one simple platform, giving you the ability to keep track of orders and prices, and easily chase up on any issues you have with your orders.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <img src="../../images/orderMGM.png" alt="order image" width="400"/>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box bg-color-6 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1>Employee Integration: </h1>
                <p>Integrate your employees with this system and manage all of their orders and jobs in one place.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <img src="../../images/EmpInte.png" alt="Employee Integration image">
            </v-flex>
          </v-layout>

          <h1 class="ma-2 display-3">We differ from other services</h1>  
          <v-layout>
            <v-flex md6 align-self-start class="mx-2">
              <v-card class="py-3 px-2 d-flex">
                <v-layout>
                  <v-flex xs7 class="intro-box-small">
                    <h1>Free service with max features</h1>
                    <p>We offer a completely free service with maximum features for all electricians who want a better way to fulfil their orders.</p>
                  </v-flex>
                  <v-flex xs5 class="intro-box-small">
                    <img src="../../images/freeServ.jpg" alt="free service" width="250"/>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
            <v-flex md6 align-self-start class="mx-2">
               <v-card class="py-3 px-2 d-flex">
                <v-layout>
                  <v-flex xs7 class="intro-box-small">
                    <h1>Supplier Verification</h1>
                    <p>We do all the supplier verification so you don't have to worry about things going wrong.</p>
                  </v-flex>
                  <v-flex xs5 class="intro-box-small">
                    <img src="../../images/freeServ.jpg" alt="free service" width="250"/>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
          <v-layout>
             <v-flex md6 align-self-start class="mx-2">
               <v-card class="py-3 px-2 d-flex">
                <v-layout>
                  <v-flex xs7 class="intro-box-small">
                    <h1>Best deals</h1>
                    <p>We offer you the best deals through our business model, giving you the best deals available on the market.</p>
                  </v-flex>
                  <v-flex xs5 class="intro-box-small">
                    <img src="../../images/freeServ.jpg" alt="free service" width="250"/>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
             <v-flex md6 align-self-start class="mx-2">
               <v-card class="py-3 px-2 d-flex">
                <v-layout>
                  <v-flex xs7 class="intro-box-small">
                    <h1>One account</h1>
                    <p>Make one account to access credit with all the suppliers.</p>
                  </v-flex>
                  <v-flex xs5 class="intro-box-small">
                    <img src="../../images/freeServ.jpg" alt="free service" width="250"/>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
          <v-layout>
            <v-flex md6 align-self-start class="mx-2">
               <v-card class="py-3 px-2 d-flex">
                <v-layout>
                  <v-flex xs7 class="intro-box-small">
                    <h1>Scoring system</h1>
                    <p>We implement a scoring system that determines how much credit you will have access to and the potential for a bigger discount with your order.</p>
                  </v-flex>
                  <v-flex xs5 class="intro-box-small">
                    <img src="../../images/freeServ.jpg" alt="free service" width="250"/>
                  </v-flex>
                </v-layout>
              </v-card>
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
      background: var(--v-info-base);
      h1, h2, p {
        color: #fff;
      }
    }
    &.bg-color-6 {
      background: var(--v-warning-base);
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
      text-shadow: 1px 0px 4px #000000;
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
      font-size: 5rem;
      color: var(--v-primary-base);
    }
    h2 {
      font-size: 2rem;
    }
    p {
      font-size: 1.2rem;
    }
    .intro-img {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      img {
        width: 300px;
      }
    }
    .intro-box-small {
      h1 {
        font-size: 2rem;
      }
      p {
        font-size: 1.2rem;
      }
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
   
    h1 {
      font-size: 3vw;
      width: 90vw;
      color: rgb(91, 91, 91);
    }
  }

  .box-1 {
    color: #fff;
  }
</style>
