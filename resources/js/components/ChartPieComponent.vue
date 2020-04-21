<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <pie-chart :chart-data="data" :height="200" :option="{ responsive:true, maintainAspectRation: true }"></pie-chart>
            </div>
        </div>
    </div>
</template>

<script>
    import PieChart from './PieChart.js'

    export default {
        components: {
            PieChart
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
