<template>

    <div class="container_categorie">
        <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>



        <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>
        <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>
         <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>
         <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>
         <div class='block_categorie'>
            <img :src="require(`@/assets/image/dino.jpg`)"/>
            <button class='button btn_cate'>Décoration</button>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'ListCategorie',
    }
</script>

<style scoped>

.container_categorie{
    display: flex;
    flex-direction: column;
    margin-top: 2rem;
}

.block_categorie{
    width: 85%;
    height: 25rem;
    margin: auto;
    position: relative;
    margin-bottom: 1rem;
}

.block_categorie img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 2rem;
}

.block_categorie button{
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    border: none;
}

</style>