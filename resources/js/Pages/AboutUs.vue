<template>
    <app-layout>
        <section>
            <v-img flat tile cover color="#45516b"
                   gradient="to top, rgb(5 11 31 / 47%), rgb(5 11 31 / 74%)"
                   :src="bg"
                   height="300" max-width="100%">
                <v-row class="ma-0 fill-height text-center align-center justify-center">
                    <v-col class="col col-12">
                        <h1
                            class="text-h3 font-weight-500 mb-2 text-center white--text">
                            Nosotros
                        </h1>
                        <v-responsive class="primary mx-auto mb-6"
                                      style="max-width: 28px;">
                            <v-divider/>
                        </v-responsive>

                        <v-breadcrumbs class="justify-center pa-0 text--primary"
                                       :items="items"
                                       divider="/"
                        ></v-breadcrumbs>

                    </v-col>
                </v-row>

            </v-img>
        </section>

        <section class="py-12">
            <v-container>
                <v-row class="align-center justify-center">
                    <v-col class="px-10 col-md-6 col-12">
                        <h1 class="font-weight-bold py-3 text-h6 text-lg-h5 font-weight-black mb-4 text-left">
                            ¿QUIENES SOMOS?
                        </h1>
                        <p class="base-body body-1 offblack--text text--darken-1 text-left mb-10">
                            Somos un grupo de jóvenes emprendedores y nos une el amor y pasión por la identidad cultural
                            de
                            nuestra tierra.
                            <br>
                            Alma Guajira nace de la necesidad de hacer un turismo más amigable y justo para todas las
                            partes
                            que interactúan en la actividad turística de nuestro departamento, somos guías de turismo,
                            nativos, conductores, agentes de viajes, artesanos, cocineros, viajeros, somos una gran
                            familia.
                        </p>
                    </v-col>
                    <v-col class="col-md-6 col-12">
                        <v-img :src="working" cover
                               class="rounded-circle mx-auto"
                               style="height: 300px; width: 300px; min-height: 300px; min-width: 300px;">
                            <template v-slot:placeholder>
                                <v-skeleton-loader
                                    height="300px"
                                    class="mx-auto fill-height"
                                    type="image"
                                ></v-skeleton-loader>
                            </template>
                        </v-img>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <v-sheet class="secondary  rounded-0" style="padding: 48px 0px;">
            <v-responsive class=" mx-auto" style="max-width: 1350px;">
                <v-container fluid class="">
                    <v-row>
                        <v-col class="col-sm-6 col-12 pa-4">
                            <v-container class="pa-0">
                                <v-row class="no-gutters justify-center">

                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            MISION
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6 text-justify">
                                            Alma guajira es una empresa con enfoque social nuestro objetivo principal es
                                            crear experiencias memorables en nuestro viajero fomentando relaciones sanas
                                            entre lugareños patrimonio natural y cultural y visitantes trabajamos
                                            cuidadosamente bajo la premisa de responsabilidad capacitación constante
                                            comercio justo y turismo inclusivo lo que significa que retribuimos a cada
                                            comunidad y dejamos un impacto positivo en cada lugar que visiten nuestros
                                            viajeros.
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>
                        <v-col class="col-sm-6 col-12 pa-4">
                            <v-container class="pa-0">
                                <v-row class="no-gutters ">
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-center white--text">
                                            VISION
                                        </h3>
                                        <v-divider dark class="primary mx-auto mb-6"
                                                   style="max-width: 28px;"/>

                                        <p class="text-body-1 grey--text text--lighten-1 text-center mb-6 text-justify">
                                            Seremos al mediano plazo una empresa consolidada en nuestro departamento y
                                            marcar un antes y después en la industria del turismo en la guajira que
                                            seamos reconocidos por nuestros altos estándares de profesionalidad y
                                            responsabilidad social.
                                            <br>

                                            "Nunca perdamos de vista nuestro objetivo de hacer un turismo distinto más
                                            amigable con las comunidades locales"

                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-col>

                    </v-row>
                </v-container>

            </v-responsive>
        </v-sheet>

        <team-component class="mb-12"></team-component>

        <v-sheet class=" theme--light">
            <v-container class=" py-4 py-lg-8">
                <v-row>
                    <v-col class="col-md-4 col-12 fill-height">
                        <h2 class="text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
                            NUESTROS VIAJEROS NOS RECOMIENDAN
                        </h2>
                        <v-divider class="primary  mb-6" style="max-width: 28px;"></v-divider>
                    </v-col>
                    <v-col class="pa-md-0 col-md-8 col-12">
                        <v-row>

                            <v-col v-for="item in imgsTestimonios" :key="item.id"
                                   class="col-sm-6 col-12">
                                <v-sheet class=" theme--light surface">
                                    <img :src="item"/>
                                </v-sheet>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>

        <v-sheet class="rounded-0">
            <div class="text-center mb-6">
                <h2 class="text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
                    BUENAS PRACTICAS
                </h2>
                <v-divider class="primary mx-auto mb-6" style="max-width: 28px;"></v-divider>
            </div>

            <v-container>
                <v-row>
                    <v-col class="col-md-6 col-12">
                        <v-container class="pa-0">
                            <v-row class="no-gutters justify-start">
                                <v-col cols="12" class="col-sm-2">
                                    <div class="text-h2 success--text font-weight-bold pr-8">
                                        01
                                    </div>
                                </v-col>
                                <v-col cols="12" class="col-sm-9">
                                    <div class="text-body-2 font-weight-regular mb-1 text-left grey--text">
                                        backed up
                                    </div>
                                    <h3 class="text-uppercase text-h6 font-weight-bold mb-1 text-left">
                                        Respaldo
                                    </h3>

                                    <v-divider class="primary mr-auto mb-6"
                                               style="max-width: 28px;">
                                    </v-divider>
                                    <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-6">
                                        Estás respaldado por la asistencia al viajero de Colasistencia.
                                    </p>
                                    <div class="my-1">
                                        <div class="v-sheet mx-auto surface">
                                            <img
                                                :src="imgsBuenasPracticas[4]"/>
                                        </div>
                                    </div>
                                </v-col>

                            </v-row>
                        </v-container>
                    </v-col>
                    <v-col class="col-md-6 col-12">
                        <v-container>
                            <v-row class="no-gutters justify-start">
                                <v-col cols="12" class="col-sm-2 ">
                                    <div class="text-h2 success--text font-weight-bold pr-8 ">
                                        02
                                    </div>
                                </v-col>
                                <v-col cols="12" class="col col-sm-9 ">
                                    <div class="text-body-2 font-weight-regular mb-1 text-left grey--text">
                                        training
                                    </div>
                                    <h3 class="text-uppercase text-h6 font-weight-bold mb-1 text-left">
                                        Capacitaciones
                                    </h3>

                                    <v-divider class="primary mr-auto mb-6"
                                               style="max-width: 28px;">
                                    </v-divider>
                                    <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-6">
                                        Nos capacitamos constantemente.
                                    </p>

                                    <div class="my-4">
                                        <v-row dense>
                                            <v-col v-for="item in imgsBuenasPracticas.slice(0,4)" :key="item.id"
                                                   class="col-sm-6 col-md-3 col-12 mx-auto">
                                                <v-sheet class="theme--light surface mx-auto">
                                                    <img class="mx-auto"
                                                        :src="item"/>
                                                </v-sheet>
                                            </v-col>
                                        </v-row>
                                    </div>
                                </v-col>

                            </v-row>
                        </v-container>
                    </v-col>

                </v-row>
            </v-container>
        </v-sheet>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import bg from '@/../images/bg/bg2.jpg'
import working from '@/../images/working.jpeg'
import TeamComponent from '@/components/TeamComponent.vue'

import bp1 from '../../images/buenas_practicas/buenas-practicas1.png'
import bp2 from '../../images/buenas_practicas/buenas-practicas2.png'
import bp3 from '../../images/buenas_practicas/buenas-practicas3.png'
import bp4 from '../../images/buenas_practicas/buenas-practicas4.png'
import bp5 from '../../images/buenas_practicas/buenas-practicas5.png'

import t1 from '../../images/testimonios/testimonio1.png'
import t2 from '../../images/testimonios/testimonio2.png'
import t3 from '../../images/testimonios/testimonio3.png'
import t4 from '../../images/testimonios/testimonio4.png'

export default {
    components: {
        AppLayout,
        "team-component": TeamComponent
    },
    data: () => ({
        bg,
        working,
        items: [
            {
                text: 'INICIO',
                disabled: false,
                href: '/',
            },
            {
                text: 'NOSOTROS',
                disabled: true,
                href: '/about-us',
            },
        ],
        imgsBuenasPracticas: [bp1, bp2, bp3, bp4, bp5],
        imgsTestimonios: [t1, t2, t3, t4]
    })
};
</script>

<style>
.theme--light.v-breadcrumbs .v-breadcrumbs__divider, .theme--light.v-breadcrumbs .v-breadcrumbs__item--disabled {
    color: white !important;
}

.v-skeleton-loader__image {
    height: 300px;
}
</style>
