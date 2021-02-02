<template>
  <v-app>
     <Navbar />
       <div style="height: 100%;">
      <router-view />
      </div>
     <Footer/>
  </v-app>
</template>
<script>
import Navbar from '@/views/Navbar'
import Footer from '@/views/Footer'
export default {
  name: 'App',
  components: {
      Navbar,
      Footer
  },
  data: () => ({
   
  }),

  methods: {
   
  },
};
</script>
<style>

</style>
