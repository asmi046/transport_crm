import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

import VatsMesages from './components/VatsMesages.vue'

import axios from 'axios'
import VueAxios from 'vue-axios'


const global_app = createApp({
    components:{
        VatsMesages,
    },

    setup() {
    }
})

global_app.use(VueAxios, axios)
global_app.mount("#global_app");
