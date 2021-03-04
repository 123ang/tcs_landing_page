<template>
<<<<<<< HEAD
  <table style="background-color: black">
    <p
      style="
        background-color: rgb(255, 214, 0);
        font-size: 42px;
        text-align: center;
        font-family: didot-w01-italic, serif;
      "
    >
      events sharing
    </p>
    <v-row wrap v-bind="index" v-for="(item, index) in listTemp" :key="index">
      <v-flex xs12 sm4 md4 p-4 v-for="(cell, i) in item" :key="i">
        <v-card elevation="9" style="relative">
          <v-img contain v-bind:src="cell.PathPic"> </v-img>
          <div >
            <span
              ><b>{{ cell.author }}</b></span
            >
          </div>
          <p class="text-align: center;">{{ cell.title }}</p>
        </v-card>
      </v-flex>
    </v-row>
  </table>

  <div class="container">

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
=======    <div v-for="row in allData" :key="row.id">
      {{ row.id }}
     

    </div>
  </div>
>>>>>>> parent of 536c90b... Update Allevent.vue
</template>
<style>
</style>
<script>
import axios from "axios";

export default {
  name: "event",
  data: () => ({
    allData: "",
  }),
  methods: {},
  computed: {
    listTemp: function () {
      var list = this.allData;
      var arrTemp = [];
      var index = 0;
      var sectionCount = 3;
      for (var i = 0; i < list.length; i++) {
        index = parseInt(i / sectionCount);
        if (arrTemp.length <= index) {
          arrTemp.push([]);
        }
        arrTemp[index].push(list[i]);
      }
      return arrTemp;
    },
  },
  created() {
    axios
      .post("https://ben.vmm-solution.my/php/event.php", {
        actions: "fetchall",
      })
      .then((response) => {
        this.allData = response.data;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> parent of 536c90b... Update Allevent.vue
        console.log(this.allData);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
<<<<<<< HEAD
=======
=======
        console.log(response.data);
      }).catch(function (error) {
                    console.log(error);
                });
    }
   
  
>>>>>>> 25da330b6fed15ffdd058f5c6e93c7123eb2dc0e
>>>>>>> parent of 536c90b... Update Allevent.vue
};
</script>