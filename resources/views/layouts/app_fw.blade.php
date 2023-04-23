<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ANDY FashionWeb</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
        <link href="{{ asset('css/app_fw.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick_fw.css') }}" rel="stylesheet">
        <link href="{{ asset('css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">

    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header class="header_sp" style="">
                <a class="logo_a_sp" href="{{ route('index') }}">
                    <img src="{{ asset('img/fw_logo_sp.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check" onchange="menu_check();">
                    <label for="menu-btn-check" class="menu-btn" 
                    @if (\Route::currentRouteName() != 'fw.index')
                    style="margin-top: 10px;"
                    @endif
                    ><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href="" class="menu_content_sp">TOP</a>
                            </li>
                            <li>
                                <a href="" class="menu_content_sp">最新の記事</a>
                            </li>
                            <li>
                                <a href="" class="menu_content_sp">過去の記事</a>
                            </li>
                            <li>
                                <a href="" class="menu_content_sp">おススメの記事</a>
                            </li>
                            <li>
                                <a href="{{ route('fp_about') }}" class="menu_content_sp">ANDY FashionPressとは</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="menu_content_sp">お問い合わせ</a>
                            </li>
                            <li>
                                <a href="" class="menu_content_sp">運営会社</a>
                            </li>
                        </ul>
                        <div class="menu_icon_list">
                            <a href="" class=""><img src="{{ asset('img/insta_white.png') }}" class="icon_img" alt=""></a>
                            <a href="" class="" style="margin-left:10px;"><img src="{{ asset('img/twitter_white.png') }}" class="icon_img" alt=""></a>
                        </div>

                    </div>

                </div>
            </header>

            @yield('content_sp')
            <div class="article_name">ANDYおススメ記事</div>
            <ul class="slider-article" id="js-slider-recommend">
                <li><a href="{{ route('fp14') }}" class="article_a">
                    <img src="{{ asset('img/new1.png') }}" class="article_img" alt="">
                    <div class="article_title">ANDY FashionPress14<br>発刊・販売中!!</div>
                    <div class="article_date">2023.03.24|特集</div>
                </a></li>
                <li><a href="{{ route('cover') }}" class="article_a">
                    <img src="{{ asset('img/new2.png') }}" class="article_img" alt="">
                    <div class="article_title">大人気キャスト<br>RUNA&HINANO<br>注目のan新作ドレス</div>
                    <div class="article_date">2023.03.24|カタログ</div>
                </a></li>
                <li><a href="{{ route('riona') }}" class="article_a">
                    <img src="{{ asset('img/new3.png') }}" class="article_img" alt="">
                    <div class="article_title">女性人気No.1<br>キャスト<br>一條りおなさん</div>
                    <div class="article_date">2023.03.24|コンテンツ</div>
                </a></li>
                <li><a href="{{ route('koreamake') }}" class="article_a">
                    <img src="{{ asset('img/new4.png') }}" class="article_img" alt="">
                    <div class="article_title">'韓国風メイク'がキャストさんの間でもトレンド入り！</div>
                    <div class="article_date">2023.03.24|特集</div>
                </a></li>
                <li><a href="{{ route('koreahair') }}" class="article_a">
                    <img src="{{ asset('img/new5.png') }}" class="article_img" alt="">
                    <div class="article_title">トレンドの出勤スタイル！<br>韓国風ヘアメイク</div>
                    <div class="article_date">2023.03.24|特集</div>
                </a></li>
                <li><a href="{{ route('pet') }}" class="article_a">
                    <img src="{{ asset('img/new6.png') }}" class="article_img" alt="">
                    <div class="article_title">私の家族を紹介します！<br>鳳まりあ</div>
                    <div class="article_date">2023.03.24|インタビュー</div>
                </a></li>
                <li><a href="{{ route('fortune') }}" class="article_a">
                    <img src="{{ asset('img/new7.png') }}" class="article_img" alt="">
                    <div class="article_title">YUKARI先生のハッピードレス占い</div>
                    <div class="article_date">2023.03.24|コンテンツ</div>
                </a></li>
            </ul>
            <footer>
                <div class="banner_list">
                    <a href="" class="banner_a"><img src="{{ asset('img/banner1.png') }}" class="banner_img" alt=""></a>
                    <a href="" class="banner_a"><img src="{{ asset('img/banner2.png') }}" class="banner_img" alt=""></a>
                    <a href="" class="banner_a"><img src="{{ asset('img/banner3.png') }}" class="banner_img" alt=""></a>
                    <a href="" class="banner_a"><img src="{{ asset('img/banner4.png') }}" class="banner_img" alt=""></a>
                    <a href="" class="banner_a"><img src="{{ asset('img/banner5.png') }}" class="banner_img" alt=""></a>
                </div>
                <div class="banner_list">
                    <img src="{{ asset('img/fw_logo_red.png') }}" class="footer_logo" alt="">
                </div>
                <div class="footer_icon_list">
                    <a href="" class=""><img src="{{ asset('img/insta_red.png') }}" class="icon_img" alt=""></a>
                    <a href="" class="" style="margin-left:10px;"><img src="{{ asset('img/twitter_red.png') }}" class="icon_img" alt=""></a>
                </div>
                <div class="footer_pink">afw.jp</div>
            </footer>
        </body>
    </div>
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick_fw.js') }}"></script>
    <script src="{{ asset('js/recruit.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
    <script src="{{ asset('js/fw/fw_header.js') }}"></script>

    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>