<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                     <div class="card-body">
                       <div class="card mb-3" v-for="(employee, index) in employees">
                          <div class="card-body">
                            <div style="display:flex;">
                              <h4 class="card-title"> PAQUET: {{ index+1 }} </h4>
                                  <div style="cursor:pointer;  margin-left:200px; margin-top:17px;">
                                   <button class="btn" @click="deleteEmployeeForm(index)">-</button>
                                    <span> PAQUET </span>
                                    <button class="btn" @click="addNewEmployeeForm">+</button>
                                  </div>
                             </div>
                         <div class="employee-form">
                       <div class="form-row">
                        <div class="form-group col-md-6" style="margin-bottom:20px;">
                            
                            <input type="text" class="form-control mb-2" placeholder="longueur cm" v-model="employee.height">

                            <input type="text" class="form-control mb-2" placeholder="hauteur cm" v-model="employee.width">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control mb-2" placeholder="largeur cm" v-model="employee.lenth">
                            <input type="text" class="form-control mb-2" placeholder="poids kg" v-model="employee.weight">

                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
         </div>
            <button type="submit" class="btn btn-primary btn-block" style= "width: 300px;" @click="showinvoice()"> Enregistrer </button>   
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
                 
                   employees: [
                  {
                    height:'',
                    width:'',
                    lenth:'',
                    weight:'',
                 }
                            ],

                 }
             
        },

         methods:{
            addNewEmployeeForm(){
                this.employees.push({
                    height:'',
                    width:'',
                    lenth:'',
                    weight:'',
                })
            },

            deleteEmployeeForm(index){
                this.employees.splice(index, 1)
            },

        showinvoice(){
            document.write(this.employees);

        }

        },

    }
</script>
