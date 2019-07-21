<template>
  <div class="hello">
   <h3>This is coming from Vue, axios, API</h3>
    <ul>
      <li v-for="task in tasks">
        <span v-if="task.completed == 1">
        <strike>{{task.description}}</strike>
        </span>
        <span v-if="task.completed != 1">
        {{task.description}}
        </span>
      </li>
    </ul>
  </div>


</template>

<script>
export default {
  props: [],
  data() {
    return {
     tasks: []
    }
  },
  mounted() {
    axios.get('/api/tasks').then(resource => {
      this.tasks = resource.data;
    });
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
h3 {
  margin: 40px 0 0;
}
a {
  color: #42b983;
}
</style>
