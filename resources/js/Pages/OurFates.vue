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
                            Nuestros destinos
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

        <section>
            <v-container class="py-12">
                <div class="text-center  mb-6">
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

                        </div>
                    </v-col>
                    <v-col class="col-sm-6 col-md-4 col-lg-3 col-12"
                           v-for="(item,i) in images" :key="item.id">
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
                                <v-col class="col col-2">
                                    <div class="text-h2 success--text font-weight-bold pr-8">
                                        01
                                    </div>
                                </v-col>
                                <v-col class="col col-9">
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
                                        <div class="v-sheet theme--light surface">
                                            <img
                                                :src="imgsBuenasPracticas[4]"/>
                                        </div>
                                    </div>
                                </v-col>

                            </v-row>
                        </v-container>
                    </v-col>
                    <v-col class="col-md-6 col-12">
                        <v-container class="pa-0">
                            <v-row class="no-gutters justify-start">
                                <v-col class="col col-2">
                                    <div class="text-h2 success--text font-weight-bold pr-8">
                                        02
                                    </div>
                                </v-col>
                                <v-col class="col col-9">
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
                                                   class="col-sm-6 col-md-3 col-12">
                                                <div class="v-sheet theme--light surface">
                                                    <img
                                                        :src="item"/>
                                                </div>
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

import bg from '@/../images/bg/bg5.jpg'

import imagen1 from '@/../images/destinos/imagen1.jpg'
import imagen2 from '@/../images/destinos/imagen2.jpg'
import imagen3 from '../../images/destinos/Imagen3.jpg'
import imagen4 from '@/../images/destinos/imagen4.jpg'
import imagen5 from '@/../images/destinos/imagen5.jpg'
import imagen6 from '@/../images/destinos/imagen6.jpg'
import imagen7 from '@/../images/destinos/imagen7.jpg'
import imagen8 from '@/../images/destinos/imagen8.jpg'
import imagen9 from '../../images/destinos/Imagen9.jpg'
import imagen10 from '@/../images/destinos/imagen10.jpg'
import imagen11 from '@/../images/destinos/imagen11.jpg'

import bp1 from '../../images/buenas_practicas/buenas-practicas1.png'
import bp2 from '../../images/buenas_practicas/buenas-practicas2.png'
import bp3 from '../../images/buenas_practicas/buenas-practicas3.png'
import bp4 from '../../images/buenas_practicas/buenas-practicas4.png'
import bp5 from '../../images/buenas_practicas/buenas-practicas5.png'

export default {
    components: {
        AppLayout
    },
    data: () => ({
        bg,
        items: [
            {
                text: 'INICIO',
                disabled: false,
                href: '/',
            },
            {
                text: 'NUESTROS DESTINOS',
                disabled: true,
                href: '/our-fates',
            },
        ],
        images: [
            {
                link: "/our-fates/detail/1",
                src: imagen1,
                description: "Most Searched of 2020",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/2",
                src: imagen2,
                description: "Best Openings of 2020",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/3",
                src: imagen3,
                description: "Trending This Week",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/4",
                src: imagen4,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/5",
                src: imagen5,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/6",
                src: imagen6,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/7",
                src: imagen7,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/8",
                src: imagen8,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/9",
                src: imagen9,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/10",
                src: imagen10,
                description: "Best Of New York",
                content: "30 Places"
            },
            {
                link: "/our-fates/detail/11",
                src: imagen11,
                description: "Best Of New York",
                content: "30 Places"
            }

        ],
        imgsBuenasPracticas: [bp1, bp2, bp3, bp4, bp5],
    }),
};
</script>
<style>
.theme--light.v-breadcrumbs .v-breadcrumbs__divider, .theme--light.v-breadcrumbs .v-breadcrumbs__item--disabled {
    color: white !important;
}

.v-skeleton-loader__image {
    height: 300px;
}

/*zoom en imagenes*/
.v-image .v-image__image {
    transition: all 0.6s;
}

.v-image.zoom .v-image__image {
    transform: scale(1.2);
}
</style>
