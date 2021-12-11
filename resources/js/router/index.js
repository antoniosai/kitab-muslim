
import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../pages/Home.vue';
import About from '../pages/About.vue';
import KitabAll from '../pages/kitab/All.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/tentang',
            name: 'tentang',
            component: About
        },
        {
            path: '/kitab/:slug',
            name: 'kitab.all',
            component: KitabAll
        },
    ]
});

export default router;