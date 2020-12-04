<template>
    <form @submit.prevent="onSubmitPackageForm()">
        <div class="products-counter">
            <span>{{ wrappers_count }} paquet{{ wrappers_count > 1 ? 's' : '' }}</span>
            <div>
                <button type="button" @click.prevent="decrementWrapper" class="btn btn-primary">-</button>
                <button type="button" @click.prevent="incrementWrapper" class="btn btn-primary">+</button>
            </div>
        </div>

        <div class="packages-section" v-for="(wrapper, wrapper_index) in wrappers" :key="wrapper_index">
            <button class="packages-section-closer" type="button" @click.prevent="onClosePackage(wrapper_index)">
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
                        <label for="weight">Region d'origine</label>
                        <region-select v-model="wrapper.originregion" :country="wrapper.origincountry" :regionName=true :region="wrapper.originregion" />                    
                    </div>
                </div>

            <!--region-select v-model="wrapper.destinationregion" :country="wrapper.destinationcountry" :region="wrapper.destinationregion" /-->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Pays de destination</label>
                        <country-select v-model="wrapper.destinationcountry" :country="wrapper.destinationcountry" topCountry="US" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight">Region de Destination</label>
                        <region-select v-model="wrapper.destinationregion" :country="wrapper.destinationcountry" :regionName=true :region="wrapper.destinationregion" />                    
                    </div>
                </div>
             
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="width">Largeur (cm)</label>
                        <input type="number" name="width" id="width" class="form-control" v-model="wrapper.width" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="length">Longueur (cm)</label>
                        <input type="number" name="length" id="length" class="form-control" v-model="wrapper.length" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="height">Hauteur (cm)</label>
                        <input type="number" name="height" id="height" class="form-control" v-model="wrapper.height" required>
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
            
        },

        data() {
            return {
                

                wrappers: [{
                    width: null,
                    height: null,
                    length: null,
                    weight: null,
                    is_nophytho: false,
                    is_phythoexiste: false,
                    is_phytho_your_own: false,
                    is_phytho_provide_tosma: false,
                    is_origincertificat:false,
                    is_noorigincertificat:false,
                    is_origin_certificat_your_own:false,
                    is_origin_certificat_provide_to_sma:false,
                    origincountry:null,
                    destinationcountry:null,
                    originregion:null,
                    destinationregion:null,
                    products: []
                }],
            }
        },
        computed: {
            wrappers_count() {
                return this.wrappers.length;
            },
        },
        methods: {
            onClosePackage(wrapper_index) {
                if(this.wrappers.length>1)
                this.wrappers.splice(wrapper_index, 1);
            },
            incrementWrapper() {
                this.wrappers.push({
                    width: null,
                    height: null,
                    length: null,
                    weight: null,
                    origincountry:null,
                    is_nophytho: false,
                    is_phythoexiste: false,
                    is_phytho_your_own: false,
                    is_phytho_provide_tosma: false,
                    is_origincertificat:false,
                    is_noorigincertificat:false,
                    is_origin_certificat_your_own:false,
                    is_origin_certificat_provide_to_sma:false,
                    destinationcountry:null, 
                    originregion:null,
                    destinationregion:null,
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
            onSubmitPackageForm() {
                
                sessionStorage.setItem('wrappers', JSON.stringify(this.wrappers));
                
                return window.location.href = '/checkquoteforpackage'; 
                
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
