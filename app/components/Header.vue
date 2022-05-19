<template>
    <header>
        <User />
        <img :src="require(`~/assets/logo/logo.png`)" />
        <form>
           <input type="checkbox" v-model="theme" v-on:change="persist()" name='toggle' id="toggle" class="toggle--checkbox" >
            <label for="toggle" class="toggle--label">
                <span class="toggle--label-background"></span>
            </label>
        </form>
    </header>
</template>


<script>
    import User from '~/components/icon/User.vue'
    export default {
        name: 'Header',
        components: {
            User
        },
        data: function() {  
            return {
                theme: '',
            } 
        },
        mounted() {
            if (localStorage.theme) {
                this.theme = (localStorage.theme == "false")? '': localStorage.theme;
                document.querySelector('html').dataset.theme = `theme-${(this.theme)?"dark": "light"}`;
             }
        },
        methods: {
            persist() {
                localStorage.theme = this.theme;
                document.querySelector('html').dataset.theme = `theme-${(this.theme)?"dark": "light"}`;
            }
        }
    }
</script>


<style>
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 10px 10%;
    height: 7rem;
}

.toggle--checkbox {
  display: none;
}

.toggle--checkbox:checked + .toggle--label:before {
  background-image: url('~@/assets/icon/sun.svg');
  background-size: 16px 16px;
  animation-name: switch;
  animation-duration: 350ms;
  animation-fill-mode: forwards;
}

.toggle--label {
  width: 50px;
  height: 26px;
  background: var(--primary);
  border-radius: 100px;
  display: flex;
  position: relative;
  transition: all 350ms ease-in;
}

.toggle--label:before {
  animation-name: reverse;
  animation-duration: 350ms;
  animation-fill-mode: forwards;
  transition: all 350ms ease-in;
  content: "";
  width: 16px;
  height: 16px;
  background-image: url('~@/assets/icon/moon.svg');
  background-size: 16px 16px;
  top: 5px;
  left: 5px;
  position: absolute;
  border-radius: 82px;
}

@keyframes switch {
  0% {
    left: 5px;
  }
  100% {
    left: 29px;
    width: 16px;
  }
}
@keyframes reverse {
  0% {
    left: 29px;
    width: 16px;
  }
  100% {
    left: 5px;
  }
}

</style>
