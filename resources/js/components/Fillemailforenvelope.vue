<template>
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
            <form class="delivery-info-form" @submit.prevent="OnSubmitForm()">
                <div class="delivery-info-form-container">

                    <span>renseignez vos informations personnels pour la facture</span>
                    <div class="product-container" id="product-container">

                        <div id="product-form-group-row-container">
                            <div class="form-group-row">
                                <div class="form-group">
                                <label for=""
                                >Nom
                                <input type="text" name="" id="" v-model="last_name" required/>
                                </label>
                                </div>
                                <div class="form-group">
                                    <label for=""
                                    >Prenom
                                    <input type="text" name="" id="" v-model="first_name" required/>
                                </label>
                                </div>
                            </div>


                            <div class="form-group-row">
                            <div class="form-group">
                                <label for=""
                                >TelePhone
                                <input type="text" name="" id="" v-model="telephone" required/>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for=""
                                >Enterprise(optional)
                                <input type="text" name="" id="" v-model="company_name"/>
                                </label>
                            </div>
                            </div>
                            <div class="form-group-row">
                                <div class="form-group">
                                    <label for=""
                                    >Email
                                    <input type="text" name="" id="" v-model="email" required/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-container">
                        <button class="submit">
                        suivant <i class="fas fa-chevron-right"></i>
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

<script>
    export default {

      data() {
        return {
          first_name:null,
          last_name:null,
          company_name:null,
          email:null,
          telephone:null
         
        }
      },

      mounted(){
           console.log('Component mounted.');
            
        },


        
        methods:{
            myFunction() {
            var x = document.getElementById("navbar");
            if (x.className === "navbar") {
              x.className += " responsive";
            } else {
              x.className = "navbar";
            }
              },
      
             OnSubmitForm(){
            sessionStorage.setItem('first_name', JSON.stringify(this.first_name));
            sessionStorage.setItem('last_name', JSON.stringify(this.last_name));
            sessionStorage.setItem('company_name', JSON.stringify(this.company_name));
            sessionStorage.setItem('telephone', JSON.stringify(this.telephone));
            sessionStorage.setItem('email', JSON.stringify(this.email));


            this.$router.push('/invoicequotepackage');
            
                }
             }


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

/*.background-2 {
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
  margin-bottom: 25px;
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
  background-image: url("./assets/Picture.png");
  background-size: 100% 100%;
  padding-bottom: 31%;
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
  /*background: #f1eee7;
*/  padding: 20px 0;
}

.delivery-info-form-container {
  width: 600px;
  margin: 0 auto;
}

.delivery-info-form-container span{
  display: flex;
  justify-content: center;
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
  align-items: center;
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
  background-image: url("./assets/Small envelope closed.png");
  display: inline-block;
  /*height: 30px;
  width: 30px;*/
  height: 35px;
    width: 48px;
  background-repeat: no-repeat;
  background-size: inherit;
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
  background-image: url("./assets/Small envelope open.png");
  display: inline-block;
  height: 49px;
  width: 49px;
  background-repeat: no-repeat;
  background-size: inherit;
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
    margin:40px 0 ;
  }
  button.submit {
    padding: 15px;
    width: 70%;
    background-color: #eb954b;
    margin-top: 15px;
    margin-bottom: 50px;
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
    background-image: url("./assets/Banner.png");
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
    background-image: url("./assets/Calendar logo.png");
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
    background-image: url("./assets/Coutera icon.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 30px;
    width: 30px;
  }
  .page-6 .pickup-container .icn-home-address-location{
    background-image: url("./assets/Address icon.png");
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
    background-image: url("./assets/Picture-7.png");
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

      .delivery-info-form-container span{
          display: flex;
          justify-content: center;
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
.my-form-row .form-group{
  margin-bottom: 0;
  padding: 15px 20px;
}
.my-last-btn{
padding-left: 90px;
    width: 75%;
    margin: auto;
    margin-bottom: 30px;
}
.my-last-btn a{
font-weight: 600;

} 
.my-last-btn a i{
  padding-right:  7px;
}
.my-form-row{
  background-color: white;
      margin-bottom: 15px;
      border-radius:10px;
}
.my-env-row{
  display: flex;
  align-items: center;
}
.my-env-row img{
 
  margin-right: 12px;
}
.my-env-row label{
  margin-right:12px;
  margin-bottom: 0;
}
.my-env-row p{
  font-weight: 600;
  }
  #product-form-group-row-container{
    margin:110px 0 70px 0;
  }
  
  
</style>


