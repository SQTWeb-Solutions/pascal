<!-- TODO: Category listing page -->
<!-- TODO: News Details page -->
@extends('template')
@section('title')
  News/Updates
@endsection
@section('content')
  <section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-2 parallax-window" data-parallax="scroll" data-image-src="{{asset('img/bg/breadcrumb.jpg')}}">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
      <div class="fundpress-inner-welcome-content">
        <h2 class="color-white">{{_t('News/Update')}}</h2>
        <ul class="xs-breadcumb fundpress-breadcumb">
          <li><a href="{{route('index')}}" class="color-white"> {{_t('Home')}} /</a> {{_t('News')}}</li>
        </ul>
      </div>
    </div>
  </section>

  <main class="xs-all-content-wrapper">
    <section class="xs-content-section-padding xs-news-feeds-inner-section fundpress-news-feeds-inner-section">
      <div class="container">
        <div class="row">
          <div class="card-columns">
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/1.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/2.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/3.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/4.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/1.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/2.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/3.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="xs-box-shadow fundpress-from-journal">
                <div class="fundpress-item-header entry-thumbnail">
                  <img src="{{asset('img/news/4.jpg')}}" alt="News 1">
                </div><!-- .fundpress-item-header END -->
                <div class="fundpress-item-content xs-content-padding bg-color-white">
                  <div class="entry-header">
                    <div class="post-meta">
                      <ul class="xs-simple-tag fundpress-simple-tag tags-links xs-font-size-extra">
                        <li><a href="#" rel="tag">{{_t('Football')}}</a></li>
                      </ul>
                    </div>
                    <h4 class="entry-title">
                      <a href="/" class="xs-post-title color-navy-blue fundpress-post-title">{{_t('How Nigeria Won Olympics')}}</a>
                    </h4>
                  </div>

                  <div class="entry-content">
                    <p class="xs-content-description fundpress-content-description">{{_t('Lorem lypsum is just a dummy text that goes here anything and becomes fit in the place with ellipsis')}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
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
      </div>
    </section>

  </main>

@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
