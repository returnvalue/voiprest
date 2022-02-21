<template>
    <div v-if="apiresponse" class="card">
        <h5 class="card-header">Line Info</h5>
        <div class="card-body">
            <p class="card-text">Data via <a target="_blank" :href="urltofetch"> {{urltofetch}}</a></p>
            <pre>
                {{apiresponse}}
            </pre>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.fetchdata();
        },

        methods: {
            fetchdata() {
                axios.post('/polyrestapi', {urltofetch: this.urltofetch, password: this.password})
                    .then(response => {
                        this.apiresponse = response.data;
                    });
            }
        },

        data() {
            return {
                apiresponse: null,
            }
        },

        props: [
            'urltofetch',
            'password',
            'id'
        ]
    }
</script>
