<template>
    <div class="container">
        
    </div>
</template>
<script>
    export default {
        
        mounted() {

            //recuperation du wrappers
           /* const jsonWrappers = sessionStorage.getItem('wrappers');
            let wrappers = null

            if (jsonWrappers != null && jsonWrappers != undefined) {
                wrappers = JSON.parse(jsonWrappers);
            }

            this.wrappers=wrappers;

            if(wrappers!=null){
                console.log(wrappers);
            }*/
            //fin recuperation wrappers
           
           /* 
            const countries = window.isoCountries
            var full_country_name=countries.getName("SN", "en", {select: "official"}); // United States of America
            console.log(full_country_name);

             const url = "/post-shipment"
            const data = { username: 'example' };
            

            fetch(url, {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': window.csrfContent
            },
            body:'',
            })
            .then(response => response.json())
            .then(data => {
                const { response } = data;
                console.log(JSON.parse(response));
            })
            .catch((error) => {
                console.error('Error:', error);
            });
                */
        },
            
        data() {
            return {
                fullnamecountry:"senegal",
                wrappers:null
            }
        },
        methods:{
        
            onSubmitrequestform(){
                return window.location.href = '/';
            }
        },
    }
</script>