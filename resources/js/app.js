import {createApp} from 'vue';

import Vue from 'vue'
window.Vue = require('vue');

// router
import router from '../js/routes';
window.router = router;

const app = createApp({}).mount('#appVue');
