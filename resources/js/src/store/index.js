import Vuex from 'vuex';
import User from './modules/user';
import Auth from './modules/auth';

// axios.defaults.baseURL = 'http://localhost/api/v1';

const vuex = new Vuex.Store({
    modules: {
        User,
        Auth
    }
});

export default vuex;
