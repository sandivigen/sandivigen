<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head(); ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/script.js'></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/style.css'>
    
  <link rel="shortcut icon" href='<?php echo get_template_directory_uri(); ?>/g2.png' type="image/png">

  <?php 
    // делаю файвикон для закладок в гугле
    // $template_directory = template_directory_uri();
    // if ( the_ID() == 110000000 ) {
    //   echo '<link rel="shortcut icon" href="' . $template_directory . '/g1.png" type="image/png">';
    // } else {
    //   echo '<link rel="shortcut icon" href="' . $template_directory . '/ico5.png" type="image/png">';
    // }
  ?>
<!-- <link rel="shortcut icon" href="/images/favicon.png" type="image/png"> -->


  </head>
 
  <body <?php body_class(); ?>>
 








  <header>




  </header>


  <div class="wrapper-content">
    <div class="container bg-leftsidebar">
        <div class="row border-right-content">






