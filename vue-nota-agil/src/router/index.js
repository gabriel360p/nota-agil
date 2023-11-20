import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'login',
    component: () => import(/* webpackChunkName: "about" */ '../views/auth/LoginView.vue')
  },
  {
    path: '/cadastro',
    name: 'cadastro',
    component: () => import(/* webpackChunkName: "about" */ '../views/auth/CadastroView.vue')
  },
  {
    path: '/sobre',
    name: 'sobre',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/SobreView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
