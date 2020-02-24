<template>
  <div id="all">
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Industrious</a>
				<nav>
          <router-link to="/" exact><a href="#">Home</a></router-link>
					<router-link to="/vid"><a href="#">Video</a></router-link>
					<router-link to="/sec1"><a href="#">Section 1</a></router-link>
					<router-link to="/sec2"><a href="#">Section 2</a></router-link>
					<router-link to="/sec3"><a href="#">Section 3</a></router-link>
					<router-link to="/foot"><a href="#">Footer</a></router-link>
					<router-link to="/spa"><a href="#">SPA</a></router-link>
					
				</nav>
			</header>
	
    <router-view>
      <div id="toshow"></div>
    </router-view>
		
    </div>
</template>

<script>
import VueRouter from 'vue-router'
// import Home from './pages/Home.vue'
// import About from './pages/About.vue'
import Sec1 from './pages/Sec1.vue'
import Sec2 from './pages/Sec2.vue'
import Sec3 from './pages/Sec3.vue'
import Vid from './pages/Vid.vue'
import Foot from './pages/Foot.vue'
import Spa from './pages/Spa.vue'

const routes = [
  // { path: '/', component: Home },
  // { path: '/about', component: About },
  { path: '/sec1', component: Sec1 },
  { path: '/sec2', component: Sec2 },
  { path: '/sec3', component: Sec3 },
  { path: '/vid', component: Vid },
  { path: '/foot', component: Foot },
  { path: '/spa', component: Spa },
 
]

const router = new VueRouter({
  routes : routes,
  mode:'history',
})

export default {
  name: 'all',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  router
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
