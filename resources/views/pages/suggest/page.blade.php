@extends('template')
@section('title')
  Suggest a kid
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Suggest a kid')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Suggesta kid')}}</li>
        </ul>
      </div>
    </div>
  </section>
  <main class="xs-all-content-wrapper">
    <section class="xs-about-us-promo-section xs-content-section-padding fundpress-about-us-promo-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6">
            <div class="fundpress-inner-about-content">
              <h2 class="color-navy-blue">{{_t('We are changing the way of making things possible.')}}</h2>
              <p>“{{_t('The Pascal Rufi Foundation is proud to be able to leave positive footprints in the community by providing beneficial intervention to youths in need')}}” </p>

            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="fundpress-about-promo-image xs-box-shadow">
              <img src="{{asset('img/pages/about-side.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="xs-section-padding fundpress-contact-us-section xs-contact-us-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 content-center">
            <div class="xs-section-heading fundpress-section-heading">
              <div class="xs-heading-title fundpress-heading-title">
                <h2 class="color-navy-blue">{{_t('Suggest a talented kid to us')}}</h2>
                <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 content-center">
            <div class="xs-contact-form-wraper">
              @include('pages.suggest.suggest-form')
            </div>
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
