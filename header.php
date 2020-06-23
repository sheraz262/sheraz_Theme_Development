<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name');?></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/CSS/all.min.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive-kids.css">

</head>

<body>


      <nav class="navbar navbar-expand-lg bg-light navbar-light header">
      									<!--dynamic chantes-->
          <a class="navbar-brand pb-3" href="#"> <?php dynamic_sidebar( 'logo' ); ?></a>

           <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end pt-4 navdiv" id="navbarNav">
                    <?php
                          wp_nav_menu(
                                       array('theme_location' => 'primary_menu',
                                       'container_class' => 'kids-corner-nav')
                                     );
                           dynamic_sidebar( 'social_icons' );

                    ?>


          </div>




          
      </nav>

