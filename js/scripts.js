jQuery ( document ).ready( function() {
	
	jQuery( '.gform_wrapper' ).addClass( 'trigger' );
	
	jQuery( '.trigger .gform_title' ).click( function() {
		
		jQuery( '.gform_body, .gform_footer' ).slideToggle();
		jQuery( this ).slideToggle();
				
	});
	
});