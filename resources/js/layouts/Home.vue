<template>
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="" v-if="is_logged">Home</a>
            <router-link :to="{name: 'login'}" v-if="!is_logged">Se connecter</router-link>
            <router-link :to="{name: 'register'}" v-if="!is_logged">S'inscrire</router-link>
        </div>

        <slot />
    </div>
</template>

<script>
    export default {
        props: {
            is_logged: { type: Boolean, default: false }
        },
        name: 'Home',
    }
</script>

<style lang="css" src="">
html, body {
    width: 100%;
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}


.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
