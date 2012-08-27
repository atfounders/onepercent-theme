<?php
/**
 * The template for displaying search forms in 1% Pledge
 *
 * @package 1% Pledge
 * @since 1% Pledge 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', '1_pledge' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', '1_pledge' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', '1_pledge' ); ?>" />
	</form>
