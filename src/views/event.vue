<template>
  <div class="even1">
    <span
      style="font-family: didot-w01-italic, serif; top: 10%; position: relative"
      >Events Sharing</span
    >

    <div class="picFram container">
      <div>
        <table class="my-table">
          <tr>
            <td>
              <div class="polaroid">
                <img src="../assets/even1.webp" />
                <div class="container">
                  <p style="background: white; font-size: 20px">Cinque Terre</p>
                </div>
              </div>
            </td>
            <td>
              <div class="polaroid">
                <img src="../assets/even1.webp" />
                <div class="container">
                  <p style="background: white; font-size: 20px">Cinque Terre</p>
                </div>
              </div>
            </td>
            <td>
              <div class="polaroid">
                <img src="../assets/even1.webp" />
                <div class="container">
                  <p style="background: white; font-size: 20px">Cinque Terre</p>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>

<style>

td {
    border: 1px solid #000;
}

tr td:last-child {
    width: 1%;
    white-space: nowrap;
}

img {
  width: 250px;
  height: 250px;
}
div.container {
  text-align: center;
  padding: 10px 20px;
}
div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

.my-table {
  table-layout: auto !important;
  width: auto;
}
.picFram {
  position: relative;
  top: 10%;
  margin: auto;
  width: 100%;
  padding: 10px;
}
.even1 {
  position: relative;
  background-image: url("../assets/event.webp");
  width: auto;
  height: 100%;
  max-height: 900px;
  height: 800px;
  text-align: center;
  font-size: 50pt;
  background-size: 100% 100%;
}
</style>