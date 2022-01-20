<template>
    <app-layout>
        <section id="about" style="transform-origin: center top 0px;">
            <v-row class="no-gutters">
                <v-col class="col col-12">
                    <section id="hero-alt">
                        <v-img height="225"
                               gradient="to top, rgba(5, 11, 31, 0.8), rgba(5, 11, 31, 0.8)"
                               src="https://zero-subject-pro.vuetifyjs.com/img/contact.68e57a91.jpg"
                               max-width="100%"
                               style="height: 225px; max-width: 100%;">

                            <v-row class="ma-0 fill-height text-center align-center justify-center">
                                <v-col class="col col-12">
                                    <h1
                                        class="text-h3 font-weight-500 mb-2 text-center white--text">
                                        CONTACTANOS
                                    </h1>
                                    <v-responsive class="primary mx-auto mb-6"
                                                  style="max-width: 28px;">
                                        <v-divider aria-orientation="horizontal"/>
                                    </v-responsive>

                                    <v-breadcrumbs class="justify-center pa-0 text--primary"
                                                   :items="items"
                                                   divider="/"
                                    ></v-breadcrumbs>
                                </v-col>
                            </v-row>

                        </v-img>
                    </section>
                </v-col>
            </v-row>
        </section>

        <v-sheet light class="rounded-0" style="padding: 56px 0px;">
            <v-container class="container">
                <v-row class="justify-space-between">
                    <v-col class="col-md-5 col-12">
                        <div>
                            <v-container class="container pa-0" pace="6">
                                <v-row class="no-gutters justify-start">
                                    <v-col class="col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-left">
                                            MANTENTE EN CONTACTO CON NOSOTROS
                                        </h3>
                                        <v-responsive class=" base-divider primary mr-auto mb-6"
                                                      style="max-width: 28px;">
                                            <v-divider role="separator"
                                                       aria-orientation="horizontal"
                                                       class="subject--light"/>
                                        </v-responsive>
                                        <p class="justify-text base-body text-body-1 grey--text text--darken-1 text-justify mb-6">
                                            Alma Guajira nace de la necesidad de hacer un turismo más amigable y justo
                                            para todas las partes que interactúan en la actividad turística de nuestro
                                            departamento, somos guías de turismo, nativos, conductores, agentes de
                                            viajes, artesanos, cocineros, viajeros, somos una gran familia.
                                            <br>
                                            Si desea recibir información personalizada de nuestros servicios lo
                                            invitamos a que se comunique con nosotros y con gusto le atenderemos.
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>
                            <div>
                                <div class="pt-2 mb-0 d-flex">
                                    <div class="d-inline-flex mb-3 align-self-start">
                                        <v-avatar class="transparent"
                                                  size="72"
                                        >
                                            <v-icon size="36">
                                                mdi-map-marker-outline
                                            </v-icon>
                                        </v-avatar>
                                    </div>
                                    <div class="d-flex justify-center align-center">
                                        <p class="base-body text-body-1 mx-auto grey--text text--darken-1 text-left mb-0"
                                           style="max-width: 700px;">
                                            Cra. 7H #33a-15, Riohacha, La Guajira
                                        </p>
                                    </div>
                                </div>
                                <v-divider class="my-2"></v-divider>
                                <div class="pt-2 mb-0 d-flex">
                                    <div class="base-avatar d-inline-flex mb-3 align-self-start">
                                        <!---->
                                        <v-avatar class="transparent" size="72">
                                            <v-icon size="36">
                                                mdi-cellphone
                                            </v-icon>
                                        </v-avatar>
                                    </div>

                                    <div class="d-flex flex-column justify-center align-center">
                                        <a
                                            class="base-body text-body-1 mx-auto grey--text text--darken-1 text-left mb-0"
                                            href="tel:573205011419">
                                            +57 320 5011419
                                        </a>

                                    </div>
                                </div>
                                <hr role="separator" aria-orientation="horizontal"
                                    class="my-2 v-divider subject--light">
                                <div class="pt-2 mb-0 d-flex align-center">
                                    <div class="base-avatar d-inline-flex mb-3 align-self-start">
                                        <v-avatar class="transparent" size="72">
                                            <v-icon size="36">
                                                mdi-email
                                            </v-icon>
                                        </v-avatar>
                                    </div>
                                    <div class="d-flex flex-column justify-start aling-center">
                                        <a
                                            href="mailto:raguismendoza@hotmail.com <raguismendoza@hotmail.com>"
                                            class="text-body-1 grey--text text--darken-1 mb-0">
                                            raguismendoza@hotmail.com
                                        </a>
                                        <a
                                            href="mailto:info@almaguajira.com <info@almaguajira.com>;"
                                            class="text-body-1 grey--text text--darken-1 mb-0">
                                            info@almaguajira.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </v-col>

                    <v-col class="col-md-6 col-12">
                        <div>
                            <v-container class="container pa-0" space="4">
                                <v-row class="row no-gutters justify-start">
                                    <v-col class="col col-12">
                                        <h3
                                            class="text-uppercase text-h6 font-weight-bold mb-1 text-left">
                                            ENVÍENOS SU MENSAJE
                                        </h3>
                                        <div class="v-responsive base-divider primary mr-auto mb-6"
                                             style="max-width: 28px;">
                                            <div class="v-responsive__content">
                                                <hr role="separator" aria-orientation="horizontal"
                                                    class="v-divider subject--light">
                                            </div>
                                        </div>
                                    </v-col>
                                </v-row>
                            </v-container>
                            <v-form
                                @submit.prevent="send(mail)"
                                ref="form"
                                v-model="valid"
                                :lazy-validation="false">
                                <v-text-field
                                    outlined
                                    label="Nombre"
                                    v-model="mail.name"
                                    :rules="nameRules"

                                ></v-text-field>

                                <v-text-field
                                    outlined
                                    label="Email"
                                    v-model="mail.email"
                                    :rules="emailRules"
                                ></v-text-field>

                                <v-text-field
                                    outlined
                                    label="Asunto"
                                    v-model="mail.subject"
                                    :rules="subjectRules"
                                ></v-text-field>

                                <v-textarea
                                    outlined
                                    label="Descripción del mensaje"
                                    v-model="mail.content"
                                    :rules="contentRules"
                                ></v-textarea>

                                <v-btn class="font-weight-bold accent--text" @click="send(mail)">
                                    Enviar mensaje
                                </v-btn>
                            </v-form>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </v-sheet>

        <v-sheet class="rounded-0" style="padding: 0px;width: 100%">
            <iframe width="100%" height="500" style="border: 0px; display: block;"
                    src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=es&amp;q=La%20Guajira%20colombia%20+(Alma%20Guajira)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

        </v-sheet>

        <v-overlay :value="overlay">
            <v-progress-circular indeterminate size="64"></v-progress-circular>
        </v-overlay>

        <v-snackbar v-model="snackbar">
            {{ response }}
            <v-btn
                color="pink"
                text
                @click="snackbar = false"
            >
                <v-icon>
                    mdi-close-outline
                </v-icon>
            </v-btn>
        </v-snackbar>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout
    },
    data: () => ({
        overlay: false,
        snackbar: false,
        response: "",
        items: [
            {
                text: 'INICIO',
                disabled: false,
                href: '/',
            },
            {
                text: 'CONTACTANOS',
                disabled: true,
                href: '/cotact-us',
            },
        ],
        mail: {name: "", email: "", subject: "", content: ""},
        valid: true,
        nameRules: [
            v => !!v || "El nombre es requerido",
            v =>
                (v && v.length <= 30) ||
                "El nombre no puede tener mas de 30 caracteres"
        ],
        emailRules: [
            v => !!v || "E-mail es requerido",
            v => /.+@.+\..+/.test(v) || "E-mail invalido"
        ],
        subjectRules: [
            v => !!v || "El tema es requerido",
            v =>
                (v && v.length <= 50) ||
                "El tema no puede tener mas de 50 caracteres"
        ],
        contentRules: [v => !!v || "El mensaje es requerido"],

    }),
    methods: {

        send() {

            if (!this.$refs.form.validate()) {
                return;
            } else {
                this.overlay = true;
                const newMail = this.mail;
                axios
                    .post("/send-mail", newMail)
                    .then(res => {
                        this.overlay = false;
                        this.snackbar = true;
                        this.response = "Mensaje enviado correctamente 😀";
                        this.reset();
                    })
                    .catch(res => {
                        this.snackbar = true;
                        this.response = "ha ocurrido un error en el envío del mensaje 😥";
                        this.overlay = false;
                    });
                console.log(this.mail);
            }
        },
        reset() {
            this.$refs.form.reset();
        },
        resetValidation() {
            this.$refs.form.resetValidation();
        }
    }
};
</script>
<style>
.subject--light.v-breadcrumbs .v-breadcrumbs__divider, .subject--light.v-breadcrumbs .v-breadcrumbs__item--disabled {
    color: white !important;
}

.v-skeleton-loader__image {
    height: 300px;
}
</style>
