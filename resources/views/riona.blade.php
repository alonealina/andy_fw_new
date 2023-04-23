@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/riona1.png') }}" class="" alt="" style="margin-bottom:50px;">
<img src="{{ asset('img/riona2.png') }}" class="" alt="" style="">
<div class="riona_ex">
    model：<br>
    一條りおな<br>
    /CLUB ZOO<br><br>
    <img src="{{ asset('img/insta.png') }}"> <a href="https://www.instagram.com/riona.i/" target="_blank" class="koreamake_a">riona.i</a><br><br>
    <img src="{{ asset('img/twitter.png') }}"> <a href="https://twitter.com/riona_0627" target="_blank" class="koreamake_a">riona_0627</a>
</div>

    
@endsection