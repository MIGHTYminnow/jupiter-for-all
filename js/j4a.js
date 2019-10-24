jQuery(document).ready(function($){
	/**
	 * Implements aria-expanded on the mobile menu button.
	 */
	$( '.mk-nav-responsive-link' ).on( 'click', function() {
		if ( $(this).attr( 'aria-expanded' ) === 'false' ) {
			$(this).attr( 'aria-expanded', true );
		} else {
			$(this).attr( 'aria-expanded', false );
		}
	});

	/**
	 * Adds title attribute to Youtube and Google Maps iframes.
	 */
	$( 'iframe' ).each(function(){
		var src = $( this ).attr( 'src' );
		if ( src.includes( 'youtube.com' ) ) {
			$( this ).attr( 'title', 'Youtube video' );
		} else if ( src.includes( 'google.com/maps/embed' ) ) {
			$( this ).attr( 'title', 'Google Maps' );
		}
	});
});
