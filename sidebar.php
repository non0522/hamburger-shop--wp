<aside class="l-aside">
            <div class="c-button--jq is-gnav">
                <button class="c-button--jq__menu">Menu</button>
                <button class="c-button--jq__close"></button>
            </div>
            <div class="u-align"></div>
            <nav class="p-gnav">
                <article class="p-gnav__contents">
                    <p class="p-gnav__contents__subject">Menu</p>
                    <?php wp_nav_menu( array(
                        // 'menu_class'      => 'menu',
                        'container_class' => 'p-gnav__contents__wrapper',
                        'theme_location' => 'global_nav' 
                    )); ?>
                </article>

            </nav>
        </aside><!-- /.aside -->




                <!-- <article class="p-gnav__contents">    
                    <h2 class="p-gnav__contents__title"><a href="#archive">サイド</a></h2>
                    <ul class="p-gnav__contents__list">
                        <li class="p-gnav__contents__list__item"><a href="#menu">ポテト</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">サラダ</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">ナゲット</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">コーン</a></li>
                    </ul>
                </article>
                <article class="p-gnav__contents">
                    <h2 class="p-gnav__contents__title"><a href="#archive">ドリンク</a></h2>
                    <ul class="p-gnav__contents__list">
                        <li class="p-gnav__contents__list__item"><a href="#menu">コーラ</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">ファンタ</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">オレンジ</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">アップル</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">紅茶（Ice/Hot）</a></li>
                        <li class="p-gnav__contents__list__item"><a href="#menu">コーヒー（Ice/Hot）</a></li>
                    </ul>
                    <button class="c-shout-button"></button>
                </article> -->