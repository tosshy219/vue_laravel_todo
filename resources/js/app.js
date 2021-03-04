

require('./bootstrap');

window.Vue = require('vue').default;


import VueRouter from 'vue-router';
import NavComponent from "./components/NavComponent";
import TaskListComponent from "./components/TaskListComponent";
import TaskCreateComponent from "./components/TaskCreateComponent";
import TaskEditComponent from "./components/TaskEditComponent";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-component', NavComponent);
// ↑home.blade.phpに直接埋め込んでるからこれが必要

// ↓こいつらはrouterで画面出してるからこの記述は必要ない
// Vue.component('tasklist-component', TaskListComponent);
// Vue.component('taskcreate-component', TaskCreateComponent);


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'todo.list',
            component: TaskListComponent
        },
        {
            path: '/todos/create',
            name: 'todo.create',
            component: TaskCreateComponent
        },
        {
            path: '/todos/:todoId/edit',
            name: 'todo.edit',
            component: TaskEditComponent,
            // ↓これがないとデータ渡せない
            props: true
        },
    ]
});

const app = new Vue({
    el: '#app',
    router
});
