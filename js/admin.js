var admin = new Vue({
	el: '#app',
	data: {
		description: '',
		bubbles: '',
		services: '',
		spec_items: {},
		changedData: []
	},
	created: function() {
		var self = this;
		axios.get('../volt/json_api.php',{
			params: {
				lang: lang
			}
		}).then(function(response) {
			console.log(response);
			self.description = response.data.description[0];
			self.bubbles = JSON.parse(response.data.bubbles[0].text);
			self.services = response.data.services;
			//self.spec_items = response.data.spec_items;
			for(var i = 0; i < response.data.spec_items.length; i++) {
				self.spec_items[response.data.spec_items[i].id] = response.data.spec_items[i];
			}
		})
	},
	methods: {
		sendData: function(model) {
			var obj = JSON.stringify(this[model]);
			var params = new URLSearchParams();
			params.append('lang', lang);
			params.append('data', obj);
			params.append('table', model);
			axios.post('/volt/admin_controller.php', params)
			.then(function (response) {
				console.log(response);
			})
		},
		updateData: function(data) {
			if(this.changedData.indexOf(data) === -1) {
				this.changedData.push(data);
			}
		},
		sendServices: function() {
			var data = [];
			var self = this;
			this.changedData.forEach(function(item) {
				data.push(self.spec_items[item]);
			});
			var params = new URLSearchParams();
			params.append('lang', lang);
			params.append('data', JSON.stringify(data));
			params.append('table', 'services');
			if(data.length > 0) {
				axios.post('/volt/admin_controller.php', params)
				.then(function (response) {
					console.log(response.data);
				})
			}
		}
	},
	computed: {
		keys: function() {
			return Object.keys(this.bubbles);
		}
	}
})