<template>
    <div class="main">
        <Home v-if="isHome" :is_logged="is_logged">
            <router-view></router-view>
        </Home>
        <Application v-else :is_logged="is_logged">
            <router-view></router-view>
        </Application>
    </div>
</template>

<script>
    import Home from '../layouts/Home';
    import Application from '../layouts/Application'

    export default {

        props: {
            is_logged: { type: Boolean, default: false },
            user: { type: Object }
        },

        components: { Home, Application },

        computed: {
            isHome() {
                return this.$route.path === '/';
            }
        },
        mounted() {
            console.log(this.is_logged)
        }
    }
</script>

<style lang="css">

    
</style>