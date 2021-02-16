<template>
  <v-app>
     <Navbar />
       <div>
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
@font-face {font-family: "DidoteTextW01-Italic";
    src: url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.eot"); /* IE9*/
    src: url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.eot?#iefix") format("embedded-opentype"), /* IE6-IE8 */
    url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.woff2") format("woff2"), /* chrome firefox */
    url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.woff") format("woff"), /* chrome firefox */
    url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.ttf") format("truetype"), /* chrome firefox opera Safari, Android, iOS 4.2+*/
    url("https://db.onlinewebfonts.com/t/16efa2896f117dae2debeb23ab4715dd.svg#DidoteTextW01-Italic") format("svg"); /* iOS 4.1- */
}
</style>