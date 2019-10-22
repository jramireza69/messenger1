


require('./bootstrap');

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)




Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    //objeto que contien los metodos que queremos definir
    methods: {
        logout () {
        	document.getElementById('logout-form').submit();
        }
    }
});
