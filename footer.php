<?php
/**
 * Theme Footer.
 *
 * See also inc/template-parts/footer.php.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

		do_action( 'wpbf_before_footer' );

		//do_action( 'wpbf_footer' );

		do_action( 'wpbf_after_footer' );

		?>

	</div>

<?php do_action( 'wpbf_body_close' ); ?>

<?php include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/inc_ft.php'?> 

<?php wp_footer(); ?>

</body>

</html>
