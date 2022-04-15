<template>
    <v-sheet class=" theme--light">
        <v-container class=" py-4 py-lg-8">
            <v-row>
                <v-col class="col-md-4 col-12 fill-height">
                    <h2 class="text-h6 monserrat-text text-lg-h5 secondary--text font-weight-black text-uppercase">
                        NUESTROS VIAJEROS NOS RECOMIENDAN
                    </h2>
                    <v-divider class="primary  mb-6" style="max-width: 28px;"></v-divider>
                </v-col>
            </v-row>


            <v-carousel
                cycle
                hide-delimiter-background
                height="100%"
            >
                <template v-slot:prev="{ on, attrs }">
                    <v-btn
                        color="primary"
                        icon
                        v-bind="attrs"
                        v-on="on"
                    >
                        <v-icon>
                            mdi-chevron-left
                        </v-icon>
                    </v-btn>
                </template>
                <template v-slot:next="{ on, attrs }">
                    <v-btn
                        color="primary"
                        icon
                        rounded
                        v-bind="attrs"
                        v-on="on"
                    >
                        <v-icon>
                            mdi-chevron-right
                        </v-icon>
                    </v-btn>
                </template>
                <v-carousel-item
                    class="fill-height"
                    height="100%"
                    v-for="(item, i) in testimonios"
                    :key="i"
                >
                    <v-sheet
                        color="transparent"
                        class=" pa-12 "
                        height="100%"
                    >
                        <v-row
                            align="center"
                            justify="center"
                            height="100%"
                        >

                            <div
                                class=" px-12 text-lg-h6 text-body-1 monserrat-text text-justify text-sm-center ">
                                <span class="font-weight-bold">“</span>
                                {{ item.testimonio }}.
                                <span class="font-weight-bold">”</span>
                            </div>
                            <div class="d-flex align-center justify-center mt-4">
                                <div class="mr-2 ">
                                    <v-avatar style="height: 60px; min-width:60px; width: 60px;">
                                        <v-img :src="item.src" cover>
                                        </v-img>
                                    </v-avatar>
                                </div>
                                <div class="text-left">
                                    <div class="text-h6">{{ item.nombre }}</div>
                                    <v-rating
                                        background-color="orange lighten-3"
                                        color="orange"
                                        empty-icon="mdi-star-outline"
                                        full-icon="mdi-star"
                                        half-icon="mdi-star-half-full"
                                        hover
                                        length="5"
                                        readonly
                                        size="15"
                                        :value="item.estrellas"
                                    ></v-rating>
                                </div>
                            </div>
                        </v-row>
                    </v-sheet>
                </v-carousel-item>
            </v-carousel>
        </v-container>

    </v-sheet>
</template>

<script>
import t1 from '@/../images/testimonios/foto-perfil-tatiana-chamorro.png'
import t2 from '@/../images/testimonios/foto-perfil-santiago.png'
import t3 from '@/../images/testimonios/foto-perfil-diego.png'
import t4 from '@/../images/testimonios/foto-perfil-andres-errano.png'

export default {
    name: "TestimonialsComponent",
    data: () => ({
        testimonios: [
            {
                src: t1,
                nombre: 'Tatiana C',
                testimonio: 'Super recomendado excelente atención la calidad humana se siente hacen que nuestro recorrido sea más placentero un acompañamiento no solo del conductor y guía si no de su gerente desde que uno sale hasta que regresa está al pendiente de que las atenciones sean las mejores. @almaguajiratour cumplen con el destino que prometen no se pegan si en el camino hay que conocer algo extra súper los precios las comidas 😋😋😋😋😋😋 Los felicito quedé muy agradecida con sus atenciones excelentes vehículos cómodos en excelentes estados full aire',
                estrellas: 5
            },
            {
                src: t4,
                nombre: 'andres s',
                testimonio: 'Realice este viaje a inicios de enero y fue una experiencia increíble, buena atención, excelente transporte, el alojamiento y alimentación también fueron excelentes y aparte el trato que te brindan es demasiado bueno. Les recomiendo almaguajiratours para realizar esta experiencia tan reconfortante, sin duda alguna los volvería a escoger y lo mejor es que te brindan facilidad de pago. LOS MEJORES',
                estrellas: 5
            },
            {
                src: t2,
                nombre: 'Santiago c',
                testimonio: 'Lo recomiendo ampliamente: seriedad, cumplimiento, responsabilidad, carisma, conocimiento. El tour por la Alta Guajira es inolvidable, una experiencia que hay que vivir. Raguis y Sharkie son excelentes guías. 👏👌',
                estrellas: 5
            },
            {
                src: t3,
                nombre: 'Diego C',
                testimonio: 'Una gran experiencia, la agencia es super recomendada y el servicio de Raguis y Jui fue sensacional… ellos dos marcaron la diferencia.',
                estrellas: 5
            }
        ]
    })
}
</script>

<style>
.v-window__next, .v-window__prev {
    background: none !important;
}
</style>
