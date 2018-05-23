
window._ = require('lodash');
window.Popper = require('popper.js').default;
window.moment = require('moment');
moment.locale('es')
try {
    window.$ = window.jQuery = require('jquery');
    require('materialize-css');
	window.anime = require('animejs');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

M.toastError = function (error, msgCustom = "Hubo un error al hacer la peticion",time = 6000) {
	let msg = error.response != undefined ? (error.response.data != undefined ? (error.response.data.message != undefined ? error.response.data.message : msgCustom) :  msgCustom) : msgCustom;
	M.toast({html: msg, classes: 'rounded'},time);
}
M.getData = function (error) {
	let msg = error.response != undefined ? (error.response.data != undefined ? error.response.data :  {message:''}) : {message:''};
	return msg;
}