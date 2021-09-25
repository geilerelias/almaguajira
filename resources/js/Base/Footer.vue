<template>
    <div>
        <v-footer class="transparent">
            <v-container class=" py-5">
                <v-row>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Navegación</div>
                        <div class="mb-5 mt-1 primary" style="width: 80px; height: 2px;"></div>
                        <v-img gradient="to top, rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0.75)"
                               style="max-height:250px"
                               :spect-ratio="5/4" contain
                               :src="logo">
                            <v-list nav
                                    dense color="transparent">
                                <v-list-item-group
                                    v-model="selectedItem"
                                    color="transparent"
                                    active-class="primary text--accent-4"
                                >
                                    <inertia-link v-for="item in links"
                                                  :key="item.title"
                                                  :href="route(item.route)">
                                        <v-list-item link
                                                     :dark="route().current(item.route)"
                                                     :class="route().current(item.route)?'active primary   white--text':''"
                                        >
                                            <v-list-item-icon>
                                                <v-icon>{{ item.icon }}</v-icon>
                                            </v-list-item-icon>

                                            <v-list-item-content>
                                                <v-list-item-title class="font-black">{{ item.title }}
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </inertia-link>
                                </v-list-item-group>
                            </v-list>
                        </v-img>


                    </v-col>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Información de Contacto</div>
                        <div class="mb-5 mt-1 primary" style="width: 80px; height: 2px;"></div>

                        <div class="d-flex mb-2 font-weight-bold">
                            <v-icon
                                class="notranslate mr-2  primary--text text--lighten-1">
                                mdi-map-marker-outline
                            </v-icon>
                            Cra. 7H #33a-15, Riohacha, La Guajira
                        </div>

                        <div class="d-flex mb-2">
                            <v-icon
                                class="notranslate mr-2 mdi  primary--text text--lighten-1">
                                mdi-phone-outline
                            </v-icon>
                            <a href="tel:+57 320 5011419" class="text-decoration-none text--primary">
                                +57 320 5011419
                            </a>
                        </div>
                        <div class="d-flex mb-2">
                            <v-icon
                                class="notranslate mr-2  theme--light primary--text text--lighten-1">
                                mdi-email-outline
                            </v-icon>
                            <a
                                href="mailto:raguismendoza@hotmail.com <Raguismendoza@hotmail.com>;" class="text-decoration-none text--primary">Raguismendoza@hotmail.com</a></div>
                    </v-col>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Newsletter</div>
                        <div class="mb-5 mt-1 primary" style="width: 80px; height: 2px;"></div>
                        <div class="d-flex flex-column flex-lg-row w-full">
                            <div
                                class="v-input mr-lg-2 v-input--dense theme--light v-text-field v-text-field--single-line v-text-field--solo v-text-field--is-booted v-text-field--enclosed v-text-field--outlined">
                                <div class="v-input__control">
                                    <div class="v-input__slot" style="height: 44px;">
                                        <fieldset aria-hidden="true">
                                            <legend><span>​</span></legend>
                                        </fieldset>
                                        <div class="v-text-field__slot"><label for="input-501"
                                                                               class="v-label theme--light"
                                                                               style="left: 0px; right: auto; position: absolute;">Your
                                            email</label><input id="input-501" type="text"></div>
                                    </div>
                                    <div class="v-text-field__details">
                                        <div class="v-messages theme--light">
                                            <div class="v-messages__wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                    class="v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--large primary"><span
                                class="v-btn__content">Subscribe</span></button>
                        </div>
                        <div class="text-center text-md-right mt-4 mt-lg-2"> Connect
                            <button type="button"
                                    class="ml-2 v-btn v-btn--is-elevated v-btn--fab v-btn--has-bg v-btn--round theme--light v-size--small primary">
                            <span class="v-btn__content"><i aria-hidden="true"
                                                            class="v-icon notranslate mdi mdi-twitter theme--light"></i></span>
                            </button>
                            <button type="button"
                                    class="ml-2 v-btn v-btn--is-elevated v-btn--fab v-btn--has-bg v-btn--round theme--light v-size--small primary">
                            <span class="v-btn__content"><i aria-hidden="true"
                                                            class="v-icon notranslate mdi mdi-linkedin theme--light"></i></span>
                            </button>
                            <button type="button"
                                    class="ml-2 v-btn v-btn--is-elevated v-btn--fab v-btn--has-bg v-btn--round theme--light v-size--small primary">
                            <span class="v-btn__content"><i aria-hidden="true"
                                                            class="v-icon notranslate mdi mdi-instagram theme--light"></i></span>
                            </button>
                        </div>
                    </v-col>
                </v-row>
                <hr role="separator" aria-orientation="horizontal" class="my-3 v-divider theme--light">
                <div class="text-center caption"> © Indielayer 2021. All Rights Reserved</div>
            </v-container>
        </v-footer>

    </div>
</template>

<script>
import {mapMutations, mapState} from "vuex";
import logo from "../../images/logo.png";

export default {
    name: "Footer",
    data: () => ({
        logo: logo,
        selectedItem: null,
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
