<template>
    <div class="container">
         
        <div id="myProgress" style="width: 100%; background-color: #ddd;">
            <div id="myBar" style="width: 100%; height: 30px; background-color: #4CAF50; text-align: center;line-height: 30px;  color: white;">100%</div>
        </div>
        <div id="container"></div>
        
        <div class="container_containt" v-for="(wrapper, wrapper_index) in wrappers" :key="wrapper_index">
            
            <br>
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>NUMERO PAQUET</th>
                            <th>poids</th>
                            <th>largeur</th> 
                            <th>hauteur</th> 
                            <th>longueur</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ wrapper_index+1 }}</td>
                            <td>{{ wrapper.weight }}</td>
                            <td>{{ wrapper.width }}</td>
                            <td>{{ wrapper.height }}</td>
                            <td>{{ wrapper.length }}</td>
                            
                            
                        </tr>
                    </tbody>
            </table>
    
        </div>



        <div class="containt_bottom" style="display:flex; flex-direction:column;">
            <button type="submit" style="background-color:rgb(218, 175, 127); border:none; width:300px; margin-bottom:20px; height:35px;" >
                
                <a href="/package/create" style="color:white; font-weight: bold;">DEMANDER UN PICK UP</a>
            </button>
            <button type="submit" style="background-color:rgb(233, 154, 60); border:none; width:300px; height:35px;">
                <a href="/fillemail" style="color:white; font-weight: bold;">RECEVOIR PAR EMAIL</a>
                
            </button>
        </div>
        
        
     
       
    </div>
</template>
<script>
    export default {
        mounted() {
                    console.log('Component mounted.');
                    //progress bar
                    var ProgressBar = require('progressbar.js');

                  // Assuming we have an empty <div id="container"></div> in
                 // HTML
                var bar = new ProgressBar.Line('#container', {easing: 'easeInOut'});
                bar.animate(1);  // Value from 0.0 to 1.0
                //get the informations inside session storage
                const jsonWrappers = sessionStorage.getItem('wrappers');
                let wrappers = null

                if (jsonWrappers != null && jsonWrappers != undefined) {
                    wrappers = JSON.parse(jsonWrappers);
                }

                this.wrappers=wrappers;
                if(wrappers!=null){
                    console.log(wrappers);
                }

            
        },

       

        data() {
         return {

                 wrappers: null,
               
                 
         }
             },
             methods:{
            
      

             },


    }
</script>