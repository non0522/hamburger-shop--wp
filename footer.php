<footer class="l-footer">
            <div class="p-footer">
                <ul class="p-footer__about">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
                    <!-- <li class="p-footer__about__info"><a href="#">ショップ情報</a></li>
                    <li class="c-pseudo-element--vertical"></li>
                    <li class="p-footer__about__history"><a href="#">ヒストリー</a></li> -->
                </ul>
                <p class="p-footer__copyright"><small>&copy; Copyright: RaiseTech</small></p>
            </div>
        </footer><!-- /.l-footer -->
    </section>

    <?php wp_footer(); ?>
</body>

</html>