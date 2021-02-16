<template>
<div style="margin-top: -1.5em; text-align: center" class="bacg">
    <label style="
        color: white;
        font-style: italic;
        margin-top:50px;
        font-size: xx-large;
      ">
        Subscribe to get updates
    </label>

    <v-row>
        <v-col> <input class="input1 grid-item" type="text" style="margin-left: 1%; " placeholder="Your name.." /></v-col>
        <v-col> <input class="input1" type="text" style="margin-left: 1%;" placeholder="Email" /></v-col>
        <v-col><button class="button1" style="background-color: orange">Subscribe</button></v-col>
    </v-row>

</div>
</template>

<style>
button {
    color: black;
    width: auto;
    text-overflow: ellipsis;
    transition-duration: 0.4s;
}

input[type="text"] {

    width: 98%;
    height: 80%;
    padding-right: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid rgb(248, 224, 3);
    border-radius: 4px;
    transition-duration: 0.4s;
    color: white;
}

input::placeholder {
    color: yellow;
    font-size: 1.2em;
    font-style: italic;
}

.bacg {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("../assets/subscrip.webp");
    background-size: cover;
    height: 200px;
}

.input1:hover {
    background: rgba(193, 207, 218, 0.5);
    border: 1px solid rgb(255, 255, 252);
    text-overflow: ellipsis;
}

.button1 {
    width: 50%;
    height: 80%;
    margin-top:7px
}

.button1:hover {

    background: rgb(0, 2, 3);
    color: orange;
    border: 1px solid orange;
}

@media all and (max-width: 1266px) {
    h1 {
        font: (large-size) px;
    }
}


</style>
