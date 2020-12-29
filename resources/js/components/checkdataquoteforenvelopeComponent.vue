<template>
    <div class="container">
         
         <h5 v-if="data_loading == false">PATIENTEZ NOUS CHERCHONS LE MEILLEUR PRIX POUR VOUS</h5>

        <div class="loader-container" v-if="data_loading == false">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        
        <div class="containt_without_loader" v-if="data_loading==true">

        
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

            <h2>le prix de votre paquet tout taxe compris est: {{ sum_for_total_price_all_taxe }} XOF</h2> 
            <h2>le prix de votre paquet hors taxe est: {{ sum_for_total_price }} XOF</h2> 
            

            <div class="containt_bottom" style="display:flex; justify-content: space-evenly">
                <button type="submit" style="background-color:rgb(218, 175, 127); border:none; width:330px; margin-bottom:20px; color:white; height:35px;" @click="gotopreviouspage">
                    RETOURNER POUR CORRIGER ou ANNULER
                    
                </button>
                <button type="submit" style="background-color:rgb(233, 154, 60); border:none; width:300px; color:white; height:35px;" @click="gotonextpage">
                    CLIQUEZ ICI POUR CONTINUER   
                </button>
            </div>
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
                wrappers.forEach(wrapper=>{
                    if(wrapper.is_smallformat){
                        wrapper.length=5
                        wrapper.width=3
                        wrapper.height=1
                    }
                    else{
                        wrapper.length=7
                        wrapper.width=5
                        wrapper.height=2  
                    }
                    
                
            });
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
            this.sum_for_total_price_all_taxe=Math.round(sum_for_total_price*1.416)

           // console.log(this.responses);
        })
        .catch(error=>{
            console.error('error:', error)
        })
        .finally(()=>{
           this.data_loading = true;
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
                sum_for_total_price_all_taxe:null,
                data_loading: false,
            }
        },
             methods:{
            
                 gotonextpage(){
                     this.$router.push('/invoiceenvelope');
                 },

                   gotopreviouspage(){
                       this.$router.push('/envelopeform');
                 }
             },


    }
</script>


<style scoped>
.loader-container {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgb(112, 20, 105);
}
.loader{
    position: relative;
    width:300px;
    height: 300px;
    transform-style: preserve-3d;
    transform: perspective(500px) rotateX(60deg);
}

.loader span{
    position: absolute;
    display: block;
    border: 2px solid #fff;
    box-sizing: border-box;
    border-radius: 50%;
    transform: translateZ(-100px);
    animation: animate 3s ease-in-out infinite;
}

@keyframes animate
{
    0%, 100%{
        transform: translateZ(-100px);
    }
    50%{
        transform: translateZ(100px);  
    }
}


.loader span:nth-child(2){
    top:10px;
    left:10px;
    right:10px;
    bottom: 10px;
    animation-delay: 1.5s;
}

.loader span:nth-child(3){
    top:10px;
    left:10px;
    right:10px;
    bottom: 10px;
    animation-delay: 1.4s;
}

.loader span:nth-child(4){
    top:30px;
    left:30px;
    right:30px;
    bottom: 30px;
    animation-delay: 1.3s;
}

.loader span:nth-child(5){
    top:40px;
    left:40px;
    right:40px;
    bottom: 40px;
    animation-delay: 1.2s;
}

.loader span:nth-child(6){
    top:50px;
    left:50px;
    right:50px;
    bottom: 50px;
    animation-delay: 1.1s;
}

.loader span:nth-child(7){
    top:60px;
    left:60px;
    right:60px;
    bottom: 60px;
    animation-delay: 1s;
}

.loader span:nth-child(8){
    top:70px;
    left:70px;
    right:70px;
    bottom: 70px;
    animation-delay: 0.9s;
}

.loader span:nth-child(9){
    top:80px;
    left:80px;
    right:80px;
    bottom: 80px;
    animation-delay: 0.8s;
}

.loader span:nth-child(10){
    top:90px;
    left:90px;
    right:90px;
    bottom: 90px;
    animation-delay: 0.7s;
}

.loader span:nth-child(11){
    top:100px;
    left:100px;
    right:100px;
    bottom: 100px;
    animation-delay: 0.6s;
}

.loader span:nth-child(12){
    top:110px;
    left:110px;
    right:110px;
    bottom: 110px;
    animation-delay: 0.5s;
}

.loader span:nth-child(13){
    top:120px;
    left:120px;
    right:120px;
    bottom: 120px;
    animation-delay: 0.4s;
}

.loader span:nth-child(14){
    top:130px;
    left:130px;
    right:130px;
    bottom: 130px;
    animation-delay: 0.3s;
}

.loader span:nth-child(15){
    top:140px;
    left:140px;
    right:140px;
    bottom: 140px;
    animation-delay: 0.2s;
}   
</style>