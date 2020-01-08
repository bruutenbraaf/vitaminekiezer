<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129714321-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-129714321-1');
    </script>
    <script>
        (function(h, o, t, j, a, r) {

            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };

            h._hjSettings = {
                hjid: 1468237,
                hjsv: 6
            };

            a = o.getElementsByTagName('head')[0];

            r = o.createElement('script');
            r.async = 1;

            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;

            a.appendChild(r);

        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruut en Braaf">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="theme-color" content="#ffffff">
    <meta name="51137a74975e267" content="c79e0a42f1a0a033e5590f6ea20d447d" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/content', 'menu'); ?>