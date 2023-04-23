@extends('layouts.app_fw')

@section('content')
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">

<script src="{{ asset('js/fw/top.js') }}"></script>
@endsection


@section('content_sp')

<div class="header_padding"></div>
<div class="contact_title">お問い合わせ</div>
<form id="form" class="contact_form" name="contact_form" action="" method="post" enctype="multipart/form-data">
    <div class="contact_name">お名前</div>
    {{ Form::text('name', old('name'), ['class' => 'contact_text', 'maxlength' => 30, 'placeholder' => 'お名前']) }}
    <div class="contact_name">メールアドレス</div>
    {{ Form::text('mail', old('mail'), ['class' => 'contact_text', 'maxlength' => 100, 'placeholder' => 'メールアドレス']) }}
    <div class="contact_name">お問い合わせ内容</div>
    <textarea class="contact_textarea"></textarea>
    <a href="" class="send_btn">送信</a>
</form>
@endsection