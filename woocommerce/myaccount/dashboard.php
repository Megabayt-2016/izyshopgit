<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>


	<h5>hello <?php echo esc_html( $current_user->display_name ); ?></h5>
	
	<a class="btn btn-success" href="<?php echo esc_url( wc_get_endpoint_url( 'orders' ) ); ?>" >order</a>
	<a class="btn btn-primary" href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address' ) ); ?>">Adress</a>
	<a class="btn btn-warning" href="<?php echo esc_url( wc_get_endpoint_url( 'edit-account' ) ); ?>">edit Account</a>
	<a class="btn btn-danger" href="<?php echo esc_url( wc_logout_url() ); ?>">logout</a>


<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );
?>

</div>
<?php

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
