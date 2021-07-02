<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="世界一のハンバーガーがニュージーランドより初上陸！ビーフ１００％の新鮮でジューシーなパティとカリカリバンズをお楽しみください！">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <section class="l-container">        
        <header class="l-header p-header">
            <h1 class="p-header__title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <?php get_search_form(); ?>

        </header><!-- /.l-header -->
        

