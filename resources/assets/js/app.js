require('bootstrap');
import Vue from 'vue';
import axios from 'axios';

window.axios = axios;

Vue.component('hello-world', require('./components/HelloWorld').default);
Vue.component('test2', require('./components/Test2').default);



Vue.config.productionTip = false;


var app = new Vue({
  el: '#app',
});

