<template>
<div class="black-color ">

    <router-link :to="{ name: 'Home' }" @click="home">
        <v-img max-height="100px" contain class="center" src="../assets/tcs_logo.jpg"></v-img>
    </router-link>
    <nav class="navbar navbar-expand-lg dark hidden-sm-and-down">
        <div class="container">
            <v-row align="center" justify="center">
                <ul class="navbar-nav">
                    <li class="nav-item active" v-bind:class = "{ active: isActive }">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT TCS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OUR COLLECTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS SHARING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>

                <v-btn class="btn" rounded small style="background-color: black; color: #ffd600; border-color:#ffd600;margin-left:10px" href="http://member.tcsjewellery.com.my/Login_m.aspx" target="_blank">MEMBER</v-btn>

                <v-btn class="btn" rounded small style="background-color: black; color: #ffd600; border-color:#ffd600;margin-left:10px" href="https://www.tcsjewellery.com.my/copy-of-contact-us" target="_blank">REGISTER</v-btn>

                <v-btn class="btn" rounded small style="background-color: black; color: #ffd600; border-color:#ffd600;margin-left:10px" href="http://eshop.tcsjewellery.com.my/" target="_blank">ESHOP</v-btn>
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
                    <li class="nav-item" >
                        <a class="nav-link" href="/home">HOME</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="/about">ABOUT TCS</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">OUR COLLECTIONS</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">EVENTS SHARING</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <div style="margin-left:10px">
                    <p>
                        
                        <v-btn class="btn" rounded style="background-color: black; color: #ffd600; border-color:#ffd600; margin-left:10px" href="http://member.tcsjewellery.com.my/Login_m.aspx" target="_blank">MEMBER</v-btn>
                    </p>
                    <p>
                        <v-btn class="btn" rounded style="background-color: black; color: #ffd600; border-color:#ffd600; margin-left:10px" href="https://www.tcsjewellery.com.my/copy-of-contact-us" target="_blank">REGISTER</v-btn>
                    </p>
                    <p>

                        <v-btn class="btn" rounded style="background-color: black; color: #ffd600; border-color:#ffd600; margin-left:10px" href="http://eshop.tcsjewellery.com.my/" target="_blank">ESHOP</v-btn>
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
         
        };
    },

    methods: {

    },
    created() {

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
    color: #c8c918;
}
</style>
