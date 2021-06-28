<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="世界一のハンバーガーがニュージーランドより初上陸！ビーフ１００％の新鮮でジューシーなパティとカリカリバンズをお楽しみください！">
    <!-- <meta name="keywords" content="WordPress, Theme, development"> 検索エンジンに検索ワードを示すタグだが、現在は不要。主要エンジンではメタタグを無視するため。-->
    <!-- <title>RaiseTech Hamburger shop</title>　削除予定 -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">
    <link rel="stylesheet" href="http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css">
    <script src="https://kit.fontawesome.com/b8a7fea4d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet"　href="css/style.css"> -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
</head>

<body <?php body_class(); ?>>
    <section class="l-container">        
        <header class="l-header p-header">
            <h1 class="p-header__title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <?php get_search_form(); ?>

        </header><!-- /.l-header -->
        

