<template>
    <app-layout>
<!--        <inertia-link href="https://wa.me/c/573205011419">-->
<!--            https://wa.me/c/573205011419-->
<!--        </inertia-link>-->

        <v-container>
            <v-breadcrumbs class="text--primary px-0"
                           :items="items"
                           divider=">"
            ></v-breadcrumbs>



            <v-row dense>
                <v-col class="col-12">
                    <lightbox :items="images" :cells="4"></lightbox>
                </v-col>

                <v-col class="mt-4 col col-12">
                    <div class="d-flex justify-space-between flex-wrap align-center mb-3">
                        <h1 class="me-2">
                            Starbucks
                        </h1>
                        <div class="mb-3">
                            <span>
                                <i aria-hidden="true"
                                   class="v-icon notranslate mdi mdi-star theme--light warning--text"
                                   style="font-size: 16px;">

                                </i></span>
                            <span>
                                <i aria-hidden="true"
                                   class="v-icon notranslate mdi mdi-star theme--light warning--text"
                                   style="font-size: 16px;"></i>
                            </span>
                            <span>
                                <i aria-hidden="true"
                                   class="v-icon notranslate mdi mdi-star theme--light warning--text"
                                   style="font-size: 16px;"></i>
                            </span>
                            <span>
                                <i aria-hidden="true"
                                   class="v-icon notranslate mdi mdi-star theme--light warning--text"
                                   style="font-size: 16px;"></i>
                            </span>
                            <span>
                                <i aria-hidden="true" class="v-icon notranslate mdi mdi-star theme--light warning--text"
                                   style="font-size: 16px;"></i>
                            </span>
                            <span class="text-14 me-1"> 4.5
                                <span class="grey--text">(1004) </span>
                            </span>
                        </div>
                    </div>
                    <p class="mb-5 text-14">Coffee, signature roasts, light bite, quick bite, fast foods</p>

                    <div class="grey--text text--darken-1 align-middle text-14 mb-4 d-flex align-center flex-wrap">
                        <v-icon class=" notranslate v-icon--left mdi mdi-map-marker theme--light grey--text"
                           style="font-size: 16px;"></v-icon>
                        The Dorothy Ross Friedman Residence, NY, US -
                        <a href="/resturant/FoodMenu" aria-current="page"
                           class="grey--text text--darken-3 nuxt-link-exact-active nuxt-link-active">Show Map</a></div>
                    <div class="grey--text text--darken-1 align-middle text-14 mb-4 d-flex align-center flex-wrap"><i
                        aria-hidden="true"
                        class="v-icon notranslate v-icon--left mdi mdi-clock-outline theme--light grey--text"
                        style="font-size: 16px;"></i> <span class="primary--text me-2">Open Now</span> - Sun - Mon: 9am
                        -
                        10pm
                    </div>
                    <div class="grey--text text--darken-1 align-middle text-14 mb-4 d-flex align-center flex-wrap"><i
                        aria-hidden="true" class="v-icon notranslate v-icon--left mdi mdi-earth theme--light grey--text"
                        style="font-size: 16px;"></i> <a href="/resturant/FoodMenu" aria-current="page"
                                                         class="text-decoration-none grey--text text--darken-1 nuxt-link-exact-active nuxt-link-active">www.starbucks.com</a>
                    </div>
                </v-col>
            </v-row>
        </v-container>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Lightbox from "@/components/Lightbox";

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


export default {
    props: ['id'],
    components: {
        AppLayout,
        Lightbox
    },
    created() {
        console.log(this.id)
        console.log(typeof (this.id))


        var num = this.id-1;
        console.log(this.destinos[num].name);
        let folder = this.destinos[num].name;
        if (folder !== null) {
            axios
                .get(`/destinos/${folder}`)
                .then(response => {
                    console.log(response)
                    let lista = response.data;
                    this.images.push(`/src/destinos/null/Imagen${num+1}.jpg`)
                    for (let i = 0; i < lista.length; i++) {
                        this.images.push(`/src/destinos/${folder}/${lista[i]}`);
                        console.log(`/src/services/${folder}/${lista[i]}`)
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        } else {
            console.log('el folder no contiene información')
        }
    },
    data: () => ({
        bg,
        items: [
            {
                text: 'Inicio',
                disabled: false,
                href: '/',
            },
            {
                text: 'Nuestros destinos',
                disabled: false,
                href: '/our-fates',
            },
            {
                text: 'Detalle',
                disabled: true,
                href: '/our-fates',
            },
        ],
        destinos: [
            {
                link: "#",
                src: imagen1,
                name: null,
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen2,
                name: "city-tour-riohacha",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen3,
                name: "cabo-de-la-vela",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen4,
                name: null,
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen5,
                name: "alta-guajira",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen6,
                name: null,
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen7,
                name: "palomino",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen8,
                name: "aldea-wayuu",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen9,
                name: "avistamiento",
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen10,
                name: null,
                content: "30 Places"
            },
            {
                link: "#",
                src: imagen11,
                name: null,
                content: "30 Places"
            }

        ],
        images: [],

    }),
};
</script>
<style>
.theme--light.v-breadcrumbs .v-breadcrumbs__divider, .theme--light.v-breadcrumbs .v-breadcrumbs__item--disabled {
    color: darkgrey !important;
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
