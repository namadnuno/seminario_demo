<template>
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Grupo {{ groupNumber }}</h4>
            </div>
            <div class="card-body">
            <h1 class="card-title pricing-card-title">Temp. {{ stats.temperature }} <small class="text-muted">ºC</small></h1>
            <h1 class="card-title pricing-card-title">Hum. {{ stats.humidity }} <small class="text-muted">%</small></h1>
            </div>
        </div>    
    </div>
</template>

<script>
export default {
    props:['groupNumber'],
    data() {
        return {
            stats: {
                temperature: 0,
                humidity: 0
            },
            fRun: false,
        }
    },
    mounted() {
        setInterval(() => {
            axios.get('/store/get?group=' + this.groupNumber)
                .then(response => {
                    this.stats = response.data
                    this.fRun = true
                })
          }, 1000); 
    },
    watch: {
        stats: function(newStats, oldStats) {
            if (newStats.temperature != oldStats.temperature && newStats.humidity != oldStats.humidity && this.fRun == true) {
                this.$emit('changed', this.groupNumber)
            }
        }
    }
    
}
</script>

<style>

</style>
