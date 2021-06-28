jQuery(function($){
    var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
    $('.is-gnav').on('click', function() {
        if($('.l-container').hasClass('is-open')){
            $('.l-container').removeClass('is-open').css('top',0 + 'px');
            window.scrollTo( 0 , scrollPos );//初期化
        }else{
            scrollPos = $(window).scrollTop();//現在のスクロール位置
            $('.l-container').addClass('is-open').css('top',-scrollPos + 'px');
        }
    });
});