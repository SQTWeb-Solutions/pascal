@extends('template')
@section('title')
  Get in touch
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Get In Touch')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Contact')}}</li>
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
                <h2 class="color-navy-blue">{{_t('Get in touch')}}</h2>
                <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 content-center">
            <div class="xs-contact-form-wraper">
              @include('pages.contact.form')
            </div>
          </div>
        </div>
      </div>
    </section>	<!-- End contact us section -->

    <!-- map section -->
    <div class="xs-map-section">
      <div id="xs-maps" class="xs-map"></div>
    </div>	<!-- End map section -->
  </main>

@endsection
@section('styles')
@endsection
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
@endsection
