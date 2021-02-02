<template>
  <div>
    <v-img src="../assets/background3.jpg">
      <v-card
        :min-height="'calc(100vh - ' + $vuetify.application.top + 'px)'"
        height='100%'
        color="rgb(0, 0, 0, 0.6)"
        align="center"
        justify="center"
      >
        <v-container>
          <v-row>
            <v-col></v-col>
            <v-col>
              <v-card
                align="center"
                justify="center"
                max-width=400
                style="background: linear-gradient(#07204c, transparent);"
              >

                <div style="background:#07204c"> <br><br>
                  <v-img
                    class="service-img"
                    contain
                    src="../assets/mbri-delivery.svg"
                  > </v-img>
                </div>
                <div>
                  <h2
                    class="service-title"
                    style="color:white;background:#07204c"
                  >TOTAL LOGISTICS </h2>
                </div>
                <div class="service-text">
                  <br> <br>
                  <p><strong>1. </strong> Forwarding operational for both inbound &#38; outbound. Daily 2 trips attend to Kastam Malaysia. </p>
                  <p><strong>2. </strong> Dedicated haulage tracking hotline. F.O.C. "1 Tier Stack" arrangement at Container Yards. </p>
                  <p><strong>3. </strong> Enjoying comprehensive service contract rates. Multi service schedule to comply production planning.</p>
                  <p><strong>4. </strong> Specialist in marine insurance coverage. In house system provided by our partner - MSIG.</p>
                  <p><strong>5. </strong> Warehouse handling and solutions at multiple locations in Malaysia.</p>
                  <p><strong>6. </strong> Online near instant insurance coverage.</p>
                  <p><strong>7. </strong> Integrated shipping software by ProdigyNet.</p>
                  <p><strong>8. </strong> We are fully covered by E&#38;O and Liability Insurance.</p>
                  <br><br>
                </div>
              </v-card>
            </v-col>
            <v-col></v-col>
          </v-row>

          <v-row wrap>
            <v-flex
              xs12
              sm4
              md4
            >
              <v-card
                align="center"
                justify="center"
                max-width=250
                style="background: linear-gradient(#07204c, transparent);"
              >

                <div>
                  <br>
                  <v-img
                    class="other-service-img"
                    contain
                    src="../assets/mbri-update.svg"
                  > </v-img>
                </div>
                <div>
                  <h3
                    class="service-title"
                    style="color:white;"
                  >PROJECT CARGO HANDLING </h3>
                </div>
                <br><br><br><br><br>
              </v-card>
            </v-flex>
            <v-flex
              xs12
              sm4
              md4
            >
              <v-card
                align="center"
                justify="center"
                max-width=250
                style="background: linear-gradient(#07204c, transparent);"
              >

                <div>
                  <br>
                  <v-img
                    class="other-service-img"
                    contain
                    src="../assets/mbri-shopping-basket.svg"
                  > </v-img>
                </div>
                <div>
                  <h3
                    class="service-title"
                    style="color:white;"
                  >PACKING SERVICES </h3>
                </div>
                <br><br><br><br><br>
              </v-card>
            </v-flex>
            <v-flex
              xs12
              sm4
              md4
            >
              <v-card
                align="center"
                justify="center"
                max-width=250
                style="background: linear-gradient(#07204c, transparent);"
              >

                <div>
                  <br>
                  <v-img
                    class="other-service-img"
                    contain
                    src="../assets/mbri-home.svg"
                  > </v-img>
                </div>
                <div>
                  <h3
                    class="service-title"
                    style="color:white;"
                  >BONDED / GENERAL WAREHOUSES </h3>
                </div>
                <br><br><br><br><br>
              </v-card>
            </v-flex>
          </v-row>
        </v-container>
      </v-card>
    </v-img>
  </div>
</template>
<style >
</style>