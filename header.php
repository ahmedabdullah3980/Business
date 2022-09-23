<!DOCTYPE html>
<html lang="en">
<?php global $theme_option; ?>
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if ($theme_option['title']){
    echo $theme_option['title'];
  } ?></title>

  <!-- FAVICON -->
  <link href="<?php if ($theme_option['favicon']['url']){
          echo $theme_option['favicon']['url']; 
        }  ?>" rel="shortcut icon">
  <?php wp_head();?>
</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<!-- Header Sticky option -->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0"> 
  <div class="container-fluid p-0">
      <!-- logo -->
      <!-- Adding dimensions to the logo -->
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <img src="<?php if ($theme_option['header-logo']['url']){
          echo $theme_option['header-logo']['url']; 
        }  ?>" alt="logo" <?php if ($theme_option['switch-on']==1) { ?> height="<?php if ($theme_option['Logo-dimensions']['height']){
          echo $theme_option['Logo-dimensions']['height']; 
        }  ?>" <?php } ?> <?php if ($theme_option['switch-on']==1) {  ?>  width="<?php if ($theme_option['Logo-dimensions']['width']){
          echo $theme_option['Logo-dimensions']['width']; 
        }  ?>"<?php } ?>

        <?php if ($theme_option['switch-on']==0) { ?> height="<?php if ($theme_option['Logo-dimensions-Pre']['height']){
          echo $theme_option['Logo-dimensions-Pre']['height']; 
        }  ?>" <?php } ?> <?php if ($theme_option['switch-on']==0) {  ?>  width="<?php if ($theme_option['Logo-dimensions-Pre']['width']){
          echo $theme_option['Logo-dimensions-Pre']['width']; 
        }  ?>"<?php } ?>>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!-- <li class="nav-item dropdown active dropdown-slide"> -->
        <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        "container" => 'ul',
                        'menu_class'=> 'navbar-nav mx-auto',
                        "add_li_class" => "nav-item dropdown dropdown-slide",
                        'add_a_class'     => 'dropdown-item',
                        'sub-menu' => 'nav-link dropdown-item', 
                        'link_after'=>'<span>/</span>',
                    )
                );
                ?>
      </ul>
      <a href="#" class="ticket">
        <img src="<?php if ($theme_option['header-ticket-logo']['url']) { echo $theme_option['header-ticket-logo']['url']; }?>" alt="ticket">
        <span><?php if ($theme_option['ticket-title']) { echo $theme_option['ticket-title']; }?></span>
      </a>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->