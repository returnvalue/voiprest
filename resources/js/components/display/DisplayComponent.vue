<template>
    <div>
        <table class="table table-hover table-sm">
            <tr v-bind:key="apiresponse.data.key" v-for="(value, key) in apiresponse.data">
                <td>{{ key }}</td>
                <td>{{ value }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    import {eventBus} from "../../app";

    export default {
        created() {
            eventBus.$on('efetchdata',(apiresponse) => {
                this.apiresponse = apiresponse;
            })
        },

        data() {
            return {
                apiresponse: ''
            }
        },
    }
</script>
