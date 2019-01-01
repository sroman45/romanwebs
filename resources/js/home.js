require('./bootstrap');

window.Vue = require('vue');

Vue.component('hero', require('./components/Hero.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('contact-me', require('./components/ContactMe.vue').default);
Vue.component('footer-bar', require('./components/FooterBar.vue').default);

new Vue({
    el: '#home',
});