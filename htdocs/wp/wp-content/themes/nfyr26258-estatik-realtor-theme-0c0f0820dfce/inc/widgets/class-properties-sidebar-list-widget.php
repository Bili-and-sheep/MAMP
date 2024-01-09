<?php

/**
 * Class Ert_Property_Carousel_Widget.
 */
class Ert_Properties_Sidebar_List_Widget extends Estatik_Framework_Property_Query_Widget {

	/**
	 * Ert_Testimonials_Widget constructor.
	 */
	function __construct() {
		parent::__construct(
			'ert-properties-sidebar-list-widget',
			__( 'Estatik Properties Sidebar List', 'ert' ),
			array(
				'description' => __( 'Display Properties List. The widget uses in sidebar.', 'ert'),
				'has_preview' => false,
                'classname' => 'es-widget'
			),
			array(),
			false,
			plugin_dir_path( __FILE__ )
		);
	}

	/**
	 * Return widget form settings.
	 *
	 * @return array
	 */
	function get_widget_form() {

		return array_merge( array(
			'title' => array(
				'type' => 'text',
				'label' => __( 'Title', 'so-widgets-bundle' ),
			),
		), parent::get_widget_form() );
	}

	/**
	 * Return template variables.
	 *
	 * @param $instance
	 * @param $args
	 *
	 * @return array
	 */
	function get_template_variables( $instance, $args ) {

		return wp_parse_args( $instance, array(
			'title' => '',
		) );
	}

	/**
	 * Display carousel.
	 *
	 * @param $instance
	 * @param $args
	 * @param $template_vars
	 * @param $css_name
	 *
	 * @return string
	 */
	public function get_html_content( $instance, $args, $template_vars, $css_name ) {

		ob_start();

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title'];
		}

		if ( ! empty( $instance['property_query']['taxonomies'] ) ) {
			$instance['property_query'] = array_merge( $instance['property_query'], $instance['property_query']['taxonomies'] );
			unset( $instance['property_query']['taxonomies'] );
		}

		if ( ! empty( $instance['property_query'] ) ) {
			$instance = array_merge( $instance, $instance['property_query'] );
			unset( $instance['property_query'] );
		}

		$listings_shortcode = new Es_My_Listing_Shortcode();
		$query_args = $listings_shortcode->build_query_args( $instance );

		$query = new WP_Query( $query_args );

		if ( $query->have_posts() ) : ?>
            <div class="ert-psl-items">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="ert-psl-item">
                        <div class="row">
                            <div class="col-lg-5 ert-psl-item__image">
                                <a href="<?php the_permalink(); ?>">
	                                <?php es_the_post_thumbnail( 'thumbnail', true ); ?>
                                </a>
                            </div>
                            <div class="col-lg-7 ert-psl-item__content">
                                <?php es_the_title( '<h4 class="entry-title"><a href="' . get_the_permalink() . '">', '</a></h4>' ); ?>
                                <?php es_the_address( '<span class="ert-address">', '</span>' ); ?>

                                <div class="row ert-property-item__fields">
                                    <?php es_the_property_field( 'bedrooms', '<div class="col-auto">' . __( 'Beds', 'es-plugin' ) . ': ', '</div>' ); ?>
                                    <?php es_the_property_field( 'bathrooms', '<div class="col-auto">' . __( 'Baths', 'es-plugin' ) . ': ', '</div>' ); ?>

                                    <?php es_the_formatted_area( '<div class="col-12 ert-area">' . __( 'Area', 'es-plugin' ) . ': ', '</div>' ); ?>
                                </div>

                                <?php es_the_formatted_price(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
		<?php endif;

		return ob_get_clean();
	}
}
