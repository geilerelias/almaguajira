<template>
    <v-sheet class="v-sheet theme--light">
        <v-container grid-list-xl class="container py-4 py-lg-8">
            <div class="text-center">
                <div class="text-uppercase overline primary--text mb-2">
                    Trabajando con nosotros
                </div>
                <h1 class="text-h5 font-weight-bold mb-2 text-center">
                    Nuestro equipo
                </h1>
                <v-divider class="primary mx-auto mb-2" style="max-width: 28px;"></v-divider>
                <v-responsive class="mx-auto" style="max-width: 1200px;">
                    <div class="v-responsive__content">
                        <p class="mt-4">
                            AlmaGuajira no es una empresa de una sola persona. Contamos con un equipo muy activo y
                            comprometido que se esfuerza constantemente por brindar a los turistas y aventuresros una
                            mejor
                            experiencia.
                        </p>
                    </div>
                </v-responsive>
            </div>


            <v-sheet class="d-flex justify-center align-center mt-6">
                <div class="layout justify-center wrap">
                    <div
                        v-for="(item, index) in team"
                        :key="index"
                        class="flex xs12 sm6 md4 justify-center"
                    >

                        <div class="text-center">
                            <v-avatar size="220">
                                <v-img cover
                                       :src="item.image">
                                </v-img>
                            </v-avatar>
                            <div class="text-h5 mt-3">{{ item.name }}</div>
                            <div class="text-h6 secondary--text">{{ item.ocupation }}</div>

                        </div>


                    </div>
                </div>
            </v-sheet>
        </v-container>
    </v-sheet>
</template>

<script>

import andreaCamargo from '@/../images/team/andreacamargo.png'
import jhoinerBotello from '@/../images/team/jhoinerbotello.png'
import juisethGuerra from '@/../images/team/juisethguerra.png'
import raguisMendoza from '@/../images/team/raguismendoza.png'
import geilerradillo from '@/../images/team/geilerradillo.png'

export default {
    name: "TeamComponent",
    data: () => ({
        team: [
            {
                name: "Raguis Mendoza",
                description: '',
                ocupation: 'Co-Founder - CEO & Guía de turismo',
                image: raguisMendoza
            },
            {
                name: "Andrea Camargo",
                description: '',
                ocupation: 'Guía de turismo',
                image: andreaCamargo
            },
            {
                name: "Juiseth Guerra ",
                description: '',
                ocupation: 'Traslados & Guía local ',
                image: juisethGuerra
            },
            {
                name: "Jhoiner Botello ",
                description: '',
                ocupation: 'Redes Sociales & Anfitrión ',
                image: jhoinerBotello
            },
            {
                name: "Geiler Radillo",
                description: '',
                ocupation: 'Diseño web & Desarrollo ',
                image: geilerradillo
            }
        ]
    })
}
</script>

<style scoped>

</style>
