/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import vueCountryRegionSelect from 'vue-country-region-select'
Vue.use(vueCountryRegionSelect)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//la vue qui contiendra le formulaire de ckeck du packet ou envelop
Vue.component('check-component', require('./components/CheckComponent.vue').default);
//la vue qui contiendra le formulaire du packet lors de la demande du quotation
Vue.component('package-component', require('./components/PackageComponent.vue').default);
//la vue qui contiendra le formulaire de envelop pour un proforma
Vue.component('envelop-component', require('./components/EnvelopComponent.vue').default);
//ce home component va contenir notre page d'acceuil
Vue.component('home-component', require('./components/HomeComponent.vue').default);

//ce component est destiné à la facture proforma
Vue.component('invoice-component', require('./components/InvoiceProformaComponent.vue').default);

//ce component est destiné au foemulaire qui demande de renseigner son email lorsqu'on demande
//demande qu'on nous envoi notre cotation par email
Vue.component('fillemail-component', require('./components/FillemailComponent.vue').default);

//formulaire de demande de pickup after quotation
Vue.component('package-form', require('./components/pick_package_after_quote.vue').default);

//ceci est la page ou s'affiche les deux bouttons recevoir le proforma par email ou pick up
Vue.component('invoice-envelop', require('./components/InvoiceenvelopeProforma.vue').default);

//ceci est la page de renseignement du email et de la compagnie pour recevoir le proforma par email
Vue.component('fillemail-envelop', require('./components/Fillemailforenvelope.vue').default);

//ceci est la page de renseignement du email et de la compagnie pour recevoir le proforma par email
Vue.component('check-phyto', require('./components/CheckPhyto.vue').default);


//ceci est la page qui affiche le profil de chaque uset
Vue.component('profil-component', require('./components/ProfilComponent.vue').default);

//ceci est un component de check de packet ou envelop apres click sur pick up
Vue.component('checkforpickup-component', require('./components/CheckforPickup.vue').default);

//formulaire qui va enregistrer nos paquets dans la base de donnée
Vue.component('envelope-form', require('./components/pick_envelope_after_quote.vue').default);

//ceci est la page qui afiche country list
Vue.component('country-list', require('./components/CountryList.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#app',
   
});
