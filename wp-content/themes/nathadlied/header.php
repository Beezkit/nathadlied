<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="canonical" href="http://www" />
    <title><?php wp_title(); ?></title>
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="author" content="NathaDlie D" />
    <meta name="copyright" content="Copyright (c)2017 NathaDlie D. Tout droit reservé." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div id="logo">
            <?php if (!is_home()) { ?>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid" alt="Logo NathaDlieD" />
                    <h1><?php bloginfo( 'description' ); ?></h1>
                </a>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid" alt="Logo NathaDlieD" />
                <h1><?php bloginfo( 'description' ); ?></h1>
            <?php } ?>
        </div>
    </div>
</header>
