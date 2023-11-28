<template>
    <button :class="!task.has_done ? 'btn btn-success btn-sm' : 'btn btn-light btn-sm'" @click="makeDone()"><i :class="task.has_done ? 'fas fa-cancel' : 'fas fa-check'"></i></button>
</template>

<script>

export default {
    props: ['task'],
    methods: {
         async makeDone() {
              await this.$store.commit('todo/makeDone', this.task);
              this.ToastrSuccess('Tarefa concluida com sucesso')
         },
    }
}
</script>