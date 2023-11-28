<template>
     <button class="btn btn-danger btn-sm" @click="apagar()"><i class="fa-solid fa-trash"></i></button>
</template>

<script>

import Swal from 'sweetalert2'

export default {
     props: ['task'],
     methods: {
          async apagar() {
               Swal.fire({
                    title: "Atenção!",
                    text: "Deseja apagar esta tarefa?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "green",
                    cancelButtonColor: "red",
                    confirmButtonText: 'Confirmar',
                    cancelButtonText: 'Cancelar'
               }).then(async response=> {
                    if (response.isConfirmed) {
                         await this.$store.commit('todo/destroy', this.task.id);
                         this.ToastrSuccess('Tarefa deletada com sucesso!')
                    }
               });
          },
     }
}
</script>