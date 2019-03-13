<header class="ba-header">
	<div class="ba-header-bar">
		<a class="any-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
			<?php if(has_custom_logo()) : ?>
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<img src="<?php echo $image[0] ?>" alt="<?php bloginfo( 'name' ); ?>" />
			<?php else : ?>
				<?php bloginfo( 'name' ); ?>
			<?php endif ?>
		</a>
		<nav>
			<?php foundationpress_top_bar_r(); ?>
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon hide-for-large" type="button" data-toggle="off-canvas-menu"></button>
		</nav>
	</div>
</header>