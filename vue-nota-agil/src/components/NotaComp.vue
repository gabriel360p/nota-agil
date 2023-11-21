<template>
    <div>
        <span class="border-bottom">{{ nota.id }} </span> |
        <span class="border-bottom">{{ nota.name }} </span>
        <br>
    </div>
</template>

<script>

export default {
    name: 'NotaComp',

    props: {
        nota: {},
    },

}
</script>

<style lang="scss" scoped></style>