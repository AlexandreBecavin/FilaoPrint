<template>
    <div class='accueil'>
        <h1>Votre service d'impression 3D en ligne<span class='dot_title'>.</span></h1>
        <hr class='smallOutline'>
        <p>Sélectionnez vos modèle 3D et choisissez vos matériaux et couleurs ! Vous n'aurez plus qu'àeffectuer votre commande pour convertir vos fichiers en objets réels...</p>
        <video controls loop autoplay muted class='video'>
            <source :src="require(`~/assets/video/filaoAccueil.mp4`)" type="video/mp4">
        </video>

        <div class='container_button'>
            <NuxtLink class='button' to="/">
                Découvrir
            </NuxtLink>
        </div>

        <SwitchAccueil />
    </div>
</template>
    
<script>
    import SwitchAccueil from '../components/SwitchAccueil.vue'
    export default {
        name: 'IndexPage',
        components: {
            SwitchAccueil
        }
    }
</script>

<style>
    .accueil{
        margin-bottom: 3rem;
    }

    .video{
        height: auto;
        width: 100%;
        margin: 2rem 0rem;
    }

    .container_button{
        display: flex;
        justify-content: center;
    }

    .accueil h1{
        margin-bottom: 0.7rem;
    }

    .dot_title{
        color: var(--dot);
    }

    .smallOutline{
        border: 1px solid var(--secondary);
        color: red;
        width: 60px;
        margin-left: 0;
        margin-top: 0.5rem;
        margin-bottom: 2rem;
    }
</style>
