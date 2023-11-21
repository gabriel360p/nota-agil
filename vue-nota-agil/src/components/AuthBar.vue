<template>
    <nav class="text-center">
        <router-link to="/">Login</router-link> |
        <router-link to="/cadastro">Cadastro</router-link> 
        <!-- | <router-link to="/sobre">Sobre</router-link> -->
    </nav>
    <!-- <router-view /> -->
</template>
<script>
export default {
    name: 'AuthBar'
}
</script>
