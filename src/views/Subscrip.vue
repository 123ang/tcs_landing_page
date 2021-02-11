<template>
<div style="margin-top: -1.5em;">
    <v-img contain class="center" src="../assets/subscrip.webp">
        <div class="container">
            <h1 style="color:white;font-style:italic;margin-bottom: 1.67em;margin-top: 1.67em;">Subscribe to get updates</h1>
            <div>
                <input type="text" style="margin-left:10px" placeholder="Your name..">
                <input type="text" style="margin-left:10px" placeholder="Email">
                <button style="background-color:yellow; 
                                    margin-left:10px; 
                                    color:black; 
                                    padding: 12px 20px;
                                    width: 20%;">
                    Subscribe
                </button>
            </div>
        </div>
    </v-img>

</div>
</template>

<style>
input[type=text],
select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid rgb(248, 224, 3);
    border-radius: 4px;

    color: white;

}

input::placeholder {
    color: yellow;
    font-size: 1.2em;
    font-style: italic;
}
</style>
