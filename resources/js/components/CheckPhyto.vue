<template>
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">AJOUTER UN PHYTHO 
                    <input type="checkbox" v-model="is_phytho" >
                </label>
            </div>

            <div class="form-group col-md-6">
                <label for="">PAS NECESSAIRE
                    <input type="checkbox" v-model="is_nophytho">
                </label>
            </div>

            <div class="col-md-6" v-if="is_phytho">
                <div class="form-group">
                    <label for=""> titre</label>
                    <input type="text">
                    <label for="">description</label>
                    <input type="text">
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {

    watch:{
       is_nophytho(value){
           if(value==true){
               this.is_phytho=false;
           }
       },

      is_phytho(value){
          if(value==true){
              this.is_nophytho=false;
          }

      }

    },

    mounted() {
        console.log('Component mounted.');

    },

    data() {
        return {
            is_nophytho: false,
            is_phytho: false,

        }

    },

    methods: {

        
    }

}
</script>
