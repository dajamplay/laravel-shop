const state = {
    user: null,
    users: null
}

const getters = {
    user: (state) => {
        return state.user
    },
    users: (state) => {
        return state.users
    },
}

const actions = {
    getUser({commit}, id) {
        axios.get(`/api/v1/users/${id}`)
            .then( res => {
                commit('setUser', res.data.user);
            })
    },
    getUsers({commit}, id) {
        axios.get(`/api/v1/users`)
            .then( res => {
                commit('setUsers', res.data.users);
            })
    }
}

//commits //setters
const mutations = {
    setUser(state, user) {
        state.user = user;
    },
    setUsers(state, users) {
        state.users = users;
    }
}

export default { state, actions, getters, mutations }
