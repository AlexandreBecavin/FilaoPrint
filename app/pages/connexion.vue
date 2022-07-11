<template>
    <div class="block_couleur">
        <h1>Connexion<span class='dot_title'>.</span></h1>
        <hr class='smallOutline center_hr'>
        <form>
            <div class='container_input'>
                <label>E-mail *</label>
                <input type="text" name='input'/>
            </div>
            <div class='container_input'>
                <label>Mot de passe *</label>
                <input type="password" name='input'/>
            </div>  
            <div class="mdp_container">
                <a href="#">Mot de passe oublié</a>
            </div>
            <p class='info_mini'>En me connectant à mon compte, j'accepte les <a href="#">Conditions Générales et Politique de confidentialité</a></p>
            <div class='center_submit'>
                <input class="custom_submit" type="submit" value='Se connecter'/>
            </div>
            <p class='info_mini'>Vous n'avez pas encore de compte ? <a href="#">Créez-en un maintenant</a></p>
        </form>
    </div>
</template>

<script>
  export default {
    name: 'Connexion'
  }
</script>

<style>
    .block_couleur{
        width: 90%;
        margin: auto;
        margin-bottom: 3rem;
        border-radius: 2.2rem;
        background-color: var(--bg-color-light);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
    }

    .center_hr{
       margin-left: auto;
       margin-right: auto;
    }

    .container_input{
        display: flex;
        flex-direction: column;
        margin-bottom: 1.5rem;
    }

    .container_input label{
        color: var(--primary);
    }

    .info_mini{
        font-size: 0.8rem;
    }

    .mdp_container{
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1.5rem;
    }

    .custom_submit{
        border-radius: 4rem;
        margin: auto;
        margin-top: 1rem;
        margin-bottom: 1rem;
        background-color: var(--btn);
        font-weight: bold;
        padding: 0.8rem 1.5rem;
    }

    .center_submit{
        display: flex;
        justify-content: center;
    }
</style>