<template>
    <div class="container">
         
         <p>un instant nous cherchons le meilleur prix</p>
        <div id="myProgress" style="width: 100%; background-color: #ddd;">
            <div id="myBar" style="width: 100%; height: 30px; background-color: #4CAF50; text-align: center;line-height: 30px;  color: white;">100%</div>
        </div>
        <div id="container"></div>
        

        <p id="demo">votre envelope est:petit format</p>
        
        <p> le poids est:{{weightval}}</p>

        <p>vos frais d'envoi sont de 30000 F CFA</p>

        <div class="containt_bottom" style="display:flex; flex-direction:column;">
            <button type="submit" style="background-color:rgb(218, 175, 127); border:none; width:300px; margin-bottom:20px; height:35px;" >
                
                <a href="/envelope/create" style="color:white; font-weight: bold;">DEMANDER UN PICK UP</a>
            </button>
            <button type="submit" style="background-color:rgb(233, 154, 60); border:none; width:300px; height:35px;">
                <a href="/fillemailforenvelope" style="color:white; font-weight: bold;">RECEVOIR PAR EMAIL</a>
                
            </button>
        </div>
        
        
     
       
    </div>
</template>
<script>
    export default {
        mounted() {
                    console.log('Component mounted.');
                    var ProgressBar = require('progressbar.js');

    // Assuming we have an empty <div id="container"></div> in
    // HTML
    var bar = new ProgressBar.Line('#container', {easing: 'easeInOut'});
    bar.animate(1);  // Value from 0.0 to 1.0
            
        },

       

        data() {
         return {

                 weightval : localStorage.getItem("weightsvalue"),
                
                 
         }
             },
             methods:{
            
      

             },


    }
</script>