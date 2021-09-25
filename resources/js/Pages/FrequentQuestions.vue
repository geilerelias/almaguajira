<template>
    <app-layout>
        <section id="hero-alt">
            <div class="v-image v-responsive theme--dark" color="#45516b" flat="" tile="" height="225"
                 gradient="to top, rgba(5, 11, 31, 0.8), rgba(5, 11, 31, 0.8)" src="/img/gallery.25951ea4.jpg"
                 max-width="100%" style="height: 225px; max-width: 100%;">
                <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                <div class="v-image__image v-image__image--cover"
                     style="background-image: linear-gradient(to top, rgba(5, 11, 31, 0.8), rgba(5, 11, 31, 0.8)), url(&quot;https://zero-theme-pro.vuetifyjs.com/img/gallery.25951ea4.jpg&quot;); background-position: center center;"></div>
                <div class="v-responsive__content" style="width: 1920px;">
                    <div class="row ma-0 fill-height text-center align-center justify-center">
                        <div class="col col-12"><h1 class="text-h3 font-weight-500 mb-2 text-center white--text">
                            GALLERY </h1>
                            <div class="v-responsive base-divider primary mx-auto mb-6 base-divider--dense"
                                 style="max-width: 28px;">
                                <div class="v-responsive__content">
                                    <hr role="separator" aria-orientation="horizontal" class="v-divider theme--dark">
                                </div>
                            </div>
                            <ul class="v-breadcrumbs justify-center pa-0 theme--dark">
                                <li><a href="/" class="v-breadcrumbs__item">HOME</a></li>
                                <li class="v-breadcrumbs__divider">&gt;</li>
                                <li>
                                    <div class="v-breadcrumbs__item">GALLERY</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout
    },
    data: () => ({
        questions: [
            {
                question: "¿Cuales son los destinos que ofrecen en sus tours?",
                response: ""
            },
            {
                question: "¿Con que tiempo de anticipación puedo reservar un viaje a Perú con ustedes",
                response: ""
            },
            {
                question: "¿Qué pasos debo seguir para reservar un tour con ustedes?",
                response: ""
            },
            {
                question: "¿De qué manera puedo hacer el pago de los tours?",
                response: ""
            },
            {
                question: "¿Los tours que ofrecen son en Grupo ó Privados?",
                response: ""
            },
            {
                question: "¿Cuantas personas máximo van en un tour grupal?",
                response: ""
            },
            {
                question: "¿Qué tipo de hoteles ofrecen en sus tours?",
                response: ""
            },
            {
                question: "¿En donde se ubica su oficina principal?",
                response: ""
            },
            {
                question: "¿Cuáles son las condiciones para ingresar a Perú con respecto a las medidas de bioseguridad relacionadas al COVID-19?",
                response: ""
            },
            {
                question: "Si tengo más dudas ¿Cómo me puedo comunicar con ustedes?",
                response: ""
            },
        ]
    })
};
</script>
<style>
</style>
