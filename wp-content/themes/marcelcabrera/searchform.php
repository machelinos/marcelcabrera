<?php
/**
 * Template for displaying search forms in WP Boilerplate
 *
 * @package WordPress
 * @subpackage Wp_Boilerplate
 * @since 1.0
 * @version 1.0
 */

?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field">
		<span class="screen-reader-text"><?php echo _e( 'Buscar:', 'label', 'wpboilerplate' ); ?></span>
	</label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit btn-icon icon-arrow_forward"><span class="screen-reader-text"><?php echo _e( 'Buscar', 'submit button', 'wpbiolerplate' ); ?></span></button>
</form>
