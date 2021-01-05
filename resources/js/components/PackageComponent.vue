<template>
    <!--div class="container">
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


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Pays de dest</label>
                            <country-select v-model="wrapper.destinationcountry" :country="wrapper.destinationcountry" topCountry="US" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">Region de Dest</label>
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
                <hr-->
                <!--debut certificat phytho-->
                <!--div class="phytho-container" style="display:flex;">
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

                </div-->  
            <!--fin certificat phytho-->

            <!--debut certificat origine-->

                <!--div class="phytho-container" style="display:flex;">
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

            </div-->
                        <!--fin certificat origin-->

            <!--div class="form-group">

                <button type="submit" class="btn btn-primary">
                    Enregistrer
                </button>
            </div>
        </form>
    </div-->
<div class="page-4">
    <div class="wrapper">
      <header>
        <div class="language">
          <select name="language" id="" class="language-toggle">
            <option value="none" selected disabled hidden>language</option>
            <option value="">English</option>
            <option value="">Arabic</option>
            <option value="">Sawahili</option>
            <option value="">Russian</option>
            <option value="">Chinese</option>
          </select>
        </div>
        <div class="logo-container">
          <img class="logo" src="./assets/Africa logo.png" alt="" />
        </div>
        <div class="follow-container">
          <h3>Follow us</h3>
          <div class="social-icon-container">
            <a href="#" class="social-icn-fb"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="#" class="social-icn-twitter"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="#" class="social-icn-google"
              ><i class="fab fa-google-plus-g"></i
            ></a>
            <a href="#" class="social-icn-pinterest"
              ><i class="fab fa-pinterest-p"></i
            ></a>
            <a href="#" class="social-icn-linkedin"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>
      </header>

      <div class="row">
        <div class="col-left background-4">
          <div class="banner-description-container">
            <p>Some text!</p>
            <h2>SOME TEXT SHOULD Go HERE</h2>
            <button>some text</button>
          </div>
        </div>
        <div class="col-right">
          <div class="heart-icon">
            <i class="fas fa-heart"></i>
          </div>
          <nav class="navbar" id="navbar">
            <div class="express-container">
              <i class="icn-express"></i>
              <p class="express">Express</p>
            </div>
            <ul class="nav">
              <li>
                <a href="#">expediteur</a>
              </li>
              <li>
                <a href="#" class="active">envoi</a>
              </li>
              <li>
                <a href="#">destinataire</a>
              </li>
              <li>
                <a href="#">options</a>
              </li>
              <li>
                <a href="#">prix</a>
              </li>
            </ul>
            <a href="javascript:void(0);" class="icon" @click="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </nav>
          <div class="delivery-type">
            <div class="delivery-type-container">
              <div class="envelop">
                <i class="icn-envelop"></i>
                <label
                  >Enveloppe

                  <input type="checkbox" v-model="is_envelope" @click.prevent="gotoenvelopeform()"/>
                  <div class="checkbox"></div>
                </label>
              </div>
              <div class="packet">
                <i class="icn-packet"></i>
                <label
                  >Paquet

                  <input type="checkbox" v-model="is_package"/>
                  <div class="checkbox"></div>
                </label>
              </div>
            </div>
          </div>
          <form @submit.prevent="onSubmitPackageForm()" class="delivery-info-form">
            <div class="delivery-info-form-container" v-for="(wrapper, wrapper_index) in wrappers" :key="wrapper_index">
              <!--start select-->
              <div class="select-form-container">
                
              </div> 
              <!--end select-->

              <div class="packet-container" id="packet-container">
                <!--start button plus moins-->
                <div class="packet-heading-row">
                  <div class="heading-container">
                    <i class="icn-small-packet"></i>
                    <p>paquet {{ wrapper_index+1 }}</p>
                  </div>
                  <div class="heading-container">
                    <button type="button" @click.prevent="decrementWrapper()">
                      <i class="fas fa-minus minus" id="remove-packet"></i>
                    </button>
                    <p>paquet</p>
                      <button  type="button" @click.prevent="incrementWrapper()">
                        <i class="fas fa-plus plus" id="add-packet"></i>
                      </button>
                  </div>
                </div>
                <!--end button plus moins-->

                <div id="packet-form-group-row-container">
                  <!--select country start-->
                  <div class="form-group-row">
                    <div class="form-group">
                        <label for="">Pays d'origine</label>
                        <country-select v-model="wrapper.origincountry" :country="wrapper.origincountry" topCountry="US" class="select-dropdown"/>     
                    </div>
                    <div class="form-group">
                        <label for="">Pays de destination</label>
                        <country-select v-model="wrapper.destinationcountry" :country="wrapper.destinationcountry" topCountry="US" class="select-dropdown"/>
                    </div>
                  </div>
                  <div class="form-group-row">
                    <div class="form-group">
                        <label for="">Region d'origine</label>
                        <region-select v-model="wrapper.originregion" :country="wrapper.origincountry" :regionName=true :region="wrapper.originregion" class="select-dropdown"/>                    
                    </div>
                    <div class="form-group">
                        <label for="">Region de Destination</label>
                        <region-select v-model="wrapper.destinationregion" :country="wrapper.destinationcountry" :regionName=true :region="wrapper.destinationregion" class="select-dropdown"/>                    
                    </div>
                  </div>
                  <!--select country end-->
                  <div class="form-group-row" id="packet-form-group-row">
                    <div class="form-group">
                      <label for=""
                        >Longueur cm
                        <input type="number" name="length" id="length" class="form-control" v-model="wrapper.length" required>
                      </label>
                    </div>
                    <div class="form-group">
                      <label for=""
                        >Largueur cm
                        <input type="number" name="width" id="width" class="form-control" v-model="wrapper.width" required>
                      </label>
                    </div>
                  </div>
                  

                  <div class="form-group-row">
                    <div class="form-group">
                      <label for=""
                        >Hauteur cm
                        <input type="number" name="height" id="height" class="form-control" v-model="wrapper.height" required>
                      </label>
                    </div>
                    <div class="form-group">
                      <label for=""
                        >Poids kg
                        <input type="number" name="weight" id="weight" class="form-control" v-model="wrapper.weight" required>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-container" id="product-container">
                <div class="packet-heading-row">
                  <div class="heading-container">
                    <i class="icn-small-product"></i>
                    <p>contenu paquet {{ wrapper_index+1 }}</p>
                  </div>
                  <div class="heading-container">
                    <button type="button" @click.prevent="decrementProduct(wrapper_index)">
                      <i class="fas fa-minus minus" id="remove-product"></i>
                    </button>
                    <p>{{ wrapper.products.length }}produit</p>
                    <button type="button" @click.prevent="incrementProduct(wrapper_index)">
                      <i class="fas fa-plus plus" id="add-product"></i>
                    </button>
                  </div>
                </div>
                <div id="product-form-group-row-container" v-for="(product, product_index) in wrapper.products" :key="product_index">
                  <div class="form-group-row">
                    <div class="form-group">
                      <label for=""
                        >Nature du Product
                        <input type="text" name="product_type" v-model="product.product_type" class="form-control">
                      </label>
                    </div>
                    <div class="form-group">
                      <label for=""
                        >Description
                        <textarea name="description" v-model="product.description" class="form-control"></textarea>
                      </label>
                    </div>
                  </div>

                  <div class="form-group-row">
                    <div class="form-group">
                      <label for=""
                        >Prix Unitaire
                        <input type="number" name="unitprice" v-model="product.unit_price" class="form-control">
                      </label>
                    </div>
                    <div class="form-group">
                      <label for=""
                        >Quantite
                        <input type="number" name="quantity" v-model="product.quantity" class="form-control">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" my-col checkbox-container">
                <div class="left-col" id="checkbox-left-col">
                  <label class="styled-checkbox">
                    <span>Ajouter un certificat phytho</span>
                    <input type="checkbox" v-model="wrapper.is_phythoexiste" :disabled="wrapper.is_nophytho==true">
                    <div class="checkbox"></div>
                  </label>
                  <div class="" id="left-checkbox-label-child-container">

                    <label class="styled-checkbox" v-if="wrapper.is_phythoexiste">
                        <span>Vouz avez votre phytho</span>
                        <input type="checkbox" :disabled="wrapper.is_phytho_provide_tosma==true"  v-model="wrapper.is_phytho_your_own">
                      <div class="checkbox"></div>
                    </label>

                    <label class="styled-checkbox" v-if="wrapper.is_phythoexiste">
                        <span>on le cheche pr vous</span>
                        <input type="checkbox" v-model="wrapper.is_phytho_provide_tosma" :disabled="wrapper.is_phytho_your_own==true">
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox">
                        <span>phyto Pas Necessaire</span>
                        <input type="checkbox" :disabled="wrapper.is_phythoexiste==true"  v-model="wrapper.is_nophytho" id="checkbox-right">
                      <div class="checkbox"></div>
                    </label>
                  </div>

                </div>
                <div class="right-col" id="checkbox-right-col">
                  <label class="styled-checkbox">
                      <span>Ajouter un certificat d'origin</span>
                        <input type="checkbox" v-model="wrapper.is_origincertificat" :disabled="wrapper.is_noorigincertificat==true">
                      <div class="checkbox"></div>
                    </label>
                  <div class="" id="right-checkbox-label-child-container" >
                    <label class="styled-checkbox" v-if="wrapper.is_origincertificat">
                        <span>Vouz avez votre cert origine</span>
                        <input type="checkbox" :disabled="wrapper.is_origin_certificat_provide_to_sma==true"  v-model="wrapper.is_origin_certificat_your_own">
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox" v-if="wrapper.is_origincertificat" >
                        <span>on le cheche pr vous</span>
                        <input type="checkbox" v-model="wrapper.is_origin_certificat_provide_to_sma" :disabled="wrapper.is_origin_certificat_your_own==true">
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox">
                        <span>certificat d'origin Pas Necessaire</span>
                        <input type="checkbox" :disabled="wrapper.is_origincertificat==true"  v-model="wrapper.is_noorigincertificat">
                      <div class="checkbox"></div>
                    </label>
                  </div>
                </div>
              </div>

              <div class="note-container">
                <p class="note">
                  Si Alimentaire,fournir un certificat phytosaritaire ou nous en
                  demander
                </p>
              </div>
            </div>
            <div class="submit-container">
                <button type="submit" class="submit">
                  suivant <i class="fas fa-chevron-right"></i>
                </button>
            </div>
          </form>
        </div>
      </div>
      <footer>
        <span>COLLECTANDCLICK.AFRICA</span>
        <span>ALL RIGHTS RESERVED.</span>
      </footer>
    </div>
  </div>

</template>

<script>
    export default {

        
          mounted() {
            console.log('Component mounted.')
            
        },

        data() {
            return {
                
                is_package:true,
                is_envelope:false,

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
                    products: [{
                        product_type: null,
                        quantity: null,
                        description: null,
                        unit_price: null
                        }]
                }],
            }
        },
        computed: {
            wrappers_count() {
                return this.wrappers.length;
            },
        },
        methods: {
           myFunction() {
            var x = document.getElementById("navbar");
            if (x.className === "navbar") {
              x.className += " responsive";
            } else {
              x.className = "navbar";
            }
              },

            gotoenvelopeform(){
              this.is_package=false

                this.$router.push('/envelopeform');
            },

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
                    products: [{
                        product_type: null,
                        quantity: null,
                        description: null,
                        unit_price: null
                    }]
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
                this.$router.push('/checkquoteforpackage');

                
            },
        },
      
    }
</script>


<style scoped>
/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/

/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/

* {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.active {
  font-weight: bold;
}
.show {
  display: block !important;
}
body {
  font-family: "Work Sans", sans-serif;
  font-size: 16px;
  color: #3a3635;
}

.styled-checkbox {
  font-weight: 500;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  cursor: pointer;
  font-size: 14px;

}
.styled-checkbox input[type="checkbox"] {
  font-size: 15px;
  margin-top: 5px;
  display: none;
}
.styled-checkbox .checkbox {
  min-height: 20px;
  min-width: 20px;
  height: 20px;
  width: 20px;
  -webkit-box-shadow: 0 0 5px 1px #ddd;
  box-shadow: 0 0 5px 1px #ddd;
  display: inline-block;
  position: relative;
  margin: 0;
  border: 1px solid #ddd;
  background: white;
}
.styled-checkbox input[type="checkbox"]:checked + .checkbox {
  background-color: #000;
}
.styled-checkbox input[type="checkbox"]:checked + .checkbox::after {
  content: "\2714";
  color: #fff;
  font-size: 18px;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.wrapper {
  width: 100%;
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -webkit-box-flex: 2;
  -ms-flex-positive: 2;
  flex-grow: 2;
}

.col-left {
  background-image: url("./assets/Picture.png");
  background-position: right center;
  background-repeat: no-repeat;
  background-size: cover;

  display: -webkit-box;

  display: -ms-flexbox;

  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 30px;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

/*me.background-2 {
  background-image: url("./assets/Picture-2.png");
}*/

.col-left .logo {
  max-width: 260px;
}
.col-left h2 {
  color: #fff;
  font-size: 48px;
  position: relative;
  margin: 15px 0;
  padding-bottom: 20px;
}
.col-left h2::after {
  content: "";
  display: block;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: 0;
  height: 5px;
  width: 90px;
  background-color: #fff;
}

.col-right {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
  overflow: auto;
  padding: 20px;
}

.language {
  margin: 0 30px 30px auto;
  max-width: 180px;
  text-align: right;
  position: relative;
}
.language-toggle {
  border: none;
  text-transform: uppercase;

  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  background: url("./assets/drop-down-arrow.png") right center no-repeat;
  background-size: 15px;
  padding: 10px 20px;
}

.connection-container {
  width: 260px;
  margin: 40px auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  max-height: 100%;
}

.connection-container-fluid {
  width: 100%;
  max-width: 460px;
  /* width: 460px; */
}

.connection-container form h3 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 30px;
}
.form-group-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  /* margin: 0 -10px; */
}
.form-group {
  margin-bottom: 20px;
  padding: 0 10px;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.address-field {
  width: 100%;
}
.form-group label {
  font-weight: 600;
  color: #3a3635;
  margin-bottom: 5px;
  display: block;
}
.form-group input {
  height: auto;
  padding: 15px;
  border: 2px solid #cdcdcb;
  border-radius: 2px;
  width: 100%;
}

.form-group textarea {
  height: auto;
  padding: 15px;
  border: 2px solid #cdcdcb;
  border-radius: 2px;
  width: 100%;
}

.btn-connection {
  padding: 15px;
  width: calc(100% + 100px);
  margin-left: -50px;
  background-color: #eb954b;
  margin-top: 15px;
  margin-bottom: 20px;
  border: none;
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 15px;
  cursor: pointer;
}

.forgot-password,
.forgot-password a {
  text-align: center;
  font-weight: 600;
  text-decoration: none;
  color: #3a3635;
}

.line-heading {
  position: relative;
  text-align: center;
  margin: 30px 0;
}
.line-heading span {
  display: inline-block;
  background-color: #fff;
  padding: 10px 25px;
  font-size: 18px;
  font-weight: 600;
  color: #4b4748;
  position: relative;
  z-index: 1;
}
.line-heading::after {
  content: "";
  display: block;
  border-top: 1px solid #3a3635;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 100%;
}
.social-connection-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 80%;
  margin: 0 auto;
  text-align: center;
}

.btn-connection-google {
  padding: 15px 0px;
  width: calc(100% + 80px);
  margin-left: -40px;
  background-color: #806e6c;
  border: none;
  color: white;
  margin-bottom: 20px;
  font-size: 18px;
  font-weight: 600;
}

.btn-connection-fb {
  padding: 15px 0px;
  width: calc(100% + 80px);
  margin-left: -40px;
  background-color: #daaa85;
  border: none;
  color: white;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 20px;
}
.registration {
  display: inline-block;
  text-decoration: none;
  font-weight: 700;
  font-size: 16px;
  color: #4a4444;
  margin: 30px;
}

.social-container .line-heading {
  width: calc(100% + 180px);
  margin-left: -90px;
}
.social-icon-container {
  text-align: center;
}

.social-icon-container a {
  border-radius: 50%;
  height: 36px;
  width: 36px;
  line-height: 40px;
  margin: 1px;
  text-decoration: none;
  display: inline-block;
}
.social-icn-fb {
  background: #f2cda5;
}
.social-icn-twitter {
  background: #e29854;
}
.social-icn-google {
  background: #443838;
}
.social-icn-pinterest {
  background: #d6ad8c;
}
.social-icn-linkedin {
  background: #8a7272;
}
.social-icon-container a i {
  color: white;
  font-size: 18px;
}

footer {
  background-color: #3b3132;
  color: #ccc;
  padding: 20px 10px 20px 40px;
}

footer span {
  margin-right: 20px;
  font-size: 14px;
  font-weight: 600;
}

/*############# Screen 3 CSS #################*/

header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 0 50px;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  background-color: #fff;
}

header .language {
  max-width: 180px;
  text-align: right;
  position: relative;

  margin: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding-bottom: 10px;
}
header .language .language-toggle {
  padding: unset;
}
header .logo {
  max-width: 130px;
}
@media screen and (max-width: 600px) {
  header .logo {
    max-width: 110px;
  }
}

header .follow-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding-bottom: 10px;
}

header .follow-container h3 {
  text-align: center;
  padding: 10px;
}

header .follow-container .social-icon-container a {
  height: 25px;
  width: 25px;
  line-height: 25px;
}

header .follow-container .social-icon-container a i {
  font-size: 15px;
}

.page-3 {
  background-color: #fcf3ea;
}

.page-3 .banner {
  background-image: url("./assets/Background photo.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 202px 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-flex: 2;
  -ms-flex-positive: 2;
  flex-grow: 2;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.banner .banner-description {
  color: white;
  text-align: center;
  padding-right: 100px;
  max-width: 1000px;
  margin-left: auto;
}
.banner .banner-description p {
  padding-bottom: 20px;
}

.banner .banner-description button {
  background: #e29854;
  border: none;
  color: white;
  padding: 10px 15px;
  margin-top: 30px;
}

.africa-background {
  background-image: url("./assets/Africa background.png");
  /* background-position: center; */
  background-repeat: no-repeat;
  /* background-size: cover; */
  background-position: top 95% left -13%;
  background-size: 70%;

  padding: 70px 0px 150px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-flex: 2;
  -ms-flex-positive: 2;
  flex-grow: 2;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.africa-background .button-container {
  width: 100%;
  max-width: 30%;
}

.btn-quote {
  padding: 15px;
  width: calc(100%);
  background-color: #eb954b;
  margin-top: 15px;
  margin-bottom: 40px;
  border: none;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 15px;
  cursor: pointer;
}
.btn-pickup {
  padding: 15px 0px;
  width: calc(100%);
  background-color: #806e6c;
  border: none;
  color: white;
  font-size: 18px;
  font-weight: 600;
}
/*############# Screen 3 CSS ###########*/

/*############# Screen 4 CSS ###########*/
.background-4 {
  /*background-image: url("./assets/Benner.png");*/
  background-size: 100% 100%;
}
.banner-description-container {
  padding: 0px 80px;
  text-align: center;
}
.banner-description-container h2::after {
  display: none;
}
.banner-description-container p {
  color: white;
  font-style: italic;
  font-size: 20px;
}

.banner-description-container button {
  background: #eb954b;
  border: none;
  padding: 5px 20px;
  color: white;
  font-size: 18px;
}

.page-7 .col-left,
.page-4 .col-left,
.page-5 .col-left,
.page-6 .col-left {
  position: relative;
  z-index: 2;
}

.page-7 .col-right,
.page-4 .col-right,
.page-5 .col-right,
.page-6 .col-right {
  position: relative;
  z-index: 1;
  left: -110px;
  max-width: calc(50% + 110px);
  -webkit-box-flex: 0;
  -ms-flex: 0 0 calc(50% + 110px);
  flex: 0 0 calc(50% + 110px);
  padding: 0;
}

.heart-icon {
  text-align: center;
  background: #f2cda5;
  padding: 15px;
  color: white;
}

.navbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  background: #443838;
  color: white;
  padding-left: 70px;
}

.navbar .icon {
  display: none;
}
.express-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.express-container .icn-express {
  background-image: url("./assets/Airplane simbol.png");
  background-size: cover;
  height: 30px;
  width: 30px;
  margin-top: 4px;
}

.express {
  padding: 10px;
  font-size: 15px;
  font-weight: bold;
  text-transform: uppercase;
}
ul.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 0;
  margin: 0;
}
ul.nav li {
  list-style-type: none;
  padding: 8px 10px;
}
ul.nav li a {
  text-decoration: none;
  color: white;
  text-transform: uppercase;
}

.delivery-type {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: distribute;
  justify-content: space-around;
  padding: 50px 0;
}
.envelop {
  padding-top: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.packet {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.envelop label,
.packet label {
  font-weight: 500;
  padding: 10px 0;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.envelop input[type="checkbox"],
.packet input[type="checkbox"] {
  font-size: 15px;
  margin-top: 5px;
  display: none;
}
.envelop .checkbox,
.packet .checkbox {
  height: 25px;
  width: 25px;
  -webkit-box-shadow: 0 0 5px 1px #ddd;
  box-shadow: 0 0 5px 1px #ddd;
  display: inline-block;
  position: relative;
  margin-top: 10px;
  border: 1px solid #ddd;
}
.envelop input[type="checkbox"]:checked + .checkbox,
.packet input[type="checkbox"]:checked + .checkbox {
  background-color: #000;
}
.envelop input[type="checkbox"]:checked + .checkbox::after,
.packet input[type="checkbox"]:checked + .checkbox::after {
  content: "\2714";
  color: #fff;
  font-size: 18px;
  position: absolute;
  left: 5px;
  top: 1px;
}

.delivery-type .icn-envelop {
  background-image: url("./assets/Envelope.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 50px;
  width: 66px;
  display: inline-block;
}
.delivery-type .icn-packet {
  background-image: url("./assets/Package.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 65px;
  width: 66px;
  display: inline-block;
}

.delivery-type-container {
  width: 600px;
  margin: 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: distribute;
  justify-content: space-around;
}

.delivery-info-form {
  background: #f1eee7;
  padding: 20px 0;
}

.delivery-info-form-container {
  width: 600px;
  margin: 0 auto;
}

.packet-heading-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-left: -30px;
  margin-right: 10px;
  margin-bottom: 25px;
}

.packet-heading-row .heading-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.select-form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.page-4 .select-dropdown {
  padding: 15px;
  border-radius: 4px;
  width: 100%;
  outline: none;
}

.product-container,
.packet-container,
.select-form-container {
  padding-left: 80px;
}

.packet-container .icn-small-packet {
  background-image: url("./assets/Small packkage closed.png");
  display: inline-block;
  height: 30px;
  width: 30px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.packet-container .heading-container p,
.product-container .heading-container p {
  padding: 5px 10px 0;
  text-transform: uppercase;
  font-weight: bold;
}

.packet-container .heading-container .minus,
.product-container .heading-container .minus {
  background: #e29854;
  border-radius: 50%;
  padding: 8px;
  color: white;
}
.packet-container .heading-container .plus,
.product-container .heading-container .plus {
  background: #8a7272;
  border-radius: 50%;
  padding: 8px;
  color: white;
}
.product-container .icn-small-product {
  background-image: url("./assets/Small package open.png");
  display: inline-block;
  height: 30px;
  width: 45px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.checkbox-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 90px;
}
.checkbox-container .right-col,
.checkbox-container .left-col {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
  padding: 10px;
}
.checkbox-container .right-col .styled-checkbox {
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.checkbox-label-child-container {
  display: none;
}
/* .checkbox-container .left-col,
.checkbox-container .right-col {
  flex: 1;
  } */
  .checkbox-container .right-col {
    padding-right: 10px;
  }

  .checkbox-container .checkbox {
    margin-left: 10px;
  }

  .checkbox-label-container {
    padding: 10px 0;
  }

  .checkbox-label-container label {
    font-weight: 500;
    padding: 10px 0;
    position: relative;
  }

  .checkbox-label-container input[type="checkbox"] {
    font-size: 15px;
    /* margin-top: 5px; */
    display: none;
  }
  .checkbox-label-container .checkbox {
    height: 25px;
    width: 25px;
    display: inline-block;
    position: relative;
    top: 5px;
    border: 1px solid #cbcbcb;
  }
  .checkbox-label-container input[type="checkbox"]:checked + .checkbox {
    background-color: #000;
  }
  .checkbox-label-container input[type="checkbox"]:checked + .checkbox::after {
    content: "\2714";
    color: #fff;
    font-size: 18px;
    position: absolute;
    left: 5px;
    top: 1px;
  }

  .page-4 .styled-checkbox {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }

/* .checkbox-label-child-container .checkbox-label-container .checkbox {
  height: 15px;
  width: 15px; 
  } */

  .note-container {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 90px;
  }
  .note {
    width: 60%;
  }
  .submit-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 90px;
  }
  button.submit {
    padding: 15px;
    width: 70%;
    background-color: #eb954b;
    margin-top: 15px;
    margin-bottom: 20px;
    border: none;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
  }
  button.submit i {
    float: right;
  }
  /*############# Screen 4 CSS ###########*/

  /* ############ SCreen 5 CSS ############# */

  .page-5 .navbar {
    padding-left: 110px;
  }


  .page-5 .col-left {
    background-position: top center;
    padding: 40% 0 100px; 
  }


  .page-5 .option-container {
    padding: 70px 0;
    max-width: 350px;
    margin: 0 auto;
  }
  .page-5 .styled-checkbox {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin-bottom: 50px;
    text-transform: uppercase;
  }
  .page-5 .styled-checkbox .checkbox {
    margin-right: 20px;
  }

  .option-container .btn-retour {
    padding: 10px;
    width: calc(100%);
    background-color: #443838;
    margin-top: 15px;
    margin-bottom: 20px;
    border: none;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
  }

  .option-container .btn-retour i {
    float: left;
  }

  /* ############ SCreen 5 CSS ############# */

  /* ############ Screen 6 CSS ############# */
  .page-6 .background-6 {
    /*background-image: url("./assets/Banner.png");*/
    padding: 30% 0 100px;
  }





  .page-6 .navbar {
    padding-left: 120px;
  }

  .page-6 .calender-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 60px;
  }

  .page-6 .calender-icon {
   /* background-image: url("./assets/Calendar logo.png");*/
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 70px;
    width: 62px;
  }
  .page-6 .ui-datepicker-trigger {
    text-transform: uppercase;
    color: #fff;
    border: 0;
    outline: 0;
    background-color: #e9974d;
    padding: 10px 15px;
    font-weight: 600;
    margin-bottom: 20px;
    margin-top: 20px;
  }

  .page-6 .pickup-container .icn-tag{
   /* background-image: url("./assets/Coutera icon.png");*/
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 30px;
    width: 30px;
  }
  .page-6 .pickup-container .icn-home-address-location{
    /*background-image: url("./assets/Address icon.png");*/
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 30px;
    width: 30px;
  }


  .page-6 .pickup-container .pickup-bar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .page-6 .checkboxes {
    text-align: left;
    max-width: 250px;
    margin: 20px auto;
  }

  .styled-checkbox {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin-bottom: 30px;
    text-transform: uppercase;
  }
  .page-6 .styled-checkbox .checkbox {
    margin-right: 15px;
  }

  .page-6 .pickup-bar {
    background-color: #f1eee8;
    padding: 10px 10px 10px 200px;
    font-weight: 500;
  }
  .page-6 .pickup-bar span {
    color: #d39971;
  }

  .page-6 .pickup-address {
    text-align: center;
    padding: 50px;
    font-weight: 500;
    font-size: 18px;
  }

  /* ############ Screen 6 CSS ############# */

  /* ############ Screen 7 CSS ############# */


  .page-7 .background-7 {
   /* background-image: url("./assets/Picture-7.png");*/
    padding: 10% 0 30%;

  }

  .page-7 .navbar {
    padding-left: 110px;
  }

  .checkboxes {
    text-align: left;
    border: 1px solid #ddd;
  }

  .page-7 .styled-checkbox {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    margin-bottom: 50px;
    text-transform: uppercase;
  }
  .page-7 .styled-checkbox .checkbox {
    margin-right: 15px;
  }

  .nav-left {
    -webkit-box-pack: unset;
    -ms-flex-pack: unset;
    justify-content: unset;
  }

  .nav-left .nav li {
    padding-left: 50px;
  }

  .container {
    width: 80%;
    margin: 0 auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
  }
  .confirmation-message {
    padding: 15px 30px;
    background: chocolate;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
  }
  .step-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 20px;
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
  }
  .step-container p.one span,
  .step-container p.two span,
  .step-container p.three span {
    padding: 5px 10px;
    border-radius: 50%;
    color: white;
  }
  .step-container p.one span {
    background: #d6ad8c;
  }
  .step-container p.one,
  .step-container p.two,
  .step-container p.three,
  p.description {
    padding-bottom: 35px;
  }
  .step-container .form-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .step-container .form-group label {
    padding-left: 15px;
  }
  .step-container p.two span {
    background: #e29854;
  }
  .step-container p.three span {
    background: #443838;
  }
  /* ############ Screen 7 CSS ############# */

  @media screen and (max-width: 1200px) {
    .btn-connection-responsive {
      width: calc(100% + 40px);
      margin-left: -20px;
    }
    .social-container .line-heading {
      width: calc(100% + 60px);
      margin-left: -40px;
    }
    .africa-background .button-container {
      max-width: 40%;
    }

    .page-3 .banner .banner-description {
      padding-right: 50px;
    }

    .product-container,
    .packet-container,
    .select-form-container {
      padding-left: 160px;
    }
    .checkbox-container {
      padding-left: 170px;
    }

    .note-container {
      padding-left: 170px;
    }
    .delivery-type-container {
      padding-left: 110px;
    }
    ul.nav li {
      padding: 9px 5px;
    }
  }
  @media screen and (max-width: 991px)  {
    .checkbox-container {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      /*  -ms-flex-direction: column;
      flex-direction: column;*/
    }
  }
  @media screen and (max-width: 991px) {
    .btn-connection {
      width: 100%;
      display: block;
      margin-right: auto;
      margin-left: auto;
    }

    .social-container .line-heading {
      width: 100%;
      margin-right: auto;
      margin-left: auto;
    }
  /* .btn-connection-responsive {
    width: calc(100%);
    margin-left: 0px;
    } */
  /* .line-heading-2 {
    width: calc(100%) ;
    margin-left: 0px ;
    } */
    .africa-background .button-container {
      max-width: 50%;
    }

    .delivery-type-container {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .page-4 .col-left .banner-description-container {
      padding: 0px 50px;
    }
    .page-4 .col-left h2 {
      font-size: 30px;
    }
    .page-4 .col-right {
      max-width: calc(50% + 125px);
      -webkit-box-flex: 0;
      -ms-flex: 0 0 calc(50% + 125px);
      flex: 0 0 calc(50% + 125px);
      margin-left: -15px;
    }

    /* mobile menu css */
    .navbar {
      padding-left: 15px;
      position: relative;
    }

    .navbar .icon {
      display: block;
      float: right;
    }

    .navbar ul {
      display: none;
    }

    .responsive {
      position: relative;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .navbar .icon {
      position: absolute;
      right: 10px;
      top: 10px;
      color: white;
    }
    .responsive ul {
      display: block;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      padding-left: 35px;
    }

    /* mobile menu css */
    .delivery-info-form-container {
      width: unset;
    }
    .select-form-container .select-form-row {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .packet-container .packet-heading-row,
    .product-container .packet-heading-row {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .packet-container .packet-heading-row .heading-container,
    .product-container .packet-heading-row .heading-container {
      padding: 10px;
    }

    .page-4 .packet-container .form-group-row,
    .page-4 .product-container .form-group-row {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .product-container,
    .packet-container,
    .select-form-container {
      padding-left: 150px;
    }
    .checkbox-container {
      padding-left: 160px;
    }



    .checkbox-container .right-col,
    .checkbox-container .left-col {
      padding-left: 0;
      max-width: 55%;
    }

    .page-4 .styled-checkbox {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .note-container {
      padding-left: 160px;
    }
    .delivery-type-container {
      padding-left: 110px;
    }

    .page-5 .option-container {
      padding: 70px 55px;
    }
    .page-7 .banner-description-container,
    .page-6 .banner-description-container {
      padding: 0 20px;
    }
    .page-7 .col-left h2,
    .page-6 .col-left h2 {
      font-size: 25px;
    }

    .page-7 .navbar ul,
    .page-6 .navbar ul {
      display: block;
    }
    .page-7 .container {
      padding-left: 85px;
    }

    .page-6 .calender-container {
      padding-left: 150px;
    }
  }
  @media screen and (max-width: 768px) {
    .row {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .col-left,
    .col-right {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%;
    }

    .page-3 .banner {
      padding: 93px 0;
      display: block;
    }

    .page-3 .banner-description {
      margin-left: auto;
      max-width: 400px;
    }
    .page-3 .banner-description h1 {
      font-size: 16px;
    }
    .page-3 .banner-description h2 {
      font-size: 14px;
    }

    .page-7 .col-right,
    .page-4 .col-right,
    .page-5 .col-right,
    .page-6 .col-right {
      left: 0;
      min-width: 100%;
      margin-left: 0;
    }
    .page-4 .navbar {
      padding: 0 20px;
    }
    .page-4 .delivery-info-form-container {
      width: 100%;
      padding: 0 5%;
    }


    .page-4 .background-4 {
      padding: 190px 0;
    }

    .page-4 .select-form-container,
    .page-4 .packet-container,
    .page-4 .product-container,
    .page-4 .checkbox-container,
    .page-4 .note-container,
    .page-4 .submit-container {
      padding-left: 0;
    }

    .page-4 .form-group {
      padding: 0;
    }

    .page-4 .delivery-type-container {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      padding-left: 0;
    }

    .checkbox-container .right-col,
    .checkbox-container .left-col {
      padding-left: 0;
      max-width: 50%;
    }

    .page-4 .checkbox-container .right-col .styled-checkbox,
    .page-4 .checkbox-container .left-col .styled-checkbox {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
    }
  /* .connection-container-fluid {
    max-width: 60px;
    } */
    .form-group-row {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .line-heading-2 {
      width: calc(100% + 80px);
      margin-left: -40px;
    }
  /* .btn-connection-responsive {
    width: calc(100% + 40px);
    margin-left: -20px;
    } */

    .africa-background .button-container {
      max-width: 60%;
    }

    footer span {
      font-size: 11px;
    }
    .page-7 .container {
      padding-left: 0px;
    }
    .page-6 .navbar,
    .page-6 .calender-container {
      padding-left: 0;
    }
    .page-6 .pickup-bar {
      padding: 10px 10px 10px 50px;
    }
  }

  @media screen and (max-width: 600px) {
    header {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      padding: 20px;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .follow-container {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
      order: 2;
      max-width: 50%;
    }

    header .follow-container .social-icon-container a {
      height: 18px;
      width: 18px;
      line-height: 18px;
    }
    header .follow-container .social-icon-container a i {
      font-size: 10px;
    }

    header .language {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 35%;
      flex: 0 0 35%;
      -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
      order: 2;
      max-width: 35%;
      margin-right: 35px;
    }
    header .logo-container {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
      order: 1;
      max-width: 100%;
      text-align: center;
    }

    .page-3 .banner {
      padding: 60px 0;
      display: block;
    }

    .page-3 .banner-description h1 {
      font-size: 16px;
    }
    .page-3 .banner-description h2 {
      font-size: 14px;
    }

    .page-3 .banner .banner-description {
      padding-right: 0;
    }
    .banner {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }
    .banner .banner-description {
      padding-right: 0;
    }

    .banner .banner-description button {
      background: #e29854;
      border: none;
      color: white;
      padding: 10px 15px;
      margin-top: 30px;
    }
    .page-3 .africa-background {
      background-size: 100%;
    }
    .africa-background .button-container {
      max-width: 80%;
    }

    .page-4 .banner-description-container,
    .page-5  .banner-description-container{
      padding: 0px;
    }
    .page-4 .banner-description-container h2,
    .page-5 .banner-description-container h2 {
      font-size: 20px;
    }
    .page-4 .delivery-type-container {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
    /*  -ms-flex-direction: column;
      flex-direction: column;*/
      padding-left: 0;
    }

    .page-4 .checkbox-container .right-col,
    .page-4 .checkbox-container .left-col {
      padding-left: 0;
      max-width: 100%;
    }

    .page-4 .checkbox-container .right-col .styled-checkbox,
    .page-4 .checkbox-container .left-col .styled-checkbox {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
    }

    .page-5 .navbar {
      padding-left: 0;
    }
    .page-7 .navbar {
      padding-left: 0;
    }
    .page-6 .calender-container {
      padding-left: 15px;
    }
    .page-7 .col-left {
      padding: 30px;
    }
  }



  @media screen and (max-width: 500px) {
    .checkbox-container .left-col , .checkbox-container .right-col{
      flex: 0 0 100%;
    }
    .note {
      width: 100%;
    }

  }
    
</style>