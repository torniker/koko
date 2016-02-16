<script>
export default {
    props: {
        date: {
            type: String,
            default: new Date().toISOString().substr(0,19).replace('T', ' ')
        },
        ts: {
            type: String,
            default: (parseInt(new Date().valueOf()) / 1000).toString()
        }
    },
    ready() {
        this.calculateValues();
    },
    computed: {
        timestamp: {
            get() {
                return this.ts;
            },
            set(newVal) {
                this.ts = newVal;
            }
        },
        calculatedDate() {
            return new Date(this.timestamp*1000).toISOString().substr(0,19).replace('T', ' ');
        }
    },
    methods: {
        onSubmit(e) {
            e.preventDefault();
            this.calculateValues();
        },
        onFocus(e) {
            e.target.setSelectionRange(0,e.target.value.length);
        },
        calculateValues: function() {
            var date = this.date;
            if(parseInt(date) == date) {
                if( date.length == 10) {
                    date = date * 1000;
                } else {
                    date = parseInt(date);
                }
            }
            this.timestamp = (parseInt(new Date(date).valueOf()) / 1000).toString();
            this.calculatedDate = new Date(this.timestamp*1000).toISOString().substr(0,19).replace('T', ' ');
        },
    }
};
</script>