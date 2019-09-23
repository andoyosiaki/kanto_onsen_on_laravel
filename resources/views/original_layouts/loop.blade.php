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
