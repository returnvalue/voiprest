<template>
    <div v-if="apiresponse" class="card">
        <h5 class="card-header">Running Configuration</h5>
        <div class="card-body">
            <p class="card-text">Data via <a target="_blank" :href="urltofetch"> {{urltofetch}}</a></p>
            <h4 class="card-title">DHCP Settings</h4>
            <table class="table table-hover table-sm">
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.DHCP">
                    <td width="50%">{{key}}</td>
                    <td>{{value}}</td>
                </tr>
                </tbody>
            </table>
            <h4 class="card-title">Network Settings</h4>
            <table class="table table-hover table-sm">
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.Network">
                    <td width="50%">{{key}}</td>
                    <td>{{value}}</td>
                </tr>
                </tbody>
            </table>
            <h4 class="card-title">Provisioning Settings</h4>
            <table class="table table-hover table-sm">
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.Provisioning">
                    <td width="50%">{{key}}</td>
                    <td>{{value}}</td>
                </tr>
                </tbody>
            </table>
            <h4 class="card-title">DNS Settings</h4>
            <table class="table table-hover table-sm">
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.DNS">
                    <td width="50%">{{key}}</td>
                    <td>{{value}}</td>
                </tr>
                </tbody>
            </table>
            <h4 class="card-title">SNTP Settings</h4>
            <table class="table table-hover table-sm">
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.SNTP">
                    <td width="50%">{{key}}</td>
                    <td>{{value}}</td>
                </tr>
                </tbody>
            </table>
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
