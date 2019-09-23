@extends('original_layouts.default')
<!-- header -->
@include('include_files.header',['title' => _prefecture($prefecture) ])
<!-- 店舗ループ -->
@include('include_files.loop')
<!-- footer -->
@include('include_files.footer')
