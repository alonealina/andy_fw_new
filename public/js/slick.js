$('.slider').slick({
    autoplay: false,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 4,//スライドを画面に4枚見せる
    slidesToScroll: 4,//1回のスクロールで4枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev">＜　PREV</div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next">NEXT　＞</div>',//矢印部分NextのHTMLを変更
    dots: false,//下部ドットナビゲーションの表示
    responsive: [
        {
            breakpoint: 769,//モニターの横幅が769px以下の見せ方
            settings: {
                slidesToShow: 2,//スライドを画面に2枚見せる
                slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
            }
        },
        {
            breakpoint: 426,//モニターの横幅が426px以下の見せ方
            settings: {
                slidesToShow: 1,//スライドを画面に1枚見せる
                slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
            }
        }
    ]
});

$('.slider_sp').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に4枚見せる
    slidesToScroll: 1,//1回のスクロールで4枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev">＜</div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next">＞</div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
});

$(function () {
    $('#js-slider-sp').slick({
        arrows: true, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        appendDots: $('.dots-2'), // ドットナビゲーションの生成位置を変更
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        dots: true,//下部ドットナビゲーションの表示
    });
    $('#js-slider-new').slick({
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 3,//スライドを画面に4枚見せる
        slidesToScroll: 1,//1回のスクロールで4枚の写真を移動して見せる    
        centerMode: false, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        arrows: false,//下部ドットナビゲーションの表示
        dots: false,//下部ドットナビゲーションの表示
    });
    $('#js-slider-old').slick({
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 3,//スライドを画面に4枚見せる
        slidesToScroll: 1,//1回のスクロールで4枚の写真を移動して見せる    
        centerMode: false, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        arrows: false,//下部ドットナビゲーションの表示
        dots: false,//下部ドットナビゲーションの表示
    });
    $('#js-slider-recommend').slick({
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 3,//スライドを画面に4枚見せる
        slidesToScroll: 1,//1回のスクロールで4枚の写真を移動して見せる    
        centerMode: false, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        arrows: false,//下部ドットナビゲーションの表示
        dots: false,//下部ドットナビゲーションの表示
    });
  
});