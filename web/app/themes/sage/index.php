<?php use Illuminate\Support\Facades\App; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <?php 
        $environment = App::environment(); 
        if ( $environment == 'production' ): ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZMC1GLHZ57"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZMC1GLHZ57');
        </script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>

<div id="app">
    <?php if (get_field('page_gradient')) : ?>
        <div class="page-gradient <?= get_field('page_gradient_position') ? 'middle' : 'left' ?>"></div>
    <?php endif; ?>

    <?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>
</div>

<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
