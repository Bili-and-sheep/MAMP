<?php $logger = new Es_Messenger( 'es_user_register' ); global $es_settings;

$terms_of_use = __( 'Terms of Use' ,'es-plugin' );
$privacy_policy = __( 'Privacy Policy' ,'es-plugin' );

$terms_of_use = $es_settings->term_of_use_page_id && get_permalink( $es_settings->term_of_use_page_id ) ?
	"<a href='" . get_permalink( $es_settings->term_of_use_page_id ) . "' target='_blank'>{$terms_of_use}</a>" : $terms_of_use;

$privacy_policy = $es_settings->privacy_policy_page_id && get_permalink( $es_settings->privacy_policy_page_id ) ?
	"<a href='" . get_permalink( $es_settings->privacy_policy_page_id ) . "' target='_blank'>{$privacy_policy}</a>" : $privacy_policy; ?>

<?php if ( ! get_current_user_id() ) : ?>

	<div class="es-agent-register__wrap">
		<h2><?php _e( 'Register', 'es-plugin' ); ?></h2>

		<?php $logger->render_messages(); ?>

		<form action="" method="post" enctype="multipart/form-data">

			<?php if ( $es_settings->buyers_enabled ) : ?>
                <div class="row">
                    <div class="col-auto ert-label"><?php _e( 'Register As', 'ert' ); ?>:</div>
                    <div class="col-auto">
                        <div class="form-check checkbox checkbox-circle">
                            <input type="radio" class="form-check-input js-es-role-radio" id="es-radio-reg-buyer" value="es_buyer" name="es_user[role]">
                            <label for="es-radio-reg-buyer"><?php _e( 'Buyer', 'es-plugin' ); ?></label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-check checkbox checkbox-circle">
                            <input type="radio" class="form-check-input js-es-role-radio" id="es-radio-reg-agent" value="agent_role" name="es_user[role]">
                            <label for="es-radio-reg-agent"><?php _e( 'Agent', 'es-plugin' ); ?></label>
                        </div>
                    </div>
                </div>
			<?php else: ?>
				<input type="hidden" value="agent_role" name="es_user[role]">
			<?php endif; ?>


			<div class="row form-group">
				<div class="col-md-6">
                    <input type="text" class="form-control" id="es-agent-name" placeholder="<?php _e( 'Name', 'es-plugin' ); ?>" name="es_user[name]"/>
                </div>
				<div class="col-md-6">
                    <input type="text" class="form-control" id="es-agent-username" placeholder="<?php _e( 'User name', 'es-plugin' ); ?>" data-required name="es_user[username]"/>
                </div>
			</div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="email" class="form-control" id="es-agent-email" placeholder="<?php _e( 'Your Email', 'es-plugin' ); ?>" name="es_user[email]"/>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="es-agent-tel" placeholder="<?php _e( 'Your Phone', 'es-plugin' ); ?>" name="es_user[tel]"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="es-agent-company" placeholder="<?php _e( 'Company', 'es-plugin' ); ?>" name="es_user[company]"/>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="es-agent-website" placeholder="<?php _e( 'Company Website', 'es-plugin' ); ?>" name="es_user[website]"/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <textarea name="es_user[about]" class="form-control" placeholder="<?php _e( 'About', 'es-plugin' ); ?>" id="es-agent-about"></textarea>
                </div>
            </div>

            <div class="row es-field__photo">
                <div class="col-auto ert-label"><?php _e( 'Photo/Logo', 'ert' ); ?>:</div>
                <div class="col-auto ert-content">
                    <div class="js-es-image"></div>
                    <a href="#" class="js-trigger-upload" data-selector="#es-file-input">
                        <i class="ert-icon ert-icon_upload"></i>
                        <span><?php _e( 'Upload photo', 'es-plugin' ); ?></span>
                    </a>
                    <input type="file" name="agent_photo" id="es-file-input" class="js-es-input-image"/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <?php do_action( 'es_recaptcha' ); ?>
                </div>
            </div>

            <input type="hidden" name="_redirect" value="<?php the_permalink(); ?>"/>

			<?php wp_nonce_field( 'es_user_registration', 'es_user_registration' ); ?>

            <div class="terms-wrapper">
	            <?php if ( $es_settings->privacy_policy_checkbox == 'required' ) : ?>
                    <label>
                        <input type="checkbox" name="agree_terms" value="1" required/>
                        <?php printf( __( 'I agree to the %s and %s', 'es-plugin' ), $terms_of_use, $privacy_policy ); ?>
                    </label>
	            <?php endif; ?>
                <?php if ( $es_settings->login_page_id && get_post( $es_settings->login_page_id ) ) : ?>
                    <a href="<?php echo get_the_permalink( $es_settings->login_page_id ); ?>" class="forgot-pwd"><?php _e( 'Have an account ?', 'ert' ); ?></a>
                <?php endif; ?>
            </div>

			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="<?php _e( 'Register', 'es-plugin' ); ?>">
            </div>
		</form>
	</div>
<?php else : ?>
	<div class="es-agent-register__logged">
		<?php _e( 'You are already logged in.', 'es-plugin' ); ?><br>
		<a href="<?php echo wp_logout_url( get_the_permalink() ); ?>" class="es-agent__logout btn btn-primary"><?php _e( 'Logout', 'es-plugin' ); ?></a>
	</div>
<?php endif; ?>
