<template>
    <button :class="!task.disabled ? 'btn btn-warning btn-sm' : 'btn btn-success btn-sm'" @click="enableToChange()"><i :class="!task.disabled ? 'fa-regular fa-pen-to-square' : 'fa-solid fa-check'"></i></button>
</template>

<script>

export default {
    props: ['task'],
    emits: ['salvar'],
    methods: {
         async enableToChange() {
              if(this.task.disabled) {
                this.$emit('salvar');
                this.ToastrSuccess('Tarefa alterada com successo')
              }
              await this.$store.commit('todo/enableToChange', this.task);
         },
    }
}
</script>