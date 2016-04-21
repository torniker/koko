<template>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th v-for="label in labels">{{{ label }}}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in series | orderBy firstCol">
                <td v-for="col in row">{{ col }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
    export default {
        props: {
            dataProvider: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                series: [],
                labels: []
            }
        },
        ready() {
            this.$http.get(this.dataProvider).then((response) => {
                this.labels = response.data[0].labels;
                for(let item of response.data) {
                    if(item.type != 'scatter') {
                        continue;
                    }
                    for(let v of item.data) {
                        let tmp = v;
                        if(tmp.length < this.labels.length) {
                            tmp.push(item.name);
                        }
                        this.series.push(tmp);
                    }
                }
            });
        },
        methods: {
            firstCol(a, b) {
                if(a[0] > b[0]) {
                    return 1;
                } else if(a[0] < b[0]) {
                    return -1;
                }
                return 0;
            }
        }
    }
</script>