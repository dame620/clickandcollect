<template>
    <div class="container">
        <h2>BIENVENUE dans ton espace Client </h2>
    </div>

</template>
<script>
export default {
    data(){
            return{
                users:{}
            }

    },
    created(){
        axios.get('http://127.0.0.1:8000')
        .then(response => (this.users = response))
        .catch(error=>console.log(error));
    }
    
    
}
//responses[wrapper_index].products[0].totalPrice[0].price
</script>


