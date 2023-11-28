import Vuex from 'vuex';

import axios from 'axios'
import { createApp } from 'vue';
import { todo } from './module/todo';


createApp().use(Vuex);

export const store = new Vuex.Store({
    modules: {
        todo
    },
    state: {

    },
});
