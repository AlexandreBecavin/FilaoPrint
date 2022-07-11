<template>

    <div>
        <div class="container_switch">
            <button class="" aria-pressed="true" tabindex="-1" v-on:click="showCategorie=false">Tendances <hr v-bind:class="{active: !showCategorie}"></button>
            <button class="" aria-pressed="false" v-on:click="showCategorie=true">Catégories <hr v-bind:class="{active: showCategorie}"></button>
        </div>
    
        <div v-if="showCategorie == false">
            <p> Liste des produits</p>
        </div>
        <div v-else>
            <ListCategorie />
        </div>
    </div>
</template>

<script>
    import ListCategorie from '../components/ListCategorie.vue'
     export default {
        name: 'SwitchAccueil',
        data: function() {  
            return {
                showCategorie: false,
            } 
        },
        components: {
            ListCategorie,
        }
    }
</script>

<style scoped>
    .container_switch{
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
    }

    .container_switch button{
        border: none;
        background-color: var(--bg-color);
        font-size: 1.5rem;
        margin-top: 3rem;
    }

    .container_switch hr{
        width: 0px;
        border: 0px solid var(--secondary);
        border-top: 1px solid var(--secondary);
        border-bottom: 1px solid var(--secondary);
        margin-top: 0.5rem;
        margin-left: 0px;
        transition: 0.3s;
    }

    .container_switch hr.active{
        width: 60px;
        transition: 0.3s;
    }
</style>