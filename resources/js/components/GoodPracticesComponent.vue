<template>
    <v-container>
        <v-sheet class="rounded-0">
            <div class="text-center mb-6">
                <h2 class="text-h6 text-lg-h5 secondary--text font-weight-black monserrat-text text-uppercase">
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
                                    <div class="text-h2 success--text monserrat-text font-weight-bold pr-8">
                                        01
                                    </div>
                                </v-col>
                                <v-col cols="12" class="col-sm-9">
                                    <div
                                        class="text-body-2 font-weight-regular monserrat-text mb-1 text-left grey--text">
                                        backed up
                                    </div>
                                    <h3 class="text-uppercase text-h6 monserrat-text font-weight-bold mb-1 text-left">
                                        Respaldo
                                    </h3>

                                    <v-divider class="primary mr-auto mb-6"
                                               style="max-width: 28px;">
                                    </v-divider>
                                    <p class="base-body text-body-1 monserrat-text grey--text text--darken-1 text-left mb-6">
                                        Estás respaldado por la asistencia al viajero de Colasistencia.
                                    </p>
                                    <div class="my-1">
                                        <div class="v-sheet mx-auto surface">
                                            <img
                                                :src="imgsBuenasPracticas"/>
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
                                    <div class="text-h2 success--text monserrat-text font-weight-bold pr-8 ">
                                        02
                                    </div>
                                </v-col>
                                <v-col cols="12" class="col col-sm-9 ">
                                    <div
                                        class="text-body-2 monserrat-text font-weight-regular mb-1 text-left grey--text">
                                        training
                                    </div>
                                    <h3 class="text-uppercase monserrat-text text-h6 font-weight-bold mb-1 text-left">
                                        Capacitaciones
                                    </h3>

                                    <v-divider class="primary  monserrat-text mr-auto mb-6"
                                               style="max-width: 28px;">
                                    </v-divider>
                                    <p class="base-body text-body-1 monserrat-text grey--text text--darken-1 text-left mb-6">
                                        Nos capacitamos constantemente.
                                    </p>

                                    <div class="my-4">
                                        <div>
                                            <v-img :src="bp"></v-img>
                                        </div>
                                    </div>
                                </v-col>

                            </v-row>
                        </v-container>
                    </v-col>

                </v-row>
            </v-container>
        </v-sheet>
    </v-container>
</template>

<script>
import bp4 from '../../images/buenas_practicas/buenas-practicas5.png'
// import bp5 from '../../images/buenas_practicas/buenas-practicas5.png'

import bp from '../../images/buenas_practicas/logos-buenas-practicas turisticas color.png'

export default {
    name: "GoodPracticesComponent",
    data: () => ({
        bp: bp,
        imgsBuenasPracticas: bp4,
    })
}
</script>

<style scoped>

</style>
