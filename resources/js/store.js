import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({
  state: {
    csrf: null,
    userData: {}
  },
  mutations: {
    addcsfc (state, data) {
      state.csrf = data
    },
    addUserData (state, data) {
        Object.keys(data).forEach( key => {
            Vue.set(state.userData, key, data[key])
        })
    }    
  }
})