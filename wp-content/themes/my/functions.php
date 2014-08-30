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

function get_cur_lang() {
    return strtok( get_blog_language( get_current_blog_id(), FALSE ), '_');
}

function str_replace_once($search, $replace, $text) 
{ 
   $pos = strpos($text, $search); 
   return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text; 
} 

function mlp_navigation(
    $between = ' ',
    $before  = '',
    $after   = ''
)
{
    $absolute_url = full_url($_SERVER);
    $texts = array('ru' => 'Русский', 'en' => 'English', 'de' => 'Deutsch');
    $items = array();
    if (!strstr($absolute_url, 'category') ) {
        $links = (array) mlp_get_interlinked_permalinks();
        if ( empty ( $links ) )
            return false;
        $items = array();
        foreach ( $links as $link ) {
            if ( isset ( $link['text'] ) ) {
                $text = $link['text'];
            }
            else {
                // take just the main code
                $first = strtok( $link['lang'], '_' );
                $text = $texts[$first];
            }

            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                esc_url( $link['permalink'] ),
                esc_attr( $link['lang'] ),
                $text
            );
        }

        $items[] = sprintf(
            '<a href="">%s</a>',
            $texts[get_cur_lang()]
        );
    }
    else {
        if (($cur_lang = get_cur_lang()) == 'ru') {
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/blog/', '/en/', $absolute_url),
                'en',
                $texts['en']
            );
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/blog/', '/de/', $absolute_url),
                'de',
                $texts['de']
            );
            $items[] = sprintf(
                '<a href="">%s</a>',
                $texts[$cur_lang]
            );
        }
        else if ($cur_lang == 'en') {
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/en/', '/blog/', $absolute_url),
                'ru',
                $texts['ru']
            );
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/en/', '/de/', $absolute_url),
                'de',
                $texts['de']
            );
            $items[] = sprintf(
                '<a href="">%s</a>',
                $texts[$cur_lang]
            );
        }
        else {
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/de/', '/blog/', $absolute_url),
                'ru',
                $texts['ru']
            );
            $items[] = sprintf(
                '<a href="%1$s" hreflang="%2$s" rel="alternate">%3$s</a>',
                str_replace_once('/de/', '/en/', $absolute_url),
                'en',
                $texts['en']
            );
            $items[] = sprintf(
                '<a href="">%s</a>',
                $texts[$cur_lang]
            );
        }
    }
    return $before . join( $between, $items ) . $after;
}

function get_lang_switch($cur_lang, $ru, $en, $de) {
  if ($cur_lang == 'ru') {
      echo $ru;
  } elseif ($cur_lang == 'en') {
      echo $en;
  }
  else {
      echo $de;
  }
}
function lang_switch($cur_lang, $ru, $en, $de) {
  if ($cur_lang == 'ru') {
      return $ru;
  } elseif ($cur_lang == 'en') {
      return $en;
  }
  else {
      return $de;
  }
}

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100 );
if ( function_exists( 'add_image_size') ) {
    add_image_size( 'production-thumb', 280, 180 ); 
    add_image_size( 'last-production-thumb', 280, 210 );
    add_image_size( 'client-thumb', 120, 75 ); 
}

function url_origin($s, $use_forwarded_host=false)
{
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}
function full_url($s, $use_forwarded_host=false)
{
    return url_origin($s, $use_forwarded_host) . $s['REQUEST_URI'];
}
?>
