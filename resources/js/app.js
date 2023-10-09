import { createApp } from 'vue';
import ImportJsonView from './views/ImportJsonView.vue';

const app = createApp({
    components: {
        ImportJsonView
    }
});

app.mount('#app');


/* 
import Vue from 'vue';
import ImportJsonView from './views/ImportJsonView.vue';

const app = new Vue({
    el: '#app',
    components: {
        ImportJsonView
    }
});
*/

