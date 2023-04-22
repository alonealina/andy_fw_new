@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/koreamake1.png') }}" class="" alt="" style="">
<div class="koreamake_div">
    <img src="{{ asset('img/koreamake2.png') }}" class="" alt="" style="margin-bottom: 20px;">
    <div class="koreamake_ex">model：椿そら/Gentleman's Club　
        <img src="{{ asset('img/twitter.png') }}"> <a href="https://twitter.com/soratubakiraso" target="_blank" class="koreamake_a">soratubakiraso</a>
    </div>
    <img src="{{ asset('img/koreamake3.png') }}" class="" alt="" style="margin-bottom: 20px;">
    <div class="koreamake_ex">model：彩花ゆい/club Mirazur　
        <img src="{{ asset('img/insta.png') }}"> <a href="https://www.instagram.com/ayakayui/" target="_blank" class="koreamake_a">ayakayui</a>
    </div>

</div>


    
@endsection