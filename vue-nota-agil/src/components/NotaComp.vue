<template>
    <div>
        <div v-if="loading">Carregando...</div>
        <div v-else>
            {{ notas }}
        </div>
    </div>
</template>

<script>
import notas from "../services/notas.js"

export default {
    name: 'NotaComp',
    data() {
        return {
            notas: {},
            loading: true
        }
    },

    methods: {
        async fetchNotas() {
            await notas.listar_notas().then(res => {
                this.notas = res.data
                this.loading = false
            }).catch(e => {
                alert(e)
            })
        }
    },

    mounted() {
        this.fetchNotas()
    },

}
</script>

<style lang="scss" scoped></style>