<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

        <div class="header-wrapper">
          <header role="banner" class="head">
            <div class="container">

            <?php if(is_front_page()): 
                $logotipo = get_field('logotipo','option');
            ?>
              <h1 class="logotipo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo $logotipo['sizes']['medium']; ?>" alt="<?php echo $logotipo['alt']; ?>">
                </a>

              </h1>
              <!-- .logotipo -->

            <?php else: ?>
              <div class="logotipo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php echo $logotipo['sizes']['medium']; ?>" alt="<?php echo $logotipo['alt']; ?>">
                </a>

              </div>
              <!-- .logotipo -->

            <?php endif; ?>

            <nav id="main-menu-wrapper" class="main-menu-wrapper">
              <a href="#main-menu-wrapper" class="toggle-menu icon-menu"><span class="screen-reader-text"><?php _e('Mostrar Menú','wpboilerplate'); ?></span></a>
              <a href="#" class="toggle-menu icon-clearclose"><span class="screen-reader-text">Cerrar Menú</span></a>

              <div class="nav-main-menu-container">
                <?php
                  $args_nav=array(
                    'theme_location'=>'main-menu',
                    'container' => ''
                  );
                  wp_nav_menu($args_nav);
                ?>

                <div class="secondary-nav-bar">
                <div class="container">
                    <?php echo get_search_form(); ?>
                    
                    <?php
                        $args_sec_nav = array(
                            'theme_location'=>'secondary-menu',
                            'container' => 'div',
                            'menu_class' => 'secondary-menu'        
                        );
                        wp_nav_menu($args_sec_nav);
                    ?>
                </div>
                </div>
                <!-- .secondary-nav-bar -->


              </div>

            </nav>
            <!-- .main-menu-wrapper -->


          </div>
          <!-- .container -->


          </header>
          <!-- .head -->

      <?php if(!is_front_page()): ?>

        </div>
        <!-- header-wrapper -->

      <main class="main-content" role="main">
      <?php endif; ?>
