<template>
    <app-layout>
        <!--        <inertia-link href="https://wa.me/c/573205011419">-->
        <!--            https://wa.me/c/573205011419-->
        <!--        </inertia-link>-->

        <v-container class="fill-height" style="min-height: 90vh;">
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
            <v-btn
                color="primary"
                outline
                dark
                @click="dialog=!dialog"
            >
                CLAUSULA DE RESPONSABILIDAD
            </v-btn>
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
                        ALMA GUAJIRA, en su calidad de Intermediario tiene responsabilidad limitada en la prestación de
                        los servicios turísticos de los proveedores (hoteles, transportes, guías, parques, museos entre
                        otros), así mismo, no tiene injerencia en las decisiones o políticas de estos. Por otra parte,
                        se responsabiliza del cumplimiento de los servicios mencionados en los programas.
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
                        En caso de ser necesario la cancelación de un viaje total o parcialmente la responsabilidad de
                        los organizadores se limita a reintegrar el importe de la parte cancelada, descontando los
                        gastos a que hubiere lugar.
                        El Organizador del viaje tiene la prerrogativa de modificar el itinerario o los hoteles
                        confirmados y demás servicios, por otros de igual o superior categoría cuando dichos cambios
                        redunden en beneficio de la calidad del viaje.
                        <br>
                        En el evento que el usuario por fuerza mayor se vea obligado a suspender los servicios
                        turísticos contratados, tendrá derecho al reintegro de los servicios no disfrutados,
                        exceptuándose los gastos que efectivamente se hayan causado o se causaren posteriormente por
                        razones de su cancelación. Se entenderán como causas de fuerza mayor, que eximirán al consumidor
                        de su responsabilidad, el fallecimiento, enfermedad grave o accidente del asegurado, cónyuge,
                        hijos, padres o hermanos.
                        <br>
                        De no tomar lo servicios contratados sin causa no justificada, no tendrá derecho a devolución
                        alguna de la cantidad abonada, salvo acuerdo entre las partes en otro sentido.
                        <br>
                        En caso de que el usuario del programa contratado no pueda viajar en la fecha reservada puede
                        coordinar una nueva fecha de viaje asumiendo los costos que esto signifique por penalización
                        según la antelación con que sea reportada la novedad, o podrá ceder su reserva a una tercera
                        persona, solicitándolo por escrito con quince días de antelación a la fecha de viaje
                        <br>
                        La agencia de viajes informará al viajero la documentación requerida para realizar el viaje,
                        pero es responsabilidad del usuario, el cumplimiento de los requisitos informados por la
                        agencia. El organizador de este servicio turístico, sus operadores y agentes no asumen
                        responsabilidad alguna en el evento que le sean negados al usuario los visados requeridos para
                        realizar el viaje o, en el caso, que no se le permita el ingreso a algún país. Serán por cuenta
                        del usuario los gastos que esta situación le origine.
                        <br>
                        Los organizadores de los servicios turísticos se reservan el derecho de retirar de estos a quién
                        por causa grave, debidamente comprobada, ya sea de carácter moral o disciplinario, atente contra
                        el éxito de esta.
                        <br>
                        En relación con los servicios no prestados al momento del retiro del usuario, se aplicarán las
                        políticas de reembolso del operador, si hubiere lugar. ALMA GUAJIRA. Con RNT No 99350 no es
                        solidario ni responsable por dichos reembolsos.
                        <br>
                        Las políticas de reembolso de los servicios no prestados en razón a situaciones de fuerza mayor
                        serán definidas por cada operador y las mismas serán confirmadas una vez se reserven y expidan
                        los documentos de viaje. ALMA GUAJIRA Con RNT No 99350, no es responsable solidario por las
                        sumas solicitadas en reembolso. Los reembolsos a que hubiere lugar se realizarán dentro de los
                        30 días calendario siguiente a la solicitud. No obstante, en caso de que el trámite tome más
                        tiempo por causas ajenas a ALMA GUAJIRA, esta no reconocerá ningún interés sobre las sumas a
                        reembolsar.
                        <br>
                        El porcentaje de reembolso dependerá de las condiciones del proveedor y de los gastos de
                        administración de la agencia. Así mismo en las condiciones específicas de cada plan se definirá
                        la forma de pago del plan y los parámetros del reembolso a que hubiere lugar.
                        <br>
                        El organizador de los servicios turísticos y la agencia de viajes no asumen responsabilidad
                        alguna frente a los asuntos legales u otros inconvenientes en que pueda verse involucrado el
                        usuario, en caso de que el usuario se vea obligado a retirarse de la excursión por tales motivos
                        y hará frente a los gastos en que incurra.
                        El organizador, sus operadores y agentes, no asumen responsabilidad alguna por pérdida o daños
                        que sufra el equipaje o los efectos personales del Usuario durante el viaje. El equipaje y
                        cualquier otro objeto que los usuarios lleven consigo están bajo su custodia y responsabilidad.
                        <br>
                        Todos los precios publicados y tarifas presentadas en este boletín, recibo, comprobante o
                        cotización están sujetos a cambio y disponibilidad sin previo aviso. Aplican restricciones y
                        condiciones para cada tarifa publicada según su vigencia. Las tarifas hoteleras dependen de la
                        acomodación seleccionada y categoría de este.

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
                        Si el usuario desiste de viajar se le reintegrarán las sumas abonadas al precio del programa
                        debitando el porcentaje que a continuación se indica, calculado sobre el precio total del
                        servicio turístico:
                        <br>
                        <ul>
                            <li>● 30-21 días antes de la salida = 25% de gastos</li>
                            <li>● 20-15 días antes de la salida = 50% de gastos</li>
                            <li>● 14-07 días antes de la salida = 75% de gastos</li>
                            <li>● Menos de 7 días antes de la salida = 100% de gastos.</li>
                        </ul>
                        <br>
                        <span class="font-weight-bold">Nota:</span> Para servicios turísticos específicos, algunos
                        destinos eco turísticos y eventos
                        especiales aplicarán las condiciones de cada caso que serán informadas a la confirmación de los
                        servicios.
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


export default {
    props: ['id'],
    components: {
        AppLayout,
        Lightbox
    },
    created() {
        console.log(this.id)
        console.log(typeof (this.id))


        var num = this.id - 1;
        console.log(this.destinos[num].name);
        let folder = this.destinos[num].name;
        if (folder !== null) {
            axios
                .get(`/destinos/${folder}`)
                .then(response => {
                    console.log(response)
                    let lista = response.data;
                    this.images.push(`/src/destinos/null/Imagen${num + 1}.jpg`)
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
        dialog: false,
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
                <ul>
                    <li>Servicio de guía profesional de turismo.</li>
                    <li>Póliza de Seguro.</li>
                </ul>>
                `,
                que_conoceras: `
                <ul>
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
                notas: 'Las reservas se realizan con mínimo 24 horas de anticipación.'

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
                <ul>
                    <li>Transporte climatizado </li>
                    <li>Recogida en el alojamiento.</li>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Refrigerio </li>
                </ul>
                `,
                que_conoceras: `
                <ul>
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
                 <ul>
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
                <ul>
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
                <ul>
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
                title: '',
                description: "",
                horarios: '',
                tiempo: '',
                punto_encuentro: '',
                incluye: '',
                que_conoceras: '',
                notas: ''
            },
            {
                link: "#",
                src: imagen5,
                name: "alta-guajira",
                title: 'AVENTURA EN LA ALTA GUAJIRA (3 DÍAS  2 NOCHES)',
                description: `
                <div class="mb-6">
                    <h2 class="text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
                        ITINERARIO:
                    </h2>
                    <v-divider role="separator" aria-orientation="horizontal" class="primary mb-6 v-divider theme--light" style="max-width: 28px;">
                </div>
                <h2 class="text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
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
                <h2 class="my-6 text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
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

                <h2 class="my-6 text-h6 text-lg-h5 secondary--text font-weight-black text-uppercase">
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
                <ul>
                    <li>1 noche de alojamiento en el Cabo de la vela</li>
                    <li>1 noche de alojamiento en Punta Gallinas</li>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro</li>
                    <li>Transporte</li>
                    <li>Alimentación (No incluye desayuno del Día 1)</li>
                </ul>
                `,
                que_conoceras: `
                <ul>
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
                title: '',
                description: "",
                horarios: '',
                tiempo: '',
                punto_encuentro: '',
                incluye: '',
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
                <ul>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Incluye la actividad del Tubing (Descenso por el Rio en flotadores)</li>
                    <li>Almuerzo + Bebida</li>
                </ul>
                `,
                que_conoceras: `
                <ul>
                    <li>Palomino</li>
                    <li>Rio palomino </li>
                    <li>Encuentro Natural Rio & Mar </li>
                    <li>Playas de Palomino </li>
                </ul>
                `,
                notas: '',
                recomendaciones: `
                <ul>
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
                <ul>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Degustación de la comida Típica Wayuu </li>
                    <li>Shot de Chirrinchi</li>
                    <li>Yonna (Danza Wayuu)</li>
                </>ul>
                `,
                que_conoceras: `
                <ul>
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
                <ul>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte ida y vuelta</li>
                    <li>Actividad en Canoa </li>
                    <li>Almuerzo + Bebida </li>
                 </ul>
                `,
                que_conoceras: `
                <ul>
                    <li>Tour panorámico por Camarones</li>
                    <li>Santuario de Fauna y Flora Los Flamencos</li>
                    <li>Laguna navío quebrado </li>
                    <li>Playa Boca de Camarones </li>
                </ul>
                `,
                notas: '',
                recomendacion: `
                <ul>
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
                <ul>
                    <li>Servicio de guía profesional de turismo</li>
                    <li>Póliza de Seguro </li>
                    <li>Transporte </li>
                    <li>Actividad Ruta de la Sal </li>
                </ul>
                `,
                que_conoceras: `
                <ul>
                    <li>Salinas de Manaure </li>
                    <li>Plaza Principal de Manaure </li>
                </ul>`,
                notas: '',
                recomendaciones: `
                <ul>
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
