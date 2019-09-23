@extends('layoutss.default')
<header class="jumbotron-fluid header2">
  <div class="container header_box">
    <div class="header_text">
      <p class='type_p'><a href="{{ url('/') }}">関東温泉</a></p>
      <h1 class="type_h1">食事処あり</h1>
    </div>
  </div>
</header>
<div class="contaienr main_section">
  <article>
    @foreach ($onsens as $onsen)
    <div class="article_box">
      <div class="article_inner-box">
        <h2><a href="{{ action('OnsenController@show', $onsen->id) }}">{{ $onsen->name }}</a></h2>
          <div class="p_box">
            <p class="{{ prefecture($onsen->prefectureint) }}">{{ $onsen->prefecture }}</p>
          </div>
        <p class="front-img"><a href="{{ action('OnsenController@show',$onsen->id) }}"><img src="/img/{{ $onsen->picint }}.jpg"></a></p>
      </div>
    </div>
    @endforeach
  </article>
</div>
