<?php
/**
 * The template for displaying the Fullpage Slides Navigation
 * 
 * @package 	WP_Fullpage\Templates\Layout
 */
?>

<?php

	if( WPFP_Query()->section->slide_count > 1 ) :

		$position = WPFP_Query()->get_slides_navigation_position( -1, false );

?>

	<div class="fp-slidesNav <?php print $position; ?>">
		<ul>
			<?php 

				foreach( WPFP_Query()->section->slides as $key => $slide ) :

				?>

					<li class="tooltipped" data-tooltip="<?php print esc_html( WPFP_Query()->get_slide_nav_title( -1, $key ) ); ?>" data-position="<?php print $position === 'top' ? 'bottom' : 'top' ; ?>">
						<a href="#">
							<span></span>
						</a>
					</li>

				<?php 

				endforeach;

			?>
		</ul>
	</div>

<?php

	endif;

?>