<template>
    <div class="content">
        <div class="title m-b-md">
            click and collect
        </div>
        <div class="links">
        <button type="button" class="btn btn-info">
        <router-link to="/check" style="color:white; font-weight: bold;">
            obtenir une quotation
        </router-link>
        </button>
            <button class="btn btn-info">
                <router-link to="/checkforpickup" style="color:white; font-weight: bold;">
                    demander un pick up
                </router-link>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
