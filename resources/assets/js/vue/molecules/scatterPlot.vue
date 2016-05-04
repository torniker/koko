<template>
    <div :id="plodId">
        scatter plot asdf asdf
    </div>
</template>
<script>
    import Highcharts from 'highcharts';
    export default {
        props: {
            title: {
                type: String,
                default: 'Scatter Plot'
            },
            subtitle: {
                type: String,
                default: ''
            },
            xAxisLabel: {
                type: String,
                default: ''
            },
            yAxisLabel: {
                type: String,
                default: ''
            },
            dataProvider: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                series: []
            }
        },
        computed: {
            plodId() {
                return this.title.toLowerCase().replace(' ', '-')
            }
        },
        ready() {
            this.$http.get(this.dataProvider).then((response) => {
                this.series = response.data;
                this.createChart();
            });
        },
        methods: {
            createChart() {
                let chart = new Highcharts.Chart({
                chart: {
                        type: 'scatter',
                        zoomType: 'xy',
                        renderTo: document.getElementById(this.plodId),
                    },
                    title: {
                        text: this.title
                    },
                    subtitle: {
                        text: this.subtitle
                    },
                    xAxis: {
                        title: {
                            enabled: true,
                            text: this.xAxisLabel
                        },
                        startOnTick: true,
                        endOnTick: true,
                        showLastLabel: true
                    },
                    yAxis: {
                        title: {
                            text: this.yAxisLabel
                        }
                    },
                    plotOptions: {
                        scatter: {
                            marker: {
                                radius: 5,
                                states: {
                                    hover: {
                                        enabled: true,
                                        lineColor: 'rgb(100,100,100)'
                                    }
                                }
                            },
                            states: {
                                hover: {
                                    marker: {
                                        enabled: false
                                    }
                                }
                            },
                            tooltip: {
                                headerFormat: '<b>{series.name}</b><br>',
                                pointFormat: '{point.x}, {point.y}'
                            }
                        }
                    },
                series: this.series
            }); 
            }
        }
    }
</script>