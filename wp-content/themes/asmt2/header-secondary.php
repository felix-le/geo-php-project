<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>


  <?php wp_head();?>
  <script src="https://kit.fontawesome.com/875fa8d6ec.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>


    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img height="60px" width="60px"
          src="<?php echo esc_url(home_url('wp-content/themes/asmt2/images/logo.png')) ?>" />
      </a>

      <?php 
	
			wp_nav_menu(
					array(

						'theme_location' => 'top-menu',
						//'menu' => 'Top Bar'
						'menu_class' => 'top-bar'
					)
			);
		
		?>
    </div>


  </header>