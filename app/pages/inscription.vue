<template>
    <div class="block_couleur">
        <h1>Inscription<span class='dot_title'>.</span></h1>
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
            <div class='container_input'>
                <label>Confirmation de mot de passe *</label>
                <input type="password" name='input'/>
            </div> 
            <div>
                <input type="checkbox" name='validCGU'/>
                <label class='info_mini'>En me connectant à mon compte, j'accepte les <a href="#">Conditions Générales et Politique de confidentialité</a></label>
            </div>
            <div class='center_submit'>
                <input class="custom_submit" type="submit" value='Se connecter'/>
            </div>
            <p class='info_mini'>Vous avez déjà un compte ? <a href="#">Connectez-vous</a></p>
        </form>
    </div>
</template>

<script>
  export default {
    name: 'Inscription'
  }
</script>