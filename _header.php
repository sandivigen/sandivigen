<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head(); ?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/style.css'>

  </head>
 
  <body <?php body_class(); ?>>
 








  <header>

    <div class="clearfix"></div>

    <div class="wrapper-header-bot ">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2 clearfix padding-hide">
            <nav class="navbar navbar-default header-menu">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                  
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <p class="navbar-text title-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">MENU</p>
                  <!-- <span class=" navbar-brand title-menu">MENU</span> -->
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php
                      wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          // 'container'         => 'div',
                          // 'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                  ?>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </div>


  </header>


  <div class="wrapper-content">
    <div class="container bg-leftsidebar">
        <div class="row border-right-content">






