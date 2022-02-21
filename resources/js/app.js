/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('button-component', require('./components/fetch/ButtonComponent.vue').default);
Vue.component('display-component', require('./components/display/DisplayComponent.vue').default);

Vue.component('mgmt-device-info-fetch-component', require('./components/fetch/MgmtdeviceinfoFetchComponent.vue').default);
Vue.component('mgmt-device-runningconfig-fetch-component', require('./components/fetch/MgmtdevicerunningconfigFetchComponent.vue').default);
Vue.component('mgmt-device-networkinfo-fetch-component', require('./components/fetch/MgmtdevicenetworkinfoFetchComponent.vue').default);
Vue.component('mgmt-device-networkstats-fetch-component', require('./components/fetch/MgmtdevicenetworkstatsFetchComponent.vue').default);
Vue.component('mgmt-calllogs-fetch-component', require('./components/fetch/MgmtcalllogsFetchComponent.vue').default);
Vue.component('mgmt-devicestats-fetch-component', require('./components/fetch/MgmtdevicestatsFetchComponent.vue').default);
Vue.component('mgmt-lineinfo-fetch-component', require('./components/fetch/MgmtlineinfoFetchComponent.vue').default);



// make an event bus
export const eventBus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
