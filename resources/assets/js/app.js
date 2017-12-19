
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import swal from 'sweetalert2';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


let intervalId = 0;
const $scrollButton = document.querySelector('.scroll');

function scrollStep() {
    if (window.pageYOffset === 0) {
        clearInterval(intervalId);
    }
    window.scroll(0, window.pageYOffset - 50);
}

function scrollToTop() {
    intervalId = setInterval(scrollStep, 16.66);
}

$scrollButton.addEventListener('click', scrollToTop);

var r1 = document.querySelector('#r1');
var r2 = document.querySelector('#r2');
var r3 = document.querySelector('#r3');
var r4 = document.querySelector('#r4');
var cost = 0;
var boton = document.querySelector('#shipment');
var wei = document.querySelector('#weight');



boton.addEventListener('click', function(evt) {

	let isValid= true;
	if (r1.checked || r3.checked)
{
	cost = 3;
} else if (r2.checked)
{
	cost = 2;
} else if (r4.checked)
{
	cost = 4;
}
	var bill = cost * Number(wei.value);
	document.querySelector('#cost').innerHTML = '<input type="hidden" name="cost" value="'+bill+'">';
	if(isValid){
		swal({
		  title: 'Are you sure?',
		  text: "Your shipment cost is:" + bill + "$.",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Confirm Shipment!',
		  cancelButtonText: 'Cancel Shipment!!',
		  confirmButtonClass: 'btn btn-success',
		  cancelButtonClass: 'btn btn-danger',
		  buttonsStyling: false,
		  reverseButtons: true
		}).then((result) => {
		  if (result.value) {
		  	document.querySelector("#form").submit();
		    // swal(
		    //   'Deleted!',
		    //   'Your file has been deleted.',
		    //   'success'
		    // )
		  // result.dismiss can be 'cancel', 'overlay',
		  // 'close', and 'timer'
		  } else if (result.dismiss === 'cancel') {

		    // swal(
		    //   'Cancelled',
		    //   'Your imaginary file is safe :)',
		    //   'error'
		    // )
		  }
		});
		
	}

});

