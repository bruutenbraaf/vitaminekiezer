<?php

// Sizes

add_image_size( 'slide', 1920, 560 );
add_image_size( 'big', 1450, 500, array( 'center', 'center' ) );

// jQuery
// Remove jQuery scripts from begining 
add_action('wp_enqueue_scripts', 'wbxp_script_remove_header');
function wbxp_script_remove_header() {
	wp_deregister_script( 'jquery' );
}
// Load jQuery script at the end 
add_action('wp_enqueue_scripts', 'wbxp_script_add_body');
function wbxp_script_add_body() {
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js#asyncload', false, null);
	wp_enqueue_script( 'jquery');
}



// Include style & scripts
function brute_scripts() {
    wp_enqueue_script("jquery");
	  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'slickslider', get_template_directory_uri() . '/css/slick.css');

    wp_enqueue_script( 'slicksliderjs', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', true);
}
add_action('wp_enqueue_scripts', 'brute_scripts');

// Menu
function register_my_menus() {
    register_nav_menus(
      array(
        'top_bar' => __( 'Top bar' ),
        'main_menu' => __( 'Main menu' ),
        'mobile_menu' => __( 'Mobile menu' ),
        'socket_menu' => __( 'Socket' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

// ACF
acf_add_options_page(array(
    'page_title' 	=> 'Gegevens & Logo',
    'menu_title'	=> 'Gegevens & Logo',
    'menu_slug' 	=> 'gegevens',
    'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-id'
));

acf_add_options_page(array(
  'page_title' 	=> 'Vitamine uitleg',
  'menu_title'	=> 'Vitamine uitleg',
  'menu_slug' 	=> 'vitamine_uitleg',
  'capability'	=> 'edit_posts',
  'icon_url' => 'dashicons-welcome-learn-more'
));

acf_add_options_page(array(
  'page_title' 	=> 'Advertenties',
  'menu_title'	=> 'Advertenties',
  'menu_slug' 	=> 'advertising',
  'capability'	=> 'edit_posts',
  'icon_url' => 'dashicons-visibility'
));

// Option pages for archive + auto fields (titel, intro)
function option_page_posttypes() 
{
	$args  = array('public'   => true,'_builtin' => false );
    $excluded_post_types = array('participation', 'partners');
	$custom_post_types = get_post_types($args);
    foreach ( $custom_post_types as $custom_post_type ) 
	{
        if ( in_array( $custom_post_type, $excluded_post_types ) ) 
		{
          
        } 
		else 
		{
			if(function_exists('acf_add_options_page')) 
			{

				$formated_string = str_replace('_', " ", $custom_post_type);

				acf_add_options_sub_page(array(
				  'page_title'     => 'Archive options '.$formated_string.'',
				  'menu_title'    => 'Archive options '.$formated_string.'',
				  'parent_slug'    => 'edit.php?post_type='.$custom_post_type.'',
				));

				$prefix = str_replace("_","-", $custom_post_type);
				$acf_pre = 'acf-options-archive-options-';
				$compiled_acf = $acf_pre .= $prefix;

				acf_add_local_field_group(array (
					'key' => 'archive_options_'.$custom_post_type.'',
					'title' => 'Archive options '.$formated_string.'',
					'location' => array (
						array (
						  array (
							'param' => 'options_page',
							'operator' => '==',
							'value' => $compiled_acf,
						  ),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
				));
			}
		}
    }
}
add_action( 'init', 'option_page_posttypes');

// Shortcode socials

function get_socials($atts) {
  ob_start();
  get_template_part('template-parts/social-items');
  return ob_get_clean();
}
add_shortcode('socialsfooter', 'get_socials');

function get_latest($atts) {
  ob_start();
  get_template_part('template-parts/latest-post');
  return ob_get_clean();
}
add_shortcode('latestpost', 'get_latest');

function get_logo($atts) {
  ob_start();
  get_template_part('template-parts/logo');
  return ob_get_clean();
}
add_shortcode('getlogo', 'get_logo');


// Widgets

register_sidebar( array(
  'name' => 'Footer 1',
  'id' => 'footer_first',
  'description' => 'Wordt getoond in de footer',
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );

register_sidebar( array(
  'name' => 'Footer 2',
  'id' => 'footer_second',
  'description' => 'Wordt getoond in de footer',
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );

register_sidebar( array(
  'name' => 'Footer 3',
  'id' => 'footer_third',
  'description' => 'Wordt getoond in de footer',
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );


  register_sidebar( array(
    'name' => 'Vergelijker',
    'id' => 'vergelijker',
    'description' => 'Wordt getoond in de vergelijker',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Onder de loep',
      'id' => 'loep',
      'description' => 'Wordt getoond bij onder de loep',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );


// Custom excerpt length functie 

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// ajax action for vitamine cookie
function vitamine_cookie() {
  //print_r(json_decode($_COOKIE['vitamines']));
  if(empty($_POST) || !isset($_POST)) {
          ajaxStatus('error', 'Nothing to update.');
  } else {
          try {
                  if ( isset($_COOKIE["vitamines"]) ) {
                          // data
                          $newdata = $_POST['vitamines'];
                          $data = explode(',', $_COOKIE["vitamines"]);
                          if (in_array($newdata, $data)) {
                                  if (($key = array_search($newdata, $data)) !== FALSE) {
                                          unset($data[$key]);
                                  }
                          } else {
                                  $data[] = $newdata;  
                          }
                          $data = array_unique($data);
                          $data = implode(',', $data);

                          setcookie("vitamines", $data, time() + (86400 * 365), "/"); // 86400 = 1 day
                  } else {
                          $data = array();
                          $data[] = $_POST['vitamines'];
                          $data = implode(',', $data);
                          setcookie("vitamines", $data, time() + (86400 * 365), "/"); // 86400 = 1 day
                  }
          } catch (Exception $e){
                  echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
  }
}
add_action( 'wp_ajax_vitamine_cookie', 'vitamine_cookie');
add_action( 'wp_ajax_nopriv_vitamine_cookie', 'vitamine_cookie' );

// add vitamine scripts to footer
function vitamines_script() { ?>
  <script type="text/javascript">
  function vitamine_callback(doThis, id) {
    var adminurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
    jQuery.ajax({
      url: adminurl,
      type: "POST",
      data: {
        'action': 'vitamine_cookie',
        'vitamines' : id
      },
      success:function(resp) {
        console.log(resp);
        location.reload();
      },
      error: function(errorThrown){
        console.log(errorThrown);
      }
    });          
  }
  </script>
<?php }
add_action( 'wp_footer', 'vitamines_script' );

// shortcodes for vitamine cookie functionality
function vitamine_toevoegen_button(){
  global $post;
ob_start(); ?>
       <button class="add v-btn <?php $os = get_vitamines(); $id = get_the_ID(); if (in_array($id, $os)) { ?>added<?php } ?>" onclick="vitamine_callback('add', <?php echo $post->ID; ?>)"><?php _e('', 'vitamine-plugin'); ?></button>
  <?php return ob_get_clean();
}
add_shortcode( 'add_vitamine', 'vitamine_toevoegen_button' );

function vitamine_toevoegen_button_large(){
  global $post;
ob_start(); ?>
       <button class="btn v-btn <?php $os = get_vitamines(); $id = get_the_ID(); if (in_array($id, $os)) { ?>added<?php } ?>" onclick="vitamine_callback('add', <?php echo $post->ID; ?>)"><?php $os = get_vitamines(); $id = get_the_ID(); if (in_array($id, $os)) { ?><?php _e('Verwijder uit vergelijker', 'vitamine-plugin'); ?><?php } else { ?><?php _e('Voeg toe aan vergelijker', 'vitamine-plugin'); ?><?php } ?></button>
  <?php return ob_get_clean();
}
add_shortcode( 'add_vitamine_single', 'vitamine_toevoegen_button_large' );

// get vitamines function
function get_vitamines() {
  $data = explode(',', $_COOKIE["vitamines"]);
  return $data;
}

// shortcodes for get vitamine function 
function get_vitamines_func(){
  ob_start(); ?>
          <?php print_r(get_vitamines()); ?>
  <?php return ob_get_clean(); 
}
add_shortcode( 'get_vitamines', 'get_vitamines_func' );