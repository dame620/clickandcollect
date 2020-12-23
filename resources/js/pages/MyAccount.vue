<template>
    <div class="container">   
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>NUMERO PAQUET</th>
                    <th>longueur</th>
                    <th>poids</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="wrapper in wrappers" :key="wrapper.id">
                    <td>{{ wrapper.id }}</td>
                    <td>{{ wrapper.height }}</td>
                    <td>{{ wrapper.weight }}</td>
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
                loading: false
            }
        },

        methods: {
            onLoadWrappers() {
                axios.get('/api/user-wrappers').then(response => {
                    const wrappers = response.data.data;

                    this.wrappers = wrappers;
                }).catch(({ message }) => {
                    alert(message)
                }).finally(_ => {
                    this.loading = true;
                });
            } 
        },

        mounted() {
            this.onLoadWrappers();
        }
    }
</script>
