<template>
<div style="background-color:black">

    <div class="container">
        <v-parallax :height="$vuetify.breakpoint.smAndDown ? 680 : 600" src="../assets/jewel_bg.webp">
            <span class="italic-word">Live Gold Price (per gram) : </span>
            <table  class="hidden-sm-and-down GoldTable">
                <thead>
                    <tr>
                        <th>Type of Gold</th>
                        <th>24K</th>
                        <th>22k</th>
                        <th>21K</th>
                        <th>18K</th>
                        <th>14K</th>
                        <th>Premium Item</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rate</td>
                        <td>RM 290.00</td>
                        <td>RM 275.00</td>
                        <td>RM 255.00</td>
                        <td>RM 185.00</td>
                        <td>RM 140.00</td>
                        <td>RM 295.00</td>
                    </tr>
                </tbody>
            </table>
            <table class="hidden-md-and-up GoldTable" style="margin-top:400px">
                <thead>
                    <tr>
                        <th>Type of Gold</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rate</td>
                    </tr>
                </tbody>
            </table>
            <table class="hidden-md-and-up GoldTable">
               
                
                    <tr>
                        <td>24K</td>
                        <td class="phone-gold-price">RM 290.00</td>
                    </tr>
                     <tr>
                        <td>22K</td>
                        <td class="phone-gold-price">RM 279.00</td>
                    </tr>
                     <tr>
                        <td>21K</td>
                        <td class="phone-gold-price">RM 255.00</td>
                    </tr>
                     <tr>
                        <td>18K</td>
                        <td class="phone-gold-price">RM 225.00</td>
                    </tr>
                     <tr>
                        <td>14K</td>
                        <td class="phone-gold-price">RM 185.00</td>
                    </tr>
                     <tr>
                        <td>10K</td>
                        <td class="phone-gold-price">RM 140.00</td>
                    </tr>
                     <tr>
                        <td>Premium Item</td>
                        <td class="phone-gold-price">RM 295.00</td>
                    </tr>
                
            </table>
            <div class="hidden-md-and-up GoldTable">
<br><br><br>         <br><br><br><br>
                </div>
   
            <div class="diamond-word">
                <span>The most shiniest Diamond in the world</span>
                <br><br><br>
            </div>
            <div class="exclusive-word">
                <h2>The only 91 Facets Diamond Cut in Malaysia</h2>

                <h2>Excluseively available at TCS Signature</h2>
            </div>
            <br><br><br>
        </v-parallax>
    </div>
    <br><br>
    <v-container>
        <v-row wrap>
            <v-flex xs12 sm4 md4 p-4>
                <v-card align="center" justify="center" max-width=300 class="card">
                    <v-img contain src="../assets/HariRayaPromo.webp"> </v-img>
                </v-card>
            </v-flex>
            <v-flex xs12 sm4 md4 p-4>
                <v-card align="center" justify="center" max-width=300 class="card">
                    <v-img contain src="../assets/Gold_08.webp"> </v-img>
                </v-card>
            </v-flex>
            <v-flex xs12 sm4 md4 p-4>
                <v-card align="center" justify="center" max-width=300 class="card">
                    <v-img contain src="../assets/ring_17_2.webp"> </v-img>
                </v-card>
            </v-flex>
        </v-row>
    </v-container>
    <br><br><br>

    <v-img :height="$vuetify.breakpoint.smAndDown ? 1000 : 800" src="../assets/bling.jpg">
        <v-container>
            <div class="diamond-word">
                <br><br>
                <span style="color:black">About TCS</span>
                <br><br>

            </div>

            <div class="margin-20">
                <p class="black-color-words">
                    At TCS, we’re dedicated to bring you the crème de la crème of modern day jewelries. </p>
               <p class="black-color-words"> As the exclusive sole distributor of one of the world’s most renowned brand, Perten; </p>
                 <p class="black-color-words">  we take pride in introducing the shiniest diamond in the world,
                    the first and </p>
                     <p class="black-color-words">only 
              diamond with 71 facets cut diamond that features a perfect 10 Hearts & 10 Arrows. </p>

                <br><br>

                <p class="black-color-words" >This jewelry marvel was made possible with a trademarked cutting edge technologies </p>
                <p class="black-color-words" > and excellent craftsmanship. As a mark of excellence, each of the </p>

                <p class="black-color-words" >diamonds are engraved with a unique serial code and is </p>
                <p class="black-color-words" > GemEx Certified for its Brilliance, Fire and Sparkle,</p>
                <p class="black-color-words" >Only 0.02% of these handpicked diamond by experts make the final cut.</p>
                <v-img src="../assets/aboutus-2.png" height="200px" width="200px" style="margin-left:700px;
                 padding-top:200px;
                 top: -115px;
                 left: -40px; 
                 margin-bottom: -140px;"></v-img>

            </div>

            <div style="text-align:center; margin-bottom:500px">
                <v-btn class="btn" rounded large style="background-color: black; color: #ffd600; border-color:#ffd600;"> Details >> </v-btn>
            </div>
        </v-container>
    </v-img>

</div>
</template>

<script>
export default {

    name: "Home",
    data() {
        return {

        }
    },
    methods: {

    },

    computed: {

    },
    created() {

    }

};
</script>

<style>
.italic-word {
    font-style: italic;
    font-size: 16px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}

.black-color-words {
    color: black;
    letter-spacing: 0.1em;
    line-height: 1em;
    text-align: justify;
}

.GoldTable {
    width: 100%;
    margin: 0px;
    border-radius: 0px;
    border-top-width: 0px;

    border-color: #FFFFFF;
    border-collapse: separate;
    border-spacing: 0;
    border-top-style: solid;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.GoldTable>table,
th,
td {
    border: 1px solid white;
    text-align: center;
}

.GoldTable>thead {
    font: normal normal normal proxima-n-w01-reg, sans-serif;
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;

}

.GoldTable>thead>tr>th {
    color: #FFFFFF;
    background-color: #000000;
    background-image: none;
    vertical-align: top;
}
.phone-gold-price {
    color: #000000;
    background-color: #FFCB05;
   
}

.GoldTable>tbody>tr {
    color: #000000;
    background-color: #FFCB05;
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}

.diamond-word {
    text-align: center;
    font-size: 46px;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: transparent;
    font-weight: 700;
    color: #FFFFFF;
    text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;
    line-height: normal;
    letter-spacing: normal;
    overflow-wrap: break-word;
    font-family: didot-w01-italic, serif;
    font-style: italic;
}

.exclusive-word {
    text-align: center;

    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: transparent;
    font-weight: bold;
    color: #FFFFFF;
    text-shadow: rgb(0 0 0 / 40%) 0px 4px 5px;
    line-height: 1.5em;
    letter-spacing: 0.1em;
    overflow-wrap: break-word;
}
@media only screen and (min-width: 1300px) {
.margin-20{
  margin-left:20%
}
}
</style>
