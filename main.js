const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'apis/jsonDischi.php',
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data;
                });
        },
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')