const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            newCity: '',
            city: [],
        }
    },
    mounted() {
        this.getListCity();
    },
    methods: {
        getListCity() {
            axios.get(this.apiUrl).then((response) => {
                this.city = response.data;
            })
        }
    },
}).mount('#app')