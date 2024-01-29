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
        },
        addNewCity() {
            const data = {
                item: this.newCity
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.newCity = '';
                this.city = response.data;
            })
        }
    }
}).mount('#app')