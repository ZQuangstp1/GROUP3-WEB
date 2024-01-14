const TodoInput = {
  props: ['modelValue'],
  template: `
    <div>
      <input type="text" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" @keyup.enter="$emit('add')">
      <button @click="$emit('add')">Thêm</button>
    </div>
  `,
};

const TodoList = {
  props: ['todos'],
  template: `
    <ul>
      <li v-for="todo in todos" :key="todo.id">
        <input type="checkbox" v-model="todo.completed">
        {{ todo.text }}
        <button @click="$emit('remove', todo.id)">Xóa</button>
      </li>
    </ul>
  `,
};

const app = Vue.createApp({
  data() {
    return {
      newTodo: '',
      todos: [
        { id: 1, text: 'Học Vue.js', completed: false },
        { id: 2, text: 'Xây dựng ứng dụng Vue', completed: true },
        { id: 3, text: 'Master các thành phần Vue', completed: false },
      ],
    };
  },
  methods: {
    addTodo() {
      if (this.newTodo.trim() !== '') {
        this.todos.push({
          id: Date.now(),
          text: this.newTodo,
          completed: false,
        });
        this.newTodo = '';
      }
    },
    removeTodo(todoId) {
      this.todos = this.todos.filter(todo => todo.id !== todoId);
    },
  },
});

app.component('todo-input', TodoInput);
app.component('todo-list', TodoList);

app.mount('#app');
