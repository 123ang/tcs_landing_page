<template>
  <div class="container">
<<<<<<< HEAD
    <div  v-for="row in allData" :key="row" >
      <v-container style="max-width: 1000px; ">
        <v-row wrap >
          <v-flex xs12 sm4 md4 p-4 style="margin:0px auto">
            <div >
              
              <v-card
                align="center"
                justify="center"
                max-width="300"
                class="card"
              ><p class="text-align: center;">{{ row.title }}</p>
                <v-img contain v-bind:src="row.PathPic"> </v-img>
                 <img src="" >
              </v-card>
            </div>
          </v-flex>
        </v-row>
      </v-container>
=======
    <div v-for="row in allData" :key="row.id">
      {{ row.id }}
     
>>>>>>> 25da330b6fed15ffdd058f5c6e93c7123eb2dc0e
    </div>
  </div>
</template>
<style>

</style>
<script>
import axios from "axios";

export default {
  data: () => ({
    allData: "",
  }),
  methods: {},
  created() {
    axios
      .post("https://ben.vmm-solution.my/php/event.php", {
        actions: "fetchall",
      })
      .then((response) => {
        this.allData = response.data;
<<<<<<< HEAD
        console.log(this.allData);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
=======
        console.log(response.data);
      }).catch(function (error) {
                    console.log(error);
                });
    }
   
  
>>>>>>> 25da330b6fed15ffdd058f5c6e93c7123eb2dc0e
};
</script>