<?php
    add_theme_support( 'title-tag' );

    //タイトル出力
    function rhamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'rhamburger_title' );

    // function setup_my_theme() {
    // add_theme_support( 'title-tag' );
    // }
    // add_action( 'after_setup_theme', 'setup_my_theme');
