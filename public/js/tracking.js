//Event Tracking
$(document).ready(function(){
	
	//Buy Button
	$('#buy-button').click(function(){
		trackEvent("Main", "click-buy");
	});

});

function trackEvent(category,action){
	console.log('_gaq.push(['+category+','+action+']);');
	//_gaq.push(["_trackEvent",category,action,label,value,opt_noninteraction]);
}