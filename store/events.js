import { RootURL } from './consts'

export const store = () => ({
  events: [
    // {
    //   img: '',
    //   button1: '',
    //   button2: '',
    //   title: '',
    //   description: '',
    //   moreDetails: '',
    //   change: '',
    //   site: ''
    // }
  ]
})

export const mutations = {
  SET_EVENTS (state, payload) {
    state.events = payload
  }
}
export const actions = {
  async getAllNot ({ commit }) {
    try {
      const resp = await this.$axios.$get(`${RootURL}?module=get_all_events`, { headers: { Cookie: this.$store.getters['user/user'].token } })
      console.info('jjjjj')
      commit('SET_EVENTS', resp)
    } catch (e) {

    }
  }
}

export const getters = {
  events: s => s.events
}
