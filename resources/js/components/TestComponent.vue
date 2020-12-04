<template>
    <div class="container">
        <h1>Je suis quelque chose</h1>
    </div>
</template>
<script>
    export default {
        
        mounted() {

           /* const url = "/rates"
            fetch(url)
            .then(response => response.json())
            .then(data => {
                const response = data.response
                console.log(JSON.parse(response));
            });*/
            //console.log(this.fullnamecountry);
            //console.log("US (Alpha-2) => " + countries.getName("US", "de", {select: "official"})); // Vereinigte Staaten von Amerika

            const countries = window.isoCountries
            //console.log("US (Alpha-2) => " + countries.getName("US", "en", {select: "official"}));
            var full_country_name=countries.getName("SN", "en", {select: "official"}); // United States of America
            console.log(full_country_name);
        },

        data() {
            return {
                fullnamecountry:"senegal",
                
                }
        },
        methods:{
        
            onSubmitrequestform(){
                return window.location.href = '/';
            }
        },
    }
</script>