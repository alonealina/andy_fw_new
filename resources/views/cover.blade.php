@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<div class="cover1">
    <a href="https://www.andy-dress.com/fs/andy/an-on2714" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(70px + 123vw); left: 60vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2697" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(70px + 133vw); left: 60vw;">
    </a>

</div>

<div class="cover2">
    <a href="https://www.andy-dress.com/fs/andy/an-on2699" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 187vw); left: 55vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2707" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 357vw); right: 59vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2706" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 520vw); left: 57vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2705" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 592vw); right: 49vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2704" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 765vw); left: 60vw;">
    </a>
    <a href="https://www.andy-dress.com/fs/andy/an-on2698" target="_blank">
        <img src="{{ asset('img/buy_btn.png') }}" class="cover_buy_btn" alt="" style="top: calc(90px + 875vw); right: 54vw;">
    </a>
</div>

<div class="cover_flex">
    <div class="cover_item">
        <a href="https://www.andy-dress.com/fs/andy/gms-v763" target="_blank">
            <img src="{{ asset('img/buy_btn.png') }}" class="buy_btn" alt="" style=""><br>
        </a>
        model：るな/CLUB REIMS<br>
        <img src="{{ asset('img/insta.png') }}" class="cover_insta"> <a href="https://www.instagram.com/reims_runa/" target="_blank" class="koreamake_a">reims_runa</a>
    </div>
    <div class="cover_item">
        <a href="https://www.andy-dress.com/fs/andy/gms-v761" target="_blank">
            <img src="{{ asset('img/buy_btn.png') }}" class="buy_btn" alt="" style=""><br>
        </a>
        model：ひなの/CLUB A<br>
        <img src="{{ asset('img/insta.png') }}" class="cover_insta"> <a href="https://www.instagram.com/hinano_princess_/" target="_blank" class="koreamake_a">hinano_princess_</a>
    </div>
</div>



    
@endsection