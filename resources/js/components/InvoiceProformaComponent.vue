<template>
 <div class="page-7">
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
          <img class="logo" src="assets/Africa logo.png" alt="" />
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
        <div class="col-left background-7">
          <div class="banner-description-container">
            <p>Some text!</p>
            <h2>SOME TEXT  SHOULD GO HERE</h2>
            <button>some text</button>
          </div>
        </div>
        <div class="col-right">
          <div class="heart-icon">
            <i class="fas fa-heart"></i>
          </div>
          <nav class="navbar nav-left">
            <div class="express-container">
              <i class="icn-express"></i>
              <p class="express">Express</p>
            </div>
            <ul class="nav">
              <li class="excellent">
                <a href="#"><i class="far fa-smile"></i> excellent!</a>
              </li>
            </ul>
          </nav>
          <div class="container">
            <p class="confirmation-message">
              votre envoi est bien pris en compte!
            </p>
            <div class="step-container">
              <p class="one"><span>1 </span></p>
              <p class="description">cliquez ici en bas pour recevoir la facture ou pour demander un pick up</p>
              <div class="checkboxes">
                <label class="styled-checkbox">
                  <span></span>
                  <button type="submit" @click="gotoemailpage">
                    RECEVOIR PAR EMAIL
                  </button>
                </label>
                <label class="styled-checkbox">
                  <span></span>
                  <button type="submit" @click="gotoinfoforshipment">
                    DEMANDEZ UN PICK UP
                  </button>
                </label>
              </div>
            </div>
            <div class="step-container">
              <p class="two"><span>2 </span></p>
              <p class="description">
                A reception de votre palement, nous confiernos votre paquet au
                transporteur
              </p>
            </div>
            <div class="step-container">
              <p class="three"><span>3 </span></p>
              <p class="description">
                Vous recevrez un lien suivi de votre envol par email
              </p>
            </div>
          </div>
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
          wrappers:null
         
        }
      },

      mounted(){
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
        
      },


        
        methods:{
      
            gotoemailpage(){
                this.$router.push('/fillemail');
            },

              gotoinfoforshipment(){
                  this.$router.push('/infofor_shipmentdhl');
            }
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
  display: flex;
  align-items: center;
  cursor: pointer;
}
.styled-checkbox button[type="submit"] {
  font-size: 25px;
  margin-top: 5px;
  cursor: pointer;
  background: #c0732f;
  width: 200px;
  border: none;
}
.styled-checkbox button[type="submit"]:hover{
    background: #eb954b;
}
.styled-checkbox .checkbox {
  min-height: 20px;
  min-width: 20px;
  height: 20px;
  width: 20px;
  box-shadow: 0 0 5px 1px #ddd;
  display: inline-block;
  position: relative;
  margin: 0;
}
.styled-checkbox button[type="submit"]:checked + .checkbox {
  background-color: #000;
}
.styled-checkbox button[type="submit"]:checked + .checkbox::after {
  content: "\2714";
  color: #fff;
  font-size: 18px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
header {
  display: flex;
  padding: 0 50px;
  justify-content: space-between;
  background-color: #fff;
}

header .language {
  max-width: 180px;
  text-align: right;
  position: relative;

  margin: 0;
  display: flex;
  flex-direction: column;
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
  display: flex;
  flex-direction: column;
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

.page-7 .col-left {
  position: relative;
  z-index: 2;
}

.page-7 .col-right {
  position: relative;
  z-index: 1;
  left: -110px;
  max-width: calc(50% + 110px);
  flex: 0 0 calc(50% + 110px);
  padding: 0;
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
  display: flex;
  /* margin: 0 -10px; */
}
.form-group {
  margin-bottom: 20px;
  padding: 0 10px;
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
  font-size: 15px;
} 
.heart-icon {
  text-align: center;
  background: #f2cda5;
  padding: 15px;
  color: white;
}

.navbar {
  display: flex;
  justify-content: space-between;
  background: #443838;
  color: white;
  padding-left: 70px;
}

.navbar .icon {
  display: none;
}
.express-container {
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

ul.nav li .excellent {
  padding-left: 10px;
}


/* ############ Screen 7 CSS ############# */


.page-7 .background-7 {
  background-image: url("./assets/Picture-7.png");
  padding: 10% 0 40%;
  background-size: 100% 100%;
}

.page-7 .navbar {
  padding-left: 110px;
}

.checkboxes {
  text-align: left;
}

.page-7 .styled-checkbox {
  flex-direction: row-reverse;
  justify-content: flex-end;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-size: 14px;
}
.page-7 .styled-checkbox .checkbox {
  margin-right: 15px;
  border:1px solid #ddd;
}

.nav-left {
  justify-content: unset;
}

.nav-left .nav li {
  padding-left: 50px;
}

.container {
  width: 80%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px 0;
}
.confirmation-message {
  padding: 15px 30px;
  background: #d1a34d;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
}
.step-container {
  display: flex;
  flex-direction: column;
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
  display: flex;
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
    flex-direction: column;
    padding-left: 35px;
  }

  /* mobile menu css */
  
  .page-7 .banner-description-container{
    padding: 0 20px;
  }
  .page-7 .col-left h2{
    font-size: 25px;
  }

  .page-7 .navbar ul{
    display: block;
  }
  .page-7 .container {
    padding-left: 85px;
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

 
  .page-7 .col-right{
    left: 0;
    min-width: 100%;
    margin-left: 0;
  }
  
  .checkbox-container .right-col,
  .checkbox-container .left-col {
    padding-left: 0;
    max-width: 40%;
  }

  
  .form-group-row {
    flex-direction: column;
  }
  .line-heading-2 {
    width: calc(100% + 80px);
    margin-left: -40px;
  }
  

  footer span {
    font-size: 11px;
  }
  .page-7 .container {
    padding-left: 0px;
  }
  
}

@media screen and (max-width: 600px) {
  header {
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 20px;
    flex-wrap: wrap;
  }

  .follow-container {
    flex: 0 0 50%;
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
    flex: 0 0 35%;
    order: 2;
    max-width: 35%;
    margin-right: 35px;
  }
  header .logo-container {
    flex: 0 0 100%;
    order: 1;
    max-width: 100%;
    text-align: center;
  }

  
  .banner {
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

  .page-7 .navbar {
    padding-left: 0;
  }
  .page-7 .col-left {
    padding: 30px;
  }
}

  
</style>


