/*
 * document.events.js
 * 
 * @dz
 * DOM Listeners/Handlers
 */

$(document).ready(function(){
	
	//trigger cart
	$('.buy-button').fancybox({
		padding:0,
		modal:true,
	});
	
	//Validation
		$("#shipping-form").validate();
		
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
    $('#shipping-form .submit').click(function(){
        var data = $('#shipping-form').serializeArray();
        $.post('checkout.php',data,function(success){
            console.log(success);
            $('#checkout').slideUp();

        });
    });
});












