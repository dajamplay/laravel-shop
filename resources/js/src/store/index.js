import Vuex from 'vuex';
import User from './modules/user';

const vuex = new Vuex.Store({
    modules: {
        User
    }
});

export default vuex;
