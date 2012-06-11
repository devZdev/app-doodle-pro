//Event Tracking
$(document).ready(function(){
	
	//Buy Button sidebar
    $('.buy-button').parent('#content-sidebar').children('.buy-button').click(function(){
        trackEvent('Home', 'click_buy_button', 'sidebar', null, true);
    });
    
     //Buy Button Header
     $('.buy-button').parent('li').children('.buy-button').click(function(){
        trackEvent('Home', 'click_buy_button', 'header', null, true);
     });

     //Continue with Order
     $('#shipping-form .submit').click(function(){
        trackEvent('Cart', 'click_continue_order', 'fancybox-submit', null, true);    
     });
});

function trackEvent(category, action, label, value, opt){
	//console.log('_gaq.push(['+category+','+action+','+label+','+value+','+opt+']);');
	_gaq.push(["_trackEvent",category,action,label,value,opt]);
}
