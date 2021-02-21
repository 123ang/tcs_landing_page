<template>
  <div class="container">
    qwe
    <div class="panel-body">
      <p>asdas</p>
      <table class="table table-bordered">
        <th>
          <tr>
            <div>123</div>
          </tr>
        </th>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "event",
    components: {
      
    },
  data() {
    return {
      allData: "",
    };
  },
  methods: {
    fetchAllData: function () {
      axios.post("event.php", { event: "fetchall" }).then(function (response) {
       application.allData = response.data;
      });
    },
  },
};
</script>