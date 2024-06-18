import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    token: localStorage.getItem('user-token') || '',
    user: null,
  },
  mutations: {
    setToken(state, token) {
      state.token = token;
      localStorage.setItem('user-token', token);
    },
    clearToken(state) {
      state.token = '';
      localStorage.removeItem('user-token');
    },
    setUser(state, user) {
      state.user = user;
    },
    clearUser(state) {
      state.user = null;
    },
  },
  actions: {
    async login({
      commit
    }, credentials) {
      const response = await axios.post('http://127.0.0.1:8000/api/login', credentials);
      commit('setToken', response.data.token);
      commit('setUser', response.data.user);
    },
    async logout({
      commit
    }) {
      await axios.post('http://127.0.0.1:8000/api/logout', {}, {
        headers: {
          'Authorization': `Bearer ${localStorage.getItem('user-token')}`,
        },
      });
      commit('clearToken');
      commit('clearUser');
    },
  },
  getters: {
    isAuthenticated(state) {
      return !!state.token;
    },
    getUser(state) {
      return state.user;
    },
  },
});

export default store;
