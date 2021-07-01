<?php get_header(); ?>

        <main class="l-main u-mb-s">
            <section class="p-top p-top--index">
                <h2 class="p-top__title"><?php bloginfo( 'description' ); ?></h2>
            </section><!-- /.p-top -->
            
            <section class="p-service-wrapper u-mb-ex">
                <ul class="p-service">
                    <li class="p-service__cat p-service__takeout">
                        <?php
                            $category_id = get_cat_ID( 'Take Out' );
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a class="p-service__cat__link" href="<?php echo esc_url( $category_link ); ?>">
                        <!-- <a class="p-service__cat__link" href="/category/takeout/"> こっちの書き方でもリンクできた-->
                            <h3 class="p-service__cat__title c-pseudo-element--short"><?php echo get_cat_name(6);?></h3>
                            <ul class="p-service__cat__sort">
                                <li class="p-service__cat__sort__inner">
                                    <h4><?php echo get_cat_name(6);?></h4>
                                    <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                                </li>
                                <li class="p-service__cat__sort__inner">
                                    <h4>Take Out</h4>
                                    <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                                </li>
                            </ul> 
                        </a>
                    </li>
                    <li class="p-service__cat p-service__eatin">
                        <?php
                            $category_id = get_cat_ID( 'Eat In' );
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a class="p-service__cat__link" href="<?php echo esc_url( $category_link ); ?>">
                            <h3 class="p-service__cat__title c-pseudo-element--short"><?php echo get_cat_name(5);?></h3>
                            <ul class="p-service__cat__sort">
                                <li class="p-service__cat__sort__inner">
                                    <h4><?php echo get_cat_name(5);?></h4>
                                    <p>当店のイートインで利用できる商品を掲載しています</p>
                                </li>
                                <li class="p-service__cat__sort__inner">
                                    <h4>Eat In</h4>
                                    <p>当店のイートインで利用できる商品を掲載しています</p>
                                </li>
                            </ul> 
                        </a>
                    </li>
                </ul>
            </section><!-- /.p-service-wrapper -->
            
            <section class="p-map">
                <div class="p-map__layer">
                    <article class="p-map__content">
                        <h2 class="p-map__content__title c-pseudo-element--long">見出しが入ります</h2>
                        <p class="p-map__content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </article>
                </div>
            </section>

        </main><!-- /.l-main -->

        <?php get_sidebar(); ?>
        <?php get_footer(); ?>