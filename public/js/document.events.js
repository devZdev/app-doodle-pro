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
	if(globals.hostname != "localhost"){
		$("#shipping-form").validate();
	}
	
	/*
	 * 
	 * 
	 * @dz
	 * Placeholder JS for checkout inputs
	if(!Modernizr.input.placeholder){
		$("input").each(
			function(){
				if($(this).val()=="" && $(this).attr("placeholder")!=""){
					$(this).val($(this).attr("placeholder"));
					$(this).focus(function(){
						if($(this).val()==$(this).attr("placeholder")) $(this).val("");
					});
					$(this).blur(function(){
						if($(this).val()=="") $(this).val($(this).attr("placeholder"));
					});
				}
		});
	}
	*
	*/
	
});