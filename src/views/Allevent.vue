<template>
  <div class="container">
    
    <div class="panel-body">
      
      <table class="table table-bordered">
        
          <tr v-for="row in allData" :key="row">
            <td>{{row.title}}</td>
             <td>123</td>
          </tr>
        
      </table>
    </div>
  </div>
</template>

<script>

import axios from 'axios'

export default {
  name: "event",
  components: {},
  data() {
    return {
      allData: "",
    };
  },
  methods: {
    fetchAllData: function () {
      axios.post("event.php", { actions:'fetchall' }).then(function (response) {
        this.allData = response.data;
      });
    }
  }
};
</script>