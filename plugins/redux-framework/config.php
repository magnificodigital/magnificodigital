<?php
/*
 * ReduxFramework Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

// This is your option name where all the Redux data is stored.
$opt_name = 'melinda_options';

// Background Patterns Reader
include get_template_directory() . '/plugins/redux-framework/background-patterns.php';


/*
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'             => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'         => $theme->get('Name'),
	// Name that appears at the top of your panel
	'display_version'      => $theme->get('Version'),
	// Version that appears at the top of your panel
	'menu_type'            => 'menu',
	//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'       => true,
	// Show the sections below the admin menu item or not
	'menu_title'           => esc_html__('Theme options', 'melinda'),
	'page_title'           => esc_html__('Theme options', 'melinda'),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'       => 'AIzaSyC9VmAo3humqz45iP6thYhhiKjAPEuN4kQ',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly' => false,
	// Must be defined to add google fonts to the typography module
	//'async_typography'     => false,
	// Use a asynchronous font on the front end or font string
	//'disable_google_fonts_link' => true, // Disable this in case you want to create your own google fonts loader
	'admin_bar'            => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'       => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'   => 50,
	// Choose an priority for the admin bar menu
	'global_variable'      => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'             => false,
	// Show the time the page took to load, etc
	'update_notice'        => false,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'           => true,
	// Enable basic customizer support
	//'open_expanded'     => true, // Allow you to start the panel in an expanded way initially.
	//'disable_save_warn' => true, // Disable the save warning when a user changes a field

	// OPTIONAL -> Give you extra features
	'page_priority'        => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'          => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'     => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'            => '',
	// Specify a custom URL to an icon
	'last_tab'             => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'            => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'            => '',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults'        => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'         => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'         => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'   => true,
	// Shows the Import/Export panel when not used as a field.

	// CAREFUL -> These options are for advanced use only
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'           => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// 'footer_credit'     => '', // Disable the footer credit of Redux. Please leave if you can help it.

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'             => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'system_info'          => false,
);

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START SECTIONS
 */

// As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for

// -> START Basic Fields

include get_template_directory() . '/plugins/redux-framework/sections/general.php';

include get_template_directory() . '/plugins/redux-framework/sections/layout.php';

include get_template_directory() . '/plugins/redux-framework/sections/top_header.php';

include get_template_directory() . '/plugins/redux-framework/sections/header.php';

include get_template_directory() . '/plugins/redux-framework/sections/title_wrapper.php';

include get_template_directory() . '/plugins/redux-framework/sections/content.php';

include get_template_directory() . '/plugins/redux-framework/sections/footer.php';

include get_template_directory() . '/plugins/redux-framework/sections/bottom_footer.php';

Redux::setSection( $opt_name, array(
	'id' => 'divide_01',
	'type' => 'divide',
) );

include get_template_directory() . '/plugins/redux-framework/sections/posts.php';

include get_template_directory() . '/plugins/redux-framework/sections/single_post.php';

if (class_exists('woocommerce')) {
	include get_template_directory() . '/plugins/redux-framework/sections/products.php';
	include get_template_directory() . '/plugins/redux-framework/sections/single_product.php';
}

if (class_exists('AirProjects')) {
	include get_template_directory() . '/plugins/redux-framework/sections/projects.php';
	include get_template_directory() . '/plugins/redux-framework/sections/single_project.php';
}

include get_template_directory() . '/plugins/redux-framework/sections/search.php';

Redux::setSection( $opt_name, array(
	'id' => 'divide_02',
	'type' => 'divide',
) );

include get_template_directory() . '/plugins/redux-framework/sections/social.php';

include get_template_directory() . '/plugins/redux-framework/sections/favicon.php';

include get_template_directory() . '/plugins/redux-framework/sections/custom.php';

/*
 * <--- END SECTIONS
 */


// If Redux is running as a plugin, this will remove the demo notice and links
add_action('init', 'remove_redux_demo');
add_action('redux/loaded', 'remove_redux_demo');
// Remove the demo link and the notice of integrated demo from the redux-framework plugin
function remove_redux_demo() {
	// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
	if (class_exists('ReduxFrameworkPlugin')) {
		remove_filter( 'plugin_row_meta', array(
			ReduxFrameworkPlugin::instance(),
			'plugin_metalinks'
		), null, 2 );

		// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
		remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
	}
}

Redux::init($opt_name);