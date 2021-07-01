<?php get_header(); ?>
        
        <main class="l-main u-mb-m">
            <section class="p-top p-top--single">
                <h1 class="p-top__title">h1</h1>
                <p class="p-top__sub-title"><?php the_title(); ?></p>
            </section><!-- /.p-top -->

            <section class="p-heading">
            <?php
				if( have_posts() ) :
					while( have_posts() ) :
						the_post();
						the_content();
					endwhile;
                else: 
            ?>
            <p>記事はありません！</p>
			<?php endif; ?>
            </section><!-- /.p-heading -->
        </main> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>