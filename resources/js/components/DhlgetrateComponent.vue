<template>
    <div class="container">
        <h1>Je suis quelque chose</h1>
    </div>
</template>
<script>
    export default {
        
        mounted() {
            const url = "/rates"

          /*  fetch('/rates', {
                method: 'post',
                data: {
                    weight: Number(this.weight) 
                }
            })*/
            fetch(url)
            .then(response => response.json())
            .then(data => {
                const response = data.response
                console.log(JSON.parse(response));
            });
        },

        data() {
            return {
            }
        },
        methods:{
        
            onSubmitrequestform(){
                return window.location.href = '/';
            }
        },
    }
</script>