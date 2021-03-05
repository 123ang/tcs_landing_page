<template>
  <div container class="w3-container" style="width: 100%">
    <div style="position: relative">
      <p
        class="hh"
        style="
          background-color: rgb(255, 214, 0);
          font-size: 42px;
          text-align: center;
          font-family: didot-w01-italic, serif;
        "
      >
        events sharing
      </p>
    </div>
<v-container style="max-width:100%;background-color:black;margin-top: -20px;">
      <v-row container wrap v-bind="index" v-for="(item, index) in listTemp" :key="index">
        <v-flex xs12 sm4 md4 p-4 v-for="(cell, i) in item" :key="i">
          <v-card  style="height: 100%;width:100%;" >
            <div container style="height: auto">
              <v-img
                container
                style="width: 100%; height: 100%; object-fit: cover"
                v-bind:src="cell.PathPic"
              />
            </div>
            <div container style="margin-bottom: 0%">
              <b>{{ cell.author }}</b>
              <br />
              <router-link
                class="kk"
                style="text-decoration: none"
                :to="{
                  path: '/eventconten',
                  query: { arry: cell },
                }"
              >
                {{ cell.title }}</router-link
              >
            </div>
          </v-card>
        </v-flex>
      </v-row>
    
</v-container>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "event",
  data: () => ({
    allData: "",
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
        .then((response) => (this.allData = response.data))
        .catch((error) => {
          this.errorMessage = error.message;
          console.error("There was an error!", error);
        });
    },
    func: function () {
      var SchoolId = 0;
      window.location.href = "school_info.aspx?edit_school=true&school=" + SchoolId;
    },
  },
  created: function () {
    console.log(this.allData);
    this.featchAllData();
  },
};
</script>

<style>
.kk:hover {
  color: orange;
  text-decoration: none;
}
</style>
