<template>
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                Click And Collect
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-if="!isAuth">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item" v-if="!isAuth">
                        <a href="/creer-un-compte" class="nav-link">Créer un compte</a>
                    </li>

                    <li class="nav-item dropdown"  v-if="isAuth">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ authName }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="" @click.prevent="onLogout">Logout</a>

                            <form ref="logoutForm" id="logout-form" action="/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" :value="csrf_token">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>-->


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
</template>


<script>
export default {
    data() {
        return {
            user: null,
            isLoading: false,
        }
    },
    computed: {
        isAuth() {
            return this.user !== null;
        },
        authName() {
            return this.isAuth ? this.user.name : ''
        },
        csrf_token() {
            return window.csrfContent;
        }
    },

    methods: {
        loadUser() {

            this.isLoading = true;

            axios.get('/user').then(({data}) => {
                this.user = data;
            }).catch(({message}) => {
                console.log(message);
            }).finally(() => {
                this.isLoading = false;
            });
        },
        onLogout() {
            this.$refs.logoutForm.submit();
        }
    },
    mounted() {
        this.loadUser();
        console.log('Je suis dans le navbar')
    }
}
</script>
