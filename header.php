<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Convident">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="theme-color" content="#ededed">
    <meta name="51137a74975e267" content="c79e0a42f1a0a033e5590f6ea20d447d" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <title><?php wp_title(''); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'template-parts/content', 'menu' ); ?>