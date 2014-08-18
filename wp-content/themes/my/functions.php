<?php
function get_url() {
  $url = '';
  $url .= $_SERVER['REQUEST_URI'];
  $last_slash = strripos($url, '/');
  $penult_slash = strripos($url, '/', $last_slash - strlen($url) - 1);
  $ret = substr($url, $penult_slash + 1, $last_slash - $penult_slash - 1);
  return $ret;
}

function get_modal_window($phone_code, $phones, $email, $address, $id = '', $is_closed = 'true', $is_visible = 'false', $position = 'fixed') {
?>
  <div <?php if ($id !== '') echo 'id="'.$id.'"';?> class="modal 
  <?php if ($is_visible == 'true') echo 'modal_display_block ';
  if ($position == 'absolute') echo 'modal_position_absolute'; ?>">
      <span class="modal__phone-code">
          (<?php echo $phone_code; ?>)
      </span>
      <div class="modal__align-helper">
          <div class="modal__phones">
              <?php echo $phones; ?>
          </div>
      </div>
      <div class="modal__align-helper_after"></div>
      <div class="modal__align-helper">
          <div class="modal__email">
              <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
          </div>
      </div>
      <div class="modal__align-helper_after"></div>
      <div class="modal__align-helper">
          <div class="modal__address">
              <?php echo $address; ?>
          </div>
      </div>
      <?php if ($is_closed == 'true') { ?>
      <a class="modal__a-close">
          <img class="modal__close" src="<?php bloginfo('template_url'); ?>/images/close.png" />
      </a>
      <?php } ?> 
  </div>
<?php }

function get_first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  return $first_img;
}

function get_file_extension($file) {
  $ext =  substr($file, strripos($file, '.')+1);
  return $ext;
}

function get_file() {
  global $post, $posts;
  $file = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<a.+href=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $file = $matches [1] [0];
  return $file;
}

if (function_exists('add_theme_support')) {
add_theme_support('menus');
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
?>
