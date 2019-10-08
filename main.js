jQuery(document).ready(function($){
	/**
	 * Implement aria-expanded on the mobile menu button.
	 */
	$( '.mk-nav-responsive-link' ).on( 'click', function() {
		if ( $(this).attr( 'aria-expanded' ) === 'false' ) {
			$(this).attr( 'aria-expanded', true );
		} else {
			$(this).attr( 'aria-expanded', false );
		}
	});

	/**
	 * Add title attribute to Youtube iframes.
	 */
	$( 'iframe' ).each(function(){
		if ( $( this ).attr( 'src' ).includes( 'youtube.com' ) ) {
			$( this ).attr( 'title', 'Youtube video' );
		}
	});
});
