/*
 * document.events.js
 * 
 * @dz
 * DOM Listeners/Handlers
 */

$(document).ready(function(){
	
	//trigger cart
	$('.buy-button').fancybox({
		  padding: 0
		, hideOnOverlayClick: false
		, hideOnContentClick: false
		, enableEscapeButton: true
		, showCloseButton: true 
        , onClosed: function(){
            $('#checkout').parent().load('cart.php');
        }
	});
		
	//check for modern browser features - view them in Modernizr namespace
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

	//cart calculations
	$('select[name="quantity"]').change(function(){
		var quantity = parseInt($('select[name="quantity"]').val());
		var price = globals.price;
		var grandtotal = parseFloat((quantity*price)+3.99);
		var subtotal = parseFloat(quantity*price);
		globals.grandTotal = grandtotal.toFixed(2);
		globals.subTotal = subtotal.toFixed(2);
		$('.grandtotal').html(" $ "+globals.grandTotal);
		$('.subtotal').html(" $ "+globals.subTotal);
	});

    //checkout submit
	$("#shipping-form").validate({
		submitHandler: function(){
			var data = $('#shipping-form').serializeArray();
	        $.post('checkout.php',data,function(response){
	            $('#checkout').slideUp('slow',function(){
	            	$('#shipping-form').html('');
	            	$('.checkout-right').html('');
	            	$('#checkout h5').css('padding','18px 12px 0 12px');
	            	$('#checkout h5').html(response.message);
	            	$('#checkout').slideDown();
	            });
	        },'json');
		}
	});
});












