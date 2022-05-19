<template>
    <div>
        <h1>Votre service d'impression 3D en ligne</h1>
        <p>Sélectionnez vos modèle 3D et choisissez vos matériaux et couleurs ! Vous n'aurez plus qu'àeffectuer votre commande pour convertir vos fichiers en objets réels...</p>
        <video controls loop autoplay muted class='video'>
            <source :src="require(`~/assets/video/filaoAccueil.mp4`)" type="video/mp4">
        </video>

        <div class='container_button'>
            <NuxtLink class='button' to="/">
                Découvrir
            </NuxtLink>
        </div>
    </div>
</template>
    
<script>
    export default {
        name: 'IndexPage',
    }
</script>

<style>
    .video{
        height: auto;
        width: 100%;
        margin: 2rem 0rem;
    }

    .container_button{
        display: flex;
        justify-content: center;
    }
</style>
