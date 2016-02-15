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
        error() {
            console.log('error');
        }
    }
};
</script>