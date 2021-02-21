<template>
  <div class="container">
    <div v-for="row in allData" :key="row.id">
      {{ row.id }}
     
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
        console.log(response.data);
      }).catch(function (error) {
                    console.log(error);
                });
    }
   
  
};
</script>