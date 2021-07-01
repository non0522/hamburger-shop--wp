<?php
    function custom_theme_support() {
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('menus');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        register_nav_menus( array(
            'global_nav' => esc_html__('global navigation','rhamburger'),
            'sub_nav' => esc_html__('sub navigation','rhamburger'),
            'footer_nav' => esc_html__('footer navigation','rhamburger'),
        ));
    }
    add_action('after_setup_theme', 'custom_theme_support');


    function rhamburger_script() {
        $locale=get_locale();
        $locale=apply_filters('theme_locale', $locale);
        wp_enqueue_style( 'font-awesome','//use.fontawesome.com/releases/v5.2.0/css/all.css' ); 
        if( $locale == 'ja' ) {
            wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() ); 
        }
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );      
        wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array(), '4.0.0');
        wp_enqueue_style( 'rhamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/jquery/jquery-3.6.0.min.js', array(), '3.6.0', true );
        wp_enqueue_script( '；stylejs', get_template_directory_uri() . '/jquery/style.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'rhamburger_script' );


    function rhamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { 
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) {
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'rhamburger_title' );


    function category_form_fields_function($tag){
        $cat_id = $tag->term_id;
        $meta = get_term_meta($cat_id);
        echo '<tr class="form-field">
                <th>
                    <label for="extra_text">サブタイトル</label>
                </th>
                <td>
                    <input type="text" name="category_subtitle" id="category_subtitle" size="25" value="'.esc_html($meta['category_subtitle'][0]).'" />
                </td>
            </tr>';
    };
    add_action('category_add_form_fields','category_form_fields_function');
    add_action('category_edit_form_fields','category_form_fields_function');

    function save_category(){
        update_term_meta($_POST['tag_ID'],'category_subtitle', $_POST['category_subtitle']);
    };
    add_action ( 'edited_term', 'save_category');
