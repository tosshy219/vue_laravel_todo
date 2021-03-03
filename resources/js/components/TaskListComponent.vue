<template>
  <div class="container" >
    <div class="row justify-content-center">
      <div class="col-md-5" >
        <div class="card cloudy-knoxville-gradient " style="margin-top:20px;padding-top:10px;text-align:center;">
          <h1>TODOリスト</h1>
        </div>
        <div class="card cloudy-knoxville-gradient" style="margin-top: 20px;padding:0 30px 10px 30px;">

          
          <!-- for文でtodoを一つ一つ表示 -->
          <router-link v-for="todo in todos" :key=todo.id v-bind:to="{name: 'todo.edit',params:{todoId:todo.id}}" class="card hoverable" style="margin-top: 10px;padding:5px 10px 5px 10px;color:black;">
            <div class="d-flex justify-content-between">
              <span style="line-height: 45px;">{{todo.text}}</span>
              <!-- このpreventがないと親要素のeditへ遷移するのが発動してしまう -->
              <button v-on:click.prevent="deleteTodo(todo.id)" class="btn btn-light btn-sm" type="submit">消去</button>
            </div>
          </router-link>

          <router-link v-bind:to="{name: 'todo.create'}" class="btn peach-gradient" style="margin: 15px 0 10px 0;font-size:15px;">
            追加する
          </router-link>
          
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      todos: []
    }
  },
  methods: {
    getTodos() {
      axios.get('/api/todos')
          .then((res) => {
            this.todos = res.data;
          });
      },
    deleteTodo(id) {
      axios.delete('/api/todos/' + id)
            .then((res) => {
                this.getTodos();
            });
    }
  },
  mounted() {
    this.getTodos();
  }
}
</script>
