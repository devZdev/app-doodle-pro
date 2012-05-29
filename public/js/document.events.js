/*
 * document.events.js
 * 
 * @dz
 * DOM Listeners/Handlers
 */

$(document).ready(function(){
	
	//trigger cart
	$('#buy-button').fancybox({
		padding:0,
		modal:true,
	});
	
	//Validation
	$("#shipping-form").validate();
});