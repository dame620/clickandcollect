<template>
    <div class="container">
         
         <h5>verifiez que ces informations sont bien celle que vous avez saisi</h5>
        
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
                            <th>PRIX DU PAQUET EN (XOF ou F CFA)</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ wrapper_index+1 }}</td>
                            <td>{{ wrapper.weight }}</td>
                            <td>{{ wrapper.width }}</td>
                            <td>{{ wrapper.height }}</td>
                            <td>{{ wrapper.length }}</td>
                            <!--td>{{ responses[wrapper_index].products[0].totalPrice[0].price }}</td-->
                            
                        </tr>
                    </tbody>
            </table>

            <!--div class="TEST" v-for="(response, response_index) in responses" :key="response_index">
                  
            </div-->    
        </div>

         <h2>le prix de votre paquet est: {{ sum_for_total_price }} XOF</h2> 

        <div class="containt_bottom" style="display:flex; justify-content: space-evenly">
            <button type="submit" style="background-color:rgb(218, 175, 127); border:none; width:330px; margin-bottom:20px; color:white; height:35px;" @click="gotopreviouspage">
                RETOURNER POUR CORRIGER ou ANNULER
                
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
                  const formattedWrappers = wrappers.map(function(wrapper) {
            return {
                width:  Number(wrapper.width),
                height: Number(wrapper.height),
                weight: Number(wrapper.weight),
                length: Number(wrapper.length),
                origincountry: wrapper.origincountry,
                destinationcountry: wrapper.destinationcountry,
                originregion: wrapper.originregion,
                destinationregion: wrapper.destinationregion
            }
        });
        console.log(formattedWrappers);

        /*formattedWrappers.push({
            width: 19,
            height:11,
            weight: 6,
            length: 17,
        });*/

        const headers = new Headers();
        headers.append('Content-Type', 'application/json');
        headers.append('X-CSRF-TOKEN', window.csrfContent);
        
        const options = {
            method: 'POST',
            headers: headers,
            body: JSON.stringify({
                packages: formattedWrappers
            })
        };

        const request = new Request('/get-rates', options);

        fetch(request, options)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            var responses=data.responses;

            this.responses=responses;

            //console.log(this.responses)
            // table_for_price est la variable qui doit contenir les prix de l'ensemble des paquets
            var table_for_price=[];
            responses.forEach(response => {

                const products = response.products;
                products.forEach(product => {
            //totalPrice[0] ns retourne une ligne qui contient le price en fcfa avec 1 ou 2 on aura l'aura avec euro
                   const prix=product.totalPrice[0].price;
                   console.log(prix);
                   table_for_price.push(prix);
                });
            });
            console.log(table_for_price);

            const sum_for_total_price = table_for_price.reduce((acc, number) => {
            return number + acc; 
            }, 0);

            this.sum_for_total_price=sum_for_total_price;
           // console.log(this.responses);
        })


       // console.log("sama responses", this.responses)

                      
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
                 responses:null,
                 sum_for_total_price:null,
               
                 
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