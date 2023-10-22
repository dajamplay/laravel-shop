const state = {
    authUser: null,
}

const getters = {
    isAuth: (state) => {
        return state.authUser
    },
}

const actions = {
    getAuthUser(ctx) {
        axios.get(`/api/v1/user`)
            .then(res => {
                ctx.commit('setAuthUser', res.data);
            }).catch(error => {
                ctx.commit('setAuthUser', null)
            });
    },
}

const mutations = {
    setAuthUser(state, user) {
        state.authUser = user;
    },
}

export default {state, actions, getters, mutations}
