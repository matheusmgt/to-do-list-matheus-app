<template>
    <div :class="'row card-item-task ' + (task.has_done ? 'bg-success text-white' : 'bg-light' ) ">
        <div class="col-lg-1 center-vertically container-buttons-management">
            <TodoDoneButton   v-if="!task.disabled" :task="task" />
            <TodoEditButton   v-if="!task.has_done" :salvar="this.salvar()" :task="task" />
            <TodoDeleteButton v-if="!task.disabled && !task.has_done" :task="task" /> 
        </div>
        <div class="col-lg-11">
            <input :disabled="!task.disabled" :class="'form-control form ' + (!task.disabled && task.has_done ? 'disabled-input' : 'enabled-input')" v-model="this.taskSelected.description" />
        </div>
    </div>
</template>

<script>

import TodoDeleteButton from './TodoDeleteButton.vue'
import TodoEditButton from './TodoEditButton.vue'
import TodoDoneButton from './TodoDoneButton.vue'

export default {
    props: ['task'],
    components: { TodoDeleteButton, TodoEditButton, TodoDoneButton },
    data() { return {} },
    methods: {
        async salvar() {
            await this.$store.commit('todo/update', this.taskSelected);
        }
    },
    created() {
        this.taskSelected = this.task
    }
}

</script>

