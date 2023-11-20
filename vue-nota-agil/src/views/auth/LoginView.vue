<template>
    <div>
        <AuthBar></AuthBar>
        <LoginForm></LoginForm>
    </div>
</template>

<script>
import LoginForm from '@/components/LoginForm.vue';
import AuthBar from '@/components/AuthBar.vue';
    export default {
        name:'LoginView',
        
        components: {
            LoginForm,
            AuthBar,
        },
    }
</script>

<style lang="scss" scoped>

</style>