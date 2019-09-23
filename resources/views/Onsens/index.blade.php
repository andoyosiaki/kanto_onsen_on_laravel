@extends('original_layouts.default')
<header class="jumbotron-fluid header1">
  <div class="title">
    <h1 class="front_h1">関東温泉</h1>
  </div>
  <div class="author_box">
  </div>
    <div class="container">
      <div class="serch_box">
        <form action="{{ action('OnsenController@serch') }}" method="POST">
          {{ csrf_field() }}

            <select class="form-control" id="form_option" name="prefecture">
              <option value='1'>神奈川県</option>
              <option value='2'>静岡県</option>
              <option value='3'>山梨県</option>
            </select>
          <div class="serch_btn">
            <input type="submit" value="送信" class="serch_button" id="serch_option">
          </div>
        </form>
      </div>
    </div>
    <div class="feature_box">
      <p class="feature_p">特徴別に探す</p>
    </div>
    <div class="type_wrapper-box">
      <div class="type_box type_0">
        <div class="media">
          <img src="img/eat.png">
          <div class="media-body">
            <a href="{{ action('OnsenController@type') }}"><h3 class="mt-0">食事処あり</h3></a>
            <p>温泉からあがって美味しい食事が頂けるお店はこちら。地域の食材を使ったひと手間くわえたメニューが沢山あります。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_1">
        <div class="media">
          <img src="img/sauna.png">
          <div class="media-body">
            <a href="{{ action('OnsenController@type1') }}"><h3 class="mt-0">サウナあり</h3></a>
            <p>サウナに入ってリフレッシュ！ミストサウナやドライサウナなど種類も沢山あります
          。今話題のロウリュもあるかも。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_2">
        <div class="media">
          <img src="img/towel.png">
          <div class="media-body">
            <a href="{{ action('OnsenController@type2') }}"><h3 class="mt-0">タオルのレンタル可能</h3></a>
            <p>出先で急に温泉に入りたくなってもタオル持ってない・・。そんなときでも大丈夫。タオルのレンタル/販売してる温泉はこちら。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="type_wrapper-box down">
      <div class="type_box type_3">
        <div class="media">
          <img src="img/hot_stone.png">
          <div class="media-body">
            <a href="{{ action('OnsenController@type3') }}"><h3 class="mt-0">岩盤浴あり</h3></a>
            <p>岩盤浴でじっくり体を温めてデトックス！基本は有料サービスですが、なかには無料で使える温泉も・・・。</p>
          </div>
        </div>
      </div>
      <div class="type_box type_4">
        <div class="media">
          <img src="img/open_bath.png">
          <div class="media-body">
            <a href="{{ action('OnsenController@type4') }}"><h3 class="mt-0">露天風呂あり</h3></a>
            <p>温泉と言えばやっぱり露天風呂！大規模施設の色々な種類の露天風呂や、温泉地の静かな露天風呂まで多種多様にあります。</p>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- 店舗ループ -->
@include('include_files.loop')
<!-- footer -->
@include('include_files.footer')
