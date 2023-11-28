<template>
    <div class="container container-app card">
        <TodoIncludeForm/>
        <div v-for="task of tasks" :key="task.id">
            <TodoItem :task="task" />
        </div>
    </div>
</template>

<script>

import TodoItem from './TodoItem/TodoItem.vue'
import TodoIncludeForm from '../TodoIncludeForm/TodoIncludeForm.vue'

export default {
    components: { TodoItem, TodoIncludeForm },
    computed: {
        tasks() {
            return this.$store.state.todo.tasks
        }
    }
}

</script>
