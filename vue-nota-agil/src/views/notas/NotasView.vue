<template>
    <div>
        <NavBar></NavBar>
        <div v-if="loading" class="text-center mt-3">

            <div class="spinner-border " style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>

        </div>
        <div v-else v-for="nota in notas" :key="nota.id">
            <NotaComp :nota="nota"></NotaComp>
        </div>
    </div>
</template>

<script>
import NavBar from '@/components/NavBar.vue';
import NotaComp from '@/components/NotaComp.vue';
import notas from "../../services/notas.js"

export default {
    name: 'NotasView',
    components: {
        NavBar,
        NotaComp,
    },
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