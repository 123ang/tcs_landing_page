<template>
  <v-app>
     <Navbar />
       <div style="height: 100%;">
      <router-view />
      </div>
      <Subscrip/>
     <Footer/>
     
  </v-app>
</template>
<script>
import Navbar from '@/views/Navbar'
import Footer from '@/views/Footer'
import Subscrip from '@/views/Subscrip'
export default {
  name: 'App',
  components: {
      Navbar,
      Footer,
      Subscrip
  },
  data: () => ({
   
  }),

  methods: {
   
  },
};
</script>
<style>

</style>
