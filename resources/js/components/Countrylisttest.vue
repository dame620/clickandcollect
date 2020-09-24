<template>
<div id="app">
  <div class="form-horizontal">
    <div class="form-group">
      <label for="country-select" class="col-sm-3 control-label">
        Select country:
      </label>
      <div class="col-sm-5">
        <vue-country-select class="vue-country-select" name="country-select"
                            v-model="result" language="en-US">
        </vue-country-select>
      </div>
      <div class="col-sm-4">
        <p class="form-control-static">
          Selected country: <span class="vue-result">{{result}}</span>
        </p>
      </div>
    </div>
  </div>
</div>
</template>
<script>

var Vue = require("vue");
var vm = new Vue({
  el: "#app",
  components: {
    "vue-country-select": require("vue-country-select")
  },
  data: {
    result: ''
  }
});

</script>