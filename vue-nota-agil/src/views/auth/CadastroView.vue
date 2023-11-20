<template>
    <div>
        <AuthBar></AuthBar>
        <CadastroForm></CadastroForm>
    </div>
</template>

<script>
import CadastroForm from '@/components/CadastroForm.vue';
import AuthBar from '@/components/AuthBar.vue';
    export default {
        name:'CadastroView',
        components: {
            CadastroForm,
            AuthBar,
        }
    }
</script>

<style lang="scss" scoped>

</style>