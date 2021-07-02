<?php get_header(); ?>
        
        <main class="l-main u-mb-m">
        <section class="p-top p-top--page" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                <h1 class="p-top__title"><?php the_title(); ?></h１>
                <!-- <p class="p-top__sub-title">チーズバーガー</p> -->
            </section><!-- /.p-top -->

            <section class="p-heading">
            <?php
				if( have_posts() ) :
					while( have_posts() ) :
						the_post();
						the_content(); ?>
                            <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>></section>
                        <?php
					endwhile;
                else: 
            ?>
            <p>表示できる記事がありません。</p>
			<?php endif; ?>

            </section><!-- /.p-heading -->
        </main> 

<?php get_sidebar(); ?>
<?php get_footer(); ?>