new Vue({
	el: '#app',
	data: {
		arrDiscs: [],
		urlApi: location.href + 'api.php',
	},
	created() {
		axios.get(this.urlApi)
			.then(axiosResponse => {
				// console.log(axiosResponse);
				this.arrDiscs = axiosResponse.data;
			});
	}
})