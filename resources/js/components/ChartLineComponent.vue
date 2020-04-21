<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <line-chart :chart-data="data" :height="200" :option="{ responsive:true, maintainAspectRation: true }"></line-chart>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart'

    export default {
        components: {
            LineChart
        },
        data : function(){
            return {
                data: []
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                axios.get('/start/data-chart').then((response) => {
                    this.data = response.data
                });
            }
        }
    }
</script>
