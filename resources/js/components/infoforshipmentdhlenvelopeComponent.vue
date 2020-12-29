<template>
    <div class="container">
        <form action="">
            <span v-for="(e, erro_index) in errors" :key="erro_index" style="color:red; font-weight: bold;">{{e}} </span>
          
            <section v-if="step==1">
                <div class="progress-container">
                    <ul class="progressbar">
                        <li class="active">step1</li>
                        <li>step2</li>
                        <li>step3</li>
                    </ul>
                </div>
                <h3>Detail de la personne à contacter et du Lieu de Ramassage</h3>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">PostalCode</label>
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.pickuppostalCode"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">cityName</label>
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.pickupcityName"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Adress</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupaddressLine1"  placeholder="votre Adress"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Email</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupemail" placeholder="entrez l'email du personne à contacter"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">TelePhone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupphone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Mobil Phone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupmobilePhone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">companyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupcompanyName" placeholder="test"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Nom de la Personne</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupfullName" placeholder="test">                           
                        </div>
                    </div>

                </div>

            </section>

             <section v-if="step==2">

                 <div class="progress-container">
                    <ul class="progressbar">
                        <li class="active">step1</li>
                        <li class="active">step2</li>
                        <li>step3</li>
                    </ul>
                </div>

                <h3>Detail du demandeur de Ramassage</h3>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">PostalCode</label>
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.shipperpostalCode"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">cityName</label>
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.shippercityName"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Adress</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperaddressLine1"  placeholder="votre Adress"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Email</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperemail" placeholder="entrez l'email du personne à contacter"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">TelePhone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperphone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Mobil Phone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shippermobilePhone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">companyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shippercompanyName" placeholder="test"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Nom de la Personne</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperfullName" placeholder="test">                           
                        </div>
                    </div>

                </div>
                
            </section>

             <section v-if="step==3">

                 <div class="progress-container">
                    <ul class="progressbar">
                        <li class="active">step1</li>
                        <li class="active">step2</li>
                        <li class="active">step3</li>
                    </ul>
                </div>
                 
                <h3>Detail du RECEIVER</h3>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">PostalCode</label>
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.receiverpostalCode"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">cityName</label>
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.receivercityName"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Adress</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receiveraddressLine1"  placeholder="votre Adress"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Email</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receiveremail" placeholder="entrez l'email du personne à contacter"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">TelePhone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receiverphone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Mobil Phone</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receivermobilePhone" placeholder="test"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">companyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receivercompanyName" placeholder="test"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Nom de la Personne</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receiverfullName" placeholder="test">                           
                        </div>
                    </div>

                </div>

            </section>
            <br>
            <button v-if="step>1" @click.prevent="previousstep()" class="btn btn-success">Precedent</button>
            <button v-if="step!=totalsteps" @click.prevent="nextstep()" class="btn btn-success">Suivant</button>
            <button v-if="step==totalsteps" @click.prevent="submitform()" class="btn btn-success">Enregistrer</button>

        </form>
        
    </div>
</template>
<style scoped>
     .progress-container{
                    width:100%;
                }
                .progressbar{
                    counter-reset: step;
                } 
                .progressbar li{
                    list-style-type: none;
                    float:left;
                    width:33%;
                    position:relative;
                    text-align: center;
                } 
                .progressbar li:before{
                    content: counter(step);
                    counter-increment:step;
                    line-height: 30px;
                    width: 30px;
                    height:30px;
                    border: 1px solid #ddd;
                    display: block;
                    text-align: center;
                    margin: 0 auto 10px auto;
                    border-radius: 50%;
                    background-color: white;

                }
                .progressbar li:after{
                    content:'';
                    position:absolute;
                    width:100%;
                    height:1px;
                    background-color: #ddd;
                    top:15px;
                    left:-50%;
                    z-index: -1;
                }

                .progressbar li:first-child:after{
                    content:none;
                }
                .progressbar li.active{
                    color:rgb(8, 8, 8);
                   
                } 
                .progressbar li.active:before{
                    border-color:green;
                    background-color: green;
                }
                .progressbar li.active + li:after{
                    background-color: green;
                }  
    
</style>
<script>
export default {
  mounted() {
    console.log('mounted');
        const countries = window.isoCountries
        var full_country_name=countries.getName("SN", "en", {select: "official"}); // United States of America
        console.log(full_country_name);
    
    },
  data() {
    return {

        step:1,
        totalsteps:3,
        errors:[],
        respon:null,
        wrappers:null,

      shipmentdetails:{
        pickuppostalCode: null,
        pickupcityName: null,
        pickupcountryCode: null,
        pickupaddressLine1: null,
        pickupcountyName: null,
        pickupemail: null,
        pickupphone: null,
        pickupmobilePhone: null,
        pickupcompanyName: null,
        pickupfullName: null,

        receiverpostalCode: null,
        receivercityName: null,
        receivercountryCode: null,
        receiveraddressLine1: null,
        receivercountyName: null,
        receiveremail: null,
        receiverphone: null,
        receivermobilePhone: null,
        receivercompanyName: null,
        receiverfullName: null,

        shipperpostalCode: null,
        shippercityName: null,
        shippercountryCode: null,
        shipperaddressLine1: null,
        shippercountyName: null,
        shipperemail: null,
        shipperphone: null,
        shippermobilePhone: null,
        shippercompanyName: null,
        shipperfullName: null
            }
        }
    },

  methods:{
      nextstep(){
          if(this.step==1){

            if(!this.shipmentdetails.pickuppostalCode){
            this.errors="fill your name";
             return false;
                }

            }

        if(this.step==2){

             if(!this.shipmentdetails.shipperphone){
              this.errors="fill your telephone";
             return false;
                }

             if(!this.shipmentdetails.shipperemail){
              this.errors="fill your email";
              return false;
                }

            }
            
        
            this.step++;
            this.errors='';
          
          
        },

      previousstep(){
          this.step--;
        }, 

      submitform(){
           if(this.step==3){

            if(!this.shipmentdetails.receiverpostalCode){
            this.errors="fill your postal code";
             return false;
                }

            }

            sessionStorage.setItem("shipmentdetails", JSON.stringify(this.shipmentdetails));

            console.log(this.shipmentdetails)

            //recuperation du wrappers
            const jsonWrappers = sessionStorage.getItem('wrappers');
            let wrappers = null

            if (jsonWrappers != null && jsonWrappers != undefined) {
                wrappers = JSON.parse(jsonWrappers);
            }

            this.wrappers=wrappers;

            if(wrappers!=null){
                console.log(wrappers);
            }
            //fin recuperation wrappers

            wrappers.forEach(wrapper => {
                //recuperation du nom du country complet
                const countries = window.isoCountries
                var full_country_name=countries.getName(wrapper.origincountry, "en", {select: "official"}); // United States of America
                console.log(full_country_name);
                //passage du full country name et pickup country a la variable du pickup
                this.shipmentdetails.pickupcountyName=full_country_name;
                this.shipmentdetails.pickupcountryCode=wrapper.origincountry;
                //passage des infos pour le shipper
                this.shipmentdetails.shippercountyName=full_country_name;
                this.shipmentdetails.shippercountryCode=wrapper.origincountry;
                //conversion du destination country en full country name
                var full_destinationcountry_name=countries.getName(wrapper.destinationcountry, "en", {select: "official"}); // United States of America
                console.log(full_destinationcountry_name);
                //on fait passer full country et le country code 
                 this.shipmentdetails.receivercountyName=full_destinationcountry_name;
                 this.shipmentdetails.receivercountryCode=wrapper.destinationcountry;

                 wrapper.shipmentdetails = this.shipmentdetails;
                });

               console.log(wrappers);
               //preparation des données à envoyer à l'api pour le shipment
               const formatted_shipmentdetails=wrappers.map(function(wrapper){
                   return{

                        width:  Number(wrapper.width),
                        height: Number(wrapper.height),
                        weight: Number(wrapper.weight),
                        length: Number(wrapper.length),
                        origincountry: wrapper.origincountry,
                        destinationcountry: wrapper.destinationcountry,
                        originregion: wrapper.originregion,
                        destinationregion: wrapper.destinationregion,
                        pickuppostalCode: wrapper.shipmentdetails.pickuppostalCode,
                        pickupcityName: wrapper.shipmentdetails.pickupcityName,
                        pickupcountryCode: wrapper.shipmentdetails.pickupcountryCode,
                       // provinceCode: wrapper.shipmentdetails.provinceCode,
                        pickupaddressLine1: wrapper.shipmentdetails.pickupaddressLine1,
                        pickupcountyName: wrapper.shipmentdetails.pickupcountyName,
                        pickupemail: wrapper.shipmentdetails.pickupemail,
                        pickupphone: wrapper.shipmentdetails.pickupphone,
                        pickupmobilePhone: wrapper.shipmentdetails.pickupmobilePhone,
                        pickupcompanyName: wrapper.shipmentdetails.pickupcompanyName,
                        pickupfullName: wrapper.shipmentdetails.pickupfullName,

                         shipperpostalCode: wrapper.shipmentdetails. shipperpostalCode,
                         shippercityName: wrapper.shipmentdetails. shippercityName,
                         shippercountryCode: wrapper.shipmentdetails. shippercountryCode,
                         shipperaddressLine1: wrapper.shipmentdetails. shipperaddressLine1,
                         shippercountyName: wrapper.shipmentdetails. shippercountyName,
                         shipperemail: wrapper.shipmentdetails. shipperemail,
                         shipperphone: wrapper.shipmentdetails. shipperphone,
                         shippermobilePhone: wrapper.shipmentdetails. shippermobilePhone,
                         shippercompanyName: wrapper.shipmentdetails. shippercompanyName,
                         shipperfullName: wrapper.shipmentdetails. shipperfullName,

                         receiverpostalCode: wrapper.shipmentdetails. receiverpostalCode,
                         receivercityName: wrapper.shipmentdetails. receivercityName,
                         receivercountryCode: wrapper.shipmentdetails. receivercountryCode,
                         receiveraddressLine1: wrapper.shipmentdetails. receiveraddressLine1,
                         receivercountyName: wrapper.shipmentdetails. receivercountyName,
                         receiveremail: wrapper.shipmentdetails. receiveremail,
                         receiverphone: wrapper.shipmentdetails. receiverphone,
                         receivermobilePhone: wrapper.shipmentdetails. receivermobilePhone,
                         receivercompanyName: wrapper.shipmentdetails. receivercompanyName,
                         receiverfullName: wrapper.shipmentdetails. receiverfullName

                         

        
                   }
               });


            console.log(formatted_shipmentdetails);

            async function shipmentreq(){
                const url = "/post-shipment"
                const response = await fetch(url, {
                    method: 'POST', // or 'PUT'
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': window.csrfContent
                    }, 

                    body: JSON.stringify({
                        packages: formatted_shipmentdetails
                    })

                })
                const data = await response.json();
                //console.log(data.responses);
                var responses=data.responses;
                //PARCOURIR le tableau de responses
                responses.forEach(function(response){
                    const responseData = JSON.parse(response);
                    console.log(responseData);
                    console.log(responseData.shipmentTrackingNumber);
                    wrappers.trackingnumber=responseData.shipmentTrackingNumber;
                    //parcourir les wrapper pour leur donner le tracking number
                    wrappers.forEach(function(wrapper){
                        wrapper.trackingnumber=responseData.shipmentTrackingNumber;
                    }) 
                })

                console.log(wrappers);
                this.wrappers=wrappers;
                sessionStorage.setItem("wrappers", JSON.stringify(this.wrappers));

               
            }
             shipmentreq();
            /*const url = "/post-shipment"
            
            fetch(url, {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': window.csrfContent
            }, 

            body: JSON.stringify({
                packages: formatted_shipmentdetails
            })

            })*/
            /*.then(response => response.json())
            .then(data => {
                //const { response } = data;
                //console.log(data.responses);
                var responses=data.responses
                responses.forEach(function(response){
                    const responseData = JSON.parse(response);
                    console.log(responseData);
                    console.log(responseData.shipmentTrackingNumber);
                    wrappers.trackingnumber=responseData.shipmentTrackingNumber;
                    //parcourir les wrapper pour leur donner le tracking number
                    wrappers.forEach(function(wrapper){
                        wrapper.trackingnumber=responseData.shipmentTrackingNumber;
                    }) 
                })
              
            })
            .catch((error) => {
                console.error('Error:', error);
            });

            console.log("check wrappers", wrappers);
           // this.wrapers=wrappers;
            //console.log(this.wrapers);
            sessionStorage.setItem("wrappers", JSON.stringify(wrappers));
            */
            this.$router.push('/envelope/create');


            
         
        }
    }
  
}
</script>