require('./bootstrap');

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import ViewLayout from './components/layouts/App';
import { routing } from './routes/web';

Vue.config.productionTip = false;

//Material design
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'
Vue.use(VueMaterial);

//Vue Bootstrap
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'material-design-icons-iconfont'

//Fontawesome
import fontawesome from '@fortawesome/fontawesome'
import fas from '@fortawesome/fontawesome-free-solid'
import fab from '@fortawesome/fontawesome-free-brands'
fontawesome.library.add(fas, fab);
const glasses = fontawesome.findIconDefinition({ prefix: 'fas', iconName: 'glasses' });
const i = fontawesome.icon(glasses);


Vue.config.productionTip = false;

const router = new VueRouter({
    routes: routing,
    mode: 'history',
});

const app = new Vue({
    el: '#app',
    router,
    components: {
        ViewLayout
    },
});
