@extends('template')
@section('title')
  Volunteer to support
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Volunteer to support')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> <a href="{{route('volunteer')}}" class="color-white"> {{_t('Volunteer')}} /</a> {{_t('Support')}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">
    <section class="xs-section-padding fundpress-contact-us-section xs-contact-us-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 content-center">
            <div class="xs-section-heading fundpress-section-heading">
              <div class="xs-heading-title fundpress-heading-title">
                <h2 class="color-navy-blue">{{_t('Volunteer to support')}}</h2>
                <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 content-center">
            <div class="xs-contact-form-wraper">
              @include('pages.volunteer.support-form')
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
