<template>
    <form @submit.prevent="onSubmitEnvelopeForm()">
        <div class="products-counter">
            <span>{{ wrappers_count }} ENVELOPPE{{ wrappers_count > 1 ? 's' : '' }}</span>
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
                        <label for="weight">Region d'origine</label>
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
                    is_smallformat: false,
                    is_bigformat: false,
                    weight: null,
                    origincountry:null,
                    originregion:null,
                    destinationcountry:null,
                    destinationregion:null,
                    products: [],
                }],
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
            incrementWrapper() {
                this.wrappers.push({
                    is_bigformat: null,
                    is_smallformat: null,
                    origincountry:null,
                    originregion:null,
                    destinationcountry:null,
                    destinationregion:null,
                    weight: null,
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
                sessionStorage.setItem('wrappers', JSON.stringify(this.wrappers));
             
                return window.location.href = '/invoiceenvelope';
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
