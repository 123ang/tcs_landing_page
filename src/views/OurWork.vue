<template>

  <div style="background: #07204c">
    <div class="work">
      <h1><strong> Our Work </strong> </h1>
    </div>

    <div style="text-align:center;margin-left:13%;margin-right:10%">
      <v-row wrap>
        <v-flex
          xs12
          sm4
          md4
        >
          <div
            class="flip-card"
            @click="$vuetify.goTo('#work1')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work1.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1> Sea Freight Services </h1>
              </div>
            </div>
          </div>
        </v-flex>
        <v-flex
          xs12
          sm4
          md4
        >

          <div
            class="flip-card"
            @click="$vuetify.goTo('#work2')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work2.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1> Air Freight Services </h1>
              </div>
            </div>
          </div>

        </v-flex>
        <v-flex
          xs12
          sm4
          md4
        >

          <div
            class="flip-card"
            @click="$vuetify.goTo('#work3')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work3.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1>Tracking &#38; Haulage Services</h1>
              </div>
            </div>
          </div>

        </v-flex>
        <v-flex
          xs12
          sm4
          md4
        >
          <div
            class="flip-card"
            @click="$vuetify.goTo('#work4')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work4.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1>Warehouse &#38; Distribution </h1>
              </div>
            </div>
          </div>

        </v-flex>
        <v-flex
          xs12
          sm4
          md4
        >
          <div
            class="flip-card"
            @click="$vuetify.goTo('#work5')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work5.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1>Fumigation Services</h1>
              </div>
            </div>
          </div>

        </v-flex>
        <v-flex
          xs12
          sm4
          md4
        >

          <div
            class="flip-card"
            @click="$vuetify.goTo('#work6')"
          >
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img
                  src="../assets/work6.jpg"
                  alt="Avatar"
                  style="width:300px;height:280px;"
                >
              </div>
              <div
                style="width:300px;height:280px;"
                class="flip-card-back"
              >
                <h1>Dangerous / Hazardous Cargo </h1>
              </div>
            </div>
          </div>

        </v-flex>
      </v-row>
    </div>

   
    <section id="work1">
      <v-img
        max-height="800"
        src="../assets/work1.jpg"
      >
        <v-card
          height='100%'
          color="rgb(7, 32, 76, 0.8)"
          align="center"
          justify="center"
        >
          <br><br>
          <v-container>
            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title"> Sea Freight Services </h1>
                <br>
                <h3 class="work-p">
                  <p><strong>1.</strong> We specialize in providing worldwide import &#38; export. </p>
                  <p><strong>2.</strong> We provide LCL (Less Container Load) and FCL (Full Container Load) of general cargo and dangerous cargo.</p>
                  <p><strong>3.</strong> Handling Dangerous &#38; Hazardous Cargo / Conventional / Breakbulk / Over Dimension / Flat Rack / Open Top / Reefer Container.</p>
                  <p><strong>4.</strong> As agent for Custom Broker / Forwarding Custom Consultant.</p>
                  <p><strong>5.</strong> Packing / Warehousing &#38; Distribution / Transhipment / Fumigation / CPC / Marine Insurance.</p>
                  <p><strong>6.</strong> Total Logistics Services / Door to Door Service.</p> <br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>
 
    <section id="work2">
      <v-img
        max-height="500"
        src="../assets/work2.jpg"
      >
        <v-card
          height='100%'
          color="rgb(255, 255, 255, 0.8)"
          align="center"
          justify="center"
        >
          <v-container> <br><br>

            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title work-black"> Air Freight Services </h1>
                <br>
                <h3 class="work-p work-black">
                  <p><strong>1.</strong> We provide worldwide import and export for air freight services. </p>
                  <p><strong>2.</strong> Custom Broker / Forwarding Services / Custom Consultancy Services.</p>
                  <p><strong>3.</strong> Packing / Warehousing & Distribution / Fumigation / Marine Insurance.</p>
                  <p><strong>4.</strong> Total Logisitcs Services / Door to Door Service.</p> <br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>
    <section id="work3">
      <v-img
        max-height="700"
        src="../assets/work3.jpg"
      >
        <v-card
          height='100%'
          color="rgb(7, 32, 76, 0.8)"
          align="center"
          justify="center"
        >
          <v-container> <br><br>
            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title">Trucking &#38; Haulage Services </h1>
                <br>
                <h3 class="work-p">
                  <p>Trucking is one of the important processes in the supply chain. This services enables us to support customer requirement and efficiency attended.
                    Here we offer excellent delivery and monitoring services to all the importers and exporters, which will facilitate the entire delivery or collection process without any delay.</p>
                  <p>• Trucking.</p>
                  <p>• Haulage.</p>
                  <p>• Side Loader.</p>
                  <p>• Low Loader.</p>
                  <p>• Crane.</p>
                  <p>• Heavy Equipment Supply &#38; Support. </p> <br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>
    <section id="work4">
      <v-img
        max-height="600"
        src="../assets/work4.jpg"
      >
        <v-card
          height='100%'
          color="rgb(255, 255, 255, 0.8)"
          align="center"
          justify="center"
        >
          <v-container> <br><br>
            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title work-black"> Warehousing &#38; Distribution</h1>
                <br>
                <h3 class="work-p work-black">
                  <p> We also provide complete warehousing solution to our customers. This facilities offer both general storage and bonded storage. With a strong warehousing strategies and distribution are important in reducing your problem in handling, inventory, warehousing and ensure cost-efficient.
                    <br />We have an experience team of people who handle the warehousing, transportation to pick up and distribution.Our distribution solutions ensure your cargoes arrive in the right place, at the right time and the right price.</p> <br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>
    <section id="work5"> <br><br>
      <v-img
        max-height="800"
        src="../assets/work5.jpg"
      >
        <v-card
          height='100%'
          color="rgb(7, 32, 76, 0.8)"
          align="center"
          justify="center"
        >
          <v-container>
            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title">Trucking &#38; Fumigation Services </h1>
                <br>
                <h3 class="work-p">
                  <p>Container fumigation is the treatment of a commodity or the container itself to eliminate the risk of pests or disease from entering or leaving the country.
                    Fumigation provides an effective results and to protect your business from preventing or curing pest infestations.<br />
                    Shipping container fumigation is cital to rid cargo of pests before the container reaches its final destination.
                    Ridding cargoes of insects and their eggs prevents infestation when the cargo reaches its doorstep such as factories, warehouse, shop
                    or end users. Another reason why shipping container fumigation is necessary, it is to stop cross borders contamintation of pests and
                    to prevent the spreads of disease and other contamination. </p> <br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>
    <section id="work6"> <br><br>
      <v-img
        max-height="800"
        src="../assets/work6.jpg"
      >
        <v-card
          height='100%'
          color="rgb(255, 255, 255, 0.8)"
          align="center"
          justify="center"
        >
          <v-container>
            <v-row wrap>
              <v-flex
                xs12
                sm4
                md4
                class="work-btn"
              >
                <v-btn
                  text
                  style="text-transform: capitalize;    
                  background-color: #07204c;
                  border-color: #07204c;"
                  color="white"
                  @click="$vuetify.goTo('#our-work')"
                >Back to our work
                </v-btn>
              </v-flex>

              <v-flex
                xs12
                sm4
                md4
                style="padding-left:5px"
                class="work-text"
              >
                <h1 class="work-title work-black"> Dangerous / Hazardous Cargo</h1>
                <br>
                <h3 class="work-p work-black">
                  <p> Dangerous / Hazardous Cargo are often known as hazardous materials which may be pure chemicals. mixtures of substances, manufactured product or items wich can pose a risk to people, animals, infrastructures, environment if not well handle in use or in trasnportation. <br />
                    Due to it hazardous nature, dangerous shipments are regulated under stringent rules and regulation throughout the entire process of transportation.
                    Therefore, our team of dedicated professionals are providing strategic solutions for safety handling and shipping of the dangerous cargo.</p> <br><br><br>
                </h3>
              </v-flex>
            </v-row>
          </v-container>
        </v-card>
      </v-img>
    </section>

  </div>
</template>