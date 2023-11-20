<template>
    <div>
        <NavBar></NavBar>
        <NotaComp></NotaComp>
    </div>
</template>

<script>
    import NavBar from '@/components/NavBar.vue';
    import NotaComp from '@/components/NotaComp.vue';


    export default {
        name: 'NotasView',
        components: {
            NavBar,
            NotaComp,
        }
    }
</script>

<style lang="scss" scoped>

</style>