<template>
    <form @submit.prevent="onSubmitPackageForm" ref="packageForm">  
        <h3 style="color:green;">vous avez demandé un pick up cliquez sur enregistrer pour confirmer</h3>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </form>
</template>

<script>
    export default {

             mounted() {
            
            const jsonWrappers = sessionStorage.getItem('wrappers');
            let wrappers = null

            if (jsonWrappers != null && jsonWrappers != undefined) {
                wrappers = JSON.parse(jsonWrappers);
            }
            if(wrappers!=null){
                this.wrappers = wrappers;
            }
               console.log('wrapers test', this.wrappers);

        },
       

        props: ['path'],
        data() {
            return {
                wrappers:null,
                loading: false,
            }
        },
       /* computed: {
            wrappers_count() {
                return this.wrappers.length;
            },
        },*/
        methods: {
           
            resetForm() {
                this.wrappers = this.wrappers
            },
           
           
            
            onSubmitPackageForm() {
                
                this.loading = true;
                console.log('wrappers est', this.wrappers)
                axios.post('/package', {
                    data: this.wrappers
                }).then(({data}) => {
                   
                   if(data.products.length<1){
                     alert("veuillez renseigner au moins un produit")  
                   };
                    if (data.success && data.wrappers.length > 0 && data.products.length > 0) {
                        this.resetForm();
                         alert('le paquet a été enregistrer avec success');
                       // sessionStorage.removeItem('wrappers');
                        
                        this.$router.push('/');

                    }
                }).catch(response => {
                    alert('oups echec de l\'ajout');
                    console.error(response);
                }).finally(_ => {
                   this.loading = false; 
                });
                
            },
        },
       
    }
</script>


<style scoped>
.products-section {
    border:1px solid #ccc;
    padding:10px;
    margin-bottom:10px;
    position:relative;
}
.packages-section {
    border:1px solid #ccc;
    padding:10px;
    margin-bottom:10px;
    position:relative;
}
.products-counter {
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:10px;
    padding:10px;
    background-color:#f5f5f5;
}
.counter-label {
    position:absolute;
    top:0;
    right:0;
    display:inline-block;
    width:25px;
    height:25px;
    line-height:25px;
    background-color:#f5f5f5;
    border-left:1px solid #ccc;
    border-bottom:1px solid #ccc;
    color:#000;
    font-weight:bold;
    text-align:center;
}
.packages-section-closer {
    position:absolute;
    top:0;
    right:0;
    width:20px;
    height:20px;
    background-color:red;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    border:none;
    outline:none;
    cursor:pointer;
}
.packages-section-closer i {
    pointer-events:none;
}
</style>
