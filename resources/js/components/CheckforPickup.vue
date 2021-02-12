<template>
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

              <input type="checkbox" v-model="is_envelope" />
              <div class="checkbox"></div>
            </label>
          </div>
          <div class="packet">
            <i class="icn-packet"></i>
            <label
              >Paquet

              <input type="checkbox" v-model="is_package" />
              <div class="checkbox"></div>
            </label>
          </div>
        </div>
      </div>
      <form class="delivery-info-form">
        <div class="delivery-info-form-container">
          <div class="submit-container">
            <button
              class="submit"
              @click="ongotoNextPage"
              :disabled="is_package == false && is_envelope == false"
            >
              suivant <i class="fas fa-chevron-right"></i>
            </button>
          </div>
          <!--  <div class="my-last-btn">
            <a><i class="fas fa-chevron-left "></i>RETOUR</a>
          </div> -->
        </div>
      </form>
    </div>
  </div>
</template>


<script>
export default {
  watch: {
    is_envelope(value) {
      if (value == true) {
        this.is_package = false;
      }
    },

    is_package(value) {
      if (value == true) {
        this.is_envelope = false;
      }
    },
  },

  mounted() {
    console.log("Component mounted.");

    document.body.classList.add('page-4')
  },

  data() {
    return {
      is_envelope: false,
      is_package: false,
    };
  },

  methods: {
    ongotoNextPage() {
      if (this.is_package == true) {
        //window.location.href = '/package/create';
        this.$router.push("/pick_up_package_data");
      } else if (this.is_envelope == true) {
        this.$router.push("/envelop_package_data");
      }
    },
  },
};
</script>

<style lang="css" src="../styles/styles4.css"></style>