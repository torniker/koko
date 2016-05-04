<script>
export default {
    props: {
        ip: {
            type: String,
            default: ''
        },
        userAgent: {
            type: String,
            default: ''
        }
    },
    ready() {
        this.fetchUserData();
    },
    methods: {
        fetchUserData() {
            this.$http.get('/api/user-info').then(this.success);
        },
        success(response) {
            this.ip = response.data.ip;
            this.userAgent = response.data.userAgent;
        },
        onFocus(e) {
            e.target.setSelectionRange(0,e.target.value.length);
        },
        error() {
            console.log('error');
        }
    }
};
</script>