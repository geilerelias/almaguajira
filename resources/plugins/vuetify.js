import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

const opts = {
    icons: {
        iconfont: 'mdi', // default - only for display purposes
    },
    theme: {
        themes: {
            light: {
                primary: '#2b65ae',
                secondary: '#10315a',
                accent: '#d07b42',
                error: '#f44336',
                warning: '#ffc107',
                info: '#03a9f4',
                success: '#8bc34a'
            },
            dark: {
                primary: '#2b65ae',
                secondary: '#c45911',
                accent: '#82B1FF',
                error: '#f44336',
                warning: '#ff9800',
                info: '#00bcd4',
                success: '#4caf50',
            },
        },
    },
}

export default new Vuetify(opts)
