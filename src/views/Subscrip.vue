<template>
  <div style="margin-top: -1.5em" class="bacg">
    <label
      style="
        color: white;
        font-style: italic;
        margin-top:50px;
        font-size: xx-large;
      "
    >
      Subscribe to get updates
    </label>

    
      <table class="hidden-sm-and-down eventable">
        <thead>
          <tr>
            <th>
              <input
                class="input1 grid-item"
                type="text"
                style="margin-left: 1%;"
                placeholder="Your name.."
              />
            </th>
            <th>
              <input
                class="input1"
                type="text"
                style="margin-left: 1%;"
                placeholder="Email"
              />
            </th>
            <th>
              <button class="button1">Subscribe</button>
            </th>
          </tr>
        </thead>
      </table>
    </div>
  
</template>

<style>

button {
  background-color: orange;
  color: black;
  width: auto;
  text-overflow: ellipsis;
  transition-duration: 0.4s;
}
input[type="text"] {
  
  width:98%;
  height: 80%;
  padding-right:10px;
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
  height: 200px;
}
.input1:hover {
  background: rgba(193, 207, 218, 0.5);
  border: 1px solid rgb(255, 255, 252);
  text-overflow: ellipsis;
}
.button1{
  width: 98%;
  height: 80%;
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
.eventable {
  width: 100%;
  outline: none;
}
.eventable>table, th, td {
      height: 50px; 
      width:auto ; 
        
}
</style>