<template>
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
        console.log(this.allData);
      })
      .catch(function (error) {
        console.log(error);
      });
  },
};
</script>