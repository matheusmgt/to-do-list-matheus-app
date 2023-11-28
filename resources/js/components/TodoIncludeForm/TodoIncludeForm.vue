<template>
    <div class="form-group row container-include-task bg-primary" data-bs-theme="dark">
        <div class="col-lg-10 col-md-12 col-sm-12 center-vertically">
            <input style="color: #fff;" maxlength="100" v-model="this.data.description" type="text" class="form-control"
                id="tarefa_input" placeholder="Informe sua tarefa!" autocomplete="off">
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12  center-vertically">
            <button @click="salvar()" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-plus"></i> INCLUIR
                TAREFA</button>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            data: {
                description: '',
                has_done: false
            }
        }
    },
    methods: {
        async salvar() {
            let validated = this.validation();

            if(validated) {
                this.ToastrError(validated)
                return;
            }

            await this.$store.commit('todo/store', this.data);
            this.ToastrSuccess('Tarefa incluida com sucesso!');
            this.clearForm();
        },
        validation() {
            if(this.data.description.length < 5) return 'A descrição da tarefa, necessita ser maior que 5 caracteres!'
        },
        clearForm() {
            this.data.description = '';
        }
    }
}
</script>

