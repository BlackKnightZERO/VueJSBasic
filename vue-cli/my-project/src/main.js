import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

new Vue({
  el: '#all',
  render: h => h(App)
})
