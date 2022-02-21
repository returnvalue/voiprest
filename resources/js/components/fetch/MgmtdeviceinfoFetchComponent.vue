<template>
    <div v-if="apiresponse" class="card mb-3">
        <h4 class="card-header">{{apiresponse.data.DeviceVendor}} {{ apiresponse.data.ModelNumber }} <span
            class="badge badge-secondary">{{apiresponse.data.FirmwareRelease}}</span></h4>
        <div class="card-body">
            <h5 class="card-title">IP Address: {{apiresponse.data.IPV4Address}}</h5>
            <h5 class="card-title">MAC Address: {{apiresponse.data.MACAddress}}</h5>
            <p class="card-text">Data via <a target="_blank" :href="urltofetch"> {{urltofetch}}</a></p>
            <a class="btn btn-sm btn-primary"
               :href="'https://'+ apiresponse.data.IPV4Address"
               target="_blank">Visit Web Interface ({{apiresponse.data.IPV4Address}})</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /runningconfig/"
            >Running Config</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /networkinfo/"
            >Network Info</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /networkstats/"
            >Network Stats</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /calllogs/"
            >Call Logs</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /devicestats/"
            >Device Stats</a>
            <a class="btn btn-sm btn-primary"
               :href="/phones/ + id + /lineinfo/"
            >Line Info</a>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
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

<style>

</style>
