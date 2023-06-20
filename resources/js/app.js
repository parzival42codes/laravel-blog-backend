const app = Vue.createApp({
    data: function() {
        return {
            submissions: submissions
        }
    }
});

const vm = app.mount('#app');

// import {createApp} from 'vue';
//
// import Vue from 'vue'
// window.Vue = require('vue');
//
// // router
// import router from '../js/routes';
// window.router = router;
//
// const app = createApp({}).mount('#appVue');
