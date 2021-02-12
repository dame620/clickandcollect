<template>
  <div class="wrapper">
    <div class="row">
      <div class="col-left background-2">
        <img class="logo" src="./assets/imgscomppages/Africa picture.png" alt="africa picture" />
        <h2>BIENVENUE!</h2>
      </div>
      <div class="col-right">
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
        <div class="connection-container connection-container-fluid">
          <div>
            <form method="POST" action="/register">
              <input type="hidden" name="_token" :value="csrf_token" >
              <h3>INSCRIPTION</h3>
              <div class="form-group">
                <label for="name">NOM COMPLET</label>
                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
              </div>
              
              <div class="form-group">
                <label for="email">Adresse email</label>
                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
              </div>

              <div class="form-group">
                <label for="telephone">Telephone</label>
                <input id="telephone" type="tel" class="form-control" name="telephone" required autocomplete="telephone">
              </div>

              <div class="form-group">
                <label for="adresse">Adresse</label>
                <input id="adresse" type="text" class="form-control" name="adresse" required autocomplete="adresse" autofocus>
              </div>

              <div class="form-group">
                <label for="date">DATE DE NAISSANCE</label>
                <v-date-picker v-model="date">
                  <template v-slot="{ inputValue, inputEvents }">
                    <input
                      class="form-control bg-white border px-2 py-1 rounded"
                      :value="inputValue"
                      v-on="inputEvents"
                      id="date"
                      name="date"
                      type="text"
                      required autocomplete="date" autofocus
                    />
                  </template>
                </v-date-picker>
              </div>

              <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirmer le mot de passe</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <button type="submit" class="btn-connection">INSCRIPTION</button>
              
            </form>
          
            <div class="line-heading">
              <span>OU</span>
            </div>
            <div class="social-connection-container">
              <button class="btn-connection-google">INSCRIPTION GOOGLE</button>
              <button class="btn-connection-fb">INSCRIPTION FACEBOOK</button>
              <p class="forgot-password">Deja u compte?</p>
              <a class="registration" href="/login">CONNECTEZ VOUS</a>
            </div>
          </div>
          <div class="social-container">
            <div class="line-heading">
              <span>FOLLOW US</span>
            </div>

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
        </div>
      </div>
    </div>
    <footer>
      <span>COLLECTANDCLICK.AFRICA</span>
      <span>ALL RIGHTS RESERVED.</span>
    </footer>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        date: ''
      }
    },

    computed:{
      csrf_token(){
        return window.csrfContent;
      }
    },

    mounted() {
      console.log('Register')
    }
  }
</script>





<style scoped>

</style>

