<?php
/**
 * Module for cron/persist action trigger, import now button
 */

add_action('wp_ajax_sfs_get_insta_access_key', 'sfs_get_insta_access_key');
add_action('wp_ajax_nopriv_sfs_get_insta_access_key', 'sfs_get_insta_access_key');

function sfs_get_insta_access_key() {
  $opts = get_option('sfs-insta-credentials');

  try {
    if(isset($_GET['code'])) {
      $opts['sfs-insta-code'] = strip_tags($_GET['code']);
      $opts['sfs-insta-access-key'] = sfs_get_insta_token($opts);
      update_option('sfs-insta-credentials', $opts);
	}
    wp_redirect(admin_url('admin.php?page=sprites-feed-insta-settings'));
    exit;

  } catch (\Exception $e) {
    echo json_encode('There was an Exception thrown in the sfs_get_insta_access_key function, the error states: %s', $e->getMessage());
  }
  wp_die();
}

function sfs_save_insta_access_key($str, $opt) {
  $opts = get_option('sfs-insta-credentials');
  $opts[$opt] = $str;
}

add_action('admin_footer', 'auth_script');

function auth_script() {
  $opts = get_option('sfs-insta-credentials');
  ?>
  <script>
      (function(){
          function getOAuth() {
              window.open('https://api.instagram.com/oauth/authorize/?client_id=<?php echo $opts['sfs-api-client-id']; ?>&redirect_uri=<?php echo admin_url('admin-ajax.php?action=sfs_get_insta_access_key'); ?>&response_type=code&scope=public_content', '_self');
          }

          var el = document.getElementById('oauth-btn-insta');
          if(el) {
              el.addEventListener('click', getOAuth);
          }
      })();
  </script>
  <?php
}