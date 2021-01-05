<template>
  <div class="page-6">
    <!--loader start-->
      <h5 v-if="data_loading == false">PATIENTEZ NOUS CHERCHONS LE MEILLEUR PRIX POUR VOUS</h5>

        <div class="loader-container" v-if="data_loading == false">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    
    <!--loader start-->
    <div class="wrapper" v-if="data_loading == true">
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
        <div class="col-left background-6">
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
                <i class="fas fa-map-marker-alt"></i><a href="#">mon pick up</a>
              </li>
            </ul>
          </nav>
          <div class="calender-container">
            <div class="calender-icon"></div>
            <input type="date" style="display: none" />
            <input id="calender" hidden />
            <p class="calender-description">
              Nos Pick-up se font le matin entre 9h et 12h
            </p>
          </div>
          <div class="pickup-container">
            <p class="pickup-bar">
              <i class="icn-tag"></i>
              LE PICK UP COURTERA:
              <span>{{ sum_for_total_price_all_taxe }} FCFA</span>
            </p>
            <div class="checkboxes">
              <label class="styled-checkbox">
                <span></span>
                <button type="submit"  @click="gotonextpage">
                    CLIQUEZ ICI POUR CONTINUER   
                </button>
              </label>

              <label class="styled-checkbox">
                <span>
                  <button type="submit" @click="gotopreviouspage">
                    RETOURNER POUR CORRIGER ou ANNULER  
                 </button>
                </span> 
              </label>
            </div>
          </div>
          <div class="pickup-container">
            <p class="pickup-bar">
              <i class="icn-home-address-location"></i>
              L'ADDRESSE DE DROP OFF LA PLUS PROCHE EST:
            </p>
            <p class="pickup-address">xxxxxxxxxxxxxxxxxx</p>
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
          wrappers: null,
          responses:null,
          sum_for_total_price:null,
          sum_for_total_price_all_taxe:null,
          data_loading: false,
        }
      },

      mounted() {
                
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
        //fin de recupération des données
        //fetch request
              const formattedWrappers = wrappers.map(function(wrapper) {
        return {
            width:  Number(wrapper.width),
            height: Number(wrapper.height),
            weight: Number(wrapper.weight),
            length: Number(wrapper.length),
            origincountry: wrapper.origincountry,
            destinationcountry: wrapper.destinationcountry,
            originregion: wrapper.originregion,
            destinationregion: wrapper.destinationregion
        }
      });
      console.log(formattedWrappers);

      /*formattedWrappers.push({
          width: 19,
          height:11,
          weight: 6,
          length: 17,
      });*/

      const headers = new Headers();
      headers.append('Content-Type', 'application/json');
      headers.append('X-CSRF-TOKEN', window.csrfContent);
      
      const options = {
          method: 'POST',
          headers: headers,
          body: JSON.stringify({
              packages: formattedWrappers
          })
      };
      
      const request = new Request('/get-rates', options);

      fetch(request, options)
      .then(response => response.json())
      .then(data => {
          console.log(data);
          var responses=data.responses;

          this.responses=responses;

          //console.log(this.responses)
          // table_for_price est la variable qui doit contenir les prix de l'ensemble des paquets
          var table_for_price=[];
          responses.forEach(response => {

              const products = response.products;
              products.forEach(product => {
          //totalPrice[0] ns retourne une ligne qui contient le price en fcfa avec 1 ou 2 on aura l'aura avec euro
                  const prix=product.totalPrice[0].price;
                  console.log(prix);
                  table_for_price.push(prix);
              });
          });
          console.log(table_for_price);

          const sum_for_total_price = table_for_price.reduce((acc, number) => {
          return number + acc; 
          }, 0);

          this.sum_for_total_price=sum_for_total_price;
          this.sum_for_total_price_all_taxe=Math.round(sum_for_total_price*1.416)

          // console.log(this.responses);
      })
      .catch(error=>{
          console.error('error:', error)
      })
      .finally(()=>{
          this.data_loading = true;
      })


      // console.log("sama responses", this.responses)

                    
          /* const data = wrappers;

          fetch('/rates', {
              method: 'POST', // or 'PUT'
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': window.csrfContent,
              },
              body: JSON.stringify(data),
          })
          .then(response => response.json())
          .then(data => {
              console.log('Success:', data);
          })
          .catch((error) => {
              console.error('Error:', error);
          });
          */
          //end of fetch request
      },


        
             methods:{
            
                 gotonextpage(){
                     this.$router.push('/invoiceproforma');
                 },

                   gotopreviouspage(){
                       this.$router.push('/packageform');
                 }
             },


    }
</script>
<style scoped>
/*style loader*/
.loader-container {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color:  #daaa85;
}
.loader{
    position: relative;
    width:300px;
    height: 300px;
    transform-style: preserve-3d;
    transform: perspective(500px) rotateX(60deg);
}

.loader span{
    position: absolute;
    display: block;
    border: 2px solid #fff;
    box-sizing: border-box;
    border-radius: 50%;
    transform: translateZ(-100px);
    animation: animate 3s ease-in-out infinite;
}

@keyframes animate
{
    0%, 100%{
        transform: translateZ(-100px);
    }
    50%{
        transform: translateZ(100px);  
    }
}


.loader span:nth-child(2){
    top:10px;
    left:10px;
    right:10px;
    bottom: 10px;
    animation-delay: 1.5s;
}

.loader span:nth-child(3){
    top:10px;
    left:10px;
    right:10px;
    bottom: 10px;
    animation-delay: 1.4s;
}

.loader span:nth-child(4){
    top:30px;
    left:30px;
    right:30px;
    bottom: 30px;
    animation-delay: 1.3s;
}

.loader span:nth-child(5){
    top:40px;
    left:40px;
    right:40px;
    bottom: 40px;
    animation-delay: 1.2s;
}

.loader span:nth-child(6){
    top:50px;
    left:50px;
    right:50px;
    bottom: 50px;
    animation-delay: 1.1s;
}

.loader span:nth-child(7){
    top:60px;
    left:60px;
    right:60px;
    bottom: 60px;
    animation-delay: 1s;
}

.loader span:nth-child(8){
    top:70px;
    left:70px;
    right:70px;
    bottom: 70px;
    animation-delay: 0.9s;
}

.loader span:nth-child(9){
    top:80px;
    left:80px;
    right:80px;
    bottom: 80px;
    animation-delay: 0.8s;
}

.loader span:nth-child(10){
    top:90px;
    left:90px;
    right:90px;
    bottom: 90px;
    animation-delay: 0.7s;
}

.loader span:nth-child(11){
    top:100px;
    left:100px;
    right:100px;
    bottom: 100px;
    animation-delay: 0.6s;
}

.loader span:nth-child(12){
    top:110px;
    left:110px;
    right:110px;
    bottom: 110px;
    animation-delay: 0.5s;
}

.loader span:nth-child(13){
    top:120px;
    left:120px;
    right:120px;
    bottom: 120px;
    animation-delay: 0.4s;
}

.loader span:nth-child(14){
    top:130px;
    left:130px;
    right:130px;
    bottom: 130px;
    animation-delay: 0.3s;
}

.loader span:nth-child(15){
    top:140px;
    left:140px;
    right:140px;
    bottom: 140px;
    animation-delay: 0.2s;
}   
/*end style loader */

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
  border: none;
  background-color: rgb(233, 154, 60);
  cursor: pointer;
  
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


.page-6 .nav-left {
  justify-content: unset;
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

.page-6 .col-left {
  position: relative;
  z-index: 2;
}

.page-6 .col-right {
  position: relative;
  z-index: 1;
  left: -110px;
  max-width: calc(50% + 110px);
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

/* ############ Screen 6 CSS ############# */
.page-6 .background-6 {
  background-image: url("./assets/Banner.png");
  padding: 37% 0 100px;
  background-size: 100% 100%;
}





.page-6 .navbar {
  padding-left: 120px;
}

.page-6 .calender-container {
  display: flex;
  flex-direction: column;
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
  display: flex;
}
/*css du pick up price*/ 
.page-6 .pickup-container .pickup-bar span {
  font-weight: bold;
  color: red;
}
.page-6 .checkboxes {
  text-align: left;
  max-width: 255px;
  margin: 20px auto;
}

.styled-checkbox {
  flex-direction: row-reverse;
  justify-content: flex-end;
  margin-bottom: 30px;
  text-transform: uppercase;
  margin-left: 65px;
}
.page-6 .styled-checkbox .checkbox {
  margin-right: 15px;
  border: 1px solid #ddd;
  font-size: 14px;
}

.page-6 .pickup-bar {
  background-color: #f1eee8;
  padding: 10px 10px 4px 200px;
  font-weight: 500;
}
.page-6 .pickup-bar span {
  color: #d39971;
}
.calender-description {
  font-size: 12px;

}

.page-6 .pickup-address {
  text-align: center;
  padding: 50px;
  font-weight: 500;
  font-size: 18px;
}

/* ############ Screen 6 CSS ############# */


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
  
  .page-6 .banner-description-container {
    padding: 0 20px;
  }
  .page-6 .col-left h2 {
    font-size: 25px;
  }

  .page-6 .navbar ul {
    display: block;
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

 
  .page-6 .col-right {
    left: 0;
    min-width: 100%;
    margin-left: 0;
  }
 
  footer span {
    font-size: 11px;
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
.page-6 .background-6 {

    padding: 14% 0 54px;
   
}
.page-6 .calender-container{
  padding:60px 10px;
}
  header {
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
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
  .page-6 .calender-container {
    padding-left: 15px;
  }
}

    
</style>


