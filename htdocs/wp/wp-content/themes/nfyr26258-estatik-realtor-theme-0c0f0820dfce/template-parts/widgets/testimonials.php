<?php

/**
 * @var $settings
 * @var $this Ert_Testimonials_Widget
 * @var $testimonials array
 * @var $args array
 */

if ( ! empty( $testimonials ) ) :

	wp_enqueue_style( 'es-slick-style' );

	echo $args['before_widget'];

	if ( ! empty( $instance['title'] ) ) : ?>
		<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title']; ?>
	<?php endif; ?>

	<div class="ert-testimonials js-ert-testimonials">
		<?php foreach ( $testimonials as $testimonial ) : ?>
			<div class="ert-testimonials__item">

				<?php if ( ! empty( $testimonial['image'] ) ) :
					$show_image_link = ! empty( $testimonial['link_image'] ) && ! empty( $testimonial['url'] ); ?>

					<div class="ert-testimonial__image">
						<?php if ( $show_image_link ) : ?>
						<a href="<?php echo sow_esc_url( $testimonial['url'] ) ?>" <?php if ( ! empty( $testimonial['new_window'] ) ) { echo 'target="_blank" rel="noopener noreferrer"'; } ?>>
						<?php endif; ?>

						<?php echo $this->testimonial_user_image( $testimonial['image'] ); ?>

						<?php if ( $show_image_link ) : ?>
						</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $testimonial['name'] ) ) : ?>
					<?php if ( ! empty( $testimonial['link_name'] ) && ! empty( $testimonial['url'] ) ) : ?>
						<a href="<?php echo sow_esc_url( $url ) ?>" <?php if( ! empty( $new_window ) ) { echo 'target="_blank" rel="noopener noreferrer"'; } ?>>
					<?php endif; ?>

					<h4 class="ert-testimonial__name"><?php echo esc_html( $testimonial['name'] ) ?></h4>

					<?php if ( ! empty( $testimonial['link_name'] ) && ! empty( $testimonial['url'] ) ) : ?>
						</a>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ( ! empty( $testimonial['sub_name'] ) ) : ?>
					<span class="ert-testimonial__sub-name">
						<?php echo $testimonial['sub_name']; ?>
					</span>
				<?php endif; ?>

				<?php if ( ! empty( $testimonial['text'] ) ) : ?>
					<div class="ert-testimonial__content">
						<?php echo wp_kses_post( $testimonial['text'] ) ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>

	<?php echo $args['after_widget'];
endif;
