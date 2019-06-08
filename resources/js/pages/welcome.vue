<template>
  <div>
    <ToolBar v-on:toggleDrawer="drawer = !drawer" :drawer="drawer"></ToolBar>
    <main>
      <v-content>
        <v-container fluid class="pa-0">
          <v-layout row justify-center>
            <v-flex xs12>
              <div class="sign-up-box blue darken-4 pa-4">
                <h1 class="white--text font-weight-500 display-2">Compare. Request. Order. Manage</h1>
                <h2 class="white--text font-weight-500 title mt-3">Your one stop shop for all your ordering needs completely FREE.</h2>
                 <v-btn class="signup-btn mt-4">Sign up</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row wrap class="intro-box">
            <v-flex md8 align-self-center>
              <div class="px-5 py-3">
                <h1 class="display-3 font-weight-bold indigo--text text-darken-4">Trusted within the industry.</h1>
                <h2 class="title indigo--text text-darken-4">Save time and money by ordering and requesting quotes from the biggest range of electrical wholesalers and products within Australia.</h2>
              </div>

            </v-flex>
            <v-flex md4 align-self-center hidden-xs-only>
               <div class="intro-img">
                <v-img src="/images/builder1.jpg" alt="image"></v-img>
                <v-btn color="primary">Find out more</v-btn>
              </div>
            </v-flex>
          </v-layout>
          <v-layout row text-xs-center class="intro-box grey lighten-3 ma-4">
            <v-flex xs12 align-self-center>
              <div class="recommendation text-center pa-4">
                <h1 class="display-1 font-weight-bold grey--text text-darken-4">It's an amazing tool I use on a day to day basis. Simplicity and the amount of time saved it crucial for my business." <br>- John Snow</h1>
              </div>
            </v-flex>
          </v-layout>
          <v-layout class="intro-box blue lighten-1 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1 class="white--text display-3 font-weight-bold">Compare Electrical Products: </h1>
                <p class="white--text subheading">Easily find and compare items and prices from the biggest range of electrical products in on location.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
                <v-img src="/images/comEl.png" alt="compare image" ></v-img>
            </v-flex>
          </v-layout>
          <v-layout row class="intro-box cyan lighten-2 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1 class="white--text display-3 font-weight-bold">Request Quote: </h1>
                <p class="white--text subheading">Quotes can be sent out to every wholesaler in one click, saving you time from sending the same order out to each individual suppliers.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <v-img src="/images/pig.png" alt="pig"></v-img>
            </v-flex>

          </v-layout>
          <v-layout row justify-center class="intro-box green darken-3 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1 class="white--text display-3 font-weight-bold">Bidding: </h1>
                <p class="white--text subheading">Wholesalers have the option to bid for the lowest price for an order you have requested.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <v-img src="/images/bid.png" alt="bid image"></v-img>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box orange darken-4 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1 class="white--text display-3 font-weight-bold">Order management: </h1>
                <p class="white--text subheading">Manage all incoming orders, transactions and jobs in one simple platform, giving you the ability to keep track of orders and prices, and easily chase up on any issues you have with your orders.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <v-img src="/images/orderMGM.png" alt="order image"></v-img>
            </v-flex>
          </v-layout>
          <v-layout row justify-center class="intro-box green lighten-2 ma-4">
            <v-flex md8 align-self-center>
              <div class="pa-4">
                <h1 class="white--text display-3 font-weight-bold">Employee Integration: </h1>
                <p class="white--text subheading font-weight-medium">Integrate your employees with this system and manage all of their orders and jobs in one place.</p>
              </div>
            </v-flex>
            <v-flex md4 hidden-xs-only align-self-center>
              <v-img src="/images/EmpInte.png"></v-img>
            </v-flex>
          </v-layout>

          <h1 class="ma-2 display-2 font-weight-bold">We differ from other services</h1>
          <v-layout row wrap>
            <v-flex md6 xs12 sm6 d-flex class="my-1">
              <v-card class="d-flex">
                <v-layout row wrap>
                  <v-flex md7 class="intro-box-small">
                    <h1>Free service with max features</h1>
                    <p>We offer a completely free service with maximum features for all electricians who want a better way to fulfil their orders.</p>
                  </v-flex>
                  <v-flex md5 hidden-xs-only>
                    <v-img src="/images/freeServ.jpg" alt="free service"></v-img>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
            <v-flex md6 xs12 sm6 d-flex class="my-1">
               <v-card class="d-flex">
                <v-layout row wrap>
                  <v-flex md7 xs12 class="intro-box-small">
                    <h1>Supplier Verification</h1>
                    <p>We do all the supplier verification so you don't have to worry about things going wrong.</p>
                  </v-flex>
                  <v-flex md5 hidden-xs-only>
                    <v-img src="/images/SupplierVerif.jpg" alt="Supplier Verification"></v-img>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
          <v-layout row wrap>
             <v-flex md6 xs12 sm6 d-flex class="my-1">
               <v-card class="d-flex">
                <v-layout row wrap>
                  <v-flex md7 xs12 class="intro-box-small">
                    <h1>Best deals</h1>
                    <p>We offer you the best deals through our business model, giving you the best deals available on the market.</p>
                  </v-flex>
                  <v-flex md5 hidden-xs-only>
                    <v-img src="/images/bestDeals.jpg" alt="Best deals" ></v-img>
                  </v-flex>
                </v-layout>
              </v-card>
             </v-flex>
             <v-flex md6 xs12 d-flex class="my-1">
               <v-card class="d-flex">
                <v-layout row wrap>
                  <v-flex md7 xs12 class="intro-box-small">
                    <h1>One account</h1>
                    <p>Make one account to access credit with all the suppliers.</p>
                  </v-flex>
                  <v-flex md5 hidden-xs-only>
                    <v-img src="/images/OneAccount.png" alt="One account"></v-img>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
          <v-layout row wrap>
            <v-flex md6 xs12 d-flex class="my-1">
               <v-card class="d-flex">
                <v-layout row wrap>
                  <v-flex md7 xs12 class="intro-box-small">
                    <h1>Scoring system</h1>
                    <p>We implement a scoring system that determines how much credit you will have access to and the potential for a bigger discount with your order.</p>
                  </v-flex>
                  <v-flex md5 hidden-xs-only>
                    <v-img src="/images/scoringSys.jpg" alt="Scoring System" ></v-img>
                  </v-flex>
                </v-layout>
              </v-card>
            </v-flex>
          </v-layout>
          <v-layout row wrap>
            <v-flex class="blue darken-4 white--text py-2 px-5" md7 xs12>
                <h1 class="display-3 font-weight-bold">Be a part of the <span>future</span> </h1>
                <p class="subheading">Sign up today to access the biggest range of eletrical wholesalers and products within Australia.</p>
                <v-btn class="signup-btn mt-4">Sign up</v-btn>
            </v-flex>
            <v-flex class="bottom-img" md5 hidden-xs-only>
              <v-img src="/images/bottomImg.jpg" alt="bottom image" ></v-img>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
    </main>
  </div>
</template>

<script lang="ts">
import ToolBar from '../components/ToolBar.vue'
import { Component, Vue, Prop } from 'vue-property-decorator'

@Component({
    components: {
        ToolBar
    }
})
export default class Welcome extends Vue {
    drawer = false
    metaInfo () {
        return { title: this.$t('home') }
    }
}
</script>
<style lang="scss" scoped>
  .sign-up-box, .intro-box {
    display: flex;
    min-height: 400px;
  }
  .sign-up-box{
    flex-direction: column;
    align-items: center;
    justify-content: center;
    h1, h2 {
      text-shadow: 1px 0px 4px #000000;
    }
    h1 {
      word-spacing: 10px;
    }
  
  }
  .intro-box {
    align-items: flex-start;
    justify-content: flex-start;
  
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
  }

  .responsive-img {
    width: 100%;
    height: 100%;
  }
 .intro-box-img {
    background: url('../../images/freeServ.jpg') left top no-repeat;
  }
  .intro-box-small {
    padding: 10px 15px;
    h1 {
      font-size: 1.6rem;
    }
  }
  .bottom-box {
    background: var(--v-primary-base);
    color: white;
    padding: 15px 30px;
    h1 {
       font-size: 4vw;
       span {
         color: rgb(20, 71, 107);
       }
    }
    p {
      font-size: 1.5rem;
    }
  }

</style>
