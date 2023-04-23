@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<div class="contact_title">お問い合わせ</div>
<div class="send_complete">
    お問い合わせを送信しました。<br>ご入力のメールアドレスに返信が届くまでしばらくお待ちください。
</div>
@endsection