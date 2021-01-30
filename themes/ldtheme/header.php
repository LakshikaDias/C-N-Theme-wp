<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
  </head>

  <?php wp_head();?>
  <body <?php body_class(); ?>>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo get_bloginfo('title'); ?>
        
           </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'    =>   'primary',
                            'container'         =>    false,
                            'container_class'   =>    '',
                            'menu_class'        =>    'navbar-nav',
                            'fallback_cb'       =>    'WP_Bootstrap_Navwalker::fallback',
                            'walker'            =>     new WP_Bootstrap_Navwalker(),
                        )
                    );
                    
                    ?>

            </div>
            </nav>
