<template>
    <v-app>
        <v-app
            class="v-sheet v-sheet--tile theme--dark v-toolbar v-toolbar--flat v-app-bar v-app-bar--fixed transparent"
            data-booted="true"
            style="height: 64px; margin-top: 0px; transform: translateY(0px); left: 0px; right: 0px;">
            <div class="v-toolbar__content" style="height: 64px;">
                <div class="v-responsive v-image shrink" style="max-width: 50%;">
                    <div class="v-responsive__sizer" style="padding-bottom: 21.5962%;"></div>
                    <div class="v-image__image v-image__image--contain"
                         style="background-image: url(./images/eslogan.png); background-position: center center;"></div>
                    <div class="v-responsive__content" style="width: 213px;"></div>
                </div>
                <div class="spacer"></div>
                <div class="v-toolbar__items"><a href="#try-it"
                                                 class="v-btn v-btn--flat v-btn--text theme--dark v-size--default"><span
                    class="v-btn__content"> Try It </span></a></div>
            </div>
        </v-app>
        <v-main>
            <section id="home" class="pa-0">
                <v-img cover
                       :src="bg"
                       class="white--text"
                       gradient="to top right, rgba(13, 3, 29, 0.85), rgba(25, 25, 38, 0.85)"
                       style="height: 100vh;"
                >
                    <v-container class="fill-height">
                        <v-row class="pt-5 px-3 align-center">
                            <v-col cols="12" sm="3">
                                <v-img contain
                                       max-height="200px"
                                       :src="logo">
                                </v-img>
                            </v-col>
                            <v-col cols="12" sm="5" class="v-sheet theme--dark transparent" style="max-width: 500px;">
                                <h1 class="mb-4 display-2">Página en construcción</h1>

                                <p class="title font-weight-light">
                                    Estamos trabajando arduamente para culminar el desarrollo de este sitio.
                                </p>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-img>
            </section>
        </v-main>
    </v-app>
</template>

<script>
import bg from '@/../images/bg.jpg'
import logo from '@/../images/logo.png'

export default {
    name: "Welcome",
    data: () => ({
        logo: logo,
        bg: bg
    })
}
</script>

<style scoped>

</style>
