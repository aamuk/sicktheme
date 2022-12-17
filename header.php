<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php wp_head(); ?>

    <title>Sick Theme</title>
  </head>
  <body>
    
  <nav>
    
    <div>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'container' => 'div',
            'menu_class' => 'nav-bar'
          )
        );
      ?>
    </div>

  </nav>

