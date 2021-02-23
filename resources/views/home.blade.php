@extends('layouts.app')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/components/music-card.css') }}" rel="stylesheet">   
@endsection

@section('content')
<a href="#" class="banner-wrapper d-block text-center mb-3 mt-3"><img class="banner" src="{{ asset('images/dummy-banner.png') }}"></a>
<a href="#" class="banner-wrapper d-block text-center mb-5"><img class="banner" src="{{ asset('images/dummy-banner.png') }}"></a>
<section class="popular">
    <div class="container">
        <h2 class="color-main bold mb-4 text-center">人気のフレーズ</h2>
        <div class="row music-row justify-content-between mb-5">
      @foreach($popular AS $p)
      <div class="col-11 col-sm-11 col-md-11 col-lg-4">
            <div class="card music">
              <!-- 音楽フレーズのイメージ画像がDBになければダミーを出力 -->
              <img class='music__image' src="{{ !empty($p['image']) ? $p['image'] : asset('images/music-dummy.jpg') }}">
              <div class="card-body">
                <!-- タイトルのリンク先は音楽詳細ページ -->
                <a href="{{ route('music.show', ['id' => $p['id']] ) }}" class="card-title music__title">{{ $p['title']}}</a>
                <!-- 3行以上は3点リーダーで省略したいので、クラス名＝elipsis3を付与（_utility.scssに記述） -->
                <p class="card-text music__description elipsis3">{{ $p['description'] }}</p>
                <!-- ユーザー情報行はユーザー紹介ページへのリンクにする -->
                <a class='user' href="{{ route('mypage.show', ['id' => $p['user_id']]) }}">
                  <!-- ユーザーのプロフィール画像がなければダミーを出力 -->
                  <img class='user__image' src="{{ !empty($p['user_image']) ? $p['user_image'] : asset('images/user-icon.png') }}"/>
                  <p class='user__name'>{{ $p['user_name'] }}</p>
                </a>
              </div> <!-- cardbody -->
            </div> <!-- card -->
          </div> <!-- col -->
      @endforeach
        </div>
      </div>
</section>
<section class="public bg-yellow pt-5">
    <div class="container">
      <h2 class="color-main bold mb-4 text-center">公開中のフレーズ</h2>
      <div class="row music-row justify-content-between mb-5">
    @foreach($latest AS $l)
    <div class="col-11 col-sm-11 col-md-11 col-lg-4">
          <div class="card music">
            <img class='music__image' src="{{ $l['image'] }}">
            <div class="card-body">
              <a href="{{ route('music.show', ['id' => $l['id']] ) }}" class="card-title music__title">{{ $l['title']}}</a>
              <p class="card-text music__description elipsis3">{{ $l['description'] }}</p>
              <a class='user' href="{{ route('mypage.show', ['id' => $l['user_id']]) }}">
                <img class='user__image' src="{{ !empty($l['user_image']) ? $l['user_image'] : asset('images/user-icon.png') }}"/>
                <p class='user__name'>{{ $l['user_name'] }}</p>
              </a>
            </div> <!-- cardbody -->
          </div> <!-- card -->
        </div> <!-- col -->
    @endforeach
      </div>
      <p class='text-center mb-0'><a href="#" class='list-link btn btn-danger'>音楽フレーズ一覧</a></p>
    </div><!-- container -->
  </section>
@endsection