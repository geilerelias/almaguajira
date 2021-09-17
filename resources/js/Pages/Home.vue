<template>
    <app-layout>
        <v-img :src="bg1" style="height: 70vh;"
               gradient="to top, rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0.75)">

            <div class="container container--fluid fill-height px-12">
                <div align-center="" class="row">
                    <div class="col" style="transform-origin: center top 0px;"><h1
                        class="text-uppercase font-weight-bold mb-4 display-3"> Hi, I'm Michael George </h1>
                        <div class="mb-4 display-2 font-weight-light"> I am a Software Engineer</div>
                        <div class="v-responsive mb-5" style="max-width: 600px;">
                            <div class="v-responsive__content"> Vivamus elementum semper nisi. Maecenas malesuada.
                                Donec sodales sagittis magna. Proin faucibus arcu quis ante. Vivamus quis mi.
                            </div>
                        </div>
                        <button type="button"
                                class="px-5 v-btn v-btn--contained theme--light v-size--large primary"><span
                            class="v-btn__content"> Hire Me </span></button>
                    </div>
                </div>
            </div>
        </v-img>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import bg1 from '@/../images/bg1.jpg'

export default {
    components: {
        AppLayout
    },
    data: () => ({
        bg1: bg1
    })
};
</script>
<style>
</style>
