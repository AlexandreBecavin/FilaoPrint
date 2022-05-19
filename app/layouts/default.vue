<template>
    <div>
        <Header />
        <Nuxt class='content' />
        <Menu />
    </div>
</template>

<script>
    import Header from '~/components/Header.vue'
    import Menu from '~/components/Menu.vue'
    export default {
        components: {
            Header,
            Menu
        }
    }
</script>

<style>  
    *{
        box-sizing: border-box;
    }

    body{
        margin: 0;  
    }

    .content{
       overflow: auto;
       padding-bottom: 6rem;
       width: 90%;
       margin: auto;
    }
</style>