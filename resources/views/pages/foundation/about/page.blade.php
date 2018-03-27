@extends('template')
@section('title')
  Get to know more about us
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('About the foundation')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('About us')}}</li>
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
    @include('pages.home.partials.value')

    <div class="fundpress-simple-promo-text-content">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-12 col-lg-9 content-center">
            <div class="fundpress-title-text-content">
              <h4 class="color-green margin-bottom-0">{{_t('The Pascal Rufi Sports Foundation was established by the Rufi family; Pascal Rufi, Mara Simone, and their lovely daughter Emma.')}}</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="xs-text-content fundpress-text-content">
              <p>{{_t('Having spent 16 years in Nigeria, the Rufi family began the foundation in 2018 in response to the growing need to provide support to extremely talented, but indigent youths to ensure that they pursue and engage in their sports interests with success.')}}</p>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="xs-text-content fundpress-text-content">
              <p>{{_t('Pursuing a career in sports is a dream that is not attainable to many because of the high running costs for kits and training, and the lack of access to training space and equipment. The Pascal Rufi Foundation is proud to be able to leave positive footprints in the community by providing beneficial intervention to youths in need.')}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('pages.foundation.about.mission')
    @include('pages.foundation.about.vision')
    @include('pages.foundation.about.testimonials')
  </main>

@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
