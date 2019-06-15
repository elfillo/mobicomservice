<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favikonka.png" />
    <title>mobicomservice</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo">
        </div>
        <nav class="nav nav_desk">
            <?php wp_nav_menu(array('theme_location'=>'Header', 'menu_class'=>'header_nav_list'))?>
        </nav>
        <div class="burger">
            <span></span><span></span><span></span>
        </div>
    </div>
    <div class="mobile_menu">
        <?php wp_nav_menu(array('theme_location'=>'Mobile', 'menu_class'=>'mobile_menu_list'))?>
    </div>
</header>
<div class="page">
    <div class="container">
        <div class="service">
            <div class="title">
                Ремонт смартфонов в Иркутске
            </div>
            <ul class="service_list">
                <li><a class="active" href="#">Phone</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">Phone</a></li>
            </ul>
        </div>
        <div class="content">

        </div>
    </div>
</div>
<!--<img src="--><?php //echo get_template_directory_uri() ?><!--/img/icons/logo.png" alt="Логотип">-->
<?php //wp_nav_menu(array('theme_location'=>'Header', 'menu_class'=>'header_nav_list') );?>

