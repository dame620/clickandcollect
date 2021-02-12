<template>
    <div class="container">   
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>NUMERO PAQUET</th>
                    <th>longueur</th>
                    <th>poids</th>
                    <th>shipment</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="wrapper in wrappers" :key="wrapper.id">
                    <td>{{ wrapper.id }}</td>
                    <td>{{ wrapper.height }}</td>
                    <td>{{ wrapper.weight }}</td>
                    <td>
                        <a href="#" @click.prevent="onsetlabelbase64(wrapper)" class="btn btn-success">Cliquez ici pour imprimer le label</a>
                    </td>

                    <!--button @click="onsetlabelbase64" class="btn btn-success" type="submit">
                        <input id="inputlabel" type="hidden" v-model="wrapper.shipment.labelbase64">
                        Cliquez Ici pour imprimer le Label
                    </button-->
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                wrappers: [],
                loading: false,
                label:"0"
            }
        },

        methods: {
            onLoadWrappers() {
                axios.get('/user-wrappers').then(response => {
                    const wrappers = response.data.data


                    console.log(wrappers)

                    this.wrappers = wrappers;

                    console.log(wrappers)
                }).catch(({ message }) => {
                    alert(message)
                }).finally(_ => {
                    this.loading = true;
                });
            },

            onsetlabelbase64(wrapper){
                const base64 = wrapper.shipment.labelbase64;

                if (base64 === undefined || base64 === null) {
                    return
                }

                sessionStorage.setItem("labelbase64", base64);
                
                this.$router.push('/dhllabel');
            }
        },

        mounted() {
            this.onLoadWrappers();


            axios.get('/user').then(({data})=> {
                console.log(data);
            })

        }
    }
</script>
<style scoped>
.btn.btn-success{
    background-color: rgb(189, 37, 151);
    color: blanchedalmond;
    width: 170px;
}

.btn.btn-success a:hover{
    cursor: pointer;
    text-decoration: underline;
    color: red;
}
</style>


