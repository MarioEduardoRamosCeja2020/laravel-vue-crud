
new Vue({
    el: '#crud',
    created: function() {
        this.getSuggestions();
    },
    data:{
        Suggestions: []
    },
    methods:{
        getSuggestions: function(){
            var urlSuggestions ='suggestions';
            axios.get(urlSuggestions)
            .then(response =>{
                this.Suggestions = response.data
            });    
        }
    }
});