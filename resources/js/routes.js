import Vue from 'vue'
import VueRouter from 'vue-router'
import CheckPhyto from './components/CheckPhyto.vue'
import CheckComponent from './components/CheckComponent'
import checkforpickup from './components/CheckforPickup.vue'
import PackageComponent from './components/PackageComponent.vue'
import pick_up_package_dataComponent from './components/pick_up_package_dataComponent.vue'
import pick_package_after_quote from './components/pick_package_after_quote.vue'
import pick_envelope_after_quote from './components/pick_envelope_after_quote.vue'
import InvoicePackagequote from './components/InvoicePackagequote.vue'
import checkdataquoteforpackageComponent from './components/checkdataquoteforpackageComponent.vue'
import infoforshipmentdhlComponent from './components/infoforshipmentdhlComponent.vue'
import InvoiceProformaComponent from './components/InvoiceProformaComponent.vue'
import FillemailComponent from './components/FillemailComponent.vue'
import EnvelopComponent from './components/EnvelopComponent.vue'
import InvoiceenvlopeProforma from './components/InvoiceenvelopeProforma.vue'
import checkdataquoteforenvelopeComponent from './components/checkdataquoteforenvelopeComponent.vue'
import Home from './pages/Home'
import Login from './pages/Login'
import Register from './pages/Register'
import MyAccount from './pages/MyAccount'

Vue.use(VueRouter);



const routes = [
    {
      path: '/',
      component: Home,
      name: 'home'
    },

    {
      path: '/login',
      component: Login,
      name: 'login'
    },

    {
      path: '/register',
      component: Register,
      name: 'register'
    },

    {
      path: '/check',
      component: CheckComponent,
      name: 'check'
    },

    {
      path: '/mon-compte',
      component: MyAccount,
      name: 'account'
    },

    {
      path: '/checkphyto',
      name:'checkphyto',
      component:CheckPhyto

    },
    {
      path: '/checkforpickup',
      name:'checkforpickup',
      component:checkforpickup

    },
    {
      path:'/packageform',
      name:'PackageComponent',
      component: PackageComponent
    },
    {
      path:'/pick_up_package_data',
      name:'pick_up_package_dataComponent',
      component:pick_up_package_dataComponent
    },
    {
      path:'/package/create',
      name:'pick_package_after_quote',
      component:pick_package_after_quote
    },
    {
      path:'/envelope/create',
      name:pick_envelope_after_quote,
      component:pick_envelope_after_quote
    },
    {
      path:'/invoicequotepackage',
      name:'InvoicePackagequote',
      component:InvoicePackagequote
    },
    {
      path:'/checkquoteforpackage',
      name:'checkdataquoteforpackageComponent',
      component:checkdataquoteforpackageComponent
    },
    {
      path:'/checkquoteforenvelope',
      name:'checkdataquoteforenvelopeComponent',
      component:checkdataquoteforenvelopeComponent
    },
    {
      path:'/invoiceproforma',
      name:'InvoiceProformaComponent',
      component:InvoiceProformaComponent
    },
    {
      path:'/infofor_shipmentdhl',
      name:'infoforshipmentdhlComponent',
      component:infoforshipmentdhlComponent
    },
    {
      path:'/fillemail',
      name:'FillemailComponent',
      component:FillemailComponent
    },
    {
      path:'/envelopeform',
      name:'EnvelopComponent',
      component:EnvelopComponent

    },
    {
      path:'/invoiceenvelope',
      name:'InvoiceenvelopeProforma',
      component:InvoiceenvlopeProforma
      
    }
    
]


export default routes;
