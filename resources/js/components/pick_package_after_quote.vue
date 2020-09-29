<template>
    <form @submit.prevent="onSubmitPackageForm" ref="packageForm">

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
                        <label for="weight">Regions d'origine</label>
                        
                        <region-select v-model="wrapper.originregion" :country="wrapper.origincountry" :region="wrapper.originregion" />
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
                        <label for="weight">Region de destination</label>
                        
                        <region-select v-model="wrapper.destinationregion" :country="wrapper.destinationcountry" :region="wrapper.destinationregion" />
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
                <span>{{ wrapper.products.length }} produit {{ wrapper.products.length > 1 ? 's' : '' }}</span>
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

            <div class="certificats">
                    <div class="container-phytho" style="display:flex;">
                        <div class="form-group col-md-6">
                            <label for="" style="font-size:15px;">AJOUTER  PHYTHO</label>
                            <input type="checkbox" v-model="is_phytho" >
                            
                        </div>

                        <div class="form-group col-md-6">
                            <label for="" style="font-size:15px;">PAS NECESSAIRE</label>
                            <input type="checkbox" v-model="is_nophytho">
                            
                        </div>
                    </div>

                    <div class="col-md-6" v-if="is_phytho">
                        <div class="form-group">
                            <label for="">UPLOADER LE FICHIER</label>
                            <input type="file" class="form-control" name="certificatoforigine" @change="selectFile">                        
                        </div>
                    </div>

                    <!--div class="container-phytho" style="display:flex;">
                        <div class="form-group col-md-6">
                            <label for="" style="font-size:15px;">AJOUTER UN CERTIFICAT D'ORIGIN</label>
                            <input type="checkbox" v-model="is_origincertificat" >
                            
                        </div>

                        <div class="form-group col-md-6">
                            <label for="" style="font-size:15px;">PAS NECESSAIRE</label>
                            <input type="checkbox" v-model="is_noorigincertificat">
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6" v-if="is_origincertificat">
                        <div class="form-group">
                            <label for="">UPLOADER LE FICHIER</label>
                            <input type="text">
                        </div>
                    </div-->
            </div>


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

        watch:{
       is_nophytho(value){
           if(value==true){
               this.is_phytho=false;
           }
       },

      is_phytho(value){
          if(value==true){
              this.is_nophytho=false;
          }

      },

      is_origincertificat(value){
           if(value==true){
               this.is_noorigincertificat=false;
           }
       },

      is_noorigincertificat(value){
          if(value==true){
              this.is_origincertificat=false;
          }

      }

    },

        props: ['path'],
        data() {
            return {
                is_origincertificat:false,
                is_noorigincertificat:false,
                is_nophytho: false,
                is_phytho: false,

                wrappers: [{
                    width: null,
                    height: null,
                    length: null,
                    weight: null,
                    origincountry:null,
                    originregion:null,
                    destinationcountry:null,
                    destinationregion:null,
                    certificatoforigine: null,
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
            onClosePackage(wrapper_index) {
                if(this.wrappers.length>1)
                this.wrappers.splice(wrapper_index, 1);
            },
            resetForm() {
                this.wrappers = this.wrappers
            },
            incrementWrapper() {
                this.wrappers.push({
                    width: null,
                    height: null,
                    length: null,
                    weight: null,
                    origincountry:null,
                    originregion:null,
                    destinationcountry:null,
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
                
                this.loading = true;
                
                  
                    /*axios.post('/login', {
                    firstName: 'Finn',
                    lastName: 'Williams'
                    })
                    .then((response) => {
                    console.log(response);
                    }, (error) => {
                    console.log(error);
                    });*/

                axios.post(this.path, {
                    data: this.wrappers
                }).then(({data}) => {
                   
                   if(data.products.length<1){
                     alert("veuillez renseigner au moins un produit")  
                   };
                    if (data.success && data.wrappers.length > 0 && data.products.length > 0) {
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
        mounted() {
            
            const jsonWrappers = sessionStorage.getItem('wrappers');
            let wrappers = null

            if (jsonWrappers != null && jsonWrappers != undefined) {
                wrappers = JSON.parse(jsonWrappers);
            }
            if(wrappers!=null){
                this.wrappers = wrappers;
            }
                

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
