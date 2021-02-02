<template>
  <div>
    <div class="work">
      <h1><strong> FEEDBACK FORM </strong> </h1>
    </div>
    <div style="background: #07204c;">
      <v-container>

        <form
          action="https://formsubmit.co/info@astraco.com.my"
          method="POST"
        >
          <div class="hidden-sm-and-down">
            <v-row>

              <v-col cols="4">
                <label class="lbl">Name </label>
                <v-text-field
                  flat
                  name="name"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>

              <v-col cols="4">
                <label class="lbl">Email </label>
                <v-text-field
                  flat
                  type="email"
                  name="email"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>
              <v-col cols="4">
                <label class="lbl">Phone </label>
                <v-text-field
                  flat
                  name="phone"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <label class="lbl">Message </label>
                <v-textarea
                  flat
                  name="message"
                  solo
                  class="form-control"
                ></v-textarea>
              </v-col>

              <v-col
                class="mx-auto"
                cols="auto"
              >
                <button
                  class="send-form-btn"
                  type="submit"
                >
                  SEND FORM
                </button>
              </v-col>
            </v-row>
          </div>
          <div class="hidden-md-and-up">
            <v-row>

              <v-col cols="12">
                <label class="lbl">Name </label>
                <v-text-field
                  flat
                  name="name"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>

              <v-col cols="12">
                <label class="lbl">Email </label>
                <v-text-field
                  flat
                  type="email"
                  name="email"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <label class="lbl">Phone </label>
                <v-text-field
                  flat
                  name="phone"
                  solo
                  class="form-control"
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <label class="lbl">Message </label>
                <v-textarea
                  flat
                  name="message"
                  solo
                  class="form-control"
                ></v-textarea>
              </v-col>

              <v-col
                class="mx-auto"
                cols="auto"
              >
                <button
                  class="send-form-btn"
                  type="submit"
                >
                  SEND FORM
                </button>
              </v-col>
            </v-row>
          </div>
        </form>

      </v-container>
    </div>
  </div>
</template>