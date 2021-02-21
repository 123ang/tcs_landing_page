<template>
  <div class="container">
    <div v-for="row in allData" :key="row">
      {{ row.id }}
     1
    </div>
  </div>
</template>

<script>

import axios from 'axios'

export default {
  
  data:() =>({ 
     allData:''
    
  }),
  methods: {
    
  },
   created() {
    
      axios.post('https://ben.vmm-solution.my/php/event.php', { actions:'fetchall' }).then( response => {
        this.allData = response.data;
        console.log(this.allData);
      }).catch(function (error) {
                    console.log(error);
                });
    }
   
  
};
</script>