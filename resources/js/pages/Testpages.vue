<template>
    <body class="page-3">
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
            <img class="logo" src="./assets/imgscomppages/Africa logo.png" alt="" />
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
        <div class="main-bg">
            <div class="banner">
            <div class="banner-description">
            <p>Some text!</p>
            <h1>SOME TEXT SHOULD GO HERE</h1>
            <h2>SOME TEXT SHOULD</h2>
            <button>SOME BUTTON</button>
            </div>
        </div>
        <div class="africa-background">
            <div class="button-container">
            <button class="btn-quote">OBTENIR UNE COTATION</button>
            <button class="btn-pickup">DEMANDER UN PICK UP</button>
            </div>
        </div>
        </div>
        
        <footer>
            <span>COLLECTANDCLICK.AFRICA</span>
            <span>ALL RIGHTS RESERVED.</span>
        </footer>
        </div>
    </body>

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
 /* background-image: url("./assets/imgscomppages/Picture.png");*/
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
  background: url("./assets/imgscomppages/drop-down-arrow.png") right center no-repeat;
  background-size: 15px;
  padding: 10px 20px;
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
  background-image: url("./assets/imgscomppages/Background photo.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
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
  font-style: italic;
}

.banner .banner-description button {
  background: #e29854;
  border: none;
  color: white;
  padding: 10px 15px;
  margin-top: 30px;
}
@media screen and (min-width: 600px) {
  .main-bg{
   background-image: url("./assets/imgscomppages/Africa background.png");
   /* background-position: center; */
   background-repeat: no-repeat;
   /* background-size: cover; */
   /* background-position: top 95% left -13%;
   background-size: 70%;*/
   background-position: top 137% left -13%;
   background-size: 66% 80%;

 }
}
@media screen and (max-width: 599px) {
  .africa-background {
     background-image: url("./assets/imgscomppages/Africa background.png");
   /* background-position: center; */
   background-repeat: no-repeat;
   /* background-size: cover; */
    background-position: top 95% left -13%;
   background-size: 70%;
  
  }
}

.africa-background {

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
  width: calc(80%);
  background-color: #eb954b;
  margin-top: 15px;
  margin-bottom: 55px;
  border: none;
  font-weight: 300;
  text-transform: uppercase;
  font-size: 15px;
  cursor: pointer;
}
.btn-pickup {
  padding: 15px 0px;
  width: calc(80%);
  background-color: #e2a880;
  border: none;
  color: black;
  font-size: 15px;
  font-weight: 300;
}
/*############# Screen 3 CSS ###########*/


@media screen and (max-width: 1200px) {

  .africa-background .button-container {
    max-width: 40%;
  }

  .page-3 .banner .banner-description {
    padding-right: 50px;
  }

}
@media screen and (max-width: 991px) {

  .africa-background .button-container {
    max-width: 50%;
  }
  .btn-quote {
    width: calc(100%);
  }
  .btn-pickup {
    width: calc(100%);
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

  .africa-background .button-container {
    max-width: 60%;
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
    padding: 0 15px;
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
}
 
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
