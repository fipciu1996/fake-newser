function fake_newser_register_admin(){
    add_menu_page( 'Fake Newser', 'Fake Newser', 'manage_options', 'fake_newser', '', 'dashicons-welcome-widgets-menus', 6 );
}

add_action( 'admin_menu', 'fake_newser_register_admin' );

/**
 * Display a custom menu page
 */
function fake_newser_menu_page(){
    esc_html_e( 'Fake Newser', 'textdomain' );
}

public function fake_newser_admin_init() {
		register_setting( 'fake_newser_options', 'fake_newser_settings' );

		add_settings_section(
			'test_section',
			__( 'Test', 'fake-newser' ),
			array($this, 'test_section_callback'),
			'fake_newser_options'
		);
    }