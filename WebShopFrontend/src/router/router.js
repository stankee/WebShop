import { createRouter, createWebHistory } from 'vue-router';
import Pocetna from '../components/Pocetna.vue';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import Women from '../components/Women.vue';
import Men from '../components/Men.vue';
import Accessories from '../components/Accessories.vue';
import AboutUs from '../components/AboutUs.vue';


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Pocetna,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
  },
  {
    path: '/women',
    name: 'Women',
    component: Women,
  },
  {
    path: '/men',
    name: 'Men',
    component: Men,
  },
  {
    path: '/accessories',
    name: 'Accessories',
    component: Accessories,
  },
  {
    path: '/aboutus',
    name: 'AboutUs',
    component: AboutUs,
  },
  
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});


export default router;
