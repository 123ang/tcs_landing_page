<template>
  <div contain style="margin-top: -1.5em; height: auto" class="bacg">
    <h1
      contain
      style="
        color: white;
        font-style: italic;
        margin-bottom: 2.67em;
        margin-top: 0.6em;
        height: auto;
      "
    >
      Subscribe to get updates
    </h1>
    <div style="height: auto;">
      <input
        class="input1"
        type="text"
        style="margin-left: 5%; width: auto; position: relative"
        placeholder="Your name.."
      />
      <input
        class="input1"
        type="text"
        style="margin-left: 1%; max-width: 550%;  position: relative"
        placeholder="Email"
      />
      <button contain class="button1">Subscribe</button>
    </div>
  </div>
</template>

<style>
button {
  background-color: orange;
  margin-left: 10px;
  color: black;
  padding: 12px 20px;
  width: 20%;
  position: relative;
  width: auto;
  transition-duration: 0.4s;
}
input[type="text"],
select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid rgb(248, 224, 3);
  border-radius: 4px;
  transition-duration: 0.4s;
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
}
.input1:hover {
  background: rgba(193, 207, 218, 0.5);
  border: 1px solid rgb(255, 255, 252);
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