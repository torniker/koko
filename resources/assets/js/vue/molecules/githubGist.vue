<template>
    <link rel="stylesheet" type="text/css" :href="stylesheet">
    {{{ content }}}
</template>
<script>
    export default {
        props: {
            gistId: {
                type: String,
                default: ''
            },
            stylesheet: {
                type:String,
                default:''
            },
            content: {
                type: String,
                default: ''
            }
        },
        ready() {
            this.$http.jsonp('https://gist.github.com/' + this.gistId + '.json').then(this.success);
        },
        methods: {
            success(response) {
                this.stylesheet = response.data.stylesheet;
                this.content = response.data.div;
            }
        }
    }
</script>