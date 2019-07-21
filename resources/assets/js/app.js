import Vue from 'vue';

Vue.component('hello-world', require('./components/HelloWorld').default);


Vue.config.productionTip = false;

var app = new Vue({
  el: '#app',
});

