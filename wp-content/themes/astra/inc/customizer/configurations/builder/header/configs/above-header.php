<?php
/**
 * Above Header Configuration.
 *
 * @author      Astra
 * @package     Astra
 * @copyright   Copyright (c) 2023, Astra
 * @link        https://wpastra.com/
 * @since       4.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Above header builder Customizer Configurations.
 *
 * @since 4.5.2
 * @return array Astra Customizer Configurations with updated configurations.
 */
function astra_above_header_configuration() {
	$_section = 'section-above-header-builder';

	$_configs = array(

		// Section: Above Header.
		array(
			'name'     => $_section,
			'type'     => 'section',
			'title'    => __( 'Above Header', 'astra' ),
			'panel'    => 'panel-header-builder-group',
			'priority' => 30,
		),

		/**
		 * Option: Header Builder Tabs
		 */
		array(
			'name'        => $_section . '-ast-context-tabs',
			'section'     => $_section,
			'type'        => 'control',
			'control'     => 'ast-builder-header-control',
			'priority'    => 0,
			'description' => '',
		),

		// Section: Above Header Height.
		array(
			'name'              => ASTRA_THEME_SETTINGS . '[hba-header-height]',
			'section'           => $_section,
			'transport'         => 'postMessage',
			'default'           => astra_get_option( 'hba-header-height' ),
			'priority'          => 30,
			'title'             => __( 'Height', 'astra' ),
			'type'              => 'control',
			'control'           => 'ast-responsive-slider',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
			'suffix'            => 'px',
			'input_attrs'       => array(
				'min'  => 30,
				'step' => 1,
				'max'  => 600,
			),
			'context'           => Astra_Builder_Helper::$general_tab,
			'divider'           => array( 'ast_class' => 'ast-section-spacing' ),
		),

		// Option: Above Header Background styling.
		array(
			'name'      => ASTRA_THEME_SETTINGS . '[hba-header-bg-obj-responsive]',
			'type'      => 'control',
			'section'   => $_section,
			'control'   => 'ast-responsive-background',
			'transport' => 'postMessage',
			'default'   => astra_get_option( 'hba-header-bg-obj-responsive' ),
			'title'     => __( 'Background', 'astra' ),
			'priority'  => 40,
			'context'   => Astra_Builder_Helper::$design_tab,
			'divider'   => array( 'ast_class' => 'ast-section-spacing' ),
		),

		// Section: Above Header Border Color.
		array(
			'name'              => ASTRA_THEME_SETTINGS . '[hba-header-bottom-border-color]',
			'transport'         => 'postMessage',
			'default'           => astra_get_option( 'hba-header-bottom-border-color' ),
			'type'              => 'control',
			'control'           => 'ast-color',
			'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_alpha_color' ),
			'section'           => $_section,
			'priority'          => 40,
			'title'             => __( 'Bottom Border Color', 'astra' ),
			'context'           => array(
				Astra_Builder_Helper::$design_tab_config,
				array(
					'setting'  => ASTRA_THEME_SETTINGS . '[hba-header-separator]',
					'operator' => '>=',
					'value'    => 1,
				),
			),
		),

		// Section: Above Header Border.
		array(
			'name'        => ASTRA_THEME_SETTINGS . '[hba-header-separator]',
			'section'     => $_section,
			'priority'    => 40,
			'transport'   => 'postMessage',
			'default'     => astra_get_option( 'hba-header-separator' ),
			'title'       => __( 'Bottom Border Size', 'astra' ),
			'type'        => 'control',
			'control'     => 'ast-slider',
			'suffix'      => 'px',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
				'max'  => 10,
			),
			'context'     => Astra_Builder_Helper::$design_tab,
			'divider'     => array( 'ast_class' => 'ast-top-section-divider' ),
		),
	);

	$_configs = array_merge( $_configs, Astra_Builder_Base_Configuration::prepare_advanced_tab( $_section ) );

	$_configs = array_merge( $_configs, Astra_Builder_Base_Configuration::prepare_visibility_tab( $_section ) );

	if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
		array_map( 'astra_save_header_customizer_configs', $_configs );
	}

	return $_configs;
}

if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
	astra_above_header_configuration();
}
