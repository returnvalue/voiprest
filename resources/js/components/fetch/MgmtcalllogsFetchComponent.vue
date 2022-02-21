<template>
    <div v-if="apiresponse" class="card">
        <h5 class="card-header">Call Logs</h5>
        <div class="card-body">
            <p class="card-text">Data via <a target="_blank" :href="urltofetch"> {{urltofetch}}</a></p>
            <h5>Placed Calls</h5>
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th v-for="(value, key) in apiresponse.data.Placed[0]">
                        {{key}}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.Placed">
                    <td width="20%" v-for="(nvalue, nkey) in value">
                      {{ nvalue }}
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h5>Received Calls</h5>
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th v-for="(value, key) in apiresponse.data.Received[0]">
                        {{key}}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.Received">
                    <td width="20%" v-for="(nvalue, nkey) in value">
                        {{ nvalue }}
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h5>Missed Calls</h5>
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th v-for="(value, key) in apiresponse.data.Missed[0]">
                        {{key}}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(value, key) in apiresponse.data.Missed">
                    <td width="20%" v-for="(nvalue, nkey) in value">
                        {{ nvalue }}
                    </td>
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
