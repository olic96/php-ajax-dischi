const app = new Vue({
    el:'#app',
    data: {
        dischi: [],
    },

    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/server/api.php')
        .then((response) => {
            this.dischi = response.data;
        })
        .catch((error) => {
            console.log(error);
        });
    },
});