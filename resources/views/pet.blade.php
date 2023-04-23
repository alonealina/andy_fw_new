@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<img src="{{ asset('img/pet1.png') }}" class="" alt="" style="margin-bottom:50px;">
<div class="pet_div">
    <img src="{{ asset('img/pet2.png') }}" class="" alt="" style="">
    <div class="pet_ex">
        <img src="{{ asset('img/insta.png') }}" class="cover_insta"> <a href="https://www.instagram.com/mariaootori/" target="_blank" class="koreamake_a">mariaootori</a><br>
        model：鳳まりあ/GRAMOROUS
    </div>
    <img src="{{ asset('img/pet3.png') }}" class="" alt="" style="">
</div>
    
@endsection