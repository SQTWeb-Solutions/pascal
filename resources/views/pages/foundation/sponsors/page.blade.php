@extends('template')
@section('title')
  Our Sponsors
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Our Sponsors')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Sponsors')}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">

    <section class="xs-section-padding" data-scrollax-parent="true">
      <div class="container">
        <div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
          <div class="fundpress-heading-title-content">
            <h2>{{_t('Our <span>sponsors</span>')}}</h2>
          </div>
          <span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">sponsors</span>
        </div><!-- section heading -->
        <div class="row">
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
          <div class="col-lg-3 text-center">
            <a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
              <img src="{{asset('img/sponsor_new_1.png')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
