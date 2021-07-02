<?php get_header(); ?>
        
        <main class="l-main u-mb-m">
            <section class="p-top p-top--single" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">

            <!-- <section class="p-top p-top--single"> -->
                <h1 class="p-top__title">h1</h1>
                <p class="p-top__sub-title"><?php the_title(); ?></p>

            </section><!-- /.p-top -->

            <section class="p-contents">
                <h2><?php the_title(); ?></h2>
                <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post();
                            the_content();
                        endwhile;
                    else: 
                ?>
                <p>表示できる記事がありません。</p>
                <?php endif; ?>
            </section><!-- /.p-contents -->
        </main> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>