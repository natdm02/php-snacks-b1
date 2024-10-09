const {createApp} = Vue

createApp({
       
    data(){

        return{
            
            apiUrl: 'server.php',
            data: [],
            dettagliodisco: {},
            showModal: false,

        };

    },

    

    const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: "http://localhost/131-php8-todolist-multi/api/server.php",  // URL per la chiamata GET
            apiPostUrl: "http://localhost/131-php8-todolist-multi/api/server.php",  // URL per la chiamata POST
            todoList: [],  // Lista dei todo
            newTodo: ""  // Nuovo todo da aggiungere
        };
    },
    methods: {
        // Metodo per recuperare i todo (chiamata GET)
        getTodos(url) {
            axios.get(url)
                .then((response) => {
                    console.log(response.data);
                    this.todoList = response.data;  // Assegna i dati alla lista todo
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        // Metodo per aggiungere un nuovo todo (chiamata POST)
        addTodo(content) {
            // # chiamata post con axios
            const data = new FormData();  // Usa FormData per mandare i dati nel formato corretto
            data.append('todo', content);  // Inserisce il nuovo todo

            axios.post(this.apiPostUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then((response) => {
                console.log(response);

                // Aggiorna la lista dopo aver aggiunto il nuovo todo
                this.getTodos(this.apiUrl);
            })
            .catch(function (error) {
                console.log(error);
            })
            .finally() => {
                this.newTitle = "";
            };
        }
    },
    created() {
        // Carica la lista dei todo quando l'app viene creata
        this.getTodos(this.apiUrl);
    }
}).mount('#app');
