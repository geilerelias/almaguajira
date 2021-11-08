<template>
    <div class="mb-1">
        <v-expand-transition>
            <v-system-bar color="primary" absolute v-if="$vuetify.breakpoint.smAndUp &&flat"
                          :class="$vuetify.breakpoint.mdAndUp?'px-200':'px-6'"
                          height="30">
                <v-spacer></v-spacer>

                <div class="d-flex justify-center align-center white--text">
                    <v-btn icon text rounded href="tel:+57 320 5011419">
                        <v-img notranslate height="20" width="20" contain :src="tel" class="mr-1"></v-img>
                    </v-btn>
                    <span>Call us: <span class="font-weight-bold">+57 320 5011419</span></span>
                </div>

            </v-system-bar>
        </v-expand-transition>
        <v-app-bar
            :extended="$vuetify.breakpoint.mdAndUp && flat"
            :absolute="$vuetify.breakpoint.mdAndUp && flat"
            :app="!$vuetify.breakpoint.mdAndUp || !flat"
            clipped-left
            :class="$vuetify.breakpoint.mdAndUp && flat?'px-20 mt-7':''"
            color="white lighten-3"
        >
            <v-btn v-if="!route().current('home')" @click="back" text light fab class="mr-1 ">
                <v-icon>mdi-arrow-left</v-icon>
            </v-btn>


            <inertia-link
                :href="route('home')"
                class="d-flex align-center text-decoration-none mr-2 router-link-exact-active router-link-active"
                aria-current="page">

                <v-img max-width="50" style="max-height:50px" :spect-ratio="5/4" contain :src="logo"/>

                <v-img max-width="150" style="max-height:40px" :spect-ratio="16/9" contain :src="eslogan"/>

            </inertia-link>

            <v-spacer></v-spacer>


            <!-- Settings Dropdown -->
            <div v-if="$page.user!==null" class="text-center hidden-xs-only">
                <v-menu
                    offset-y
                    :close-on-content-click="false"
                >
                    <!--                                <template v-slot:activator="{ on, attrs }">
                                                        <v-btn text
                                                               v-bind="attrs"
                                                               v-on="on"
                                                               class="px-1 ml-2 mr-n2 rounded-pill">
                                                            <v-avatar class="transparent" size="35" v-if="$page.jetstream.managesProfilePhotos">
                                                                <v-img cover :src="$page.user.profile_photo_url" :alt="$page.user.name"></v-img>
                                                            </v-avatar>

                                                            <span
                                                                class="text-none font-weight-regular ml-3 hidden-sm-and-down text-truncate"
                                                                style="max-width: 100px;">{{ $page.user.name }}</span>
                                                            <v-icon>mdi-chevron-down</v-icon>
                                                        </v-btn>
                                                    </template> -->
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn v-if="$page.jetstream.managesProfilePhotos"
                               fab
                               dark
                               text
                               v-bind="attrs"
                               v-on="on"
                               large
                        >
                            <v-img style="max-height: 48px;max-width: 48px" class="rounded-circle" cover
                                   :src="$page.user.profile_photo_url"
                                   :alt="$page.user.name"></v-img>
                        </v-btn>
                    </template>

                    <v-card class="pa-5">
                        <v-list>
                            <v-list-item>
                                <v-list-item-avatar v-if="$page.jetstream.managesProfilePhotos">
                                    <img
                                        :src="$page.user.profile_photo_url"
                                        :alt="$page.user.name"
                                    >
                                </v-list-item-avatar>

                                <v-list-item-content>
                                    <v-list-item-title>{{ $page.user.name }}</v-list-item-title>
                                    <v-list-item-subtitle>{{ $page.user.email }}</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>

                        <v-divider></v-divider>


                        <!-- Responsive Settings Options -->
                        <v-list v-if="$page.user!==null" dense>
                            <v-subheader>Settings Options</v-subheader>
                            <v-list-item-group
                                color="primary"
                            >
                                <inertia-link :href="route('profile.show')">
                                    <v-list-item
                                        :dark="route().current('profile.show')"
                                        :class="route().current('profile.show')?'active primary  white--text':''">
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> Profile</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                                <inertia-link :href="route('api-tokens.index')"
                                              v-if="$page.jetstream.hasApiFeatures">
                                    <v-list-item
                                        :dark="route().current('api-tokens.index')"
                                        :class="route().current('api-tokens.index')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-lan</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> API Tokens</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                                <v-subheader>Manage Team</v-subheader>
                                <inertia-link :href="route('teams.show', $page.user.current_team)">
                                    <v-list-item
                                        :dark="route().current('teams.show')"
                                        :class="route().current('teams.show')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-group</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> Team Settings</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>

                                <inertia-link :href="route('teams.create')">
                                    <v-list-item
                                        :dark="route().current('teams.create')"
                                        :class="route().current('teams.create')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-multiple-plus</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title>Create New Team</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                            </v-list-item-group>
                        </v-list>

                        <div v-if="$page.user!==null" class="pt-4 pb-1 border-t border-gray-200">

                            <div class="mt-3 space-y-1">

                                <!-- Team Management -->
                                <template v-if="$page.jetstream.hasTeamFeatures">

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Switch Teams
                                    </div>

                                    <template v-for="team in $page.user.all_teams">
                                        <form @submit.prevent="switchToTeam(team)" :key="team.id">
                                            <jet-responsive-nav-link as="button">
                                                <div class="flex items-center">
                                                    <svg v-if="team.id == $page.user.current_team_id"
                                                         class="mr-2 h-5 w-5 text-green-400" fill="none"
                                                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                         stroke="currentColor" viewBox="0 0 24 24">
                                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </jet-responsive-nav-link>
                                        </form>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </v-card>
                </v-menu>
            </div>

            <div class="text-center" v-if="$page.user==null">
                <v-menu
                    :close-on-content-click="false"
                    :nudge-width="200"
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-app-bar-nav-icon
                            v-bind="attrs"
                            v-on="on"
                            class="ml-2 hidden-sm-and-down"

                        >
                        </v-app-bar-nav-icon>
                    </template>

                    <v-card>
                        <v-list>
                            <template v-if="$page.user==null">
                                <v-subheader>Authentication</v-subheader>
                                <v-divider></v-divider>
                                <v-list-item
                                    v-for="item in items"
                                    :key="item.title"
                                    :href="item.route"
                                >
                                    <v-list-item-icon>
                                        <v-icon>{{ item.icon }}</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>

                            </template>
                        </v-list>
                    </v-card>
                </v-menu>
            </div>

            <v-app-bar-nav-icon
                class="hidden-md-and-up "
                @click="drawer?setDrawer(false):setDrawer(true)"
            ></v-app-bar-nav-icon>

            <template v-if="$vuetify.breakpoint.mdAndUp && showExtendTolbar"
                      v-slot:extension>
                <v-expand-x-transition>
                    <v-container v-if="$vuetify.breakpoint.mdAndUp && showExtendTolbar"
                                 class="py-0 d-none d-md-block fill-height">
                        <v-divider color="white"></v-divider>

                        <v-toolbar-items
                            class="d-flex fill-height justify-center justify-space-arrow  text-body-2 text-lg-body-1"
                        >

                            <inertia-link v-for="item in links" :key="item.name"
                                          :href="route(item.route)"
                                          class="text-none  v-btn v-btn--text theme--light v-size--default"
                                          :class="{ 'active primary--text  font-weight-bold': route().current(item.route) && $vuetify.breakpoint.mdAndUp}"
                            >
                                {{ item.title }}
                            </inertia-link>

                        </v-toolbar-items>
                    </v-container>
                </v-expand-x-transition>
            </template>

        </v-app-bar>


        <v-btn
            v-show="fab"
            v-scroll="onScroll"
            bottom
            color="primary"
            dark
            fab
            fixed
            right
            @click="toTop"
        >
            <v-icon>mdi-chevron-up</v-icon>
        </v-btn>
    </div>
</template>

<script>
import logo from "../../images/logo-nuevo.png";
import eslogan from "../../images/eslogan-nuevo.png";

import tiktok from '@/../images/btns/tiktok.png';
import whatsapp from '@/../images/btns/whatsapp.png'
import youtube from '@/../images/btns/youtube.png'
import tel from '@/../images/btns/tel.png'
import messenger from '@/../images/btns/messenger.png'
import llamada from '@/../images/btns/llamada.png'
import instagram from '@/../images/btns/instagram.png'
import gmail from '@/../images/btns/gmail.png'
import facebook from '@/../images/btns/facebook.png'


import {mapMutations, mapState} from "vuex";

import JetApplicationMark from "@/Jetstream/ApplicationMark";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink";


export default {
    name: "Header",
    components: {
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink
    },
    props: {
        seeker: {
            type: Boolean,
            default: true
        },
        app: {
            type: Boolean,
            default: false
        }
    },
    created() {
    },
    data: () => ({
        tiktok: tiktok,
        whatsapp: whatsapp,
        youtube: youtube,
        tel: tel,
        messenger: messenger,
        llamada: llamada,
        instagram: instagram,
        gmail: gmail,
        facebook: facebook,

        topAnterior: 0,
        showExtendTolbar: true,
        fav: true,
        menu: false,
        dialog: false,
        message: false,
        hints: true,
        fab: false,
        flat: true,
        logo: logo,
        eslogan: eslogan,
        department: [],
        businesses: [],
        items: [
            {title: "Login", icon: "mdi-account-lock", route: "/login"},
            {title: "Sign Up", icon: "mdi-account-plus", route: "/register"}
        ],
        opciones: [
            {title: "Notificaciones", icon: "mdi-bell", route: ""},
            {title: "Seguidos", icon: "mdi-account-group", route: ""},
            {title: "Favoritos", icon: "mdi-heart", route: ""},
            {title: "Ubicación", icon: "mdi-map-marker", route: ""},
            {title: "Ajustes", icon: "mdi-cog", route: ""}
        ]
    }),
    computed: {
        ...mapState([
            "drawer",
            "search",
            "page",
            "color",
            "links",
            "idBusiness"
        ]),
    },
    methods: {
        ...mapMutations([
            "setDrawer",
            "setSearch",
            "setPage",
            "setIdBusiness"
        ]),
        toTop() {
            this.$vuetify.goTo(0);
        },
        onScroll(e) {
            if (typeof window === "undefined") return;
            const top = window.pageYOffset || e.target.scrollTop || 0;


            if (top > 50) {
                this.fab = true;
                this.flat = false;
               // console.log(top)
                if (top > this.topAnterior) {
                    this.topAnterior = top;
                    this.showExtendTolbar = false;
                } else {
                    this.showExtendTolbar = true;
                    this.topAnterior = top;
                }
            } else {
                this.fab = false;
                this.flat = true;
            }
        },
        switchToTeam(team) {
            this.$inertia.put(
                route("current-team.update"),
                {
                    team_id: team.id
                },
                {
                    preserveState: false
                }
            );
        },
        logout() {
            axios.post(route("logout").url()).then(response => {
                window.location = "/";
            });
        },
        back() {
            window.history.back();
            //return document.referrer;
        },

    }
};
</script>

<style>
.active {
    border-bottom: solid;
}


.px-20 {
    padding-left: 40px !important;
    padding-right: 40px !important;
}

.fade-enter-active, .fade-leave-active {
    transition: opacity .7s
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
    opacity: 0
}
</style>

