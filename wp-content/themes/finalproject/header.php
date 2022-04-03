<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="<?php echo esc_url(home_url('wp-content/themes/finalproject/style.css')) ?>" />
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

        <a class="navbar-brand" href="#">
          <img style="width: 60px;"
            src="<?php echo esc_url(home_url('wp-content/themes/finalproject/images/logo.jpeg')) ?>"
            alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- functions.php -->
        <?php 
        wp_nav_menu( array(
            'menu'    => 'top-menu',
            // container
            'container' => 'div',
            'container_id' => 'navbarNavDropdown',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav',
            'li_class'          => 'nav-item',
            'a_class'           => 'nav-link',
            'active_class'      => 'active',
        ) );
         
        ?>
      </div>
    </nav>
  </header>