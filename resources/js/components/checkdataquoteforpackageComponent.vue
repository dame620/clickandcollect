<template>
    <div class="container">
         
         <p>verifiez que ces informations sont bien celle que vous avez saisi</p>
        
        <div id="container"></div>
        
        <div class="container_containt" v-for="(wrapper, wrapper_index) in wrappers" :key="wrapper_index">
            
            <br>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>NUMERO PAQUET</th>
                            <th>poids</th>
                            <th>largeur</th> 
                            <th>hauteur</th> 
                            <th>longueur</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ wrapper_index+1 }}</td>
                            <td>{{ wrapper.weight }}</td>
                            <td>{{ wrapper.width }}</td>
                            <td>{{ wrapper.height }}</td>
                            <td>{{ wrapper.length }}</td>
                            
                            
                        </tr>
                    </tbody>
            </table>
    
        </div>

        <div class="containt_bottom" style="display:flex; justify-content: space-evenly">
            <button type="submit" style="background-color:rgb(218, 175, 127); border:none; width:300px; margin-bottom:20px; color:white; height:35px;" @click="gotopreviouspage">
                RETOURNER POUR CORRIGER
                
            </button>
            <button type="submit" style="background-color:rgb(233, 154, 60); border:none; width:300px; color:white; height:35px;" @click="gotonextpage">
                CLIQUEZ ICI POUR CONTINUER   
            </button>
        </div>
        
        
     
       
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.');
                    
            //get the informations inside session storage
            const jsonWrappers = sessionStorage.getItem('wrappers');
            let wrappers = null

            if (jsonWrappers != null && jsonWrappers != undefined) {
                wrappers = JSON.parse(jsonWrappers);
            }

            this.wrappers=wrappers;

            if(wrappers!=null){
                console.log(wrappers);
            }
            //fin de recupération des données
            //fetch request
           /* const data = wrappers;

            fetch('/rates', {
                method: 'POST', // or 'PUT'
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': window.csrfContent,
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
            */
           //end of fetch request
        },

       

        data() {
         return {

                 wrappers: null,
               
                 
         }
             },
             methods:{
            
                 gotonextpage(){
                     return window.location.href = '/invoiceproforma';
                 },

                   gotopreviouspage(){
                     return window.location.href = '/packageform';
                 }
             },


    }
</script>