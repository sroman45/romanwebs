require('./bootstrap');

window.Vue = require('vue');

Vue.component('hero', require('./components/Hero.vue').default);

new Vue({
    el: '#home',
});