<template>
    <div class="container">
        <form action="">
            <span v-for="(e, erro_index) in errors" :key="erro_index" style="color:red; font-weight: bold;">{{e}} </span>
          
            <section v-if="step==1">
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
                            <label for="weight">CountryCode</label>
                            <input type="text" v-model="shipmentdetails.pickupcountryCode" class="form-control" placeholder="nom du pays"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">CountyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupcountyName"  placeholder="nom du pays"> 
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
                            <label for="weight">CountryCode</label>
                            <input type="text" v-model="shipmentdetails.shippercountryCode" class="form-control" placeholder="nom du pays"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">CountyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.shippercountyName"  placeholder="nom du pays"> 
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
                            <label for="weight">CountryCode</label>
                            <input type="text" v-model="shipmentdetails.receivercountryCode" class="form-control" placeholder="nom du pays"> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">CountyName</label>
                            <input type="text" class="form-control" v-model="shipmentdetails.receivercountyName"  placeholder="nom du pays"> 
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
<script>
export default {
  mounted() {
    console.log('mounted');
    
    },
  data() {
    return {

        step:1,
        totalsteps:3,
        errors:[],
        respon:null,
        wrapers:null,

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
                        provinceCode: wrapper.shipmentdetails.provinceCode,
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

            const url = "/post-shipment"
            
            fetch(url, {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': window.csrfContent
            }, 

            body: JSON.stringify({
                packages: formatted_shipmentdetails
            })

            })
            .then(response => response.json())
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

            console.log(wrappers);
           // this.wrapers=wrappers;
            //console.log(this.wrapers);
            sessionStorage.setItem("wrappers", JSON.stringify(wrappers));
               
            return window.location.href = '/test'; 

            
         
        }
    }
  
}
</script>