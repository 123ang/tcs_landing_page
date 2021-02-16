<template>
<div style="background-color:black">
    <div class="page-title">
        <h1 style="padding-top:16px;font-weight: 600 !important">{{ collection_title }}</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="collection-table" style="width: 100% ;">
                <thead>
                    <tr>
                        <th class="collection-table-head"> <a @click="diamond"> Diamond Collections </a></th>
                        <th class="collection-table-head"> <a @click="gold"> Gold Collections </a></th>
                    </tr>
                </thead>
            </table>
        </div>
        <br>
        <div>
            <v-row wrap>
                <v-col xs12 sm4 md4 v-for="(data, index) in datas" :key="index" style="margin: 10px 10px;">
                    <v-flex>
                        <v-card align="center" justify="center" width=300 height=300>

                            <div>
                                <v-img contain :src="data.link"> </v-img>
                            </div>

                        </v-card>

                    </v-flex>
                </v-col>
            </v-row>
        </div>
    </div>

</div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            datas: [],
            category: "diamond",
            collection_title: "Our Collections"
        };
    },
    methods: {
        post_data() {
            var domain = 'https://starbartersbond.com/tcs/'
            var script_name = 'get_landing_page_product.php'
            var web = domain + script_name
            axios.post(web, {
                    category: this.category
                })
                .then(response => {
                    this.datas = response.data
                    this.datas.forEach(function (data) {
                        data.link = "https://starbartersbond.com/landing_page_products/" + data.link;
                    });
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        diamond() {
            this.collection_title = "Diamond Collections"
            this.category = "diamond"
            this.post_data()
        },
        gold() {
            this.collection_title = "Gold Collections"
            this.category = "gold"
            this.post_data()
        }
    },
    created() {
        this.category = "diamond"
        this.post_data()

    },
};
</script>

<style>
.collection-table>thead {
    color: rgb(218, 165, 32);
    border-color: rgb(218, 165, 32) !important;
    border-top-color: rgb(218, 165, 32) !important;
    border-bottom-color: rgb(218, 165, 32) !important;
    border-left-color: rgb(218, 165, 32) !important;
    border-right-color: rgb(218, 165, 32) !important;
}

.collection-table-head {
    width: 50%;
    border: 2px solid rgb(218, 165, 32);
    padding: 0.75rem;
    vertical-align: top;
}

.collection-table-head:hover {
    background-color: rgb(218, 165, 32);
    color: black;
}
</style>
