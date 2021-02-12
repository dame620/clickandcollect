<template>
    <!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Se connecter</div>

                <div class="card-body">
                

                    <form method="POST" action="/login">

                        <input type="hidden" name="_token" :value="csrf_token">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Adresse email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Garder ma session active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>

                                <a class="btn btn-link" href="password/reset">
                                    Mot de passe oublié
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
<div>
    
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
  background-image: url("./assets/imgscomppages/Picture.png");
  background-position: right center;
  background-repeat: no-repeat;
  background-size: 100% 100%;

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

.background-2 {
  background-image: url("./assets/imgscomppages/Picture-2.png");
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
  background-color: white;
}
.btn-connection {
    
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
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
   /* background: #eb954b;*/
    text-align: center;
    border-radius: 10px;
    color: black;
   /* animation: pulse-effect 1s ease-in-out infinite;*/
}
.language-toggle {
  border: none;
  text-transform: uppercase;

  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  background: url("./assets/imgscomppages/drop-down-arrow.png") right center no-repeat;
  background-size: 15px;
  padding: 10px 5px;
  color: black;
}
@keyframes pulse-effect {
  0% {
    box-shadow: 0 0 0 0 #eb954b7d;
    -webkit-box-shadow: 0 0 0 0 #eb954b7d
  }
  100% {
    box-shadow: 0 0 0 8px #eb954b7d;
    -webkit-box-shadow: 0 0 0 8px #eb954b7d
  }
}
select option{
  color: black;
}
.connection-container {
  width: 55%;
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
    position: absolute;
    z-index: 1;
    margin-top: -9px;
    margin-left: 12px;
    background: white;
    padding: 0px 5px;
    font-size: 12px;

}
.form-group {
  width: 70%;
  margin-right: auto;
  margin-left: auto;


}
.form-group input {
 height: auto;
    padding: 15px 15px;
    border: 2px solid #cdcdcb;
    border-radius: 2px;
    width: 100%;
    position: relative;/*
    border-radius: 10px;*/
    outline: none;
}



.form-check-input{
  margin-top: 8px;
  margin-bottom: 10px;
  
}

::placeholder {
  color: #cdcdcb;
  font-size: 12px;
}
.btn-connection {
     padding: 15px;
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
    width: 100%;
    margin: auto;
    border: 2px solid  #eb954b;
    outline: none;
   /* border-radius: 50px;*/
    margin-bottom: 10px;
}
/*.btn-connection:hover{
  background: transparent;
  color:  #eb954b;
  transition: ease-in-out;

}*/
.forgot-password,
.forgot-password a {
  text-align: center;
  font-weight: 600;
  text-decoration: none;
  color: #3a3635;
}

.forgot-password a:hover {
  cursor: pointer;
  text-decoration: underline;
  text-decoration-color: red;
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
    width: 100%;
    background-color: #7d6f6c;
    border: none;
    color: white;
    margin-bottom: 20px;
    font-size: 18px;
  /*  border: 1px solid #E13D38;*/
    font-weight: 300;
    margin: 12px auto;
    cursor: pointer;
    /*border:1px solid #E13D38;*/
    /*border-radius: 10px;*/
}
button.btn-connection-google:hover {
    background: #a01d19cc;
    color: white;
}
button.btn-connection-fb{
 background-color: #dcaa85;
 color: white;
}
.btn-connection-fb {
    padding: 15px 0px;
    width: 100%;
    background-color: #dcaa85;
    border: none;
    color: white;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 20px;
     /*border:1px solid #385196;*/
     cursor: pointer;
     /* border-radius: 10px;*/
}
 /*form {
    
    box-shadow: 2px 5px 16px 2px rgba(16, 16, 16, .18);
    padding: 20px 10px;
    border-radius: 10px;
}*/
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
  background: #f5cb9b;
   border: 1px solid #f5cb9b;
}
.social-icn-twitter {
  background:#ee9448;
  border: 1px solid #ee9448;
}
.social-icn-google {
  background: #504444;
  border: 1px solid #504444;
}
.social-icn-pinterest {
   background:#dead85;
  border: 1px solid #dead85;
}
.social-icn-linkedin {
  background: #8e7974;
  border: 1px solid #8e7974;
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

@media screen and (max-width: 1200px) {
  .btn-connection-responsive {
    width: calc(100% + 40px);
    margin-left: -20px;
  }
  .social-container .line-heading {
    width: calc(100% + 60px);
    margin-left: -40px;
  }
  /*.form-check-input{
    margin-top: 8px;
    margin-bottom: 10px;
  }
  #formcheck{

  }*/
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

  footer span {
    font-size: 11px;
  }
}
@media screen and (max-width: 568px)
{
  .form-group {
    margin-bottom: 20px;
    padding: 0 10px;
       
    width: 100%;
}
.form-group-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: block;
    /* margin: 0 -10px; */
}
.language {
    margin: 7px auto;
    max-width: 180px;
    text-align: right;
    position: relative;
   /* background: #eb954b;*/
    text-align: center;
    border-radius: 10px;
    color: black;
   /* animation: pulse-effect 1s ease-in-out infinite*/;
}
.col-left h2 {
    font-size: 33px;
    
}
.connection-container{
  width: 100%;
}

.form-check-input{
   margin-left: -105px;
   
  }

/* #formcheck {
    display:flex
  }*/

}

@media screen and (min-width: 567px) and (max-width: 770px){
  .form-group {
    width: 84%;
  }
  .col-left{

    padding: 60px
  }
.connection-container {
    width: 60%;
  }

 /* .form-check-input{
    margin-top: 8px;
    margin-bottom: 10px;
  }*/
.form-check-input{
   margin-left: -110px;
   
  }

}
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            csrf_token() {
                return window.csrfContent;
            }
        }
    }
</script>
