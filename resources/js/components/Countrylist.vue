<template>
<div id="app">
   <country-select v-model="country" :country="country" topCountry="US" />
  <!--region-select v-model="region" :country="country" :region="region" /-->
</div>
</template>
<script>
export default Vue.extend({
  data: () => ({
    country: '',
    region: ''
  })
})
</script>