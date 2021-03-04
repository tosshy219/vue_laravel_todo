<template>
  <div class="container" >
      <div class="row justify-content-center">
        <div class="col-md-5" >
          <div class="card cloudy-knoxville-gradient " style="margin-top:20px;padding-top:10px;text-align:center;">
            <h1>TODO追加画面</h1>
          </div>
          <div class="card cloudy-knoxville-gradient" style="margin-top: 20px;padding:0 30px 10px 30px;">

            <form v-on:submit.prevent="submit">
              <input v-model="todo.text" type="text" class="card col-md-12" name="text" placeholder=" 入力してください" style="margin-top: 20px;margin-bottom:15px;padding:14px;">
              
              <button type="submit" class="btn peach-gradient col-md-12" style="margin: 15px 0 10px 0;font-size:15px;">
                追加する
              </button>

            </form>
            
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  data: function () {
      return {
          todo: {}
      }
  },
  methods: {
      submit() {
          axios.post('/api/todos', this.todo)
              .then((res) => {
                  this.$router.push({name: 'todo.list'});
              });
      }
  }
}

</script>
