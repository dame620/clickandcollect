<template>
    <form @submit.prevent="onSubmitEnvelopeForm()">
        <div class="products-counter">
            <span>{{ wrappers_count }} Enveloppe{{ wrappers_count > 1 ? 's' : '' }}</span>
            <div>
                <button type="button" @click.prevent="decrementWrapper" class="btn btn-primary">-</button>
                <button type="button" @click.prevent="incrementWrapper" class="btn btn-primary">+</button>
            </div>
        </div>

        <div class="packages-section" v-for="(wrapper, wrapper_index) in wrappers" :key="wrapper_index">
            <button class="packages-section-closer" type="button" @click.prevent="onCloseEnvelope(wrapper_index)">
                <i class="fa fa-times"></i>
            </button>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Pays d'origine</label> 
                        <country-select v-model="wrapper.origincountry" :country="wrapper.origincountry" topCountry="US" />
                    </div>
                </div>
                

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Pays de destination</label>
                        <country-select v-model="wrapper.destinationcountry" :country="wrapper.destinationcountry" topCountry="US" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">petit format <i class="fa fa-envelope-square" aria-hidden="true" style="padding:10px; margin-left:4px"></i>
                                  
                            <input type="checkbox" v-model="wrapper.is_smallformat" :disabled="wrapper.is_bigformat==true" >
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">grand format <i class="fa fa-envelope" style="padding:10px; margin-left:4px"></i>
                                 
                            <input type="checkbox" v-model="wrapper.is_bigformat" :disabled="wrapper.is_smallformat==true">
                        </label>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Poids (kg)</label>
                      
                        <input type="number" name="weight" id="weight" class="form-control" v-model="wrapper.weight" required>
                    </div>
                </div>
            </div>

            <div class="products-counter">
                <span>{{ wrapper.products.length }}produit{{ wrapper.products.length > 1 ? 's' : '' }}</span>
                <div>
                    <button type="button" @click.prevent="decrementProduct(wrapper_index)" class="btn btn-primary">-</button>
                    <button type="button" @click.prevent="incrementProduct(wrapper_index)" class="btn btn-primary">+</button>
                </div>
            </div>

            <div class="form-group" v-for="(product, product_index) in wrapper.products" :key="product_index">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NATURE DU PRODUIT</label>
                            <input type="text" name="product_type" v-model="product.product_type" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quantité</label>
                            <input type="number" name="quantity" v-model="product.quantity" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">PRIX UNITAIRE</label>
                            <input type="number" name="unitprice" v-model="product.unit_price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">DESCRIPTION</label>
                            <textarea name="description" v-model="product.description" class="form-control"></textarea>
                            
                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <!--debut certificat phytho-->
            <div class="phytho-container" style="display:flex;">
               <div class="col-md-6">
                    <div class="form-group">
                        <label for="" style="font-size:20px; font-weight:bold;">Ajouter un certificat phytho
                            <input type="checkbox" v-model="wrapper.is_phythoexiste" :disabled="wrapper.is_nophytho==true">
                        </label>
                    </div>
                </div>

                <div class="col-md-6" >
                    <div class="form-group" >
                        <label for="" style="font-size:20px; font-weight:bold;"> phyto Pas Necessaire
                            <input type="checkbox" :disabled="wrapper.is_phythoexiste==true"  v-model="wrapper.is_nophytho">
                        </label>
                    </div>
                </div>
                 
            </div>
            <div class="phyto-owner" v-if="wrapper.is_phythoexiste" style="display:flex;">

                    <div class="col-md-6" style="display:flex;">
                        <div class="form-group" >
                            <label for="" >Vous avez votre phytho
                                <input type="checkbox" :disabled="wrapper.is_phytho_provide_tosma==true"  v-model="wrapper.is_phytho_your_own">
                            </label>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group" style="display:flex;">
                            <label for="" style="display:flex;">On le cheche pr vous
                                <input type="checkbox" v-model="wrapper.is_phytho_provide_tosma" :disabled="wrapper.is_phytho_your_own==true">
                            </label>
                        </div>
                    </div>

            </div>  
        <!--fin certificat phytho-->

         <!--debut certificat origine-->

            <div class="phytho-container" style="display:flex;">
               <div class="col-md-6">
                    <div class="form-group">
                        <label for="" style="font-size:20px; font-weight:bold;">Ajouter un certificat d'origine
                            <input type="checkbox" v-model="wrapper.is_origincertificat" :disabled="wrapper.is_noorigincertificat==true">
                        </label>
                    </div>
                </div>

                <div class="col-md-6" >
                    <div class="form-group" >
                        <label for="" style="font-size:20px; font-weight:bold;"> certificat d'origine Pas Necessaire
                            <input type="checkbox" :disabled="wrapper.is_origincertificat==true"  v-model="wrapper.is_noorigincertificat">
                        </label>
                    </div>
                </div>
                 
            </div>
            <div class="phyto-owner" v-if="wrapper.is_origincertificat" style="display:flex;">

                    <div class="col-md-6" style="display:flex;">
                        <div class="form-group" >
                            <label for="" >Vous avez votre certificat
                                <input type="checkbox" :disabled="wrapper.is_origin_certificat_provide_to_sma==true"  v-model="wrapper.is_origin_certificat_your_own">
                            </label>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group" style="display:flex;">
                            <label for="" style="display:flex;">On le cheche pr vous
                                <input type="checkbox" v-model="wrapper.is_origin_certificat_provide_to_sma" :disabled="wrapper.is_origin_certificat_your_own==true">
                            </label>
                        </div>
                    </div>

            </div>

          <!--fin certificat origin-->

        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </form>
</template>

<script>
    export default {

          mounted() {
            console.log('Component mounted.')
            const jsonWrappers = sessionStorage.getItem('wrappers');
                let wrappers = null

                if (jsonWrappers != null && jsonWrappers != undefined) {
                    wrappers = JSON.parse(jsonWrappers);
                }

            if(wrappers!=null){
                this.wrappers = wrappers;
            }
            
        },

        props: ['path'],
        data() {
            return {
                wrappers: [{
                    is_smallformat: false,
                    is_bigformat: false,
                    is_nophytho: false,
                    is_phythoexiste: false,
                    is_phytho_your_own: false,
                    is_phytho_provide_tosma: false,
                    is_origincertificat:false,
                    is_noorigincertificat:false,
                    is_origin_certificat_your_own:false,
                    is_origin_certificat_provide_to_sma:false,
                    weight: null,
                    origincountry:null,     
                    destinationcountry:null,
                    products: []
                }],
                loading: false,
            }
        },
        computed: {
            wrappers_count() {
                return this.wrappers.length;
            },
        },
        methods: {
            onCloseEnvelope(wrapper_index) {
                if(this.wrappers.length>1)
                this.wrappers.splice(wrapper_index, 1);
            },
                resetForm() {
                this.wrappers = this.wrappers
            },

            incrementWrapper() {
                this.wrappers.push({
                    is_bigformat: false,
                    is_smallformat: false,
                    is_nophytho: false,
                    is_phythoexiste: false,
                    is_phytho_your_own: false,
                    is_phytho_provide_tosma: false,
                    is_origincertificat:false,
                    is_noorigincertificat:false,
                    is_origin_certificat_your_own:false,
                    is_origin_certificat_provide_to_sma:false,
                    weight: null,
                    origincountry:null,
                    destinationcountry:null,
                    products: []
                })
            },
            decrementWrapper() {
                if (this.wrappers.length > 1) {
                    this.wrappers.pop();
                }
            },
            incrementProduct(wrapper_index) {
                this.wrappers[wrapper_index].products.push({
                    product_type: null,
                    quantity: null,
                    description: null,
                    unit_price: null,
                });
            },
            decrementProduct(wrapper_index) {
                if (this.wrappers[wrapper_index].products.length > 1) {
                    this.wrappers[wrapper_index].products.pop();
                }
            },
            onSubmitEnvelopeForm() {

                //alert('hrllo')
                   
                    this.loading = true;

                     axios.post(this.path, {
                     data: this.wrappers
                     }).then(({data}) => {
                       
                     if (data.success && data.wrappers.length > 0 /* && data.products.length > 0*/) {
                          
                        this.resetForm();
                         sessionStorage.removeItem('wrappers');
                        return window.location.href = '/';
                     }
                 }).catch(response => {
                     console.error(response);
                 }).finally(_ => {
                   this.loading = false; 
             });
               
            },
        },
      
    }
</script>


<style scoped>
.products-section {
    border:1px solid #ccc;
    padding:10px;
    margin-bottom:10px;
    position:relative;
}
.packages-section {
    border:1px solid #ccc;
    padding:10px;
    margin-bottom:10px;
    position:relative;
}
.products-counter {
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:10px;
    padding:10px;
    background-color:#f5f5f5;
}
.counter-label {
    position:absolute;
    top:0;
    right:0;
    display:inline-block;
    width:25px;
    height:25px;
    line-height:25px;
    background-color:#f5f5f5;
    border-left:1px solid #ccc;
    border-bottom:1px solid #ccc;
    color:#000;
    font-weight:bold;
    text-align:center;
}
.packages-section-closer {
    position:absolute;
    top:0;
    right:0;
    width:20px;
    height:20px;
    background-color:red;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    border:none;
    outline:none;
    cursor:pointer;
}
.packages-section-closer i {
    pointer-events:none;
}
</style>
