<template>
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
        <router-link class="btn-quote" tag="button" to="/check">OBTENIR UNE COTATION</router-link>
        <router-link class="btn-pickup" tag="button" to="/checkforpickup">DEMANDER UN PICK UP</router-link> 
      </div>
    </div>
  </div>
</template>



<script>
export default {
  mounted() {
    document.body.classList.add("page-3");
  },
};
</script>
