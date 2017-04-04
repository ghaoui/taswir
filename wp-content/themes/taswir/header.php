<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
            
        <?php wp_head(); ?>	 
</head>
<body>
    <header>
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"><div class="pierre">LYCéE PIERRE MENDES FRANCE TUNIS</div></div>
                    <div class="col-lg-4 text-center">
                        <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
                    </div>
                    <div class="col-lg-4 text-right">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-right.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-section">
            <?php wp_nav_menu(array(
            'theme_location' => 'topmenu'
            )); ?>
        </section>
    </header>