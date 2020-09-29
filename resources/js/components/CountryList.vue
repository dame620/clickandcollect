
<template>
    <div class="container">
        <country-select v-model="country" :country="country" topCountry="US" />
        <region-select v-model="region" :country="country" :region="region" />
  </div>
  
</template>

<script>

export default {
  mounted() {
    console.log('mounted')
  },
  data() {
    return {
      country: '',
      region: ''
    }
  },
  
}
</script>