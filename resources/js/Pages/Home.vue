<template>
    <app-layout>
        <v-img cover
               :src="bg1"
               class="white--text"
               gradient="rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65), rgb(0, 0, 0)"
               style="height:calc(100vh - 142px);"
        >
            <v-container fluid class="fill-height px-12">
                <v-row class="fill-height align-bottom d-flex justify-start align-end">
                    <v-col class="pb-12">
                        <div class="mb-4 display-2 white--text font-weight-bold"> Hola, Somos Alma Guajira</div>
                        <v-responsive class="text-subtitle-1 text-lg-h6  white--text mb-5" style="max-width: 600px;">
                            Un grupo de jóvenes emprendedores unidos por el amor y la pasión por la identidad
                            cultural de nuestra tierra.
                        </v-responsive>
                        <inertia-link :href="route('about-us')">
                            <v-btn contained large class="px-5 primary"
                                   style="font-family: 'Montserrat', sans-serif !important;">
                                Saber más
                            </v-btn>
                        </inertia-link>
                    </v-col>
                </v-row>
            </v-container>
            <template v-slot:placeholder>
                <v-row
                    class="fill-height ma-0"
                    align="center"
                    justify="center"
                >
                    <v-progress-circular
                        indeterminate
                        color="primary"
                        size="200"
                    ></v-progress-circular>
                </v-row>

            </template>
        </v-img>


        <section>
            <v-container class="py-12">
                <div class="text-center  mb-6">
                    <div class="d-inline-flex mb-4">
                        <v-img max-width="100" style="max-height:100px" :spect-ratio="5/4" contain :src="logo"/>
                    </div>

                    <h1 class="text-h5 font-weight-bold mb-2 text-center text-uppercase">
                        Visita los mejores destinos
                    </h1>
                    <v-divider class="primary mx-auto mb-6" style="max-width: 28px;"></v-divider>
                </div>

                <v-row class="row">
                    <v-col class="col col-12">
                        <div class="d-flex justify-space-between align-end flex-wrap">
                            <div>
                                <h2 class="text-uppercase text-hsubtitle-1 text-lg-h6">Mejores sitios turisticos</h2>
                                <h6 class="text-subtitle-1 text-lg-h6 grey--text grey--lighten-3 font-weight-regular">
                                    listas seleccionadas de los mejores sitios turisticos de La Guajira, basados en
                                    tendencias
                                </h6>
                            </div>
                            <div>
                                <inertia-link href="/our-fates" aria-current="page"
                                              class="text-decoration-none text-subtitle-1 text-lg-h6">
                                    Ver todos los destinos
                                </inertia-link>
                            </div>
                        </div>
                    </v-col>
                    <v-col class="col-sm-6 col-md-4 col-lg-3 col-12"
                           v-for="(item,i) in items.slice(0,4)" :key="item.id">
                        <inertia-link :href="item.link"
                                      class="text-decoration-none">
                            <v-hover v-slot="{ hover }">
                                <v-card class="pa-0">
                                    <v-img cover
                                           :aspect-ratio="1/1"
                                           style="transition: all 0.5s;"
                                           :class="hover ? 'zoom' : ''"
                                           :src="item.src">
                                        <template v-slot:placeholder>
                                            <v-row
                                                class="fill-height ma-0"
                                                align="center"
                                                justify="center"
                                            >
                                                <v-progress-circular
                                                    indeterminate
                                                    color="primary"
                                                ></v-progress-circular>
                                            </v-row>

                                        </template>
                                    </v-img>
                                </v-card>

                            </v-hover>
                        </inertia-link>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <testimonials-component></testimonials-component>


        <good-practices-component></good-practices-component>

        <team-component class="mb-12"></team-component>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import TeamComponent from "@/components/TeamComponent";

import logo from '@/../images/logo.jpg'
import eslogan from '@/../images/eslogan-nuevo.png'
import bg1 from '../../images/bg-almaguajira-1.jpg'

import imagen3 from '../../images/destinos/Imagen3.jpg'
import imagen4 from '@/../images/destinos/imagen4.jpg'
import imagen5 from '@/../images/destinos/imagen5.jpg'
import imagen7 from '@/../images/destinos/imagen7.jpg'


import bp1 from '../../images/buenas_practicas/buenas-practicas1.png'
import bp2 from '../../images/buenas_practicas/buenas-practicas2.png'
import bp3 from '../../images/buenas_practicas/buenas-practicas3.png'
import bp4 from '../../images/buenas_practicas/buenas-practicas4.png'
import bp5 from '../../images/buenas_practicas/buenas-practicas5.png'

import t1 from '../../images/testimonios/testimonio1.png'
import t2 from '../../images/testimonios/testimonio2.png'
import t3 from '../../images/testimonios/testimonio3.png'
import t4 from '../../images/testimonios/testimonio4.png'

import TestimonialsComponent from "../components/TestimonialsComponent"
import GoodPracticesComponent from "@/components/GoodPracticesComponent";


export default {
    components: {
        AppLayout,
        TestimonialsComponent,
        GoodPracticesComponent,
        TeamComponent
    },
    data: () => ({
        logo,
        eslogan,
        bg1: bg1,
        items: [
            {
                link: "/our-fates/detail/3",
                src: imagen3,
            },
            {
                link: "/our-fates/detail/4",
                src: imagen4,
            },
            {
                link: "/our-fates/detail/5",
                src: imagen5,
            },
            {
                link: "/our-fates/detail/7",
                src: imagen7,
            }

        ],
        imgsBuenasPracticas: [bp1, bp2, bp3, bp4, bp5],
        imgsTestimonios: [t1, t2, t3, t4]

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

.bottom-0 {
    bottom: 0 !important;
}

.p-absolute {
    position: absolute !important;
}

/*zoom en imagenes*/
.v-image .v-image__image {
    transition: all 0.6s;
}

.v-image.zoom .v-image__image {
    transform: scale(1.2);
}

.example-text {
    font-family: 'Montserrat', sans-serif !important;
}
</style>
