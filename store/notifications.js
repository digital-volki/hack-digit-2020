// import { RootURL } from './consts'

export const state = () => ({
  notifications: []
})

export const mutations = {
  SET_NOTIFICATIONS (state, payload) {
    state.notifications = payload
  }
}
export const actions = {
  async getAll ({ commit }) {
    try {
      // const resp = await this.$axios.$get(`${RootURL}?module=get_all_events`)
      await commit('SET_NOTIFICATIONS', [])
    } catch (e) {

    }
  }
}
