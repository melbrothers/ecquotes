export default ({ authGuard, guestGuard }: any)  => [
  { path: '/', name: 'welcome', component: require('~/pages/welcome.vue').default },

  // Authenticated routes.
  ...authGuard([
    // { path: '/home', name: 'home', component: require('~/pages/home.vue').default },
    // { path: '/orders', name: 'orders', component: require('~/pages/orders.vue').default },
    // { path: '/quotes', name: 'quotes', component: require('~/pages/quotes.vue').default },
    // { path: '/customer-quotes', name: 'customer-quotes', component: require('~/pages/CustomerQuote.vue').default },
    // { path: '/invoices', name: 'invoices', component: require('~/pages/invoices.vue').default },
    // { path: '/settings',
    //   component: require('~/pages/settings/index.vue').default,
    //   children: [
    //   { path: '', redirect: { name: 'settings.profile' }},
    //   { path: 'profile', name: 'settings.profile', component: require('~/pages/settings/profile.vue').default },
    //   { path: 'password', name: 'settings.password', component: require('~/pages/settings/password.vue').default }
    //   ] }
  ]),

  // Guest routes.
  ...guestGuard([
    { path: '/login', name: 'login', component: require('~/pages/auth/login.vue').default },
    { path: '/register', name: 'register', component: require('~/pages/auth/register.vue').default },
    { path: '/password/reset', name: 'password.request', component: require('~/pages/auth/password/email.vue').default },
    { path: '/password/reset/:token', name: 'password.reset', component: require('~/pages/auth/password/reset.vue').default }
  ]),

  { path: '*', name: '404', component: require('~/pages/errors/404.vue').default }
]
