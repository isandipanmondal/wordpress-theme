<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php wp_title(); ?></title>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="format-detection" content="telephone=no"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <meta name="description" content="Enhancing Your Business with best of service as SEO and Digital Marketing.">
      <meta name="keywords" content="STARTUP, Built a website">
      <meta name="author" content="Asif Chowdhury">
      <link href="images/favicon.png" rel="icon" />
      <?php wp_head(); ?>
  </head>
   <body <?php body_class(); ?>>
      <header class="full">
         <div class="container clearfix">
            <div class="row">
            <div class="brand"> <a href="#" class="img-responsive"  alt="Home">


            <?php $moneytrainlogo = get_theme_value("Moneytrain_header_logo"); ?>

            <?php if(!empty($moneytrainlogo)) {?>
            <a href="<?php echo home_url('/');?>"><img src="<?php echo $moneytrainlogo;?>" alt="" /></a>
            <?php  } else {?>
            <a href="<?php echo home_url('/');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> </a>
            <?php }?>

         </div>
         </div>
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="col-lg-10 col-lg-push-1">
                  <div class="full">
                     <div class="search-wrap pull-right clearfix">
                        <form role="search" id="searchform" action="<?php echo home_url(); ?>" method="get">
                           <input type="text" name="s" placeholder="search">
                           <input type="submit" value="">
                        </form>
                     </div>
                  </div>
                  <div class="clearall"></div>
                  <div class="full">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     </div>
                     <div id="navbar" class="navbar-collapse collapse">



                        <?php

                      $header = array(
                        'theme_location'  => '',
                        'menu'            => 'main_menu',
                        'container'       => '',
                        'container_class' => 'current_page_item active',
                        'container_id'    => '',
                        'menu_class'      => 'nav navbar-nav',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                      );

                      wp_nav_menu( $header );

                      ?> 

                     </div>
                  </div>
               </div>
               <!--/.nav-collapse --> 
            </div>
         </nav>
      </header>