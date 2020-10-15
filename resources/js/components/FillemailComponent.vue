<template>
    <div class="container">
       <form  @submit.prevent=OnSubmitForm()>
        <div class="header" style="margin-bottom:30px;">
            <h2>Veuillez renseigner vos informations </h2>
            <div class="form-row" style="border: solid;">
                <div class="col-md-4" style="margin-top:6px">
                    <div class="form-groug">
                        <label for="">EMAIL</label>
                        <input type="text" placeholder="entrez ici votre email" v-model="email">
                    </div>
                </div>
                <div class="col-md-4" style="margin-top:6px">
                    <div class="form-groug">
                       <label for="">Entreprise</label>
                        <input type="text" placeholder="nom de votre compagnie" v-model="companie_name">     
                    </div>
                </div>
                <div class="col-md-4" style="margin-top:6px">
                    <div class="form-group">
                        <label for="">Votre Nom</label>
                        <input type="text" v-model="name" placeholder="votre nom">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="">ENREGISTRER</button>
            </div> 
        </div>
        </form>
       <table class="table table-dark">
      <thead>
        <tr>
          <th>Produit</th>
          <th>PRIX</th>
          <th>QUANTITE</th>
          <th>PRIX TOTAL FCFA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>VETEMENT</td>
            <td>1200</td>
            <td>10</td>
            <td>12000</td>
        </tr>
         <tr>
            <td>TELEPHONE</td>
            <td>70000</td>
            <td>20</td>
            <td>120000</td>
        </tr>
    </tbody>
    </table>
    </div>
</template>
<script>
export default{
    mounted(){

        console.log('Component mounted.');
    },
    data() {
        return {

            name: null,
            companie_name :null,
            email: null
        }   
    },

    methods:{
        OnSubmitForm(){
            sessionStorage.setItem('name', JSON.stringify(this.name));
            sessionStorage.setItem('email', JSON.stringify(this.email));
            sessionStorage.setItem('companie_name', JSON.stringify(this.companie_name));

            return window.location.href = '/invoicequotepackage';

        }

    },
}

</script>



<style lang="css">
    
    
</style>