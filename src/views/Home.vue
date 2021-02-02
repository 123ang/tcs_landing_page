<template>
  <div class="home">
    <section>
      <div>
        <v-img src="../assets/background1.jpg">
          <h1
            class="company-name hidden-sm-and-down font_3"
            style="font-size: 12px; color: white; margin-right: 500px"
          >
            Live Gold Price (per gram) :
          </h1>
          <div
            class="iframeDiv"
            style="font-size: 100px; color: white; margin-left: 300px; "
          >
            <iframe
              class="iframe"
              style="width: 70%;height:8%;background-color:orange;border:3px white solid;position: absolute;"
              title="Table Master"
              aria-label="Table Master"
              scrolling="no"
              src="https://wix-visual-data.appspot.com/app/widget?pageId=qlpgt&amp;compId=comp-k9i01vug&amp;viewerCompId=comp-k9i01vug&amp;siteRevision=226&amp;viewMode=site&amp;deviceType=desktop&amp;locale=en&amp;tz=Asia%2FKuala_Lumpur&amp;width=979&amp;height=77&amp;instance=o1iD_9tT0rHIXau_rRtcqrrXCE3-excvZgNa_PggWWg.eyJpbnN0YW5jZUlkIjoiMzVhZjQ0NjMtM2NmZi00ZWFkLWEzMWEtNjM2MjlkMTk0MDk3IiwiYXBwRGVmSWQiOiIxMzQxMzlmMy1mMmEwLTJjMmMtNjkzYy1lZDIyMTY1Y2ZkODQiLCJtZXRhU2l0ZUlkIjoiNWNiZGJkMmItYWQwMi00Mjc1LWFlMjEtMjdlNjdjYzA4MGJmIiwic2lnbkRhdGUiOiIyMDIxLTAyLTAxVDA1OjQyOjA1LjQzMVoiLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6ImFmNWI1ZDE4LWNiOTEtNDNjYi05NzAxLTJiY2FmOGI4ZTZmOCIsImJpVG9rZW4iOiI2OTEyZjk0OC05MWZkLTBjZDgtMGQzYi00NDg0ZTFkOWMwMjgiLCJzaXRlT3duZXJJZCI6ImQ1NDg2MWZmLTIzMDEtNDA2Yi04MzY2LTgxZjVlOTQ5Yzk4OSJ9&amp;currency=MYR&amp;currentCurrency=MYR&amp;vsi=1ef378fc-8a81-439e-a6dd-3eba69981231&amp;commonConfig=%7B%22brand%22%3A%22wix%22%2C%22bsi%22%3A%2290224106-b24c-4bee-98f5-0014c712856d%7C1%22%2C%22BSI%22%3A%2290224106-b24c-4bee-98f5-0014c712856d%7C1%22%7D"
              allowfullscreen=""
              allowtransparency="true"
              frameborder="0"
              allow="autoplay;camera;microphone;geolocation;vr"
            >
            </iframe>
          </div>
          <h1
            class="company-name hidden-sm-and-down font_3"
            style="
              font-size: 46px;
              color: white;
              font_family: NewsGothicBTW01-Italic;
              font-weight: bold;
            "
          >
            The most shiniest Diamond in the world
          </h1>
          <span class="hidden-md-and-up">
            <br /><br /><br />
            <h1 style="color: rgb(10, 29, 65)">ASTRACO GROUP OF COMPANIES</h1>
          </span>
        </v-img>
      </div>
    </section>
    <section id="company-id">
      <div>
        <v-img height="300px" src="../assets/background2.jpg">
          <v-card height="100%" color="rgb(0, 0, 0, 0.6)" align="center" justify="center">
            <h4 class="company">
              <br /><br />
              <p class="company-p">ASTRACO FREIGHT FORWARDERS SDN. BHD. (143986-X)</p>
              <p class="company-p">ASTRACO LOGISTICS SDN. BHD (489740-D)</p>
              <p class="company-p">A.F.F SDN. BHD.</p>
            </h4>
            <br />
            <h2 class="company">REVOLUTIONIZING LOGISTICS IN THE NEW</h2>
            <br />
            <v-btn
              class="down-op-7"
              color="grey darken-2"
              fab
              medium
              dark
              @click="$vuetify.goTo('#about-us')"
            >
              <v-icon
                style="-webkit-animation: downarrow 0.6s infinite alternate ease-in-out"
              >
                mdi-arrow-down</v-icon
              >
            </v-btn>
          </v-card>
        </v-img>
      </div>
    </section>
  </div>
</template>

<script>
import { mdiMenuDown, mdiArrowUp } from "@mdi/js";

export default {
  name: "Home",
  data: () => ({
    icons: {
      mdiMenuDown,
      mdiArrowUp,
    },
    fab: false,
  }),
  methods: {
    onScroll(e) {
      if (typeof window === "undefined") return;
      const top = window.pageYOffset || e.target.scrollTop || 0;
      this.fab = top > 20;
    },
    toTop() {
      this.$vuetify.goTo(0);
    },
  },
  created() {},
};
</script>

<style>
.scroll-top-btn {
  height: 60px !important;
  width: 50px !important;
  opacity: 0.5;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgba(0, 0, 0, 0.2);
  height: 60px;
  width: 60px;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #07204c;
}
.foot-text {
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 0.9rem;
  font-style: normal;
  line-height: 1.6;
  word-break: break-word;
  font-weight: 300;
  color: white;
  margin-top: 20px;
  margin-bottom: 20px;
}
#route {
}
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;

  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black !important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: small;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #f1f1f1;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.flip-card-back a {
  color: #07204c;
  text-decoration: none;
}
.flip-card-back a:visited {
  color: black;
}
.send-form-btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  margin: 0.4rem 0;
  position: relative;
  border-radius: 0;
  background: none;
  border-color: white;
  color: #ffffff;
  font-weight: 500;
  font-style: normal;
  letter-spacing: 1px;
  white-space: normal;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  word-break: break-word;
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 0.9rem;
  -webkit-appearance: none;
  line-height: 1;
  border: 2px solid;
  padding: 20px 40px;
}
.lbl {
  color: #ffffff;
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1.1rem;
  display: inline-block;
  touch-action: manipulation;
}
.office-title {
  color: #07204c;
  font-weight: 500;
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1.1rem;
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}
.log-company {
  color: #767676;
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1.1rem;
  font-style: normal;
  line-height: 1.6;
}
.map-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
.mapouter {
  position: relative;
  text-align: center;
  height: 500px;
  width: 700px;
}
.gmap_canvas {
  overflow: hidden;
  background: none !important;
  height: 500px;
  width: 700px;
}
.work-black {
  color: black;
}
.work-btn {
  display: flex;
  align-items: center;
  justify-content: center;
}
.work-title {
  font-family: "Ubuntu Condensed", sans-serif;
  font-size: 2.2rem;
}
.work-p {
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1rem;
}
.work-text {
  color: white;
  text-align: left;
}
.flip-card {
  width: 300px;
  height: 300px;
  text-align: center;
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: white;
  color: #07204c;
  transform: rotateY(180deg);
  padding: 5rem;
  font-size: 10px;
}
.work {
  background: #07204c;
  color: white;
  text-align: center;
  font-family: "Ubuntu Condensed", sans-serif;
  font-size: 1.5rem;
  padding-top: 5%;
  padding-bottom: 5%;
}
.service-title {
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1rem;
  margin: 0;
  padding: 2rem 2rem 0 2rem;
}
.service-text {
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 0.9rem;
  padding-bottom: 2rem;
  color: white;
}
.about-title {
  font-family: "Ubuntu Condensed", sans-serif;
  font-size: 2.8rem;
}
.about-p {
  color: #767676;
  font-family: "PT Sans Narrow", sans-serif;
  font-size: 1.1rem;
}
.down-op-7 {
  opacity: 0.7;
}
.company-name {
  text-align: center;
  margin-top: 15%;
  font-size: calc(60px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
}
.company {
  text-align: center;
  color: white;
}
.company-p {
  line-height: 1;
}

.service-img {
  padding: 1rem 20rem 5rem 5rem;
  background: #07204c;
  margin-top: 1rem;
  height: 20%;
}
.other-service-img {
  padding: 2rem 12rem 5rem 4rem;
  margin-top: 1rem;
  height: 20%;
}

@-webkit-keyframes downarrow {
  0% {
    -webkit-transform: translateY(0);
    opacity: 0.8;
  }
  100% {
    -webkit-transform: translateY(0.1em);
    opacity: 0.9;
  }
}
</style>
