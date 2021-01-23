<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="row justify-content-center">
	<div class="col-md-4">  
		<div id="login-form">
			<ul class="nav nav-tabs nav-fill">
				<li class="nav-item">
				<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><?php esc_html_e( 'Login', 'woocommerce' ); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true"><?php esc_html_e( 'Register', 'woocommerce' ); ?></a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">

				<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
					<div class="main-div">
						<div class="panel">
							<img src="<?php bloginfo('template_url') ?>/img/logo.png" class="img-fluid">
							<p><?php esc_html_e( 'Please enter your email and password', 'woocommerce' ); ?></p>
						</div>
						<form class="woocommerce-form woocommerce-form-login" method="post">
						<?php do_action( 'woocommerce_login_form_start' ); ?>

							<div class="form-group">
								<input type="text" class="form-control" name="username" id="username" autocomplete="username" placeholder="<?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>">
							</div>

							<?php do_action( 'woocommerce_login_form' ); ?>
					
							<div class="form-group">
					
								<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autocomplete="current-password">
					
							</div>

							<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme float-left">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
							</label>

							<div class="forgot text-right">
								<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
							</div>
							<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
							<button type="submit" class="woocommerce-button button woocommerce-form-login__submit btn btn-primary mb-5" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>           
							
							<?php do_action( 'woocommerce_login_form_end' ); ?>
						</form>
					</div>
				</div>
				
				<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
					<div class="main-div">
						<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
						<div class="panel">
							<img src="<?php bloginfo('template_url') ?>/img/logo.png" class="img-fluid">
							<p><?php esc_html_e( 'Thanks for your register', 'woocommerce' ); ?></p>
						</div>
						<form method="post" class="woocommerce-form woocommerce-form-register" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
						<?php do_action( 'woocommerce_register_form_start' ); ?>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
							<div class="form-group">
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>">
							</div>
						<?php endif; ?>
							<div class="form-group">
								<input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e( 'email address', 'woocommerce' ); ?>" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>">
							</div>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
							<div class="form-group">
							<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" name="password" id="reg_password" autocomplete="new-password" />
							</div>
						<?php else : ?>

							<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

						<?php endif; ?>

						<?php do_action( 'woocommerce_register_form' ); ?>

						<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
							<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit btn btn-primary" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>           
						
							<?php do_action( 'woocommerce_register_form_end' ); ?>
						
						</form>
						<?php else : ?>
							<h5><?php esc_html_e( 'The register is not Aviable Now Please ... if you have an order to set is create account automaticly in checkout', 'woocommerce' ); ?></h5>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
