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
        // Aggiunta di un elemento
        addNewCity() {
            const data = {
                text: this.newCity,
                done: false
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.newCity = '';
                this.city = response.data;
            })
        },

        // Cambio il done di un elemento
        toggleDone(key) {
            const data = {
                toggleIndex: key
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.city = response.data;
            })
        },

        // Elimino un elemento
        deleteCity(key) {
            const data = {
                deleteIndex: key
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.city = response.data;
            })
        },

        // Restituisco l'array di oggetti
        getListCity() {
            axios.get(this.apiUrl).then((response) => {
                this.city = response.data;
            })
        },
    }
}).mount('#app')