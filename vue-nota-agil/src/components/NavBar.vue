<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid ">
                <router-link to="/painel" class="navbar-brand text-light">NotaÁgil</router-link>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="collapse navbar-collapse text-light " id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <router-link to="/painel" class="nav-link text-light active"
                            aria-current="page">Início</router-link>
                        <router-link to="/notas" class="nav-link text-light">Notas</router-link>
                        <router-link to="/notas/nova" class="nav-link text-light">Nova Nota</router-link>
                        <router-link to="/sair" class="nav-link text-light">Sair</router-link>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped></style>