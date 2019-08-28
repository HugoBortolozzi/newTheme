<?php
class MgWidgetRegister
{
  public static function register()
  {
    register_sidebar(array(
      'name'          => __('Footer 4ème colonne'),
      'id'            => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));
    // si tu veux plusieurs sidebars, recopie la fonction register_sidebar et change au moins l'ID 
    register_sidebar(array(
        'name'          => __('Footer 1ère colonne'),
        'id'            => 'sidebar-',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
      ));
  }
}
add_action('widgets_init', [MgWidgetRegister::class, 'register']);