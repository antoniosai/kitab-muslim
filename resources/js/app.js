import router from './router/index.js'
import Main from "./components/Main"

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('main-app', require('./components/Main.vue').default);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(Main)
});
