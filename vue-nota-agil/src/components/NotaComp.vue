<template>
    <div>
        {{ notas }}
    </div>
</template>

<script>
// import notas from "../services/notas.js"
export default {
    name: 'NotaComp',
    data() {
        return {
            notas: {},
        }
    },

    mounted() {
        // notas.listar_notas().then(res=>{
        //     this.notas = res
        // })
        // chamando a action
        this.$store.dispatch('fetchNotas');
        // chamando o store
        this.notas = this.$store.state.notas;
    },

}
</script>

<style lang="scss" scoped></style>