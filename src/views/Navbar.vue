<template>
<div class="black-color ">

    <router-link :to="{ name: 'Home' }">
        <v-img max-height="100px" contain class="center" src="../assets/tcs_logo.jpg"></v-img>
    </router-link>
    <nav class="navbar navbar-expand-lg dark hidden-sm-and-down">
        <div class="container">
            <v-row align="center" justify="center">
                <ul class="navbar-nav">
                    <li class="nav-item" :class="{active:homeActive}" @click="home_active">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item" :class="{active:aboutActive}" @click="about_active">
                        <a class="nav-link" href="/about">ABOUT TCS</a>
                    </li>
                    <li class="nav-item" :class="{active:collectionActive}" @click="collection_active">
                        <a class="nav-link" href="/our-collections">OUR COLLECTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS SHARING</a>
                    </li>
                    <li class="nav-item" :class="{active:contactActive}" @click="contact_active">
                        <a class="nav-link" href="/contact-us">CONTACT US</a>
                    </li>
                </ul>

                <v-btn class="btn" rounded small style="background-color: black;
                    color: #ffd600; border-color:
                    #ffd600;
                    margin-left:10px;
                    border-radius: 28px;
                    padding-top:5px;   
                    border: 1px solid" href="http://member.tcsjewellery.com.my/Login_m.aspx" target="_blank">MEMBER</v-btn>

                <v-btn class="btn" rounded small style="background-color: black;
                    color: #ffd600; border-color:
                    #ffd600;
                    margin-left:10px;
                    border-radius: 28px;
                    padding-top:5px;  
                    border: 1px solid" href="https://www.tcsjewellery.com.my/copy-of-contact-us" target="_blank">REGISTER</v-btn>

                <v-btn class="btn" rounded small style="background-color: black;
                    color: #ffd600; border-color:
                    #ffd600;
                    margin-left:10px;
                    border-radius: 28px;
                    padding-top:5px;    
                    border: 1px solid" href="https://tcs-ecommerce.starbartersbond.com/" target="_blank">ESHOP</v-btn>
            </v-row>
        </div>
    </nav>
    <div class="hidden-md-and-up">
        <v-app-bar-nav-icon x-large @click="drawer = !drawer" color="white" style="display: block;
                margin-left: auto;
                margin-right: auto;">
        </v-app-bar-nav-icon>

        <v-navigation-drawer v-model="drawer" fixed left style="background-color:black;  " hide-overlay>
            <br>
            <v-list nav dense style="background-color:black; ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">ABOUT TCS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/our-collections">OUR COLLECTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS SHARING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">CONTACT US</a>
                    </li>
                </ul>
                <div style="margin-left:10px">
                    <p>

                        <v-btn class="btn" rounded style="background-color: black;
                            color: #ffd600; border-color:
                            #ffd600;
                            margin-left:10px;
                            border-radius: 28px;
                            padding-top:5px;    
                            border: 1px solid" href="http://member.tcsjewellery.com.my/Login_m.aspx" target="_blank">MEMBER</v-btn>
                    </p>
                    <p>
                        <v-btn class="btn" rounded style="background-color: black;
                            color: #ffd600; border-color:
                            #ffd600;
                            margin-left:10px;
                            border-radius: 28px;
                            padding-top:5px;    
                            border: 1px solid" href="https://www.tcsjewellery.com.my/copy-of-contact-us" target="_blank">REGISTER</v-btn>
                    </p>
                    <p>

                        <v-btn class="btn" rounded style="background-color: black;
                            color: #ffd600; border-color:
                            #ffd600;
                            margin-left:10px;
                            border-radius: 28px;
                            padding-top:5px;    
                            border: 1px solid" href="https://tcs-ecommerce.starbartersbond.com/" target="_blank">ESHOP</v-btn>
                    </p>
                </div>
            </v-list>
        </v-navigation-drawer>

    </div>
</div>
</template>

<script>
export default {
    name: "Navbar",
    data() {
        return {
            drawer: false,
            homeActive: true,
            contactActive: false,
            collectionActive: false,
            aboutActive: false,
        };
    },

    methods: {
        home_active() {
            this.homeActive = true
            this.contactActive = false
            this.collectionActive = false
            this.aboutActive = false
        },
        contact_active() {
            this.homeActive = false
            this.contactActive = true
            this.collectionActive = false
            this.aboutActive = false
        },
        collection_active() {
            this.homeActive = false
            this.contactActive = false
            this.collectionActive = true
            this.aboutActive = false
        },
        about_active() {
            this.homeActive = false
            this.contactActive = false
            this.collectionActive = false
            this.aboutActive = true
        }
    },
    created() {
        if (this.$router.currentRoute.path == "/contact-us") {
            this.contact_active()
        }
        if (this.$router.currentRoute.path == "/") {
            this.home_active()
        }
        if (this.$router.currentRoute.path == "/our-collections") {
            this.collection_active()
        }
        if (this.$router.currentRoute.path == "/about") {
            this.about_active()
        }
        console.log(this.$router.currentRoute.path)

    },
    computed: {

    },

};
</script>

<style scoped>
.black-color {
    background-color: black;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;

}

.navbar-nav .nav-item .nav-link {
    color: white;
}

.navbar-nav .nav-item.active .nav-link,
.navbar-nav .nav-item:hover .nav-link {
    color: #c8c918;
}

.active {
    color: #c8c918 !important;
}
</style>
