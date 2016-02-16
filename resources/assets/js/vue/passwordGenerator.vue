<script>
export default {
    props: {
        length: {
            type: Number,
            default: 9
        },
        strength: {
            type: Number,
            default: 3
        },
        symbols: {
            type: Array,
            default: function() { 
                return [
                    'abcdefghijklnopqrstuvwxyz',
                    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    '0123456789',
                    '_-.',
                    '!@#$%^&*()'
                ];
            }
        }
    },
    computed: {
        generatedPassword() {
            var charset = '';
            for(let i = 0; i < this.strength; i++) { 
                charset += this.symbols[i];
            }
            var ret = '';
            for (var i = 0,  n = charset.length; i < this.length; ++i) {
                ret += charset.charAt(Math.floor(Math.random() * n));
            }
            return ret;
        }
    },
    methods: {
        onFocus(e) {
            e.target.setSelectionRange(0,e.target.value.length);
        },
        generateNewPassword() {
            this.length++;
            this.length--;
        }
    }
}
</script>