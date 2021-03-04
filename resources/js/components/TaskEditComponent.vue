<template>
  <div class="container" >
      <div class="row justify-content-center">
        <div class="col-md-5" >
          <div class="card cloudy-knoxville-gradient " style="margin-top:20px;padding-top:10px;text-align:center;">
            <h1>TODO変更画面</h1>
          </div>
          <div class="card cloudy-knoxville-gradient" style="margin-top: 20px;padding:0 30px 10px 30px;">

            <form action="" method="post">
              <input type="text" class="card col-md-12" name="text" placeholder=" 入力してください" style="margin-top: 20px;margin-bottom:15px;padding:14px;" v-model="todo.text">
              <!-- ↑v:bindでvalueにTaskListComponentから送られてきたデータを表示してる -->

              <button href="" class="btn peach-gradient col-md-12" style="margin: 15px 0 10px 0;font-size:15px;">
                変更する
              </button>

            </form>
            
          </div>
        </div>
      </div>
  </div>
</template>

<script>
  export default {
    props: {
        todoId: String
    },
    data: function () {
        return {
            todo: {}
        }
    },
    methods: {
        getTodo() {
            axios.get('/api/todos/' + this.todoId)
                .then((res) => {
                    this.todo = res.data;
                });
        }
    },
    mounted() {
        this.getTodo();
    }
  }
</script>