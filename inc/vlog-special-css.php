<?php

if (! function_exists('vlogspecial_css')) {
	function vlogspecial_css()
	{
		global $vlog;
		?>
		<style type="text/css">
			.header-bg {position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: url(
				<?php if (!empty($vlog['header-background']['url'])) {
					echo $vlog['header-background']['url'];
				}else{
					echo get_template_directory_uri().'/img/header-bg';
				} ?>
				) no-repeat scroll 0 0;background-size: cover;z-index: 1}
		</style>
		<?php
	}
	add_action( 'wp_head' , 'vlogspecial_css' );
}