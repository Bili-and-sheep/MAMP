<?php

/**
 * Class Estatik_Framework_Property_Query_Widget.
 */
abstract class Estatik_Framework_Property_Query_Widget extends SiteOrigin_Widget {

	/**
	 * Return widget form settings.
	 *
	 * @return array
	 */
	function get_widget_form() {

		$fields =  array(
			'property_query' => array(
				'type' => 'section',
				'label' => __( 'Properties Query Filter', 'estatik-framework' ),
				'fields' => array(

					'prop_id' => array(
						'label' => __( 'Property IDs', 'estatik-framework' ),
						'type' => 'text',
						'description' => __( 'Comma separated listings IDs', 'estatik-framework' ),
					),

					'price_min' => array(
						'type' => 'number',
						'label' => __( 'Min Price', 'estatik-framework' ),
					),

					'price_max' => array(
						'type' => 'number',
						'label' => __( 'Max Price', 'estatik-framework' ),
					),

					'sort' => array(
						'type' => 'select',
						'label' => __( 'Sort By', 'estatik-framework' ),
						'prompt' => __( 'Choose Property Sorting', 'estati-framework' ),
						'options' => Es_Archive_Sorting::get_sorting_dropdown_values(),
					),

					'address' => array(
						'type' => 'text',
						'label' => __( 'Search Address String', 'estatik-framework' ),
					),
					'limit' => array(
						'type' => 'number',
						'min' => 1,
						'label' => __( 'Limit', 'estatik-framework' ),
					)
				),
			)
		);

		$fields['property_query']['fields']['taxonomies'] = array(
			'type' => 'section',
			'label' => __( 'Property Taxonomies', 'estatik-framework' ),
		);

		$taxonomies = Es_Taxonomy::get_taxonomies_list();

		if ( ! empty( $taxonomies ) ) {
			foreach ( $taxonomies as $taxonomy_name ) {
				$taxonomy = new Es_Taxonomy( $taxonomy_name );
				$terms = get_terms( array( 'taxonomy' => $taxonomy_name, 'fields' => 'names', 'hide_empty' => false ) );

				if ( $terms && ! is_wp_error( $terms ) ) {
					$fields['property_query']['fields']['taxonomies']['fields'][ str_replace( 'es_', '', $taxonomy_name ) ] = array(
						'label' => $taxonomy->get_name(),
						'type' => 'select',
						'options' => array_combine( $terms, $terms ),
						'multiple' => true
					);
				}
			}
		}

		return $fields;
	}
}
