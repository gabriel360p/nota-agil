<template>
  <div class="about text-center">
    <AuthBar></AuthBar>
    <h3>Projeto desenvolvido para a matéria de Projeto de Desenvolvimento de Software</h3>
  </div>
</template>
<script>
import AuthBar from '@/components/AuthBar.vue';
export default {
    name: 'SobreView',
    components: {
      AuthBar,
    },
}
</script>
