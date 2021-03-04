<template>
  <div class="w3-container" style="width: 100%">
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
        <v-card elevation="9">
          <v-img contain v-bind:src="cell.PathPic"> </v-img>
          <div>
            <span
              ><b>{{ cell.author }}</b></span
            >
          </div>
          <p class="text-align: center;">{{ cell.title }}</p>
        </v-card>
      </v-flex>
    </v-row>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "event",
  data: () => ({
    allData: '',
  }),
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
  methods: {
          featchAllData: function () {
            axios
              .post("https://ben.vmm-solution.my/php/event.php", { actions: "fetchall" })
              .then(response => this.allData = response.data).catch(error => {
            this.errorMessage = error.message;
            console.error("There was an error!", error);
          })},
  },
  created: function () {
    console.log(this.allData);
    this.featchAllData();
  }
}
</script>
