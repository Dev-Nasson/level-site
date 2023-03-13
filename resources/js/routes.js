/*
let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;
*/
//

let home = require('./components/home.vue').default;

// Empoyee Component
let produto = require('./components/produto.vue').default;
let projecto = require('./components/projecto.vue').default;
let contacto = require('./components/contacto.vue').default;
let detalhe = require('./components/detalhe.vue').default;
let infopro = require('./components/infopro.vue').default;
let sobre = require('./components/sobre.vue').default;
let sugerido = require('./components/sugerido.vue').default;




export const routes = [
  { path: '/', component: home, name:'/'},
  { path: '/home', component: home, name:'home'},

  { path: '/produto', component: produto, name:'produto'},
  { path: '/projecto', component: projecto, name:'projecto'},
  { path: '/contacto', component: contacto, name:'contacto'},
  { path: '/detalhe/:id', component: detalhe, name:'detalhe'},
  { path: '/infopro/:id', component: infopro, name:'infopro'},
  { path: '/sobre', component: sobre, name:'sobre'},
  { path: '/sugerido/:id', component: sugerido, name:'sugerido'},


]
