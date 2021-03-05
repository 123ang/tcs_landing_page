<template>
  <div>
    <v-card container style="height: 100%">
      <div container style="height: auto">
        <v-img
          container
          style="width: 50%; height: 50%; object-fit: cover"
          v-bind:src="cell.PathPic"
        />
      </div>
      <div container style="margin-bottom: 0%">
        <b>{{ cell.author }}</b>
        <br />
        <p>{{ cell.title }}</p>
        <br />
        <p>{{cell.content}}</p>
      </div>
    </v-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cell: [],
    };
  },
  created() {
    //这边接收上个组件传递过来的arry数组，赋值给data中定义的workTask
    this.cell = this.$route.query.arry;
  },
};
</script>
