@extends('template')
@section('title')
  {{ucfirst($athlete)}} Athletes
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t(ucfirst($athlete).' Details')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> <a href="{{route('sports')}}" class="color-white"> {{_t('Sports')}} /</a> {{_t(ucfirst($athlete))}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">
    <section class="xs-content-section-padding xs-fund-details fundpress-fund-details">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="xs-sync-slider-wraper xs-mb-50">
              <div class="owl-carousel xs-sync-slider-preview xs-mb-10">
                <div class="xs-sync-slider-preview-content">
                  <img src="{{asset('img/players/14.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-preview-content">
                  <img src="{{asset('img/players/13.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-preview-content">
                  <img src="{{asset('img/players/7.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-preview-content">
                  <img src="{{asset('img/players/1.jpg')}}" alt="">
                </div>
              </div>

              <div class="owl-carousel xs-sync-slider-thumb">
                <div class="xs-sync-slider-thumb-content">
                  <img src="{{asset('img/players/14.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-thumb-content">
                  <img src="{{asset('img/players/13.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-thumb-content">
                  <img src="{{asset('img/players/7.jpg')}}" alt="">
                </div>
                <div class="xs-sync-slider-thumb-content">
                  <img src="{{asset('img/players/1.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="xs-sidebar-wraper">
              <div class="xs-single-sidebar xs-mb-30">
                <ul class="xs-list-with-content fundpress-simple-list-content">
                  <li class="color-navy-blue bold xs-mb-10">Jane Doe<span class="color-semi-black regular">{{_t('Name')}}</span></li>
                  <li class="color-green bold xs-mb-10">{{_t('Tennis')}}<span class="color-semi-black regular">{{_t('Sports')}}</span></li>
                  <li class="color-green bold xs-mb-10">12 years<span class="color-semi-black regular">{{_t('Age')}}</span></li>
                  <li class="color-green bold xs-mb-10">Nigerian<span class="color-semi-black regular">{{_t('Nationality')}}</span></li>
                  <li class="color-brick-light-2 bold">119<span class="color-semi-black regular">{{_t('Likes')}}</span> </li>
                </ul>
              </div>

              <div class="xs-single-sidebar xs-mb-50">
                <div class="xs-social-list-wraper">
                  <ul class="xs-social-list xs-social-list-v3 fundpress-social-list">
                    <li><a href="#" class="color-facebook xs-box-shadow full-round" data-toggle="tooltip" data-placement="bottom" title="{{_t('Follow me on facebook')}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="xs-box-shadow color-twitter full-round" data-toggle="tooltip" data-placement="bottom" title="{{_t('Follow me on twitter')}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="xs-box-shadow color-google-plus full-round" data-toggle="tooltip" data-placement="bottom" title="{{_t('Follow me on instagram')}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="xs-box-shadow color-navy-blue full-round" data-toggle="tooltip" data-placement="bottom" title="{{_t('Give me a like')}}"><i class="fa fa-heart-o"></i></a></li>
                  </ul>
                </div>
                <br />
                <div class="xs-btn-wraper">
                  <a href="#" class="icon-btn xs-btn radius-btn green-btn xs-btn-medium"><i class="fa fa-heart"></i>{{_t('Support me')}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="xs-text-content-tab">
              <div class="xs-tab-nav fundpress-tab-nav-v2 xs-mb-30" data-spy="affix-top" data-offset-top="205" >
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#description" role="tab" data-toggle="tab">{{_t('About me')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skills" role="tab" data-toggle="tab">{{_t('Skills')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#milestones" role="tab" data-toggle="tab">{{_t('Milestones')}}</a>
                  </li>
                  <li class="nav-item">
                    <!-- Requests and support form for request -->
                    <a class="nav-link" href="#requests" role="tab" data-toggle="tab">{{_t('Requests')}}<span class="color-red">(3)</span></a>
                  </li>
                </ul>
              </div>
              <div class="tab-content xs-text-tab-content">
                <div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="description">
                  <h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">{{_t('Brief History/Information')}}</h3>
                  <p class="xs-content-description fundpress-content-description xs-mb-30">{!!_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.')!!} </p>
                </div>
                <div role="tabpanel" class="tab-pane fadeInRights fade " id="skills">
                  <h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">{{_t('Talents/Skills:')}}</h3>
                  <div class="xs-ul-list fundpress-content-text-list-wraper">
                    <ul class="fundpress-content-text-list xs-content-text-list">
                      <li>
                        <h4 class="xs-content-description fundpress-content-description color-navy-blue">{{_t('Talent 1')}}</h4>
                        <div class="xs-skill-bar-v3 xs-mb-10" data-percent="65%">
                          <div class="xs-skill-track">
                            <p>65%</p>
                          </div>
                        </div>
                        <p class="xs-content-description fundpress-content-description color-navy-blue xs-mb-10">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ')}}</p>
                      </li>
                      <li>
                        <h4 class="xs-content-description fundpress-content-description color-navy-blue">{{_t('Talent 1')}}</h4>
                        <div class="xs-skill-bar-v3 xs-mb-10" data-percent="65%">
                          <div class="xs-skill-track">
                            <p>65%</p>
                          </div>
                        </div>
                        <p class="xs-content-description fundpress-content-description color-navy-blue xs-mb-10">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry.')}} </p>
                      </li>
                      <li>
                        <h4 class="xs-content-description fundpress-content-description color-navy-blue">{{_t('Talent 1')}}</h4>
                        <div class="xs-skill-bar-v3 xs-mb-10" data-percent="65%">
                          <div class="xs-skill-track">
                            <p>65%</p>
                          </div>
                        </div>
                        <p class="xs-content-description fundpress-content-description color-navy-blue xs-mb-10">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ')}}</p>
                      </li>
                      <li>
                        <h4 class="xs-content-description fundpress-content-description color-navy-blue">{{_t('Talent 1')}}</h4>
                        <div class="xs-skill-bar-v3 xs-mb-10" data-percent="65%">
                          <div class="xs-skill-track">
                            <p>65%</p>
                          </div>
                        </div>
                        <p class="xs-content-description fundpress-content-description color-navy-blue xs-mb-10">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ')}}</p>
                      </li>

                    </ul>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fadeInRights fade " id="milestones">
                  <h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">{{_t('Achievements:')}}'</h3>
                  <ul class="fundpress-content-text-list xs-content-text-list">
                    <li>
                      <p class="xs-content-description fundpress-content-description color-navy-blue">{{_t('December 28')}}</p>
                      <div class="fundpress-title-text-content">
                        <h4 class="color-navy-blue medium margin-bottom-0">{{_t('Achievement 1')}}</h4>
                      </div>
                      <p class="xs-content-description fundpress-content-description xs-mb-30">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries')}}</p>
                      <a href="#" class="color-green">
                        Read More
                      </a>
                    </li>
                    <li>
                      <p class="xs-content-description fundpress-content-description color-navy-blue">{{_t('December 28')}}</p>
                      <div class="fundpress-title-text-content">
                        <h4 class="color-navy-blue medium margin-bottom-0">{{_t('Achievement 1')}}</h4>
                      </div>
                      <p class="xs-content-description fundpress-content-description xs-mb-30">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries')}}</p>
                      <a href="#" class="color-green">
                        Read More
                      </a>
                    </li>
                    <li>
                      <p class="xs-content-description fundpress-content-description color-navy-blue">{{_t('December 28')}}</p>
                      <div class="fundpress-title-text-content">
                        <h4 class="color-navy-blue medium margin-bottom-0">{{_t('Achievement 1')}}</h4>
                      </div>
                      <p class="xs-content-description fundpress-content-description xs-mb-30">{{_t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries')}}</p>
                      <a href="#" class="color-green">
                        Read More
                      </a>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fadeInRights fade " id="requests">
                  <h3 class="bold color-green xs-post-title fundpress-post-title xs-mb-30">{{_t('Please, kindly support on:')}}</h3>

                  <div class="card-columns my-card">
                    <div class="card">
                      <div class="xs-info-card xs-purple-bg fundpress-info-card xs-box-shadow color-white">
                        <h3 class="xs-mb-30">{{_t('Sponsor me to olympics')}}</h3>
                        <h4 class="xs-mb-20">HIS and HERS (or For Parents)</h4>
                        <p class="xs-mb-20 xs-content-description fundpress-content-description">{{_t('lorem lypsum lorem lorem text goes here as long as it might be')}} </p>
                        <span class="xs-mb-40">{{_t('another caption')}}.</span>
                        <div class="xs-spilit-container">
                          <div class="xs-info-card-times">
                            <h5>Due Date</h5>
                            <h6>17 Aug 2017</h6>
                          </div>
                          <div class="xs-info-card-times">
                            <h5>Support For</h5>
                            <h6>Sponsorship</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="xs-info-card green-bg fundpress-info-card xs-box-shadow color-white">
                        <h3 class="xs-mb-30">{{_t('Sponsor me to olympics')}}</h3>
                        <h4 class="xs-mb-20">HIS and HERS (or For Parents)</h4>
                        <p class="xs-mb-20 xs-content-description fundpress-content-description">{{_t('lorem lypsum lorem lorem text goes here as long as it might be')}} </p>
                        <span class="xs-mb-40">{{_t('another caption')}}.</span>
                        <div class="xs-spilit-container">
                          <div class="xs-info-card-times">
                            <h5>Due Date</h5>
                            <h6>17 Aug 2017</h6>
                          </div>
                          <div class="xs-info-card-times">
                            <h5>Support For</h5>
                            <h6>Sponsorship</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="xs-info-card xs-pink-bg fundpress-info-card xs-box-shadow color-white">
                        <h3 class="xs-mb-30">{{_t('Sponsor me to olympics')}}</h3>
                        <h4 class="xs-mb-20">HIS and HERS (or For Parents)</h4>
                        <p class="xs-mb-20 xs-content-description fundpress-content-description">{{_t('lorem lypsum lorem lorem text goes here as long as it might be')}} </p>
                        <span class="xs-mb-40">{{_t('another caption')}}.</span>
                        <div class="xs-spilit-container">
                          <div class="xs-info-card-times">
                            <h5>Due Date</h5>
                            <h6>17 Aug 2017</h6>
                          </div>
                          <div class="xs-info-card-times">
                            <h5>Support For</h5>
                            <h6>Sponsorship</h6>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="xs-text-content-tab">
              <div class="xs-tab-nav fundpress-tab-nav-v2 xs-mb-30"  >
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#pictures" role="tab" data-toggle="tab">{{_t('Pictures')}}<span class="color-green">(9)</span></a>
                  </li>
                </ul>
              </div>
              <div class="tab-content xs-text-tab-content">
                <div role="tabpanel" class="tab-pane fadeInRights fade active show in " id="pictures">
                  <div class="xs-portfolio-isotope-grid">
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/players/1.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/players/1.jpg')}}" alt="Hello">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/pages/video_overlay.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/pages/video_overlay.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/pages/gallery-2.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/pages/gallery-2.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/players/3.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/players/3.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/pages/about-side.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/pages/about-side.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/players/4.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/players/4.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/players/5.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/players/5.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                    <div class="xs-portfolio-isotope-grid-item xs-padding-15">
                      <a href="{{asset('img/players/10.jpg')}}" class="xs-box-shadow  fundpress-portfolio-grid-item  xs-image-popup">
                        <div class="xs-solid-overlay xs-bg-black"></div>
                        <img src="{{asset('img/players/10.jpg')}}" alt="">
                      </a>
                      <div class="bg-color-white xs-padding-15 fundpress-isotope-grid">
                        <ul class="xs-simple-tag fundpress-simple-tag">
                          <li>12-Jun-2018</li>
                        </ul>
                        <h3 class="d-block color-navy-blue fundpress-post-title">{{_t('Gallery Image title')}}</h3>
                        <p>
                          {{_t('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.')}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="xs-text-content-tab">
              <div class="xs-tab-nav fundpress-tab-nav-v2 xs-mb-30"  >
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#videos" role="tab" data-toggle="tab">{{_t('Videos')}}<span class="color-green">(9)</span></a>
                  </li>
                </ul>
              </div>
              <div class="tab-content xs-text-tab-content">
                <div role="tabpanel" class="tab-pane fadeInRights fade active show in " id="videos">
                  <div class="row">

                    <div class="col-lg-4">
                      <div class="xs-box-shadow fundpress-popular-item xs-bg-white">
                        <div class="fundpress-item-header">
                          <iframe type="text/html" width="100%" height="240"
                            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=0"
                            frameborder="0"></iframe>
                        </div>
                        <div class="fundpress-item-content xs-content-padding bg-color-white">
                          <a href="#" class="d-block color-navy-blue fundpress-post-title">Splash Drone 3 a Fully Waterproof Drone that floats</a>

                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="xs-box-shadow fundpress-popular-item xs-bg-white">
                        <div class="fundpress-item-header">
                          <iframe type="text/html" width="100%" height="240"
                            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=0"
                            frameborder="0"></iframe>
                        </div>
                        <div class="fundpress-item-content xs-content-padding bg-color-white">
                          <a href="#" class="d-block color-navy-blue fundpress-post-title">Splash Drone 3 a Fully Waterproof Drone that floats</a>

                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="xs-box-shadow fundpress-popular-item xs-bg-white">
                        <div class="fundpress-item-header">
                          <iframe type="text/html" width="100%" height="240"
                            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=0"
                            frameborder="0"></iframe>
                        </div>
                        <div class="fundpress-item-content xs-content-padding bg-color-white">
                          <a href="#" class="d-block color-navy-blue fundpress-post-title">Splash Drone 3 a Fully Waterproof Drone that floats</a>

                        </div>
                      </div>
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
