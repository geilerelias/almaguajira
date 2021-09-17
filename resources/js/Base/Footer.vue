<template>
    <div>
        <v-footer class="transparent">
            <v-container class=" py-5">
                <v-row>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Navigation</div>
                        <div class="mb-5 mt-1 primary" style="width: 80px; height: 2px;"></div>
                        <div class="d-flex flex-wrap">
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Overview</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Features</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Pricing</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Documentation</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">News</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">FAQ</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">About
                                us</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Carrers</a>
                            </div>
                            <div class="w-half body-1 mb-1"><a href="/landing#"
                                                               class="text-decoration-none text--primary">Press</a>
                            </div>
                        </div>

                        <div class="d-flex align-center mb-4">
                            <a href="/" class="d-flex align-center text-decoration-none mr-2">
                                <v-card flat max-width="110">
                                    <v-img style="max-height:78px" :spect-ratio="5/4" contain :src="logo"/>
                                </v-card>
                            </a>
                        </div>
                    </v-col>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Contact Information</div>
                        <div class="mb-5 mt-1 primary" style="width: 80px; height: 2px;"></div>
                        <div class="d-flex mb-2 font-weight-bold"><i aria-hidden="true"
                                                                     class="v-icon notranslate mr-2 mdi mdi-map-marker-outline theme--light primary--text text--lighten-1"></i>
                            W Left Street, Long Beach, Los Angeles, CA 90802 USA
                        </div>
                        <div class="d-flex mb-2"><i aria-hidden="true"
                                                    class="v-icon notranslate mr-2 mdi mdi-phone-outline theme--light primary--text text--lighten-1"></i><a
                            href="#" class="text-decoration-none text--primary">+03 000 23 00 555 55</a></div>
                        <div class="d-flex mb-2"><i aria-hidden="true"
                                                    class="v-icon notranslate mr-2 mdi mdi-email-outline theme--light primary--text text--lighten-1"></i><a
                            href="#" class="text-decoration-none text--primary">hello@loremcompany.com</a></div>
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
import logo from "../../images/logo.png";

export default {
    name: "Footer",
    data: () => ({
        logo: logo,
        links: [
            {name: "Inicio", route: "home"},
            {name: "Acerca de", route: "aboutme"},
            {name: "Servicios", route: "services"},
            {name: "Contacto", route: "contact"}
        ]
    })
};
</script>

<style>
.w-half {
    width: 50% !important;
}
</style>
