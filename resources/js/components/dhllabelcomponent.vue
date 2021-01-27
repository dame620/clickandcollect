<template>
    <div class="container" id="container">
        
    </div>
</template>

<script>
    export default {

       
        mounted() {
            console.log('Component mounted.')
            const jsonlabelbase64 = sessionStorage.getItem('labelbase64');
            this.b64=jsonlabelbase64;
            this.getlabel();
        },

        data: function(){
            return{
               b64: ''
            }
        },

         methods:{
             getlabel(){

                var container =document.getElementById('container')

                //lien de telechargement du document 
                var link = document.createElement('a');
                link.innerHTML = 'TELECHARGER LE FICHIER PDF';
                link.download = 'file.pdf';
                link.href = 'data:application/octet-stream;base64,' + this.b64;
                container.appendChild(link);
                
                //recuperation et conversion du fichier pdf
                var obj = document.createElement('object');
                obj.style.width = '100%';
                obj.style.height = '842pt';
                obj.type = 'application/pdf';
                obj.data = 'data:application/pdf;base64,' + this.b64;
                container.appendChild(obj);

             }
        },
    }
</script>
