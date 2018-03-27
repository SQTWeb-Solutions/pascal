@extends('template')
@section('title')
  Our Athletes
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('Our Athletes')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('Sports')}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">
    <section id="cause-matters" class="xs-gray-bg waypoint-tigger xs-section-padding">
      <div class="container">
        <div class="xs-section-heading row xs-margin-0">
          <div class="col-lg-12">
            <form class="search-form xs-serachForm xs-font-alt" role="search" method="get" action="#">
              <input type="search" class="xs-serach-filed search-field" name="s" value="" placeholder="Search from all our athletes...">
              <input type="submit" class="search-submit" value="">
            </form>
          </div>
        </div>
        <div class="xs-tab-wraper fundpress-tab-wraper">
          <div class="fundpress-tab-nav xs-tab-nav">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#tennis" role="tab" data-toggle="tab">{{_t('Tennis')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#football" role="tab" data-toggle="tab">{{_t('Football')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lawntennis" role="tab" data-toggle="tab">{{_t('Lawn Tennis')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#basketball" role="tab" data-toggle="tab">{{_t('Basketball')}}</a>
              </li>
            </ul>
          </div><!-- .xs-isotope-nav .fundpress-isotope-nav END -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active show" id="tennis">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/14.jpg')}}" alt="John Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="65%">
                          <div class="xs-skill-track">
                            <p>65%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['tennis'])}}">{{_t('Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['john-doe'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('John Doe')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">120</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/9.jpg')}}" alt="John Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="97%">
                          <div class="xs-skill-track">
                            <p>97%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['tennis'])}}">{{_t('Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['john-doe'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('John Doe')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>16<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">1020</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/10.jpg')}}" alt="Mane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['tennis'])}}">{{_t('Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['john-doe'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Mane Doe')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">438</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/11.jpg')}}" alt="Mane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['tennis'])}}">{{_t('Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['mane-doe'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Mane Doe')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">438</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="football">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/15.jpg')}}" alt="Javier Chicharito">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['football'])}}">{{_t('Football')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Javier Chicharito')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">700</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/5.jpg')}}" alt="Javier Chicharito">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['football'])}}">{{_t('Football')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Javier Chicharito')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">700</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/17.jpg')}}" alt="Javier Chicharito">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['football'])}}">{{_t('Football')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Javier Chicharito')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">700</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/13.jpg')}}" alt="Javier Chicharito">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="80%">
                          <div class="xs-skill-track">
                            <p>80%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['football'])}}">{{_t('Football')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('Javier Chicharito')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">700</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="basketball">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/13.jpg')}}" alt="J Rollins K.">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['basketball'])}}">{{_t('Basketball')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('J Rollins K.')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/1.jpg')}}" alt="J Rollins K.">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['basketball'])}}">{{_t('Basketball')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('J Rollins K.')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/7.jpg')}}" alt="J Rollins K.">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['basketball'])}}">{{_t('Basketball')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('J Rollins K.')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/12.jpg')}}" alt="J Rollins K.">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['basketball'])}}">{{_t('Basketball')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['javier-chicharito'])}}" class="d-block color-navy-blue fundpress-post-title">{{_t('J Rollins K.')}}</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="lawntennis">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/2.jpg')}}" alt="Jane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{_t('Lawn Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['jane-doe'])}}" class="d-block color-navy-blue fundpress-post-title">Jane Doe</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/3.jpg')}}" alt="Jane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{_t('Lawn Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['jane-doe'])}}" class="d-block color-navy-blue fundpress-post-title">Jane Doe</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/4.jpg')}}" alt="Jane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{_t('Lawn Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['jane-doe'])}}" class="d-block color-navy-blue fundpress-post-title">Jane Doe</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="fundpress-grid-item-content">
                    <div class="fundpress-item-header">
                      <img src="{{asset('img/players/14.jpg')}}" alt="Jane Doe">
                      <div class="xs-item-header-content">
                        <div class="xs-skill-bar-v3" data-percent="78%">
                          <div class="xs-skill-track">
                            <p>78%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fundpress-item-content xs-content-padding bg-color-white">
                      <ul class="xs-simple-tag fundpress-simple-tag">
                        <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{_t('Lawn Tennis')}}</a></li>
                      </ul>
                      <a href="{{route('sports.athlete',['jane-doe'])}}" class="d-block color-navy-blue fundpress-post-title">Jane Doe</a>
                      <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                      </p>
                      <ul class="xs-list-with-content fundpress-list-item-content">
                        <li>12<span>{{_t('Age')}}</span></li>
                        <li><span class="number-percentage-count">879</span><span>{{_t('Likes')}}</span></li>
                        <li>Nigeria<span>{{_t('Country')}}</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
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
