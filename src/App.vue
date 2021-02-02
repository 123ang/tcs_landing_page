<template>
  <div>
    <v-app>
      <v-app-bar class="hidden-sm-and-down" app flat color="black" height="100spx">
        <div class="mx-auto" style="height: 80px">
          <v-img
            max-height="80"
            max-width="80"
            src="./assets/logo1.jpg"
            @click="$vuetify.goTo('#hero')"
          ></v-img>
        </div>

        <div>
          <v-toolbar-title>
            <span class="md-toolbar-row"> </span>
            <div style="position: absolute; right: 15%; text-transform: capitalize">
              <v-btn
                class="white--text"
                text
                style="text-transform: capitalize"
                color="write"
                height="40px"
                @click="$vuetify.goTo('#about-us')"
                >HOME</v-btn
              >

              <v-btn
                class="white--text"
                text
                style="text-transform: capitalize"
                color="write"
                height="40px"
                @click="$vuetify.goTo('#about-us')"
                >ABOUT TCS</v-btn
              >

              <div class="dropdown">
                <v-btn
                  class="white--text"
                  text
                  style="text-transform: capitalize"
                  color="write"
                  height="40px"
                  @click="$vuetify.goTo('#our-work')"
                  >OUR COLLECTIONS <v-icon>{{ icons.mdiMenuDown }}</v-icon>
                </v-btn>
                <div class="dropdown-content">
                  <a @click="$vuetify.goTo('#work1')">Sea Freight Services</a>
                  <a @click="$vuetify.goTo('#work2')">Air Freight Services</a>
                  <a @click="$vuetify.goTo('#work3')">Tracking &#38; Haulage Services</a>
                  <a @click="$vuetify.goTo('#work4')">Warehouse &#38; Distribution</a>
                  <a @click="$vuetify.goTo('#work5')">Fumigation Services</a>
                  <a @click="$vuetify.goTo('#work6')">Dangerous / Hazardous Cargo</a>
                </div>
              </div>
              <v-btn
                class="white--text"
                text
                style="text-transform: capitalize"
                color="write"
                height="40px"
                @click="$vuetify.goTo('#services')"
                >EVENTS SHARING</v-btn
              >

              <v-btn
                class="white--text"
                text
                color="write"
                height="40px"
                style="text-transform: capitalize"
                @click="$vuetify.goTo('#contact')"
                >CONTACT US</v-btn
              >

              <v-btn
                class="btn"
                rounded
                style="background-color: black; color: #ffd600"
                @click="$vuetify.goTo('#contact')"
                >MEMBER</v-btn
              >

              <v-btn
                class="btn"
                rounded
                style="background-color: black; color: #ffd600; left: 10px;"
                @click="$vuetify.goTo('#contact')"
                >REGISTER</v-btn
              >

              <v-btn
                class="btn"
                rounded
                style="background-color: black; color: #ffd600; left: 20px;"
                @click="$vuetify.goTo('#contact')"
                >ESHOP</v-btn
              >

            </div>
          </v-toolbar-title>
        </div>
      </v-app-bar>

      <v-app-bar class="hidden-md-and-up" app flat color="white" height="70">
        <v-toolbar color="white" height="70" flat>
          <v-img
            style="margin-left: -90px"
            contain
            max-height="60px"
            max-width="200px"
            src="./assets/logo1.jpg"
            @click="$vuetify.goTo('#hero')"
          ></v-img>
          <v-app-bar-nav-icon
            x-large
            @click="drawer = !drawer"
            color="write"
            style="position: absolute; right: 5%"
          ></v-app-bar-nav-icon>
        </v-toolbar>
        <v-navigation-drawer
          v-model="drawer"
          color="white "
          absolute
          temporary
          width="100%"
          :height="navHeight"
        >
          <v-toolbar color="white" height="70" flat>
            <v-img
              style="margin-left: -58px"
              contain
              max-height="60px"
              max-width="200px"
              src="./assets/logo1.jpg"
              @click="$vuetify.goTo('#hero')"
            ></v-img>

            <v-icon
              x-large
              style="position: absolute; right: 7%"
              @click="drawer = !drawer"
              color="black"
            >
              {{ icons.mdiClose }}</v-icon
            >
          </v-toolbar>
          <v-list style="text-align: center">
            <v-btn
              text
              style="text-transform: capitalize"
              color="yellow"
              v-on:click.prevent="closeNav()"
              height="40px"
              @click="$vuetify.goTo('#about-us')"
              >About Us</v-btn
            >
            <br />
            <v-btn
              text
              style="text-transform: capitalize"
              color="white"
              v-on:click.prevent="closeNav()"
              height="40px"
              @click="$vuetify.goTo('#services')"
              >Services</v-btn
            >
            <br />
            <div class="dropdown">
              <v-btn
                white--text
                outlined
                style="text-transform: capitalize"
                color="white"
                height="40px"
                v-on:click.prevent="toggleDrop()"
                >Our Work <v-icon>{{ icons.mdiMenuDown }}</v-icon>
              </v-btn>

              <v-card flat v-if="drop" class="dropdown-content">
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work1')"
                  >Sea Freight Services</a
                >
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work2')"
                  >Air Freight Services</a
                >
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work3')"
                  >Tracking &#38; Haulage Services</a
                >
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work4')"
                  >Warehouse &#38; Distribution</a
                >
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work5')"
                  >Fumigation Services</a
                >
                <a v-on:click.prevent="closeNav()" @click="$vuetify.goTo('#work6')"
                  >Dangerous / Hazardous Cargo</a
                >
              </v-card>
            </div>
            <br />
            <v-btn
              text
              outlined
              v-on:click.prevent="closeNav()"
              color="white"
              height="40px"
              style="
                background-color: rgb(10, 29, 65);
                text-transform: capitalize;
                margin-top: 0px;
              "
              @click="$vuetify.goTo('#contact')"
              >Contact Us</v-btn
            >

            <v-btn class="black white-text">aa</v-btn>
          </v-list>
        </v-navigation-drawer>
      </v-app-bar>

      <v-content id="content-wrap">
        <Home id="hero" />
        <About id="about-us" />
        <Services id="services" />
        <OurWork id="our-work" />
        <ContactUs id="contact" />
        <Feedback id="feedback" />
        <v-btn
          v-scroll="onScroll"
          v-show="fab"
          class="scroll-top-btn"
          fixed
          bottom
          right
          dark
          color="rgba(0, 0, 0, 0.2);"
          @click="toTop"
        >
          <v-icon>{{ icons.mdiArrowUp }}</v-icon>
        </v-btn>
      </v-content>
      <v-footer class="justify-center" color="#292929">
        <div class="foot-text">
          &copy; Copyright {{ new Date().getFullYear() }} Astraco Logistics Sdn. Bhd. All
          Rights Reserved.
        </div>
      </v-footer>
    </v-app>
  </div>
</template>
<script>
import { mdiMenuDown, mdiArrowUp, mdiClose } from "@mdi/js";
import Home from "./views/Home";
import About from "./views/About";
import ContactUs from "./views/ContactUs";
import Feedback from "./views/Feedback";
import OurWork from "./views/OurWork";
import Services from "./views/Services";
export default {
  components: { Home, About, ContactUs, Feedback, OurWork, Services },
  data: () => ({
    drawer: false,
    icons: {
      mdiMenuDown,
      mdiClose,
      mdiArrowUp,
    },
    drop: false,
    navHeight: "250px",
    fab: false,
  }),

  methods: {
    toggleDrop() {
      if (this.drop == true) {
        this.navHeight = "250px";
        this.drop = false;
      } else if (this.drop == false) {
        this.navHeight = "520px";
        this.drop = true;
      }
    },
    closeNav() {
      this.drawer = false;
      this.drop = false;
      this.navHeight = "250px";
    },
    onScroll(e) {
      if (typeof window === "undefined") return;
      const top = window.pageYOffset || e.target.scrollTop || 0;
      this.fab = top > 20;
    },
    toTop() {
      this.$vuetify.goTo(0);
    },
  },
};
</script>
<style>
.btn {
  border: 1px solid #ffd600;
  background-color: black;
  color: #ffd600;
  font-size: 10px;
  width: 106px;
  height: 30px;
  cursor: pointer;
}
</style>
