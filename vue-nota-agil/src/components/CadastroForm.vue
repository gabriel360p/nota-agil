<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sml-1"></div>
            <div class="col-lg-6 col-sml-10">

                <form @submit.prevent="cadastro()">

                    <div class="mb-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" v-model="user.name" class="form-control" id="" aria-describedby="helpId"
                            placeholder="Insira seu nome">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" v-model="user.email" class="form-control" id="" aria-describedby="helpId"
                            placeholder="Insira seu email">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Senha</label>
                        <input type="password" v-model="user.password" class="form-control" id="" aria-describedby="helpId"
                            placeholder="Insira sua senha">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Confirmar Senha</label>
                        <input type="password" v-model="user.password_confirmation" class="form-control" id="" aria-describedby="helpId"
                            placeholder="Repita sua senha">
                    </div>

                    <button class="btn btn-success">Salvar</button>
                </form>
            </div>
            <div class="col-lg-3 col-sml-1"></div>
        </div>
    </div>
</template>


<script>
export default {
    name: 'CadastroForm',
    methods: {
        cadastro() {

        }
    },
    data() {
        return {
            user: {
                name: '',
                password: '',
                email: '',
                password_confirmation: '',
            }
        }
    },
}
</script>

<style lang="scss" scoped></style>