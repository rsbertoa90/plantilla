
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
window.vue = Vue;
window.Vue = Vue;

var VueResource = require('vue-resource');
Vue.use(VueResource);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
// Vue.http.interceptors.push(function (request, next) {
//     request.headers['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
//     next();
// });
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

import VueMq from 'vue-mq'

Vue.component('fade-loader', require('vue-spinner/src/FadeLoader.vue'));

// Vue.component('csrf', require('./components/csrf.vue'));
/* Vue.component('app-admin', require('./components/admin/Admin.vue'));
Vue.component('admin-failed-jobs', require('./components/failedJobs/FailedJobs.vue')); */
Vue.component('app-navbar', require('./components/layout/navbar/navbar.vue'));
Vue.component('app-footer', require('./components/layout/footer/Footer.vue'));
Vue.component('app-whatsapp', require('./components/layout/Whatsapp-float.vue'));

/* Vue.component('app-admin', require('./components/admin/Admin.vue'));
Vue.component('app-super', require('./components/super/Super.vue')); */
Vue.component('image-logo', require('./components/layout/images/image-logo.vue'));


Vue.component('app-home', require('./components/home/Home.vue'));

import swal from 'sweetalert';
window.swal = swal;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

window.csrf = $('meta[name="csrf-token"]').attr('content');





Vue.use(VueMq, {
    breakpoints: {
        sm: 600,
        md: 990,
        lg: Infinity,
    }
});

String.prototype.ucfirst = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

import {store} from './store/store.js'
import { mapActions } from 'vuex'
import filters from  './filters.js';

import {
    directive as onClickOutside
} from 'vue-on-click-outside'
Vue.directive('on-click-outside', onClickOutside);

/* 
import {
    library
} from '@fortawesome/fontawesome-svg-core'
import {  faPhoneVolume, faMapMarkerAlt} from '@fortawesome/free-solid-svg-icons'
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'

library.add(faPhoneVolume);
library.add(faMapMarkerAlt);

Vue.component('fa-icon', FontAwesomeIcon) */

import VueAwesomeSwiper from 'vue-awesome-swiper'


Vue.use(VueAwesomeSwiper, /* { default global options } */ );


import { VLazyImagePlugin } from "v-lazy-image";

Vue.use(VLazyImagePlugin);


const app = new Vue({
    el: '#app',
    store,
    methods : {
        ...mapActions({
            fetchCategories : 'categories/fetch',
            fetchUser : 'fetchUser',
            fetchConfig : 'fetchConfig',
            fetchStates : 'fetchStates',
        }),
        

    },
    created()
    { 
        this.fetchCategories();
        this.fetchUser();
        this.fetchConfig();
        this.fetchStates();
    }
});



