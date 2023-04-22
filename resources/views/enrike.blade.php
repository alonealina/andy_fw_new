@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/enrike1.png') }}" class="" alt="" style="">
<div class="enrike2_div">
    <img src="{{ asset('img/enrike2.png') }}" class="" alt="" style="    margin-bottom: 30px;">
    <a href="https://twitter.com/rie0985" target="_blank"><img src="{{ asset('img/enrike_twitter.png') }}" class="sns_img" alt="" style="width:86px;  left: 0px;"></a>
    <a href="https://www.instagram.com/eri.ogawa1102" target="_blank"><img src="{{ asset('img/enrike_insta.png') }}" class="sns_img" alt="" style="width:127px; left: 10px; "></a>
    <a href="https://www.youtube.com/@enrikekukan" target="_blank"><img src="{{ asset('img/enrike_youtube.png') }}" class="sns_img" alt="" style="width:121px; left: 20px; "></a>
</div>
<img src="{{ asset('img/enrike3.png') }}" class="" alt="" style="margin-bottom:50px;">


    
@endsection