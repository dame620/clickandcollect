<template>
    <div class="container">
        <div class="header" style="margin-bottom:30px;">
            <h2>veuillez renseigner votre email votre nom ou nom de votre compagnie </h2>
            <input type="text" placeholder="entrez ici votre email">
            <input type="text" placeholder="nom de votre compagnie">
            <button type="submit" class="btn btn-success" style="">ENREGISTRER</button>
        </div>
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
}

</script>
