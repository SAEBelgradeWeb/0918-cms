<template>
    <div>
        Hello again!!!

        <div v-for="task in tasks">{{task.description}}</div>
    </div>
</template>
<script>
    export default  {
        data() {
          return {
              tasks: []
          }
        },
        mounted(){
            axios.get('/api/tasks').then(response => {
                this.tasks = response.data;
            })
        }
    }
</script>
