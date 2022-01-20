<template>
    <app-layout>
        <!--        <inertia-link href="https://wa.me/c/573205011419">-->
        <!--            https://wa.me/c/573205011419-->
        <!--        </inertia-link>-->

        <v-container style="min-height: 100vh;">
            <v-breadcrumbs class="text--primary px-0"
                           :items="items"
                           divider=">"
            ></v-breadcrumbs>


            <v-row dense>
                <v-col class="col-12">
                    <lightbox :items="images" :cells="4" style></lightbox>
                </v-col>

                <v-col v-if="exists" class="mt-4 col col-12">
                    <v-card flat>
                        <v-btn
                            absolute
                            color="white"
                            fab
                            large
                            right
                            top
                            href="https://wa.me/c/573205011419"
                            target="_blank"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="100" height="100" viewBox="0 0 100 100">
                                <image id="Capa_1" data-name="Capa 1" x="8" y="8" width="84" height="85"
                                       xlink:href="data:img/png;base64,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"/>
                            </svg>
                        </v-btn>
                        <div class="mb-3">
                            <h1 class="secondary--text text-h6 text-lg-h5 text-uppercase font-weight-black mb-2">
                                {{ destinos[id - 1].title }}
                            </h1>
                            <v-divider class="primary mb-2" style="max-width: 28px;"></v-divider>
                        </div>
                        <div v-if='destinos[id - 1].description!==""'>
                            <h1 class="secondary--text text-uppercase font-weight-black mb-2">
                                Descripción
                            </h1>
                            <p class="mb-5 text-14" v-html="destinos[id-1].description">
                            </p>
                        </div>


                        <div v-if='destinos[id - 1].horarios!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">
                                Horario
                            </div>
                            <p v-html="destinos[id - 1].horarios">
                            </p>
                        </div>
                        <div v-if='destinos[id - 1].tiempo!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">
                                <v-icon left
                                        class="secondary--text"
                                        size="16">
                                    mdi-clock-outline
                                </v-icon>
                                Tiempo
                            </div>
                            <p v-html="destinos[id - 1].tiempo">
                            </p>
                        </div>
                        <div v-if='destinos[id - 1].punto_encuentro!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">
                                Punto de encuentro
                            </div>
                            <p v-html="destinos[id - 1].punto_encuentro">
                            </p>
                        </div>
                        <div v-if='destinos[id - 1].incluye!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">

                                Incluye
                            </div>
                            <p v-html="destinos[id - 1].incluye">

                            </p>
                        </div>
                        <div v-if='destinos[id - 1].que_conoceras!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">

                                ¿Que conoceras?
                            </div>
                            <p v-html="destinos[id - 1].que_conoceras"></p>
                        </div>
                        <div
                            v-if='destinos[id - 1].recomendaciones!=="" && destinos[id - 1].recomendaciones!==undefined'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">
                                Recomendaciones
                            </div>
                            <p v-html="destinos[id - 1].recomendaciones"></p>
                        </div>
                        <div v-if='destinos[id - 1].notas!==""'>
                            <div class="secondary--text  mb-4 d-flex align-center flex-wrap font-bold">

                                Notas
                            </div>
                            <p v-html="destinos[id - 1].notas"></p>
                        </div>
                        <v-row class="mb-12">
                            <v-col>
                                <v-btn
                                    color="primary"
                                    outlined
                                    dark
                                    @click="dialog=!dialog"
                                >
                                    CLAUSULA DE RESPONSABILIDAD
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-card>
                </v-col>

                <v-col v-else>

                </v-col>

            </v-row>
            <v-row class="mb-12">
                <v-col justify-center class="justify-center">
                    <template>
                        <div class="text-center">
                            <v-pagination
                                v-model="page"
                                :length="destinos.length"
                                circle
                                @next="next()"
                                @input="input()"
                                @previous="previus()"
                            ></v-pagination>
                        </div>
                    </template>
                </v-col>
            </v-row>

        </v-container>
        <v-row justify="center">
            <v-dialog
                v-model="dialog"
                width="600px"
            >
                <v-card>
                    <v-card-title>
                        <span class="text-h5">CLAUSULA DE RESPONSABILIDAD</span>
                    </v-card-title>
                    <v-card-text>
                        ALMA GUAJIRA Agencia de viajes operadora con REGISTRO NACIONAL DE TURISMO No 99350, está
                        amparada por el régimen de responsabilidad que establece la Ley 300 de 1996, el Decreto 2438 de
                        2010 y demás decretos reglamentarios.
                        <br>
                        <br>
                        ALMA GUAJIRA, en su calidad de Intermediario tiene responsabilidad limitada en la prestación de
                        los servicios turísticos de los proveedores (hoteles, transportes, guías, parques, museos entre
                        otros), así mismo, no tiene injerencia en las decisiones o políticas de estos. Por otra parte,
                        se responsabiliza del cumplimiento de los servicios mencionados en los programas.
                        <br>
                        <br>
                        ALMA GUAJIRA, no asume responsabilidad frente al usuario o viajero por eventos tales como
                        accidentes, huelgas, asonadas, terremotos, fenómenos climáticos o naturales, condiciones de
                        seguridad, factores políticos, negación de permisos de ingreso, asuntos de salubridad y
                        cualquier otro caso de fuerza mayor que pudiere ocurrir durante el viaje. En el caso que ocurra
                        algún evento mencionado en el anterior ítem, con el fin de garantizar el éxito del plan, el
                        operador se reserva el derecho de modificar, reemplazar o cancelar itinerarios, fechas, vuelos,
                        hoteles, servicios opcionales, lo cual es aceptado por el pasajero al momento de adquirir los
                        servicios.
                        <br>
                        <br>
                        En caso de ser necesario la cancelación de un viaje total o parcialmente la responsabilidad de
                        los organizadores se limita a reintegrar el importe de la parte cancelada, descontando los
                        gastos a que hubiere lugar.
                        El Organizador del viaje tiene la prerrogativa de modificar el itinerario o los hoteles
                        confirmados y demás servicios, por otros de igual o superior categoría cuando dichos cambios
                        redunden en beneficio de la calidad del viaje.
                        <br>
                        <br>
                        En el evento que el usuario por fuerza mayor se vea obligado a suspender los servicios
                        turísticos contratados, tendrá derecho al reintegro de los servicios no disfrutados,
                        exceptuándose los gastos que efectivamente se hayan causado o se causaren posteriormente por
                        razones de su cancelación. Se entenderán como causas de fuerza mayor, que eximirán al consumidor
                        de su responsabilidad, el fallecimiento, enfermedad grave o accidente del asegurado, cónyuge,
                        hijos, padres o hermanos.
                        <br>
                        <br>
                        De no tomar lo servicios contratados sin causa no justificada, no tendrá derecho a devolución
                        alguna de la cantidad abonada, salvo acuerdo entre las partes en otro sentido.
                        <br>
                        <br>
                        En caso de que el usuario del programa contratado no pueda viajar en la fecha reservada puede
                        coordinar una nueva fecha de viaje asumiendo los costos que esto signifique por penalización
                        según la antelación con que sea reportada la novedad, o podrá ceder su reserva a una tercera
                        persona, solicitándolo por escrito con quince días de antelación a la fecha de viaje
                        <br>
                        <br>
                        La agencia de viajes informará al viajero la documentación requerida para realizar el viaje,
                        pero es responsabilidad del usuario, el cumplimiento de los requisitos informados por la
                        agencia. El organizador de este servicio turístico, sus operadores y agentes no asumen
                        responsabilidad alguna en el evento que le sean negados al usuario los visados requeridos para
                        realizar el viaje o, en el caso, que no se le permita el ingreso a algún país. Serán por cuenta
                        del usuario los gastos que esta situación le origine.
                        <br>
                        <br>
                        Los organizadores de los servicios turísticos se reservan el derecho de retirar de estos a quién
                        por causa grave, debidamente comprobada, ya sea de carácter moral o disciplinario, atente contra
                        el éxito de esta.
                        <br>
                        <br>
                        En relación con los servicios no prestados al momento del retiro del usuario, se aplicarán las
                        políticas de reembolso del operador, si hubiere lugar. ALMA GUAJIRA. Con RNT No 99350 no es
                        solidario ni responsable por dichos reembolsos.
                        <br>
                        <br>
                        Las políticas de reembolso de los servicios no prestados en razón a situaciones de fuerza mayor
                        serán definidas por cada operador y las mismas serán confirmadas una vez se reserven y expidan
                        los documentos de viaje. ALMA GUAJIRA Con RNT No 99350, no es responsable solidario por las
                        sumas solicitadas en reembolso. Los reembolsos a que hubiere lugar se realizarán dentro de los
                        30 días calendario siguiente a la solicitud. No obstante, en caso de que el trámite tome más
                        tiempo por causas ajenas a ALMA GUAJIRA, esta no reconocerá ningún interés sobre las sumas a
                        reembolsar.
                        <br>
                        <br>
                        El porcentaje de reembolso dependerá de las condiciones del proveedor y de los gastos de
                        administración de la agencia. Así mismo en las condiciones específicas de cada plan se definirá
                        la forma de pago del plan y los parámetros del reembolso a que hubiere lugar.
                        <br>
                        <br>
                        El organizador de los servicios turísticos y la agencia de viajes no asumen responsabilidad
                        alguna frente a los asuntos legales u otros inconvenientes en que pueda verse involucrado el
                        usuario, en caso de que el usuario se vea obligado a retirarse de la excursión por tales motivos
                        y hará frente a los gastos en que incurra.
                        El organizador, sus operadores y agentes, no asumen responsabilidad alguna por pérdida o daños
                        que sufra el equipaje o los efectos personales del Usuario durante el viaje. El equipaje y
                        cualquier otro objeto que los usuarios lleven consigo están bajo su custodia y responsabilidad.
                        <br>
                        <br>
                        Todos los precios publicados y tarifas presentadas en este boletín, recibo, comprobante o
                        cotización están sujetos a cambio y disponibilidad sin previo aviso. Aplican restricciones y
                        condiciones para cada tarifa publicada según su vigencia. Las tarifas hoteleras dependen de la
                        acomodación seleccionada y categoría de este.

                        <br>
                        <br>
                        ALMA GUAJIRA Con RNT No 99350 le informará al pasajero las restricciones que establezcan las
                        aerolíneas en cuanto a prohibiciones, peso máximo y número de piezas por pasajero, personas o
                        cargas permitidas en los atractivos o sitios turísticos, limitaciones o impedimentos de acceso
                        por cupo máximo. No obstante, será de la exclusiva responsabilidad del pasajero el cumplimiento
                        de dichas políticas, las cuales podrán variar por disposición de las empresas de transporte. En
                        el evento de existir en el mercado alguna póliza individual en materia de equipajes, ALMA
                        GUAJIRA Con RNT No 99350 se la podrá referenciar al pasajero para que éste decida si lo toma o
                        no.
                        <br>
                        <br>
                        Si el usuario desiste de viajar se le reintegrarán las sumas abonadas al precio del programa
                        debitando el porcentaje que a continuación se indica, calculado sobre el precio total del
                        servicio turístico:
                        <br>
                        <ul style="list-style: circle">
                            <li>● 30-21 días antes de la salida = 25% de gastos</li>
                            <li>● 20-15 días antes de la salida = 50% de gastos</li>
                            <li>● 14-07 días antes de la salida = 75% de gastos</li>
                            <li>● Menos de 7 días antes de la salida = 100% de gastos.</li>
                        </ul>
                        <br>
                        <br>
                        <span class="font-weight-bold">Nota:</span> Para servicios turísticos específicos, algunos
                        destinos eco turísticos y eventos
                        especiales aplicarán las condiciones de cada caso que serán informadas a la confirmación de los
                        servicios.
                        <br>
                        <br>
                        ALMA GUAJIRA con registro Nacional de Turismo No. 99350 expedido por el Ministerio de Comercio,
                        Industria y Turismo. En cumplimiento de lo dispuesto en el artículo 17 de la Ley 679 de 2001, la
                        Ley 1329 de 2009, la Ley 1336 de 2009, advierte al turista que la trata, explotación y el abuso
                        sexual de menores de edad en el país son sancionados penal y administrativamente, conforme a las
                        leyes vigentes. Y que apoyamos las disposiciones del gobierno nacional en tal sentido.
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>

                        <v-btn
                            color="green darken-1"
                            text
                            @click="dialog = false"
                        >
                            Aceptar
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-row>
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

import whatsapp from '@/../images/btns/whatsapp-nuevo.png'


export default {

    props: ["id"],
    components: {
        AppLayout,
        Lightbox
    },
    created() {
        console.log(this.id)
        console.log(typeof (this.id))

        var num = this.id - 1;
        this.page = this.id * 1;
        console.log(this.destinos[num].name);
        let folder = this.destinos[num].name;
        this.images.push(`/src/destinos/null/Imagen${num + 1}.jpg`)
        if (folder !== null || this.destinos[num].name !== '') {
            this.exists = true;

            axios
                .get(`/destinos/${folder}`)
                .then(response => {
                    console.log(response)
                    let lista = response.data;

                    for (let i = 0; i < lista.length; i++) {
                        this.images.push(`/src/destinos/${folder}/${lista[i]}`);
                        console.log(`/src/services/${folder}/${lista[i]}`)
                    }
                })
                .catch(error => {
                    console.log(error);
                });
        } else {
            this.exists = false
            console.log('el folder no contiene información')
        }
    },
    data: () => ({
        whatsapp,
        exists: false,
        dialog: false,
        page: 0,
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
                title: 'FREETOUR - WALKING CITY TOUR',
                description: `En esta visita guiada vamos caminando a recorrer las principales calles y monumentos que comprenden
                el centro histórico de Riohacha, una de las ciudades más antiguas de América.
                Haz este recorrido con nosotros y sumérgete en las historias de esta curiosa ciudad
                Cabe mencionar que este es un tour de libre pago, Alma guajira facilita los servicios de un guía profesional y
                el viajero paga <span class="font-weight-bold">voluntariamente</span> al guía oficial lo que considera justo después de haber realizado el recorrido
                es una forma de propina, valorando así el esfuerzo y los conocimientos del guía local.
                </br></br>
                El primer Freetour de la ciudad.
                </br></br>
                Las reservas se realizan con mínimo 24 horas de anticipación.
                `,
                horarios: `
                <span class="text--primary font-weight-bold">Mañana:</span> 9:00 – 10:30 AM
                <br/>
                <span class="text--primary font-weight-bold">Tarde:</span> 5:00 – 6:30 PM
                `,
                tiempo: '1 h 30 min',
                punto_encuentro: 'Frente a La Catedral nuestra señora de Los remedios',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo.</li>
                    <li>Póliza de Seguro.</li>
                </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Parque Padilla </li>
                    <li>Catedral Nuestra Señora de Los Remedios </li>
                    <li>Callejón de las brisas </li>
                    <li>Monumento al milagro de La Virgen de Los Remedios.</li>
                    <li>Muelle turístico de Riohacha</li>
                    <li>Monumento a la identidad </li>
                    <li>Parque Nicolás de Federmann </li>
                    <li>Monumento al Palabrero</li>
                    <li>Yo amo Riohacha</li>
                    <li>Monumento de las mariposas amarillas.</li>
                </ul>
                `,
                notas: 'Las reservas se realizan con mínimo 24 horas de anticipación.',
                recomendaciones: ''

            },
            {
                link: "#",
                src: imagen2,
                name: "city-tour-riohacha",
                title: 'CITY TOUR FULL RIOHACHA',
                description: `
                Este es un plan super recomendado en la ciudad, ideal para disfrutar ya sea solo, en pareja, con familiares
                o amigos, Riohacha es una de las ciudades más antigua de toda América, ven a conocer sus historias mitos y leyendas,
                iremos por todos los monumentos de la ciudad contándote el significado que se le da a cada uno de ellos.
                </br>
                Será una experiencia memorable hablaremos de vallenato, carnavales, literatura y otras cosas más que solo
                los locales conocemos, además nos tomaremos una bebida, la de su elección y en un lugar imperdible de la ciudad.
                `,
                horarios: 'A convenir, pero recomendamos que sea antes de las 4:00 PM para poder ir hasta el Mercado de artesanías.',
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Transporte climatizado </li>
                    <li>Recogida en el alojamiento.</li>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Refrigerio </li>
                </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Mercado de Artesanías (abierto hasta las 5:00 pm)</li>
                    <li>Francisco el hombre</li>
                    <li>Monumento Los embarradores. </li>
                    <li>Yo amo Riohacha</li>
                    <li>Monumento al Palabrero </li>
                    <li>Parque Nicolás de Federmann </li>
                    <li>Monumento de las mariposas amarillas.</li>
                    <li>Casa Gabriel García Márquez</li>
                    <li>Monumento a la identidad </li>
                    <li>Muelle turístico </li>
                    <li>Parque Padilla </li>
                    <li>Catedral Nuestra Señora de Los Remedios </li>
                    <li>Monumento al milagro de La Virgen de Los Remedios.</li>
                    <li>Callejón de las brisas </li>
                </ul>
                `,
                notas: '',
                recomendaciones: `
                 <ul style="list-style: circle">
                    <li>Vestido casual</li>
                    <li>Ir ligeros de equipajes</li>
                </ul>
                `
            },
            {
                link: "#",
                src: imagen3,
                name: "cabo-de-la-vela",
                title: 'FULL DAY CABO DE LA VELA',
                description: `
                En este Full Day o pasadía en el cabo de la vela, te ofrecemos asesoría y acompañamiento por guías de
                turismo acreditados y con experiencia.
                </br>
                De una manera profesional, divertida y entretenida te llevaremos a recorrer los siguientes lugares: Salinas de <span class="font-weight-bold">Manaure</span>,
                dónde te vamos a enseñar cuál es el proceso que conlleva la producción de sal mineral, caminarás sobre losas y pilas de
                sal, además podemos mostrarte las aguas rosadas, que se encuentren en esa temporada. En Uribía qué es la capital indígena
                de Colombia haremos una visita guiada por la plaza. Además, también visitaremos:
                </br>
                <ul style="list-style: circle">
                    <li class="font-weight-bold">Vía Férrea del Cerrejón</li>
                    <li class="font-weight-bold">Dunas del pilón</li>
                    <li class="font-weight-bold">Playa Arcoíris.</li>
                    <li class="font-weight-bold">Cerro Kama’ Aichi (pilón de azúcar)</li>
                    <li class="font-weight-bold">La playa dorada</li>
                    <li class="font-weight-bold">Faro del cabo de la vela</li>
                    <li class="font-weight-bold">La Bahía del Cabo de la Vela</li>
                </ul>
                <br>
                Iremos sin prisas, habrá tiempo para fotografías este es un plan para todas las edades.
                ¡Anímate! si quieres aprender, pasarla bien y contribuir a las comunidades locales.

                `,
                horarios: `
                <span class="text--primary font-weight-bold">Salida:</span> 6:30 AM desde el alojamiento
                <br/>
                <span class="text--primary font-weight-bold">Regreso:</span> cerca de las 6 PM `,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Almuerzo + Bebida</li>
                </ul>
                `,
                que_conoceras: '',
                notas: '',
                recomendaciones: 'Llevar protección solar, hidratación, Vestido de baño, toallas, zapatos deportivos, sandalias'
            },
            {
                link: "#",
                src: imagen4,
                name: null,
                title: 'Amanecer en el Cabo 2 Días / 1 Noche',
                description: "",
                horarios: 'El tour comienza a las 7:00 AM',
                tiempo: '',
                punto_encuentro: '',
                incluye: '',
                que_conoceras: `
                    <ul style="list-style: circle">
                        <li>Salinas de Manaure.</li>
                        <li>Plaza Uribía </li>
                        <li>Bahía del cabo de la vela</li>
                        <li>Dunas del pilón.</li>
                        <li>Playa Dorada</li>
                        <li>Atardecer desde el Cerro del faro</li>
                        <li>Reunión social con fogata (opcional)</li>
                        <li>Cerro Kama'aichi ( Pilón de azúcar)</li>
                        <li>Playa arcoíris.</li>
                    </ul>
                `,
                notas: ''
            },
            {
                link: "#",
                src: imagen5,
                name: "alta-guajira",
                title: 'AVENTURA EN LA ALTA GUAJIRA (3 DÍAS  2 NOCHES)',
                description: `
                <div class="mb-6">
                    <h2 class="secondary--text font-weight-black">
                        Itinerario:
                    </h2>
                </div>
                <h2 class="secondary--text font-weight-black">
                    Día 1
                </h2>
                <p>
                    07:00 AM. Salida de Riohacha hacia el Cabo de la vela, visitando los siguientes lugares: Manaure, (Salinas de Manaure), Uribía (capital indígena de Colombia), bosques de cactus, desierto de carrizal, observar rebaños de cabras y ovejas alrededor de las Rancherías.
                    <br />
                    Almuerzo en el Cabo de la vela.
                    <br/>
                    Visita a playa arcoíris, Cerro del pilón de azúcar (Subir y Bajar en 30 Aprox.), Playa del Ojo del Agua, observar variedad de paisajes del entorno del cabo de la vela, visita la playa ojo de agua, finalizando la tarde, contemplamos el atardecer con desde la punta del cerro del Faro.
                    Cena en el cabo alojamiento en el cabo de la vela en la acomodación de su elección; Chinchorros o cama
                </p>
                <h2 class="mt-6 secondary--text font-weight-black">
                    Día 2
                </h2>
               <p>
                    Desayuno en el cabo de la vela.
                    <br/>
                    7:30 AM. Salida hacia Punta Gallinas visitando los siguientes lugares, Parque eólico Jepirachi, Desierto de Puerto nuevo y Portete, Desierto de bahía honda, Desierto de bahía hondita.
                    <br/>
                    Almuerzo y descanso en cómodas hamacas con vista a Playa Pusheo.
                    <br/>
                    Visita las playas de las Dunas de Taroa para apreciar y disfrutar de este fascinante paisaje de Cielo, Desierto y Mar. Baño en el Mar de las Dunas de Taroa. Visita al faro de Punta Gallinas ubicado en la parte más al Norte de América del Sur para contemplar el atardecer frente a la Playa Punta Agujas. Cena y alojamiento en Punta Gallinas en la acomodación de su elección

                </p>

                <h2 class="mt-6 secondary--text font-weight-black">
                    Día 3
                </h2>
               <p>
                    Desayuno en Punta Gallinas.
                    <br/>
                    7:30 am. Salida hacia Riohacha.
                    <br/>
                    Realizamos una visita al mirador de casares para observar su panorámica y capturar tu mejor foto.
                    Almuerzo en Uribía (capital indígena de Colombia).
                    <br/>


                    <span class="secondary--text">El itinerario puede variar de acuerdo a las condiciones climáticas y/o tiempo de los Turistas.</span>
                 </p>
                `,
                horarios: `
                    Llegada a Riohacha. <br/>
                    2:30 PM Aprox.`,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>1 noche de alojamiento en el Cabo de la vela</li>
                    <li>1 noche de alojamiento en Punta Gallinas</li>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro</li>
                    <li>Transporte</li>
                    <li>Alimentación (No incluye desayuno del Día 1)</li>
                </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Salinas de Manaure</li>
                    <li>Uribía</li>
                    <li>Vía Férrea</li>
                    <li>Dunas del Pilón de Azúcar</li>
                    <li>Playa Arcoíris</li>
                    <li>Cerro Kama’ Aichi (Pilón de azúcar)</li>
                    <li>La Bahía del Cabo de la Vela</li>
                    <li>Parque Eólico Jepirachi</li>
                    <li>Desierto de puerto nuevo</li>
                    <li>Desierto de Bahía honda</li>
                    <li>Playa Pusheo</li>
                    <li>Dunas de Taroa</li>
                    <li>Faro de Punta Gallinas</li>
                    <li>Mirador de Casares</li>
                </ul>
                `,
                notas: ''
            },
            {
                link: "#",
                src: imagen6,
                name: null,
                title: `Alta Guajira 4 Días / 3 Noches`,
                description: "",
                horarios: '',
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Transporte</li>
                    <li>Alimentación</li>
                    <li>Acomodación en chinchorros (Hamacas)</li>
                    <li>Guía de turismo</li>
                    <li>Sandboarding </li>
                    <li>Seguro de Viaje</li>
                    <li>Aporte a la comunidad.</li>
                </ul>`,
                que_conoceras: '',
                notas: ''
            },
            {
                link: "#",
                src: imagen7,
                name: "palomino",
                title: 'FULL DAY PALOMINO',
                description: `
                 Palomino es uno de los destinos imperdibles en La Guajira y se caracteriza por densa vegetación y ríos de
                 aguas cristalinas un sitio adecuado para que puedas desconectarte del ruido de la ciudad. aquí podrás respirar
                 aire fresco y puro además apreciar esos aromas y vistas que solo la selva puede ofrecernos.
                 <br/>
                Haremos una caminata por los senderos del pueblo y tubing por el Río Palomino iremos flotando hasta el encuentro
                natural del río Palomino y el mar Caribe, allí disfrutaras de una de las 10 mejores playas del país.
                <br/>
                Palomino por su cercanía con la Sierra Nevada de Santa Marta tiene mucha influencia de las etnias indígenas que allí habitan entre ellos Wiwas, Kogui, Arhuacos, Kankuamos.
                Vive este día de aventura con nosotros que sin duda te va a encantar.
                `,
                horarios: `
                <span class="text--primary font-weight-bold">Salidas:</span> 7:00 AM desde el alojamiento
                <span class="text--primary font-weight-bold">Regreso:</span>  cerca de las 5:00PM
                `,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Incluye la actividad del Tubing (Descenso por el Rio en flotadores)</li>
                    <li>Almuerzo + Bebida</li>
                </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Palomino</li>
                    <li>Rio palomino </li>
                    <li>Encuentro Natural Rio & Mar </li>
                    <li>Playas de Palomino </li>
                </ul>
                `,
                notas: '',
                recomendaciones: `
                <ul style="list-style: circle">
                    <li>Llevar ropa de secado rápido o ropa de cambio. </li>
                    <li>Protección impermeable para aparatos electrónicos tales como celulares, cámara y otros.</li>
                    <li>Repente y protección solar </li>
                </ul>
                `
            },
            {
                link: "#",
                src: imagen8,
                name: "aldea-wayuu",
                title: 'ALDEA INDÍGENA WAYUU',
                description: `En esta visita a la comunidad indígena wayuu vivirás de primera mano lo que es ser Wayuu,
                conocer a nuestros mitos y leyendas, nuestra forma de pensar, nuestras artesanías, nuestro baile ritual (Yonna),
                las pinturas en el rostro y su significado, conocerás y podrás beneficiarte de la medicina tradicional Wayuu;
                sin duda será una experiencia memorable que te hará comprender que a pesar de las diferencias étnicas todos
                podemos convivir respetando los valores y creencias de los demás.<br/><br/>
                Te invitamos a que vivas esta experiencia y conozcas las peculiaridades de la etnia aborigen más representativa de Colombia viaja con alma guajira.
                `,
                horarios: `
                <span class="text--primary font-weight-bold">Salidas:</span> 2:00 PM desde el alojamiento
                <span class="text--primary font-weight-bold">Regreso:</span>  cerca de las 5:30 PM
                `,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Degustación de la comida Típica Wayuu </li>
                    <li>Shot de Chirrinchi</li>
                    <li>Yonna (Danza Wayuu)</li>
                </>ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Ranchería Wayuu (Aldea)</li>
                    <li>Un poco de su cultura</li>
                </ul>
                `,
                notas: ''
            },
            {
                link: "#",
                src: imagen9,
                name: "avistamiento",
                title: 'AVISTAMIENTO DE FLAMENCOS ROSADOS',
                description: `
                Iremos al corregimiento de camarones dónde se encuentra el santuario de fauna y flora los flamencos.
                <br/>
                Allí está la laguna navío quebrado que es el sitio habitual dónde se encuentran estás hermosas y llamativas aves, iremos
                a bordo de bote sin motor para estar lo más cerca posible de estas aves. <br/>
                Oírlos gruñir, verlas comer, y volar es un espectáculo que recordarás para toda la vida.
                Vive está experiencia con Alma Guajira.
                `,
                horarios: `
                <span class="text--primary font-weight-bold">Salidas:</span> 6:30 AM desde el alojamiento
                <span class="text--primary font-weight-bold">Regreso:</span>  cerca de las 1:30 PM
                `,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte ida y vuelta</li>
                    <li>Actividad en Canoa </li>
                    <li>Almuerzo + Bebida </li>
                 </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Tour panorámico por Camarones</li>
                    <li>Santuario de Fauna y Flora Los Flamencos</li>
                    <li>Laguna navío quebrado </li>
                    <li>Playa Boca de Camarones </li>
                </ul>
                `,
                notas: '',
                recomendacion: `
                <ul style="list-style: circle">
                    <li>Protección solar</li>
                    <li>Ropa de colores apagados</li>
                    <li>Hidratación </li>
                    <li>Zapatos cómodos para caminar (Preferiblemente tenis)</li>
                    <li>No hacer ruido </li>
                    <li>No hacer volar intencionalmente a las aves.</li>
                </ul>`
            },
            {
                link: "#",
                src: imagen10,
                name: null,
                title: 'SALINAS DE MANAURE ',
                description: "",
                horarios: `
                <span class="text--primary font-weight-bold">Salidas:</span> 8:00 PM desde el alojamiento
                <span class="text--primary font-weight-bold">Regreso:</span>  cerca de las 12:30 PM
                `,
                tiempo: '',
                punto_encuentro: '',
                incluye: `
                <ul style="list-style: circle">
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Actividad Ruta de la Sal </li>
                </ul>
                `,
                que_conoceras: `
                <ul style="list-style: circle">
                    <li>Salinas de Manaure </li>
                    <li>Plaza Principal de Manaure </li>
                </ul>`,
                notas: '',
                recomendaciones: `
                <ul style="list-style: circle">
                    <li>Protección solar</li>
                    <li>Hidratación </li>
                    <li>Zapatos cómodos para caminar (Preferiblemente tenis)</li>
                </ul>`
            },
            {
                link: "#",
                src: imagen11,
                name: null,
                title: 'Vamos a Minca ',
                description: `
                Salidas grupales desde Riohacha, nos desplazaremos a La capital ecológica de la sierra nevada de Santa
                Marta, Minca  que es un pequeño y bonito pueblo ubicado en las estribaciones de la Sierra Nevada, a una
                altura aproximada de 650 msnm  un sitio con mucha variedad de animales  y  vegetación, es un lugar ideal
                para tener de nuevo un encuentro con la naturaleza y consigo mismo, además lleno de Pozos y cascadas de
                aguas frías.
                <br/>
                Minca es considerada una de las primeras haciendas cafeteras de Colombia, pero también  el sitio donde habitó la etnia Tayrona de quienes descendieron los wiwas, Koguis, Arhuacros y Kankuamos
                Probarás Café y/o chocolate orgánicos y conocerás las hamacas más grandes del mundo más.
                Ven con nosotros a esta aventura que será un recuerdo para toda la vida.
                `,
                horarios: '',
                tiempo: '',
                punto_encuentro: '',
                incluye: '',
                que_conoceras: '',
                notas: ''
            }

        ],
        images: [],

    }),
    methods: {
        input() {
            if (this.page !== null)
                this.$inertia.get(`/our-fates/detail/${this.page}`)
        },
        next() {
            this.$inertia.get(`/our-fates/detail/${this.page + 1}`)
        },
        previus() {
            this.$inertia.get(`/our-fates/detail/${this.page - 1}`)
        }
    }
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
