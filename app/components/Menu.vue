<template>
    <div class='container menu'>
        <div class='fond'>
            <NuxtLink to="/">
                <div class='bg_icon'>
                    <Shop class='icon_menu'/>
                </div>
            </NuxtLink>
            <NuxtLink to="/connexion">
                <div class='bg_icon'>
                    <Search class='icon_menu'/>
                </div>
            </NuxtLink>
            <NuxtLink to="/#hjvfhsv">
                <div class='bg_icon'>
                    <More class='icon_menu'/>
                </div>
            </NuxtLink>
            <NuxtLink to="/#test">
                <div class='bg_icon'>
                    <Bag class='icon_menu'/>
                </div>
            </NuxtLink>
            <NuxtLink to="/#sdfh">
                <div class='bg_icon'>
                    <Gear class='icon_menu'/>
                </div>
            </NuxtLink>
        </div>
    </div>
</template>


<script>
    import Bag from '~/components/icon/Bag.vue'
    import Gear from '~/components/icon/Gear.vue'
    import More from '~/components/icon/More.vue'
    import Search from '~/components/icon/Search.vue'
    import Shop from '~/components/icon/Shop.vue'

    export default {
        name: 'Menu',
        components: {
            Bag,
            Gear,
            More,
            Search,
            Shop
        }
    }
</script>


<style>

.container{
    height: 6rem;
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
}

.fond{
    margin-top: 2rem;
    height: 4rem;
    background-color: var(--primary);
    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 15px 15px 0px 0px;
}

.fond a{
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.bg_icon{
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon_menu{
    height: 1.5rem;
    width: auto;
    fill: var(--bg-color);
}

.menu .nuxt-link-exact-active{
    background-color: var(--bg-color);
    transform: translateY(-1rem);
}

.menu .nuxt-link-exact-active .bg_icon{
    background-color: var(--secondary);
}

.menu .nuxt-link-exact-active .icon_menu{
    height: 1.75rem;
    width: auto;
}
</style>
