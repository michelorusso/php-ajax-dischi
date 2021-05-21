var app = new Vue({
    el: '#root',

    data: {

        genre: "",
        cds: []

    },

    methods: {

        getDischi(){

            axios
            .get('http://localhost:8888/php-ajax-dischi/VUE-PHP/server.php', {
                params: {
                    genere: this.genre,
                }
            })
            .then( (response) => {

                this.cds = response.data;

            });
        }
    },

    mounted() {

        this.getDischi();

    }

})