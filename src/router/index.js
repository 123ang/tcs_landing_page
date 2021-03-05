import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import ContactUs from '../views/ContactUs.vue'
import Collections from '../views/Collections.vue'
import Allevent from '../views/Allevent.vue'
import Eventconten from '../views/Eventconten'
Vue.use(VueRouter)

  const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/contact-us',
    name: 'ContactUs',
    component: ContactUs
  },
  {
    path: '/our-collections',
    name: 'Collections',
    component: Collections
  },
  {
    path: '/allevent',
    name: 'Allevent',
    component: Allevent
  },
  {
    path:'/eventconten',
    name:'Eventconten',
    component:Eventconten
  }


 
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
  linkActiveClass: "active"
})

export default router
