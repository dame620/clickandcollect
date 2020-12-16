<template>
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="">PACKET <i class="fa fa-cube" aria-hidden="true" style="padding:10px; margin-left:4px"></i>

                <input type="checkbox" v-model="is_package" >
            </label>
        </div>
        <div class="form-group col-md-6">
            <label for="">ENVELOPPE <i class="fa fa-envelope" style="padding:10px; margin-left:4px"></i>

                <input type="checkbox" v-model="is_envelope">
            </label>
        </div>
        <button type="submit" class="btn btn-success" @click="ongotoNextPage" :disabled="is_package == false && is_envelope == false">Suivant&rarr;</button>

    </div>
</div>
</template>

<script>
export default {

    watch:{
       is_envelope(value){
           if(value==true){
               this.is_package=false;
           }
       },

      is_package(value){
          if(value==true){
              this.is_envelope=false;
          }

      }

    },

    mounted() {
        console.log('Component mounted.');

    },

    data() {
        return {
            is_envelope: false,
            is_package: false,

        }

    },

    methods: {

        ongotoNextPage(){
            if(this.is_package==true){
                //window.location.href = '/package/create';
                window.location.href = '/pick_up_package_data';
                
            }
            else if(this.is_envelope==true){
                window.location.href = '/envelope/create';
            }
        }
    }

}
</script>
