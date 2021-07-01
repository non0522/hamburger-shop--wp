<?php get_header(); ?>
        
        <main class="l-main u-mb-m">
            <section class="p-top p-top--search">
                <div class="p-top__bg">
                    <h2 class="p-top__title">Search:</h2>
                    <p class="p-top__sub-title"><?php echo esc_html( single_term_title( '', false ) ); ?></p>
                </div>
            </section><!-- /.p-top -->
            <section class="p-menu u-mb-s">
                <article class="p-menu__desc">
                    <h2 class="p-menu__desc__title"><?php echo esc_html( single_term_title( '', false ) ); ?></h2>
                    <p class="p-menu__desc__lead"><?php echo category_description(); ?></p>
                </article>
                <section class="p-menu__list">
                    <?php
                        if( have_posts() ) :
                            while( have_posts() ) :
                                the_post(); ?>
                                    <figure class="p-menu__list__items c-card">
                                        <div class="c-card__img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                            <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" width="100" height="100"alt="">
                                        <?php endif; ?>
                                        </div>
                                        <figcaption class="c-card__content">
                                            <h2 class="c-card__content__title"><?php the_title();?></h2>
                                            <!-- <p class="c-card__content__subtitle"></p> -->
                                            <p class="c-card__content__text"><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="c-button--detail u-mtb-s">詳しく見る</a>
                                        </figcaption>
                                    </figure>
                                <?php
                            endwhile;
                        else:?><p>表示できる記事がありません。</p>
                     <?php endif; ?>
                </section><!-- /.p-menu__list -->
                <nav class="p-pagenation">
                    <?php wp_pagenavi(); ?>
                </nav>
            </section><!-- /.p-menu -->
        </main> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
