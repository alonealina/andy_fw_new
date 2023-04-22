@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/fp13.png') }}" class="" alt="" style="margin-bottom:50px;">

<div class="article_name">最新号ANDY FashinPress13発刊・販売中!!</div>
<div class="article_text">
    多くの業界関係者やキャスト様に<br>
    ご愛読いただいていますANDY FashinPress最新号の<br>
    No.13が販売中です。<br><br>
    ANDYドレス取扱店・ANDY公式ECサイトで<br>
    ご購入いただけます。<br><br>
    <img src="{{ asset('img/sold_btn.png') }}" class="buy_btn" alt="">

</div>




    
@endsection