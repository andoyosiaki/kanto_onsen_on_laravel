@extends('original_layouts.default')
<header class="jumbotron-fluid header2">
  <div class="container header_box">
    <div class="header_text">
      <p class='type_p'><a href="{{ url('/') }}">関東温泉</a></p>
      <h1 class="type_h1">露天風呂あり</h1>
    </div>
  </div>
</header>
<!-- 店舗ループ -->
@include('original_layouts.loop')
<!-- footer -->
@include('original_layouts.footer')
