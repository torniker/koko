<template>
    <button 
        class="{{ classes }}" 
        type="button"
        @click="copyText()"
    >
        <i class="fa fa-clipboard"></i>
    </button>
    <input type="text" class="hidden-input" v-el:copyinput value="{{ value }}">
</template>
<script>
    export default {
        props: {
            value: {
                type: String,
                default: ''
            },
            classes: {
                type: String,
                default: 'btn btn-lg btn-default'
            },
        },
        methods: {
            copyText() {
                this.$els.copyinput.setSelectionRange(0, this.value.length);
                document.execCommand('copy');
            }
        }
    }
</script>