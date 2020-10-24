// import qs from 'qs'
import { RootURL } from './consts'

export const state = () => ({
  user: {
    firstname: '',
    lastname: '',
    login: '',
    patronymic: '',
    email: '',
    password: '',
    location: {
      country: '',
      region: '',
      city: ''
    },
    sex: '',
    education: {
      status: '',
      nameOrganisation: '',
      levelEnglish: '',
      graduateYear: 0,
      status_internal: ''
    },
    achievements: [],
    heatmap: [],
    token: ''
  }
})

export const mutations = {
  SET_USER (state, user) {
    state.user = { ...state.user, ...user }
  },
  SET_TOKEN (state, token) {
    state.user.token = token
  }
}

export const actions = {
  async getUser ({ commit }, obj) {
    try {
      const resp = await this.$axios.$get(`${RootURL}?module=auth&login=${obj.login}&password=${obj.password}`)
      commit('SET_USER', resp)
    } catch (e) {

    }
  }
}

export const getters = {
  user: s => s.user
}
