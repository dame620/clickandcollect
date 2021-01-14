<template>
    <div class="page-5">
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
                <div class="col-left background-2">
                  <div class="banner-description-container">
                    <p>Some text!</p>
                    <h2>SOME TEXT  SHOULD GO HERE </h2>
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
          <!-- <div class="option-container">
            <label class="styled-checkbox">
              <span>pass necessaire</span>
              <input type="checkbox" name="" id="" />
              <div class="checkbox"></div>
            </label>
            <label class="styled-checkbox">
              <span>ajouter certif orgine</span>
              <input type="checkbox" name="" id="" />
              <div class="checkbox"></div>
            </label>
            <label class="styled-checkbox">
              <span>ajouter phyto</span>
              <input type="checkbox" name="" id="" />
              <div class="checkbox"></div>
            </label>
            <button class="btn-retour">
              <i class="fas fa-chevron-left"></i> RETOUR
            </button>
          </div> -->  
             <form action="">
              <div v-if="step==1">
                <div class="pickup-container">
                  <div class="pickup-bar">
                    <!-- multistep progress bar start-->
                    <div class="progress-container">
                      <ul class="progressbar">
                          <li class="active">step1</li>
                          <li>step2</li>
                          <li>step3</li>
                      </ul>
                    </div>
                    <!-- multistep progress barend-->
                  </div>
                  <!-- <div class="checkboxes">
                    <label class="styled-checkbox">
                      <span>VALIDER PICK UP</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox">
                      <span>DROP OFF GRATUIT</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                  </div> -->
                  <div class="my-input" id="product-form-group-row-container">
                    <p>INFO DU LIEU DE RAMASSAGE</p>
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">CODE POSTAL
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.pickuppostalCode" required> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">CityName
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.pickupcityName"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Adress 
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupaddressLine1"  placeholder="votre Adress"> 
                        </label>
                      </div>
                      <div class="form-group">
                            <label for="">Telephone
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupphone" placeholder="telephone"> 
                            </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pickup-container">
                  <p class="pickup-bar">
                    <i class="icn-home-address-location"></i>
                    DESTINATAIRE
                  </p>
                  <div class="my-input" id="product-form-group-row-container">
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">Mobil Phone
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupmobilePhone" placeholder="telephone"> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">companyName
                            <input type="text" class="form-control" v-model="shipmentdetails.pickupcompanyName" placeholder="Company Name"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Nom de la Personne 
                        <input type="text" class="form-control" v-model="shipmentdetails.pickupfullName" placeholder="Nom Complet">                           
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">Email
                          <input type="text" class="form-control" v-model="shipmentdetails.pickupemail" placeholder="entrez l'email de la personne à contacter"> 
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="submit-container">
                  <button class="submit" @click.prevent="nextstep()">
                    suivant <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
              </div>
              <div v-if="step==2">
                <div class="pickup-container">
                  <div class="pickup-bar">
                    <!-- multistep progress bar start-->
                    <div class="progress-container">
                      <ul class="progressbar">
                          <li class="active">step1</li>
                          <li class="active">step2</li>
                          <li>step3</li>
                      </ul>
                    </div>
                    <!-- multistep progress barend-->
                  </div>
                  <!-- <div class="checkboxes">

                    <label class="styled-checkbox">
                      <span>VALIDER PICK UP</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox">
                      <span>DROP OFF GRATUIT</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                  </div> -->
                  
                  <div class="my-input" id="product-form-group-row-container">
                    
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">CODE POSTAL
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.receiverpostalCode"> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">CityName
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.receivercityName"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Adress 
                            <input type="text" class="form-control" v-model="shipmentdetails.receiveraddressLine1"  placeholder="votre Adress"> 
                        </label>
                      </div>
                      <div class="form-group">
                            <label for="">Telephone
                            <input type="text" class="form-control" v-model="shipmentdetails.receiverphone" placeholder="ttelephone"> 
                            </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pickup-container">
                  <p class="pickup-bar">
                    <i class="icn-home-address-location"></i>
                    DESTINATAIRE
                  </p>
                  <div class="my-input" id="product-form-group-row-container">
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">Mobil Phone
                            <input type="text" class="form-control" v-model="shipmentdetails.receivermobilePhone" placeholder="telephone"> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">companyName
                            <input type="text" class="form-control" v-model="shipmentdetails.receivercompanyName" placeholder="company name"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Nom de la Personne 
                        <input type="text" class="form-control" v-model="shipmentdetails.receiverfullName" placeholder="Nom Complet">                           
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">Email
                          <input type="text" class="form-control" v-model="shipmentdetails.receiveremail" placeholder="entrez l'email de la personne à contacter"> 
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="submit-container">
                  <button class="submit" @click.prevent="previousstep()">
                    <i class="fas fa-chevron-left"></i> prececent
                  </button>

                  <button class="submit" @click.prevent="nextstep()">
                    suivant <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
              </div>
              <div v-if="step==3">
                <p>detail step3</p>
                <div class="pickup-container">
                  <div class="pickup-bar">
                    <!-- multistep progress bar start-->
                    <div class="progress-container">
                      <ul class="progressbar">
                          <li class="active">step1</li>
                          <li class="active">step2</li>
                          <li class="active">step3</li>
                      </ul>
                    </div>
                    <!-- multistep progress barend-->
                  </div>
                  <!-- <div class="checkboxes">
                    <label class="styled-checkbox">
                      <span>VALIDER PICK UP</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                    <label class="styled-checkbox">
                      <span>DROP OFF GRATUIT</span>
                      <input type="checkbox" name="" id="" />
                      <div class="checkbox"></div>
                    </label>
                  </div> -->
                  <div class="my-input" id="product-form-group-row-container">

                    
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">CODE POSTAL
                            <input type="text" class="form-control" placeholder="code postal" v-model="shipmentdetails.shipperpostalCode"> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">CityName
                            <input type="text" class="form-control" placeholder="nom de la ville" v-model="shipmentdetails.shippercityName"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Adress 
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperaddressLine1"  placeholder="votre Adress"> 
                        </label>
                      </div>
                      <div class="form-group">
                            <label for="">Telephone
                            <input type="text" class="form-control" v-model="shipmentdetails.shipperphone" placeholder="telephone"> 
                            </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pickup-container">
                  <p class="pickup-bar">
                    <i class="icn-home-address-location"></i>
                    DESTINATAIRE
                  </p>
                  <div class="my-input" id="product-form-group-row-container">
                    <div class="my-row form-group-row">
                      <div class="form-group">
                        <label for="">Mobil Phone
                            <input type="text" class="form-control" v-model="shipmentdetails.shippermobilePhone" placeholder="telephone"> 
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">companyName
                            <input type="text" class="form-control" v-model="shipmentdetails.shippercompanyName" placeholder="company name"> 
                        </label>
                      </div>
                    </div>

                    <div class=" my-row form-group-row">
                      <div class="form-group">
                        <label for="">Nom de la Personne 
                        <input type="text" class="form-control" v-model="shipmentdetails.shipperfullName" placeholder="Nom Complet">                           
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="">Email
                          <input type="text" class="form-control" v-model="shipmentdetails.shipperemail" placeholder="entrez l'email de la personne à contacter"> 
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="submit-container">
                  <button class="submit" @click.prevent="previousstep()">
                    <i class="fas fa-chevron-left"></i>precedent 
                  </button>

                  <button class="submit" @click.prevent="OnSubmitForm()">
                    enregistrer <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
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
  .background-2 {
    background-image: url("./assets/Picture-2 -1.png");
    background-size: 100% 100%;
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
    padding: 0 15px;
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
  
  
  
  /* ############ SCreen 5 CSS ############# */
.page-5 .col-left{
  position: relative;
  z-index: 2;
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
    font-size: 16px;
  } 
.page-5 .col-right{
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
    margin-bottom: 60px;
    text-transform: uppercase;
    font-size: 14px;
  }
  .page-5 .styled-checkbox .checkbox {
    margin-right: 20px;
    border:1px solid #ddd;
  }
  
  .option-container .btn-retour {
    padding: 12px;
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
    font-size: 28px;
  }
  
  /* ############ SCreen 5 CSS ############# */
  
  
  @media screen and (max-width: 1200px) {
    
    ul.nav li {
      padding: 9px 5px;
    }
  }
  @media screen and (max-width: 991px) {
   
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
    
    .page-5 .option-container {
      padding: 70px 20px;
    }
    .page-5 .banner-description-container {
        padding: 0 5%;
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
  
    .page-5 .col-left  h2 {
        font-size: 25px;
    }
  
    .page-5 .col-right{
      left: 0;
      min-width: 100%;
      margin-left: 0;
    }
    
    .page-5 .navbar {
        padding-left: 0;
    }
  
  
    footer span {
      font-size: 11px;
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
    .page-5  .banner-description-container{
      padding: 0px;
    }
    .page-5 .banner-description-container h2 {
      font-size: 20px;
    }
   
    .page-5 .navbar {
      padding-left: 0;
    }
   
  }
  


  .page-5 .pickup-container .pickup-bar {
  display: flex;
}
.page-5 .pickup-bar {
  background-color: #f1eee8;
  padding: 10px 10px 10px 170px;
  font-weight: 500;
  margin-top: 45px;
}
.page-5 .pickup-container .icn-tag{
  background-image: url("./assets/Certificat sign.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 25px;
  width: 38px;
}
.page-5 .pickup-container .icn-home-address-location{
  background-image: url("./assets/Destinataire Sign.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 27px;
  width: 38px;
}
.my-input{
  padding-left: 122px;
  width: 80%;
  margin:auto;
  padding-top: 30px;

}
 @media screen and (max-width: 950px) and (min-width: 770px) {
.my-row{
  display: block;
}
}
 @media screen and (max-width: 770px){
.my-input{
  padding-left: 0px;
}
.submit-container {
    padding-left: 0px!important;
  }
  .my-last-btn{
padding-left: 0px!important;
}
  button.submit {
    width: 45%!important;
  }
}
 @media screen and (max-width: 500px){
.my-row{
  display: block;
}
.page-5 .pickup-bar{
  padding: 10px 10px 10px 50px;
}
}
button.submit {
       padding: 18px;
    width: 50%;
    background-color: #eb954b;
    margin-right:15px;
    margin-top: 15px;
    margin-bottom: 20px;
    border: none;
    color: white;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 20px;
    cursor: pointer;
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
    margin-top: 30px;
  }
  button.submit i {
}.fa, .fas {
    font-weight: 900;
}
.my-last-btn{
padding-left: 90px;
    width: 55%;
    margin: auto;
    margin-bottom: 30px;
}
.my-last-btn a{
font-weight: 600;

} 
.my-last-btn a i{
  padding-right:  7px;
}
/*multi step progress bar start*/
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
                    border-color:#eb954b;
                    background-color: #eb954b;
                }
                .progressbar li.active + li:after{
                    background-color: #eb954b;
                }
/*multi step progress bar end*/
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
    
            this.step++; 
        },

      previousstep(){
          this.step--;
        }, 

      submitform(){
           

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
          //  this.$router.push('/envelope/create');


            
         
        }
    }
  
}
</script>