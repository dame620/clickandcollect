<template>
    <div class="container">
        <div class="top_container">
            <div class="top_left_container">
                <div class="contaier_left_first">
                    <h3>SHOPMEAWAY</h3>
                    <img src="data:image/jpeg;base64,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YsF4Ur6aYTSYrPUtYHfqXxtax5LSGgm5tqQfcroiCGlxCeQWhhcL/Wks23lY7qPqsGmcC+Z5d92MBx+ZA/FWlFbXLNf4wtrlmv8AGFCNQyO7WxG5FjzXEn+EAD43WKf+7i9H/wCpXyopWSCz2h3qPw8FptwSDTu3Db2BJIFzc+vvV8fJr3mF9fkV8wpcFO+Q2Y0uPkL/AB8F0GlaQxoO4aAfcAvccYaLNAAHQAAL0qs2b7PCnLm+zwIiKhSLkv6RlAZKOme1pc5tTywALu/WMdoANdSxot6LrSwVNJHJl5jQ7lvD23F7PbfK4eYuUHy9DwszC8QposZhD4KhjSSHyNazPYElzCNY3aOAJ016hfS2A4HTUcfLpYxHGTezS4gn7WpOvmovj7gyHFqdsMrsjmPD2SAAubqA9oFx7Tbj1ynW1lN4Rh7aaCOBjnubCwMBeczyGiwuepsg20REBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB//2Q==" alt="logo sma">
                    <p>champion de la réexpedition</p>
                </div>                      
                <h4>FACTURE À L'INTENTION DE:</h4>
                <p>Nom: {{ name }}</p>   
                <p>Email: {{ email }}</p>
                <p>Entreprise: {{ companie_name }}</p>  
            </div>
            <div class="top_right_container">
                <p>Shopmeaway</p>
                <p>Adresse: Ngor, Dakar, Senegal</p>
                <p>Phone: 77 828 99 39</p>
                <p>Email: contact@shopmeaway.com</p>
            </div>
        </div>
        
        <div class="title_center">
            <h1>FACTURE</h1>
        </div>
        <div class="body_invoice">
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
                                <th>PRIX DU PAQUET</th>
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
            <hr>

        </div>

        <div class="invoice_footer">

            <div class="TotalHt">
                <h2>Total HT:</h2>
            </div>product
            <div class="TotalTTC">
                <h2>Total TTC: {{ productPrice }} </h2>
            </div>

        </div>
        
    </div>
</template>
<script>
export default {

    mounted(){
        //recuperation des infos du paquet
        const jsonWrappers = sessionStorage.getItem('wrappers');
        let wrappers = null

        if (jsonWrappers != null && jsonWrappers != undefined) {
            wrappers = JSON.parse(jsonWrappers);
        }

        this.wrappers=wrappers;
        if(wrappers!=null){
            console.log(wrappers);
        }

        const formattedWrappers = wrappers.map(function(wrapper) {
            return {
                width:  Number(wrapper.width),
                height: Number(wrapper.height),
                weight: Number(wrapper.weight),
                length: Number(wrapper.length),
            }
        });
        console.log(formattedWrappers);

        formattedWrappers.push({
            width: 19,
            height:11,
            weight: 6,
            length: 17,
        });

        const headers = new Headers();
        headers.append('Content-Type', 'application/json');
        headers.append('X-CSRF-TOKEN', window.csrfContent);
        
        const options = {
            method: 'POST',
            headers: headers,
            body: JSON.stringify({
                packages: formattedWrappers
            })
        };

        const request = new Request('/get-rates', options);

        fetch(request, options)
        .then(response => response.json())
        .then(data => {
            console.log(data.responses);
            
        })



        
        /*fetch('/rates'){}
        .then(response => response.json())
        .then(data => {
            const response = data.response
            let product_detail = (JSON.parse(response))
            console.log(product_detail);
            let productPrice=(product_detail.products[0].totalPrice[0].price);
            this.productPrice = productPrice;
            
        });*/



        

        //get the name
        var name=null;
        name=JSON.parse(sessionStorage.getItem('name'));
        if(name!=null && name!=undefined){
            this.name=name;
        }

        //get the email
        var email=null;
        email=JSON.parse(sessionStorage.getItem('email'));
        if(email!=null && email!=undefined){
            this.email=email;
        }

        //get the companie name
        var companie_name=null;
        companie_name=JSON.parse(sessionStorage.getItem('companie_name'));
        if(companie_name!=null && companie_name!=undefined){
            this.companie_name=companie_name;
        }

    },

    data(){

        return {
            wrappers: null,
            name: null,
            companie_name :null,
            email: null,
            productPrice:null
        }
    },
    
    methods:{

    }
}
</script>
<style lang="css">
/* ceci est le css de tt ce qui est au top*/ 
    .top_container{
         display: flex;
         justify-content: space-between;
    }
     /*the logo style*/ 
    .contaier_left_first img{
        width: 200px;
        height: 150px;
    }
    /*top container style*/ 
    .contaier_left_first{
        border: dashed rgb(170, 50, 220);
        width: 220px;
        margin-bottom: 5px;
    }
    .top_right_container{
        display: flex;
        flex-direction: column;
       
    }
    /*Contenu du milieux style*/
    .title_center{
        display: flex;
        justify-content: center;
        border-bottom: 2mm ridge rgba(170, 50, 220, .6);
        
    }
    /*Style du bas du facture*/
    .invoice_footer{
        display: flex;
        flex-direction: column;
    }
</style>