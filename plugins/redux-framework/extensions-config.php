<?php
if ( !function_exists( "redux_ext__metaboxes" ) ) {
	function redux_ext__metaboxes($metaboxes) {

		// Background Patterns Reader
		include get_template_directory() . '/plugins/redux-framework/background-patterns.php';

		$boxSections = array();
		$metaboxes = array();

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/layout.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/top_header.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/header.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/title_wrapper.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/content.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/footer.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/bottom_footer.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/menus.php';

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/custom.php';

		$metaboxes[] = array(
			'id' => 'page-theme-options',
			'title' => esc_html__('Theme options', 'melinda'),
			'post_types' => array('page'),
			'position' => 'normal',
			'priority' => 'high',
			'sections' => $boxSections,
		);

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/single_project.php';

		$metaboxes[] = array(
			'id' => 'page-theme-options',
			'title' => esc_html__('Theme options', 'melinda'),
			'post_types' => array('project'),
			'position' => 'normal',
			'priority' => 'high',
			'sections' => $boxSections,
		);

		array_pop($boxSections);

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/single_post.php';

		$metaboxes[] = array(
			'id' => 'post-theme-options',
			'title' => esc_html__('Theme options', 'melinda'),
			'post_types' => array('post'),
			'position' => 'normal',
			'priority' => 'high',
			'sections' => $boxSections,
		);

		array_pop($boxSections);
		unset($boxSections[3]); // Title wrapper

		include get_template_directory() . '/plugins/redux-framework/sections/metaboxes/single_product.php';

		$metaboxes[] = array(
			'id' => 'product-theme-options',
			'title' => esc_html__('Theme options', 'melinda'),
			'post_types' => array('product'),
			'position' => 'normal',
			'priority' => 'high',
			'sections' => $boxSections,
		);

		$metaboxes = apply_filters( 'redux_ext__metaboxes_filter', $metaboxes );

		return $metaboxes;
	}

	add_action('redux/metaboxes/melinda_options/boxes', 'redux_ext__metaboxes');
}

require_once get_template_directory() . '/plugins/redux-framework/extensions-loader.php';
