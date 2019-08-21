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
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css'); 
    wp_enqueue_style('font-poppins', "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900"); 
    wp_enqueue_style('font-plafair', "https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i"); 
    wp_enqueue_style('iconic', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
  }
  // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');
?>