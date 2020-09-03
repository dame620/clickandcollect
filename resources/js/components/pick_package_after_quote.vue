<template>
    <div class="container">
        <div class="card">
            <h4 class="card_header" style="margin-bottom:30px;">PAQUETS</h4>
                <div class="card_body" v-for="(contain,index) in containts" :key="index">
                    <div class="card_body_head" style="display:flex;">
                        <h6 class="card_body_head_title">PAQUET:{{ index+1 }}</h6>
                        <div class="card_body_head_containt" style="margin-left:250px;">
                            <button class="btn" @click="deleteContaintForm(index)">-</button>
                            <span>PAQUET</span>
                            <button class="btn" @click="addNewContaintForm">+</button>
                        </div>
                    </div>
                    <div class="employee-form">
                        <div class="form-row">
                            <div class="form-group col-md-6" style="margin-bottom:20px;">
                                <input type="text" id="in_length" class="form-control" placeholder="longueur cm" style="margin-bottom:10px;" v-model="lengthval">
                                <input type="text" id="in_height"  class="form-control" placeholder="hauteur cm" style="margin-bottom:10px;" v-model="heightval">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6" style="margin-bottom:20px;">
                                <input type="text" id="in_width" class="form-control" placeholder="largeur cm" style="margin-bottom:10px;" v-model="widthtval">
                                <input type="text" id="in_weight" class="form-control" placeholder="poids kg" style="margin-bottom:10px;" v-model="weightval">
                            </div>
                        </div>
                    </div>
                    <hr style="font-weight: bold;">
                </div>
                <button type="submit" class="btn btn-success" style="width:200px;" @click="onpassvalues">suivant&rarr;</button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return{
                containts:[
                    {
                        height:'',
                        width:'',
                        length:'',
                        weight:'',
                    }

                ],

                 weightval : localStorage.getItem("weightsvalue"),
                 widthtval : localStorage.getItem("widthsvalue"),
                 lengthval : localStorage.getItem("lengthsvalue"),
                 heightval : localStorage.getItem("heightsvalue"),
                 
        }
        },

         methods:{
             addNewContaintForm(){
                 this.containts.push({
                        height:'',
                        width:'',
                        length:'',
                        weight:'',

                 })
             },
             deleteContaintForm(index){
                this.containts.splice(index, 1)
             },

              onpassvalues(){
                  
                  /*
                  var weights = document.getElementById("in_weight").value;
                  var lengths = document.getElementById("in_length").value;
                  var widths = document.getElementById("in_width").value;
                  var heights= document.getElementById("in_height").value;

                  localStorage.setItem("weightsvalue", weights);
                  localStorage.setItem("widthsvalue", widths);
                  localStorage.setItem("lengthsvalue", lengths);
                  localStorage.setItem("heightsvalue", heights);
                  */

                  return window.location.href="/invoiceproforma";
                  
             },
            
        },

    }
</script>

