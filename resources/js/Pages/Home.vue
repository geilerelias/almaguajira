<template>
    <app-layout>
        <v-parallax :src="bg1" style="height: 70vh;"
                    class="pa-0 ma-0">
            <v-img class="pa-0 ma-0" gradient="to top, rgba(5, 11, 31, 0.8), rgba(5, 11, 31, 0.8)">
                <v-container fluid class="fill-height px-12">
                    <v-row align-center>
                        <v-col style="transform-origin: center top 0px;">
                            <div class="mb-4 display-2 white--text font-weight-light"> Hola, Somos Alma Guajira</div>
                            <v-responsive class="white--text mb-5" style="max-width: 600px;">
                                Un grupo de jóvenes emprendedores unidos por el amor y la pasión por la identidad
                                cultural de nuestra tierra.
                            </v-responsive>
                            <inertia-link :href="route('about-us')">
                                <v-btn contained large class="px-5 primary">
                                    Saber más
                                </v-btn>
                            </inertia-link>
                        </v-col>
                    </v-row>
                </v-container>
            </v-img>
        </v-parallax>

        <v-sheet class="rounded-0" style="padding: 96px 0px;">
            <div class="text-center mb-12">
                <div class="d-inline-flex mb-4">
                    <v-avatar class="primary"
                              size="56">
                        <v-icon dark class="notranslate"
                                size="28">
                            mdi-vuetify
                        </v-icon>
                    </v-avatar>
                </div>
                <h1 class="text-uppercase text-h5 font-weight-bold mb-2 text-center">
                    About our
                    Product
                </h1>
                <v-divider class="primary mx-auto mb-6" style="max-width: 28px;">

                </v-divider>
            </div>

            <v-container>
                <v-row class="row">
                    <v-col class="col-md-4 col-12">
                        <v-container class="pa-0">
                            <v-row class="no-gutters justify-start">
                                <v-col class="col col-9">
                                    <div class="text-body-2 font-weight-regular mb-1 text-left grey--text">
                                        Best
                                        Productivity
                                    </div>
                                    <h3 class="text-uppercase text-h6 font-weight-bold mb-1 text-left">
                                        Grow your
                                        Revenue
                                    </h3>

                                    <v-divider class="primary mr-auto mb-6"
                                               style="max-width: 28px;">
                                    </v-divider>
                                    <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-6">
                                        Similique sunt in culpa qui officia deserunt mollitia animi, id est laborut
                                        dolorum fuga.harum quidem rerum facilis estexpedita distinctio.
                                    </p>
                                </v-col>
                                <v-col class="col col-2">
                                    <div class="text-h2 grey--text text--lighten-4 font-weight-bold pr-8">
                                        01
                                    </div>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-col>

                    <div class="col-md-4 col-12">
                        <div class="container pa-0">
                            <div class="row no-gutters justify-start"><!---->
                                <div class="col col-9">
                                    <div class="text-body-2 font-weight-regular mb-1 text-left grey--text"> Special
                                        Offers
                                    </div>
                                    <h3 class="text-uppercase text-h6 font-weight-bold mb-1 text-left"> Affordable
                                        Prices </h3>
                                    <div class="v-responsive base-divider primary mr-auto mb-6"
                                         style="max-width: 28px;">
                                        <div class="v-responsive__content">
                                            <hr role="separator" aria-orientation="horizontal"
                                                class="v-divider theme--light">
                                        </div>
                                    </div>
                                    <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-6">
                                    <div>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborut
                                        dolorum fuga.harum quidem rerum facilis estexpedita distinctio.
                                    </div>
                                    </p></div>
                                <div class="col col-2">
                                    <div class="text-h2 grey--text text--lighten-4 font-weight-bold pr-8">02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="container pa-0">
                            <div class="row no-gutters justify-start"><!---->
                                <div class="col col-9">
                                    <div class="text-body-2 font-weight-regular mb-1 text-left grey--text"> Income
                                        Flow
                                    </div>
                                    <h3 class="text-uppercase text-h6 font-weight-bold mb-1 text-left"> Target
                                        Setting </h3>
                                    <div class="v-responsive base-divider primary mr-auto mb-6"
                                         style="max-width: 28px;">
                                        <div class="v-responsive__content">
                                            <hr role="separator" aria-orientation="horizontal"
                                                class="v-divider theme--light">
                                        </div>
                                    </div>
                                    <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-6">
                                    <div>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborut
                                        dolorum fuga.harum quidem rerum facilis estexpedita distinctio.
                                    </div>
                                    </p></div>
                                <div class="col col-2">
                                    <div class="text-h2 grey--text text--lighten-4 font-weight-bold pr-8">03</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </v-row>
            </v-container>
        </v-sheet>
        <div class="container pt-10">
            <div data-v-7b164f18="" class="row" style="">
                <div data-v-7b164f18="" class="col col-12">
                    <div data-v-7b164f18="" class="mx-auto v-card v-sheet theme--light white"
                         style="max-width: 100%; box-shadow: rgba(47, 60, 74, 0.01) 0px 8px 32px, rgba(47, 60, 74, 0.02) 0px 8px 16px;">
                        <div class="v-skeleton-loader theme--light">
                            <div data-v-7b164f18="" class="v-card__text"><h1 data-v-7b164f18=""
                                                                             class="text-center my-12">Simple Non Profit
                                Pricing</h1>
                                <div data-v-7b164f18="" class="v-data-table theme--light">
                                    <div class="v-data-table__wrapper">
                                        <table>
                                            <tbody data-v-7b164f18="">
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none py-4"></td>
                                                <td data-v-7b164f18="" class="border-none py-4">
                                                    <div data-v-7b164f18="" class="text-center"><h5 data-v-7b164f18="">
                                                        Essential</h5>
                                                        <p data-v-7b164f18="" class="text--disabled"> All the basics for
                                                            event &amp; team crowdfunding </p>
                                                        <button data-v-7b164f18="" type="button"
                                                                class="mb-2 v-btn v-btn--has-bg v-btn--rounded theme--dark v-size--default primary">
                                                            <span class="v-btn__content">Get Started</span></button>
                                                        <div data-v-7b164f18=""><a data-v-7b164f18="" href="#"
                                                                                   class="link-alt">Learn More</a></div>
                                                    </div>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none py-4">
                                                    <div data-v-7b164f18="" class="text-center"><h5 data-v-7b164f18="">
                                                        Premium</h5>
                                                        <p data-v-7b164f18="" class="text--disabled"> All the basics for
                                                            event &amp; team crowdfunding </p>
                                                        <button data-v-7b164f18="" type="button"
                                                                class="mb-2 v-btn v-btn--has-bg v-btn--rounded theme--dark v-size--default primary">
                                                            <span class="v-btn__content">Get Started</span></button>
                                                        <div data-v-7b164f18=""><a data-v-7b164f18="" href="#"
                                                                                   class="link-alt">Learn More</a></div>
                                                    </div>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none py-4">
                                                    <div data-v-7b164f18="" class="text-center"><h5 data-v-7b164f18="">
                                                        Enterprise</h5>
                                                        <p data-v-7b164f18="" class="text--disabled"> All the basics for
                                                            event &amp; team crowdfunding </p>
                                                        <button data-v-7b164f18="" type="button"
                                                                class="mb-2 v-btn v-btn--has-bg v-btn--rounded theme--dark v-size--default primary">
                                                            <span class="v-btn__content">Get Started</span></button>
                                                        <div data-v-7b164f18=""><a data-v-7b164f18="" href="#"
                                                                                   class="link-alt">Learn More</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="font-weight-bold border-none">Pricing</td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Plan Cost</td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    Free
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <div data-v-7b164f18="">
                                                        <button data-v-7b164f18="" type="button"
                                                                class="shadow-sm v-btn v-btn--has-bg theme--light v-size--small success lighten-4 success--text rounded-pill">
                                                            <span class="v-btn__content"><!----> Contact Us </span>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <button data-v-7b164f18="" type="button"
                                                            class="shadow-sm v-btn v-btn--has-bg theme--light v-size--small success lighten-4 success--text rounded-pill">
                                                        <span class="v-btn__content"><!----> Contact Us </span></button>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Platform</td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    5%
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    3% <!----></td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <button data-v-7b164f18="" type="button"
                                                            class="shadow-sm v-btn v-btn--has-bg theme--light v-size--small success lighten-4 success--text rounded-pill">
                                                        <span class="v-btn__content"><!----> Contact Us </span></button>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Payment
                                                    processing
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    2.9%
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    2.4% <!----></td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <button data-v-7b164f18="" type="button"
                                                            class="shadow-sm v-btn v-btn--has-bg theme--light v-size--small success lighten-4 success--text rounded-pill">
                                                        <span class="v-btn__content"><!----> Contact Us </span></button>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="font-weight-bold border-none">Features
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Unlimited
                                                    Fundraising campaigns
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Easy access to
                                                    funds
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Mobile
                                                    Optimized
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Basic donor
                                                    data
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Team
                                                    fundraising
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Unlimited
                                                    Fundraising events
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <!----></td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            <tr data-v-7b164f18="">
                                                <td data-v-7b164f18="" class="border-none text--disabled">Comphensive
                                                    donor data
                                                </td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <!----></td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center">
                                                    <!----></td>
                                                <td data-v-7b164f18="" class="border-none text--disabled text-center"><i
                                                    data-v-7b164f18="" aria-hidden="true"
                                                    class="v-icon notranslate mdi mdi-check-circle theme--light success--text"></i>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <v-sheet class="secondary  rounded-0" style="padding: 48px 0px;">
            <v-responsive class=" mx-auto" style="max-width: 1350px;">

                <v-container fluid class="">
                    <v-row class="row">
                        <v-col class="col-sm-4 col-md-3 col-12">
                            <v-container class="pa-0">
                                <v-row class="no-gutters justify-center">
                                    <v-col class="mb-4 col col-12 text-center">
                                        <v-icon outline class="notranslate primary--text"
                                                color="primary"
                                                size="56">
                                            mdi-keyboard-outline
                                        </v-icon>
                                    </v-col>
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            Trendy Design
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto
                                            asperiores at autem magni totam veritatis. At consequatur molestiae odio!
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                        <v-col class="col-sm-4 col-md-3 col-12">
                            <v-container class="pa-0">
                                <v-row class="no-gutters justify-center">
                                    <v-col class="mb-4 col col-12 text-center">
                                        <v-icon outline class="notranslate primary--text"
                                                color="primary"
                                                size="56">
                                            mdi-camera-outline
                                        </v-icon>
                                    </v-col>
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            PHOTOGRAPHY
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto
                                            asperiores at autem magni totam veritatis. At consequatur molestiae odio!
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                        <v-col class="col-sm-4 col-md-3 col-12">
                            <v-container class="pa-0">
                                <v-row class="no-gutters justify-center">
                                    <v-col class="mb-4 col col-12 text-center">
                                        <v-icon outline class="notranslate primary--text"
                                                color="primary"
                                                size="56">
                                            mdi-pencil-outline
                                        </v-icon>
                                    </v-col>
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            BRAND MAKING
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto
                                            asperiores at autem magni totam veritatis. At consequatur molestiae odio!
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                        <v-col class="col-sm-4 col-md-3 col-12">
                            <v-container class="pa-0">
                                <v-row class="no-gutters justify-center">
                                    <v-col class="mb-4 col col-12 text-center">
                                        <v-icon outline class="notranslate primary--text"
                                                color="primary"
                                                size="56">
                                            mdi-puzzle-outline
                                        </v-icon>
                                    </v-col>
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            24/7 SUPPORT
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto
                                            asperiores at autem magni totam veritatis. At consequatur molestiae odio!
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                    </v-row>
                </v-container>

            </v-responsive>
        </v-sheet>


        <main class="v-main" data-booted="true" style="padding: 0px;">
            <div class="v-main__wrap">
                <div>
                    <div class="v-sheet theme--light">
                        <div class="container py-6 pt-lg-15 text-center"><h1
                            class="text-h4 text-sm-h3 text-md-h2 text-lg-h1">Your awesome <span class="primary--text">web project</span>
                        </h1>
                            <h2 class="text-h6 text-sm-h5 mt-4 w-full w-md-8-12 w-xl-half mx-auto">Lorem ipsum dolor
                                sit, amet consectetur adipisicing elit. Commodi ex facilis ad atque natus tenetur
                                debitis qui quisquam iure amet.</h2>
                            <div class="mt-8">
                                <button type="button"
                                        class="my-1 mx-sm-1 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--x-large primary">
                                    <span class="v-btn__content">Start free trial</span></button>
                                <button type="button"
                                        class="my-1 mx-sm-1 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--x-large">
                                    <span class="v-btn__content">Learn more</span></button>
                            </div>
                        </div>
                    </div>
                    <div data-v-30056104="" class="d-flex flex-column v-sheet theme--light">
                        <svg data-v-30056104="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1442 163"
                             class="logos-bg">
                            <path data-v-30056104=""
                                  d="m-3.90909,6l48.30303,16c48.30303,16 144.90908,48 241.51514,48c96.60606,0 193.21211,-32 289.81817,-32c96.60606,0 193.21211,32 289.81817,53.3c96.60606,21.7 193.21211,31.7 289.81817,16c96.60606,-16.3 193.21211,-58.3 241.51514,-80l48.30303,-21.3l0,160l-48.30303,0c-48.30303,0 -144.90908,0 -241.51514,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -241.51514,0l-48.30303,0l0,-160z"></path>
                        </svg>
                    </div>
                    <div class="container pt-0 pb-4">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3 col-12">
                                <div class="text-center">
                                    <div class="text-h2 text-number font-weight-light">4,253</div>
                                    <div class="v-responsive mx-auto" style="max-width: 300px;">
                                        <div class="v-responsive__content">
                                            <div class="font-weight-regular my-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Esse expedita fugit.
                                            </div>
                                            <div class="text-h6 text-lg-h5">Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 col-12">
                                <div class="text-center">
                                    <div class="text-h2 text-number font-weight-light">1,283,787</div>
                                    <div class="v-responsive mx-auto" style="max-width: 300px;">
                                        <div class="v-responsive__content">
                                            <div class="font-weight-regular my-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Esse expedita fugit.
                                            </div>
                                            <div class="text-h6 text-lg-h5">API Requests</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 col-12">
                                <div class="text-center">
                                    <div class="text-h2 text-number font-weight-light">1,348</div>
                                    <div class="v-responsive mx-auto" style="max-width: 300px;">
                                        <div class="v-responsive__content">
                                            <div class="font-weight-regular my-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Esse expedita fugit.
                                            </div>
                                            <div class="text-h6 text-lg-h5">Subscribers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 col-12">
                                <div class="text-center">
                                    <div class="text-h2 text-number font-weight-light">331,234</div>
                                    <div class="v-responsive mx-auto" style="max-width: 300px;">
                                        <div class="v-responsive__content">
                                            <div class="font-weight-regular my-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Esse expedita fugit.
                                            </div>
                                            <div class="text-h6 text-lg-h5">Businesses</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <hr role="separator" aria-orientation="horizontal" class="v-divider theme--light">
                    </div>
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <div class="pa-2 elevation-1 v-sheet v-sheet--outlined theme--light rounded"><i
                                            aria-hidden="true"
                                            class="v-icon notranslate mdi mdi-account-check-outline theme--light"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-h5">Account Verification</div>
                                        <div class="text-h6 font-weight-light mt-1">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Esse expedita fugit quam aliquam. Autem
                                            assumenda
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <div class="pa-2 elevation-1 v-sheet v-sheet--outlined theme--light rounded"><i
                                            aria-hidden="true"
                                            class="v-icon notranslate mdi mdi-lifebuoy theme--light"></i></div>
                                    </div>
                                    <div>
                                        <div class="text-h5">Dedicated Support</div>
                                        <div class="text-h6 font-weight-light mt-1">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Esse expedita fugit quam aliquam. Autem
                                            assumenda
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <div class="pa-2 elevation-1 v-sheet v-sheet--outlined theme--light rounded"><i
                                            aria-hidden="true"
                                            class="v-icon notranslate mdi mdi-email-open-multiple-outline theme--light"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-h5">Email Integration</div>
                                        <div class="text-h6 font-weight-light mt-1">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Esse expedita fugit quam aliquam. Autem
                                            assumenda
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <div class="pa-2 elevation-1 v-sheet v-sheet--outlined theme--light rounded"><i
                                            aria-hidden="true"
                                            class="v-icon notranslate mdi mdi-clock-outline theme--light"></i></div>
                                    </div>
                                    <div>
                                        <div class="text-h5">Save Time</div>
                                        <div class="text-h6 font-weight-light mt-1">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Esse expedita fugit quam aliquam. Autem
                                            assumenda
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="v-sheet theme--light">
                        <div class="container py-4 py-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="text-uppercase font-weight-bold body-2 primary--text mb-2 mt-0 mt-xl-10">
                                        Work with us
                                    </div>
                                    <h2 class="text-h3">Get your startup ready for business</h2>
                                    <div class="text-h6 text-lg-h5 mt-5">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Natus impedit error labore doloremque fugit! Dolor fugit
                                        molestiae vero quos quisquam nobis, eos debitis magni omnis ea incidunt amet
                                        voluptate dignissimos!
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="v-image v-responsive elevation-6 theme--light"
                                         style="max-height: 480px;">
                                        <div class="v-responsive__sizer" style="padding-bottom: 66.7188%;"></div>
                                        <div class="v-image__image v-image__image--cover"
                                             style="background-image: url(&quot;https://lux-admin-pro.indielayer.com/img/feature1.78b4cfb3.jpg&quot;); background-position: center center;"></div>
                                        <div class="v-responsive__content" style="width: 640px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-4 pt-md-8 pb-10" id="pricing">
                        <div class="v-responsive mx-auto text-center" style="max-width: 1200px;">
                            <div class="v-responsive__content"><h2 class="text-h3 mb-2">Pricing</h2>
                                <div class="text-h6 text-lg-h5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Natus impedit error labore doloremque fugit.
                                </div>
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-lg-4 col-12">
                                <div class="text-body-1 pa-4 v-card v-sheet v-sheet--outlined theme--light elevation-2">
                                    <div class="d-flex justify-space-between">
                                        <div class="mr-2">
                                            <div class="d-flex align-center">
                                                <div class="text-h4 font-weight-black">Basic</div><!----></div>
                                            <div class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="d-flex align-center">
                                                <div class="text-h5 font-weight-light mr-1">$</div>
                                                <div class="text-h3 text-number font-weight-black">29</div>
                                            </div>
                                            <div class="justify-end overline">/month</div>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <div class="text-h6">
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">5</span><span
                                                class="text-truncate font-weight-regular">Accounts</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">100GB</span><span
                                                class="text-truncate font-weight-regular">Bandwith</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">10GB</span><span
                                                class="text-truncate font-weight-regular">Disk Space</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><!----><span
                                                class="text-truncate font-weight-regular">Unlimited Emails</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <a href="/auth/signup"
                                       class="v-btn v-btn--block v-btn--outlined v-btn--router theme--light v-size--x-large"><span
                                        class="v-btn__content"> Subscribe </span></a></div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="text-body-1 pa-4 v-card v-sheet v-sheet--outlined theme--light elevation-2">
                                    <div class="d-flex justify-space-between">
                                        <div class="mr-2">
                                            <div class="d-flex align-center">
                                                <div class="text-h4 font-weight-black">Startup</div>
                                                <div class="ml-2"><span
                                                    class="font-weight-black v-chip theme--light v-size--small primary"><span
                                                    class="v-chip__content">Popular</span></span></div>
                                            </div>
                                            <div class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="d-flex align-center">
                                                <div class="text-h5 font-weight-light mr-1">$</div>
                                                <div class="text-h3 text-number font-weight-black">49</div>
                                            </div>
                                            <div class="justify-end overline">/month</div>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <div class="text-h6">
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">20</span><span
                                                class="text-truncate font-weight-regular">Accounts</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">1TB</span><span
                                                class="text-truncate font-weight-regular">Bandwith</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">100GB</span><span
                                                class="text-truncate font-weight-regular">Disk Space</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><!----><span
                                                class="text-truncate font-weight-regular">Unlimited Emails</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <a href="/auth/signup"
                                       class="v-btn v-btn--block v-btn--is-elevated v-btn--has-bg v-btn--router theme--light v-size--x-large primary"><span
                                        class="v-btn__content"> Subscribe </span></a></div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="text-body-1 pa-4 v-card v-sheet v-sheet--outlined theme--light elevation-2">
                                    <div class="d-flex justify-space-between">
                                        <div class="mr-2">
                                            <div class="d-flex align-center">
                                                <div class="text-h4 font-weight-black">Enterprise</div><!----></div>
                                            <div class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="d-flex align-center">
                                                <div class="text-h5 font-weight-light mr-1">$</div>
                                                <div class="text-h3 text-number font-weight-black">149</div>
                                            </div>
                                            <div class="justify-end overline">/month</div>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <div class="text-h6">
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">100</span><span
                                                class="text-truncate font-weight-regular">Accounts</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">10TB</span><span
                                                class="text-truncate font-weight-regular">Bandwith</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><span class="font-weight-black mr-1">10TB</span><span
                                                class="text-truncate font-weight-regular">Disk Space</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                        <div class="d-flex align-center justify-space-between my-1">
                                            <div><!----><span
                                                class="text-truncate font-weight-regular">Unlimited Emails</span></div>
                                            <i aria-hidden="true"
                                               class="v-icon notranslate mdi mdi-check theme--light primary--text"></i>
                                        </div>
                                    </div>
                                    <hr role="separator" aria-orientation="horizontal"
                                        class="my-4 v-divider theme--light">
                                    <a href="/auth/signup"
                                       class="v-btn v-btn--block v-btn--outlined v-btn--router theme--light v-size--x-large"><span
                                        class="v-btn__content"> Subscribe </span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="v-sheet theme--light">
                        <div class="container py-8">
                            <div class="d-flex flex-column flex-lg-row justify-space-between align-center">
                                <div class="text-center text-lg-left">
                                    <div class="text-h3">Ready to talk?</div>
                                    <div class="text-h3 primary--text">Our team is here to help.</div>
                                </div>
                                <div class="mt-4 mt-lg-0">
                                    <button type="button"
                                            class="my-1 mx-sm-2 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--x-large primary">
                                        <span class="v-btn__content">Contact Sales</span></button>
                                    <button type="button"
                                            class="my-1 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--x-large">
                                        <span class="v-btn__content">Learn more</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import bg1 from '@/../images/bg1.jpg'

export default {
    components: {
        AppLayout
    },
    data: () => ({
        bg1: bg1
    })
};
</script>
<style>
.logos-bg {
    fill: white;
}

.v-parallax__content {
    padding-left: 0px !important;
    padding-right: 0px !important;
}
</style>
