<template>
    <div class="container">
    <div class="card">
        <h4 class="card_header" style="margin-bottom:30px;">ENVELOPPES</h4>
            <div class="card_body" v-for="(contain,index) in containts" :key="index">
                <div class="card_body_head" style="display:flex;">
                    <h6 class="card_body_head_title">ENVELOPPE:{{ index+1 }}</h6>
                    <div class="card_body_head_containt" style="margin-left:250px;">
                        <button class="btn" @click="deleteContaintForm(index)">-</button>
                        <span>PAQUET</span>
                        <button class="btn" @click="addNewContaintForm">+</button>
                    </div>
                </div>
                <div class="employee-form">
                    <div class="form-row">
                        <div class="form-group col-md-6" style="margin-bottom:20px;">
                            <input type="text" class="form-control" placeholder="longueur cm" style="margin-bottom:10px;" v-model="contain.length">
                            <input type="text" class="form-control" placeholder="hauteur cm" style="margin-bottom:10px;" v-model="contain.height">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="margin-bottom:20px;">
                            <input type="text" class="form-control" placeholder="largeur cm" style="margin-bottom:10px;" v-model="contain.width">
                            <input type="text" class="form-control" placeholder="poids kg" style="margin-bottom:10px;" v-model="contain.weight">
                        </div>
                    </div>
                </div>

            </div>

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
            
        },

    }
</script>
