/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
// import './jquery'
 //import './script.js'

 import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination]);



 Vue.component('imagem-artigo', require('./components/imagem/imgproduto.vue').default);


import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

 // Router Imported
 import {routes} from './routes';


 // Import User Class
 import User from './Helpers/User';
 window.User = User

 // Import Notification Class
 import Notification from './Helpers/Notification';
 window.Notification = Notification

 // Sweet Alert start
/* import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
}); */

//window.Toast = Toast;

// Sweet Alert End

window.Reload = new Vue();
Vue.prototype.$scrollToTop = () => window.scrollTo(0,0)


/* const router = new VueRouter({
    routes,
    mode: 'history',
    scrollBehavior() {
      document.getElementById('app').scrollIntoView({ behavior: 'smooth' });
  }
  }) */


 const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes,
    scrollBehavior (to, from, savedPosition) {
        console.log(savedPosition);
        if (savedPosition) {
            return savedPosition;
        } else if (to.hash)  {

            return {
             selector:to.hash,
            };

    }
}
});


const app = new Vue({
    el: '#app',
    router
});
