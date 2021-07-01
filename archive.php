<?php get_header(); ?>
        
        <main class="l-main u-mb-m">
            <section class="p-top p-top--archive">
                <div class="p-top__bg">
                    <h2 class="p-top__title">Menu:</h2>
                    <p class="p-top__sub-title"><?php echo esc_html( single_term_title( '', false ) ); ?></p>
                </div>
            </section><!-- /.p-top -->

            <section class="p-menu u-mb-s">
                <article class="p-menu__desc">
                    <h2 class="p-menu__desc__title"><?php echo save_category(); ?></h2>
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
            else:
            ?>

            <p>記事はありません</p>

            <?php
            endif;
            ?>

                </section><!-- /.p-menu__list -->

                <section class="p-menu__pagination">
                    <nav class="p-pagination">
                        <p class="p-pagination__current">page 1/10</p>
                        <a href="" class="p-pagination__next">
                            <span class="c-pseudo-element-arrow--left"></span>
                            <span class="c-pseudo-element-arrow--left"></span>
                            <p>前へ</p>
                        </a>
                        <ul class="p-pagination__list">
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">6</a></li>
                            <li><a href="">7</a></li>
                            <li><a href="">8</a></li>
                            <li><a href="">9</a></li>
                        </ul>
                        <a href="" class="p-pagination__next">
                            <p class="p-pagination__next">次へ</p>
                            <span class="c-pseudo-element-arrow--right"></span>
                            <span class="c-pseudo-element-arrow--right"></span>
                        </a>
                    </nav>
                </section><!-- /.p-menu__pagination -->
            </section><!-- /.p-menu -->
        </main> 
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>
