<div class="Plugin">
	<div class="Plugin-wrap">
		<h1 class="Type Type--Headline">
			<?php echo esc_html( __( 'Sprites Feed', 'sprites-feed' ) ); ?>
		</h1>

		<hr class="wp-header-end">

		<?php //do_action( 'sfs_admin_warnings' ); ?>
		<?php sfs_activation_panel(); ?>
		<?php //do_action( 'sfs_admin_notices' ); ?>

<!--		<div class="Activation">-->
<!--			<div class="Activation-wrap">-->
<!--				<h2 class="Type Type--Headline">--><?php //_e('Activate your license'); ?><!--</h2>-->
<!--				<form class="Form Form--inline">-->
<!--					<input type="text" class="Input Input--Default" placeholder="--><?php //_e('Insert your license key'); ?><!--">-->
<!--          --><?php //submit_button('Activate', 'primary', 'licence-activation', false); ?>
<!--				</form>-->
<!--			</div>-->
<!--		</div>-->

		<div class="Navigation">
			<div class="Navigation-wrap">
				<a class="Navigation-item" href="<?php menu_page_url( 'sfs-feed-fb-settings', true ); ?>"><span class="dashicons dashicons-facebook"></span><span class="Type Type--Default"><?php _e('Facebook settings'); ?></span></a>
				<a class="Navigation-item" href="<?php menu_page_url( 'sfs-feed-twitter-settings', true ); ?>"><span class="dashicons dashicons-twitter"></span><span class="Type Type--Default"><?php _e('Twitter settings'); ?></span></a>
				<a class="Navigation-item" href="<?php menu_page_url( 'sfs-feed-flickr-settings', true ); ?>"><span class="dashicons dashicons-images-alt2"></span><span class="Type Type--Default"><?php _e('Flickr settings'); ?></span></a>
				<a class="Navigation-item" href="<?php menu_page_url( 'sfs-feed-insta-settings', true ); ?>"><span class="dashicons dashicons-camera"></span><span class="Type Type--Default"><?php _e('Instagram settings'); ?></span></a>
				<a class="Navigation-item" href="<?php menu_page_url( 'sfs-feed-yt-settings', true ); ?>"><span class="dashicons dashicons-video-alt3"></span><span class="Type Type--Default"><?php _e('YouTube settings'); ?></span></a>
			</div>
		</div>
	</div>
</div>
<div class="wrap">
  <?php settings_errors( 'sfs_messages' ); ?>
  <?php do_action( 'sfs_admin_warnings' ); ?>
  <?php do_action( 'sfs_admin_notices' ); ?>
	<div class="Global">
		<div class="Global-wrap">
			<form action="options.php" method="post">
		      <?php
		      settings_fields( 'sfs-global' );
		      do_settings_sections( 'sfs-feed' );
		      submit_button( 'Save Settings' );
		      ?>
			</form>
			<h3>Shortcode</h3>
			<p>Want to place a good looking feed into one of your posts or pages? Just copy this shortcode and paste it into the wysiwyg editor and publish the changes...</p>
			<input readonly type="text" name="shortcode_copy" value="[spritesfeed]" />
		</div>
	</div>
  <div class="Footer">
    <ul class="Footer-list">
      <li>&copy;2018 <a href="//sprites.co" target="_blank"> SPRITES SOFTWARE, s.r.o. </a></li>
      <li><a href="#" target="_blank"> GitHub </a></li>
    </ul>
  </div>
</div>
