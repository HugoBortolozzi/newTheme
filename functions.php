<?php
/**
 * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
 *
 * @return void
 */
function ajout_css_js()
{
  // Ajout des scripts css
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('font-poppins', "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900"); 
    wp_enqueue_style('font-playfair', "https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i"); 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css'); 
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery.min.js', null, true);
  wp_enqueue_script('migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', ['jquery-perso'], null, true);
  wp_enqueue_script('animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('scrollax', get_template_directory_uri() . '/js/scrollax.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('google-app', "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false", ['jquery-perso'], null, true);
  wp_enqueue_script('google-map', get_template_directory_uri() . '/js/google-map.js', ['jquery-perso'], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], null, true);
  }
  // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');

/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu');
/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function ajout_menu_a_class($atts, $item, $args)
{
  $class = 'nav-link'; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);  
?>