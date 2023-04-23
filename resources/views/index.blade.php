@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>

<ul class="slider-sp" id="js-slider-sp">
    <li><img src="{{ asset('img/slick1.png') }}" class="" alt=""></li>
    <li><img src="{{ asset('img/slick2.png') }}" class="" alt=""></li>
    <li><img src="{{ asset('img/slick3.png') }}" class="" alt=""></li>
    <li><img src="{{ asset('img/slick4.png') }}" class="" alt=""></li>
    <li><img src="{{ asset('img/slick5.png') }}" class="" alt=""></li>
</ul>
<div class="dots-2"></div>

<div class="article_name">最新記事</div>
<ul class="slider-article" id="js-slider-new">
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

<div class="article_name">過去の記事</div>
<ul class="slider-article" id="js-slider-old">
    <li><a href="{{ route('fp13') }}" class="article_a">
        <img src="{{ asset('img/old1.png') }}" class="article_img" alt="">
        <div class="article_title">ANDY FashionPress13<br>発刊・販売中!!</div>
        <div class="article_date">2023.03.24|特集</div>
    </a></li>
    <li><a href="{{ route('miyu') }}" class="article_a">
        <img src="{{ asset('img/old2.png') }}" class="article_img" alt="">
        <div class="article_title">Club A を卒業します。<br>みゆ引退特集</div>
        <div class="article_date">2023.03.24|カタログ</div>
    </a></li>
    <li><a href="{{ route('yui') }}" class="article_a">
        <img src="{{ asset('img/old3.png') }}" class="article_img" alt="">
        <div class="article_title">経営者、女性として<br>彩花ゆい特集インタビュー</div>
        <div class="article_date">2023.03.24|コンテンツ</div>
    </a></li>
    <li><a href="{{ route('enrike') }}" class="article_a">
        <img src="{{ asset('img/old4.png') }}" class="article_img" alt="">
        <div class="article_title">名古屋で復帰<br>エンリケこと小川えりさんインタビュー</div>
        <div class="article_date">2023.03.24|特集</div>
    </a></li>
</ul>






    
@endsection