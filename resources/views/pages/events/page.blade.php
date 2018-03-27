<!-- TODO: Event details page -->
@extends('template')
@section('title')
  Our Events
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Our Events')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Events')}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">
    <section class="xs-bg fundpress-event-section xs-section-padding v3" >
      <div class="container">

        <div class="fundpress-event-wraper">
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fundpress-single-event rounded">
            <div class="row xs-margin-0">
              <div class="col-md-12 col-lg-4 xs-padding-0">
                <img src="{{asset('img/event/event1.jpg')}}" alt="">
              </div>
              <div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
                <div class="col-md-8 xs-padding-0">
                  <div class="fundpress-event-content">
                    <h5>09:00AM - 11:45AM</h5>
                    <a href="#">{{_t('Event 1')}}</a>
                    <p>
                      {{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley ')}}
                    </p>
                  </div>
                </div>
                <div class="col-md-4 xs-padding-0">
                  <div class="xs-btn-wraper text-right">
                    <a href="#" class="xs-btn btn btn-primary btn-lg round-btn">{{_t('View Event')}}</a>
                  </div>
                </div>
                <div class="col-md-5 xs-padding-0">
                  <div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
                </div>
                <div class="col-md-7 xs-padding-0">
                  <div class="fundpress-event-text-content text-left">
                    <p class="xs-mb-10"><strong>{{_t('Location:')}}'</strong> John Doe</p>
                    <p><strong>{{_t('Address:')}}</strong> Hall of fame, 124/ Zigzag City</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <br /><br /><br />
      <div class="post-pagination xs-pagination-wraper text-center">
        <ul class="xs-pagination fundpress-pagination">
          <li>
            <a class="next page-numbers" href="#">
              <span class="pagination-next"><i class="fa fa-angle-left"></i></span>
            </a>
          </li>
          <li>
            <span aria-current="page" class="page-numbers">
              <a class="page-numbers current" href="#">1</a>
            </span>
          </li>
          <li><a class="page-numbers" href="#">2</a></li>
          <li><a class="page-numbers" href="#">3</a></li>
          <li><a class="page-numbers" href="#">...</a></li>
          <li><a class="page-numbers" href="#">12</a></li>
          <li>
            <a class="next page-numbers" href="#">
              <span class="pagination-next"><i class="fa fa-angle-right"></i></span>
            </a>
          </li>
        </ul>
      </div>
    </section>

  </main>

@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
