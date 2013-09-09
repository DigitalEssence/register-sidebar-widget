//* Register a new widget area in Genesis
genesis_register_sidebar( array(
	'id'		=> 'widget-name',
	'name'		=> __( 'Text to show in dashboard', 'custom-theme' ),
	'description'	=> __( 'Dexcription to show.', 'custom-theme' ),
) );