var urlUsuarios = 'https://jsonplaceholder.typicode.com/users';
new Vue({
	el: "#main",
	created: function(){
		this.mostrarUsuarios();
	}
	data: {
		lists: []
	}
	methods:{
		mostrarAlerta: function(){
			toastr.success('todo ok');
		},
		mostrarUsuarios: function(){
			axios.get(urlUsuarios).then(response => {
				this.lists = response.data;
			});
		}
	}
})