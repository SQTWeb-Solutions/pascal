@extends('template')
@section('title')
  Volunteer
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Volunteer')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Volunteer')}}</li>
        </ul>
      </div>
    </div>
  </section>
  @include('pages.home.partials.about')
  @include('pages.home.partials.callout')
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
