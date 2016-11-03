jQuery(function($) {

	
	//Goto Top
	$('.gototop').click(function(event) {
		 event.preventDefault();
		 $('html, body').animate({
			 scrollTop: $("body").offset().top
		 }, 500);
	});	
	//End goto top		

	tinymce.init(
		    	{ 
		        	selector:'#order-body',
		        	height : 220,
		        	//plugins: "image",
		    	}
	);	
});