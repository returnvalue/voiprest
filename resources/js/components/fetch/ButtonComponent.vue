<template>
        <button @click.prevent="fetchdata" :type="type"class="btn btn-outline-primary" v-text="buttontext"></button>
</template>

<script>
    import {eventBus} from "../../app";

    export default {
        mounted() {
            console.log(this.password)
        },

        methods: {
            fetchdata() {
                axios.post('/polyrestapi', {urltofetch: this.urltofetch, password: this.password})
                    .then(response => {
                        this.apiresponse = response.data;
                        eventBus.$emit('efetchdata', this.apiresponse);
                    });
            }
        },

        data() {
            return {
                apiresponse: null,
            }
        },

        props: [
            'buttontext',
            'type',
            'urltofetch',
            'password'
        ]
    }
</script>

<style>

</style>
