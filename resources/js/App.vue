<template>
    <div class="main">
        <navbar />

        <main class="should-remove-padding">
            <router-view />
        </main>

        <footer>
            <span>COLLECTANDCLICK.AFRICA</span>
            <span>ALL RIGHTS RESERVED.</span>
        </footer>
    </div>
</template>

<script>
    import Navbar from './components/Navbar'
    export default {
        components: { Navbar },
        mounted() {
            console.log('haha')
        }
    }
</script>


<style lang="css" src="./styles/styles3.css"></style>
