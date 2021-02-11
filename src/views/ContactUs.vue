<template>
<div>
    <div class="page-title">
        <h1 style="padding-top:16px;font-weight: 600 !important">Contact Us</h1>
    </div>

    <v-row style="background-color:black">
        <v-col md="6" xs="12" sm="12">
            <div class="container" id="tcs-detail">
                <p class="line-height-10 gold-words"> <b>TCS JEWELLERY (TCS SIGNATURE SDN BHD)</b></p>
                <p class="line-height-10 gold-words"> <b>(1229137-D)</b></p>
                <br>
                <p class="line-height-10">Lot No. AP-001,Ground Floor,The Place@One City,</p>
                <p class="line-height-10">Jalan USJ 25/1A, 47650 Subang Jaya, Selangor</p>
                <p class="line-height-10">Malaysia</p>
                <br>
                <p class="line-height-10">Telephone: +60 11 6548 1718</p>
                <br>
                <p class="line-height-10">Email:
                    <span style="text-decoration:underline">
                        <a href="mailto:marketing@tcsjewellery.com.my" target="_self">
                            marketing@tcsjewellery.com.my
                        </a>
                    </span>
                </p>
                <br>
                <v-row>
                    <div style="grid-area: 1 / 1 / 2 / 2;">
                        <a href="https://www.facebook.com/tcsjewellery/" target="_blank">
                            <v-img contain src="../assets/fb logo.webp" height="29px" width="29px"> </v-img>
                        </a>
                    </div>
                    <div style="grid-area: 1 / 2 / 2 / 3; margin-left:15px">
                        <a href="https://www.instagram.com/tcsjewellery/" target="_blank">
                            <v-img contain src="../assets/instagram logo.webp" height="29px" width="29px">
                            </v-img>
                        </a>

                    </div>

                </v-row>
            </div>
        </v-col>
        <v-col md="6" xs="12" sm="12">
            <v-container>

                <form action="https://formsubmit.co/marketing@tcsjewellery.com.my" method="POST">
                    <v-row>
                        <v-col cols="12">
                            <v-text-field flat label="Name*" name="name" solo class="form-control"></v-text-field>
                        </v-col>

                        <v-col cols="12">
                            <v-text-field flat label="Email*" type="email" name="email" solo class="form-control"></v-text-field>
                        </v-col>

                        <v-col cols="12">
                            <v-text-field flat label="Phone*" name="phone" solo class="form-control"></v-text-field>
                        </v-col>

                        <v-col cols="12">
                            <v-textarea flat label="Message*" name="message" solo class="form-control"></v-textarea>
                        </v-col>

                        <v-col class="mx-auto" cols="auto" style="margin-top:120px">
                            <v-btn color="primary" x-large type="submit">
                                Submit
                            </v-btn>
                        </v-col>
                    </v-row>
                </form>

            </v-container>
        </v-col>
    </v-row>

    <div class="info-windows" style="background-color:black">
        <gmap-map ref="mymap" :center="startLocation" :zoom="14" id="map">

            <gmap-info-window :options="infoOptions" :position="infoPosition" :opened="infoOpened">
                <b>{{infoContent}} </b>
            </gmap-info-window>

            <gmap-marker v-for="(item, key) in coordinates" :key="key" :position="getPosition(item)" :clickable="true" @click="toggleInfo(item, key)" />

        </gmap-map>
    </div>
</div>
</template>

<script>
export default {
    data: () => ({
        startLocation: {
            lat: 3.021284392737847,
            lng: 101.58065839965025
        },
        coordinates: [{
            full_name: 'TCS Jewellery (TCS Signature Sdn Bhd)',
            lat: '3.021284392737847',
            lng: '101.58065839965025'
        }],
        infoPosition: { lat: 3.021284392737847, lng: 101.58065839965025 },
        infoContent: 'TCS Jewellery (TCS Signature Sdn Bhd)',
        infoOpened: true,
        infoCurrentKey: null,
        infoOptions: {
            pixelOffset: {
                width: 0,
                height: -35
            }
        },
    }),

    methods: {
        getPosition: function (marker) {
            return {
                lat: parseFloat(marker.lat),
                lng: parseFloat(marker.lng)
            }
        },
        toggleInfo: function (marker, key) {
            this.infoPosition = this.getPosition(marker)
            this.infoContent = marker.full_name
            if (this.infoCurrentKey == key) {
                this.infoOpened = !this.infoOpened
            } else {
                this.infoOpened = true
                this.infoCurrentKey = key
            }
        }
    }

}
</script> 

<style>
#map {
    height: 500px;
    background: grey;
    width: 100%;
}

.page-title {
    font-weight: 700;
    font-size: 42px;
    font-family: "DidoteTextW01-Italic", serif;
    text-align: center;
    background-color: rgb(255, 214, 0);
    height: 76px;
}

#tcs-detail {
    position: relative;
    left: 72px;
    justify-self: start;
    align-self: start;
    overflow-wrap: break-word;
    text-align: start;
    background-color: rgb(0, 0, 0);
    color: white;
    line-height: 15px;
}

.line-height-10 {
    line-height: 10px
}

.gold-words {
    color: rgb(255, 214, 0)
}

@media only screen and (min-width: 1300px) {
    .line-height-10 {
        line-height: 20px;
        font-size: 14px;
    }

}

@media only screen and (max-width: 900px) {
    #tcs-detail {
        position: relative;
        justify-self: start;
        align-self: start;
        overflow-wrap: break-word;
        text-align: start;
        background-color: rgb(0, 0, 0);
        color: white;
        line-height: 18px;
    }

    .line-height-10 {
        line-height: 15px;
        font-size: 10px;
    }

}
</style>
