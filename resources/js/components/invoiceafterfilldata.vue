<template>
    <div class="container">
       <p>salue les amis</p> 
    </div>
</template>

<script>
export default {

   
    mounted() {
        const current_id = this.$route.params.id;

        console.log(current_id);
    },

    data() {
        return {
            

        }

    },

    methods: {

        
    }

}
</script>
