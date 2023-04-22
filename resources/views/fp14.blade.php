@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/fp14.png') }}" class="" alt="" style="margin-bottom:50px;">

<div class="article_name">最新号ANDY FashinPress14発刊・販売中!!</div>
<div class="article_text">
    多くの業界関係者やキャスト様に<br>
    ご愛読いただいていますANDY FashinPress最新号の<br>
    No.14が販売中です。<br><br>
    ANDYドレス取扱店・ANDY公式ECサイトで<br>
    ご購入いただけます。<br><br>
    <a href="https://www.andy-dress.com/fs/andy/andy_fashion_press_14/andy_fashion_press_14" target="_blank"><img src="{{ asset('img/buy_btn.png') }}" class="buy_btn" alt=""></a>

</div>




    
@endsection