<template>
    <div>
        <v-footer>
            <v-container class="container">
                <div class="d-flex flex-column flex-md-row align-center justify-md-space-between mb-4">
                    <div class="d-flex flex-column flex-md-row align-center">
                        <div class="d-flex align-center">
                            <v-img max-width="50" style="max-height:50px" :spect-ratio="5/4" contain :src="logo"/>
                            <v-img max-width="150" style="max-height:40px" :spect-ratio="16/9" contain :src="eslogan"/>
                        </div>

                        <div class="my-3 my-md-0">
                            <inertia-link v-for="item in links"
                                          :key="item.id"
                                          :href="item.route"
                                          class="text-decoration-none ml-md-4 secondary--text text--lighten-3">
                                {{ item.title }}
                            </inertia-link>
                        </div>

                    </div>
                    <div>
                        <div class=" d-flex text-center justify-end align-center text-md-right mt-4 mt-lg-2">
                            Conectar

                            <v-btn v-for="item in socialmedia" :key="item.id"
                                   icon
                                   height="30" width="30"
                                   min-width="30"
                                   class="ml-2"
                                   :href="item.link" target="_blank">
                                <v-img height="30" width="30" contain :src="item.src"></v-img>
                            </v-btn>
                        </div>
                    </div>
                </div>
                <v-divider class="my-3  theme--light"/>
                <div class="d-flex flex-column flex-md-row align-center justify-md-space-between body-2">
                    <div class="d-flex mb-2 font-weight-bold">
                        <v-icon
                            class="notranslate mr-2  primary--text text--lighten-1">
                            mdi-map-marker-outline
                        </v-icon>
                        Cra. 7H #33a-15, Riohacha, La Guajira
                    </div>
                    <div class="text-center caption"> © almaguajira.com 2021. Todos los derechos reservados</div>
                    <div class="d-flex mb-2">
                        <v-icon
                            class="notranslate mr-2  theme--light primary--text text--lighten-1">
                            mdi-email-outline
                        </v-icon>
                        <a
                            href="mailto:raguismendoza@hotmail.com <raguismendoza@hotmail.com>;"
                            class="text-decoration-none text--primary">
                            raguismendoza@hotmail.com
                        </a>
                    </div>


                </div>


            </v-container>
        </v-footer>
    </div>
</template>

<script>
import {mapMutations, mapState} from "vuex";
import logo from "../../images/logo-nuevo.png";
import eslogan from "../../images/eslogan-nuevo.png";
import tiktok from '@/../images/btns/tiktok.png';
import whatsapp from '@/../images/btns/whatsapp.png'
import youtube from '@/../images/btns/youtube.png'
import tel from '@/../images/btns/tel.png'
import messenger from '@/../images/btns/messenger.png'
import instagram from '@/../images/btns/instagram.png'
import gmail from '@/../images/btns/gmail.png'
import facebook from '@/../images/btns/facebook.png'

export default {
    name: "Footer",
    data: () => ({
        tiktok,
        whatsapp,
        youtube,
        tel,
        messenger,
        instagram,
        gmail,
        facebook,
        logo: logo,
        eslogan,
        selectedItem: null,
        socialmedia: [
            {
                link: 'https://www.facebook.com/AlmaGuajiraViajes/',
                src: facebook,
                name: 'facebook'
            },
            {
                link: 'https://vm.tiktok.com/ZMR4JhtTn/',
                src: tiktok,
                name: 'tiktok'
            },
            {
                link: 'https://www.instagram.com/almaguajiraviajes/',
                src: instagram,
                name: 'instagram'
            },
            {
                link: 'https://wa.me/message/LLZ7EP3T25KAK1',
                src: whatsapp,
                name: 'whatsapp'
            }
        ]
    }),
    computed: {
        ...mapState(["links"]),
    },
};
</script>

<style>
.w-half {
    width: 50% !important;
}

</style>
