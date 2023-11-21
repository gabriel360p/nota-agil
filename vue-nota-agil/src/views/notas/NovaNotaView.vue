<template>
    <div>
        <NavBar></NavBar>
        <NovaNotaForm class="mt-5"></NovaNotaForm>
    </div>
</template>

<script>
import NavBar from '@/components/NavBar.vue';
import NovaNotaForm from '@/components/NovaNotaForm.vue';

export default {
    name: 'NovaNotaView',
    components: {
        NavBar,
        NovaNotaForm,
    }
}
</script>

<style lang="scss" scoped></style>