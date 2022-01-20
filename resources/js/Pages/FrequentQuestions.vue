<template>
    <app-layout>
        <section>
            <v-img :src="bg" color="#45516b" cover flat
                   gradient="to top, rgb(5 11 31 / 47%), rgb(5 11 31 / 74%)"
                   height="300"
                   max-width="100%" tile>
                <v-row class="ma-0 fill-height text-center align-center justify-center">
                    <v-col class="col col-12">
                        <h1
                            class="text-h3 font-weight-500 mb-2 text-center white--text">
                            Preguntas frecuentes
                        </h1>
                        <v-responsive class="primary mx-auto mb-6"
                                      style="max-width: 28px;">
                            <v-divider/>
                        </v-responsive>

                        <v-breadcrumbs :items="items"
                                       class="justify-center pa-0 text--primary"
                                       divider="/"
                        ></v-breadcrumbs>

                    </v-col>
                </v-row>

            </v-img>
        </section>

        <section>
            <v-container>
                <v-expansion-panels color="primary"
                                    v-model="panel" focusable multiple>
                    <v-expansion-panel
                        v-for="(item,i) in frequentQuestion"
                        :key="i"
                    >
                        <v-expansion-panel-header v-text="item.title"/>
                        <v-expansion-panel-content>
                            <v-container fluid>
                                <div v-html="item.content">

                                </div>
                            </v-container>
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </v-container>
        </section>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import bg from '@/../images/bg/bg6.jpg'

export default {
    components: {
        AppLayout,
    },
    data: () => ({
        panel: [0, 1, 2],
        readonly: false,
        bg,
        items: [
            {
                text: 'INICIO',
                disabled: false,
                href: '/',
            },
            {
                text: 'PREGUNTAS FRECUENTES',
                disabled: true,
                href: '/frequent-questions',
            },
        ],
        frequentQuestion: [
            {
                title: '¿Cómo reservar un tour ?',
                content: `1. Revisar nuestro portafolio de servicios.
                          <br>2. Contactarnos para iniciar la reserva
                          <br>3. Hacer el pago acordado por cualquiera de nuestros medios de pago.
                          <br>4. Enviarnos la documentación y/o información necesaria que le solicitaremos.`,
            },
            {
                title: '¿Cuáles son sus medios de pago ?',
                content: ` Cuenta Bancolombia
                           <br>Nequi
                           <br>Daviplata
                           <br>Paypal`,
            },
            {

                title: '¿Dónde están ubicados?',
                content: `Home Office
                <br>Carrera  7 H # 33 a 15
                <br>Barrio Eurare
                <br>Riohacha/La Guajira
                <br>Un miembro de nuestro equipo puede dirigirse a su sitio de hospedaje, para gestionar su reserva.`
            }
        ]
    })
}
;
</script>

<style>
.theme--light.v-breadcrumbs .v-breadcrumbs__divider, .theme--light.v-breadcrumbs .v-breadcrumbs__item--disabled {
    color: white !important;
}

.v-skeleton-loader__image {
    height: 300px;
}
</style>
