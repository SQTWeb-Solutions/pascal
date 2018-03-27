<div class="top-bar d-none d-lg-block d-xl-block">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="dropdown">
          <!-- TODO: Language Switcher -->
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ _t('View in') }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach (Cache::get('language') as $language)
              <a class="dropdown-item" href="{{route($language['route'])}}">{{ $language['language'] }}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <a href="/" class="btn btn-link" >
          {{ _t('Suggest a kid')}}
        </a>
        <a class="btn btn-success" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
          <i class="fa fa-heart"></i> {{ _t('Donate')}}
        </a>
      </div>
    </div>
  </div>
</div>
<header class="xs-header-height xs-menu-style-border fundpress-header-main-version xs-menu-style-solid color-navy-blue">
  <div class="container">
    <nav class="xs-menus fundpress-menu">
      <div class="nav-header">
        <div class="nav-toggle"></div>
        <a class="nav-brand nav-logo" href="/">
          <img src="{{asset('img/logo-normal.png')}}" alt="{{ _t('Pascal Rufi Sports Foundation')}}">
        </a>
      </div><!-- . END -->
      <div class="nav-menus-wrapper">
        <div class="xs-logo-wraper">
          <a class="nav-brand xs-logo fundpress-logo-v1" href="/">
            <img src="{{asset('img/logo-normal.png')}}" alt="{{ _t('Pascal Rufi Sports Foundation')}}">
          </a>
        </div>
        <ul class="nav-menu">
          <li><a href="#">{{ _t('Foundation')}}</a>
            <ul class="nav-dropdown">
              <li><a href="{{route('foundation.about')}}">{{ _t('About Us')}}</a></li>
              <li><a href="{{route('foundation.about','#objectives')}}">{{ _t('Our Objective')}}</a></li>
              <li><a href="{{route('foundation.sponsors')}}">{{ _t('Sponsors')}}</a></li>
            </ul>
          </li>
          <li><a href="{{route('sports')}}">{{ _t('Sports')}}</a>
            <ul class="nav-dropdown">
              <li><a href="{{route('sports.category',['tennis'])}}">{{ _t('Tennis')}}</a>
                <ul class="nav-dropdown">
                  <li><a href="{{route('sports.category',['tennis'])}}">{{ _t('Athletes')}}</a></li>
                  <li><a href="/">{{ _t('Suggest a talented kid')}}</a></li>
                </ul>
              </li>
              <li><a href="{{route('sports.category',['football'])}}">{{ _t('Football')}}</a>
                <ul class="nav-dropdown">
                  <li><a href="{{route('sports.category',['football'])}}">{{ _t('Athletes')}}</a></li>
                  <li><a href="/">{{ _t('Suggest a talented kid')}}</a></li>
                </ul>
              </li>
              <li><a href="{{route('sports.category',['basket-ball'])}}">{{ _t('Basket Ball')}}</a>
                <ul class="nav-dropdown">
                  <li><a href="{{route('sports.category',['basket-ball'])}}">{{ _t('Athletes')}}</a></li>
                  <li><a href="/">{{ _t('Suggest a talented kid')}}</a></li>
                </ul>
              </li>
              <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{ _t('Lawn Tennis')}}</a>
                <ul class="nav-dropdown">
                  <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{ _t('Athletes')}}</a></li>
                  <li><a href="/">{{ _t('Suggest a talented kid')}}</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{route('events')}}">{{ _t('Events')}}</a></li>
          <li><a href="{{route('volunteer')}}">{{ _t('Volunteer')}}</a>
            <ul class="nav-dropdown">
              <li><a href="{{route('volunteer.train')}}">{{ _t('Volunteer to Train')}}</a></li>
              <li><a href="{{route('volunteer.support')}}">{{ _t('Volunteer to Support')}}</a></li>
            </ul>
          </li>
          <li><a href="{{route('news')}}">{{ _t('News')}}</a></li>
          <li><a href="#">{{ _t("Emma's Blog")}}</a></li>
          <li><a href="{{route('contact')}}">{{ _t('Contact')}}</a></li>
        </ul>
        <div class="xs-navs-button d-block d-sm-block d-md-lock d-lg-none d-xl-none">
          <ul class="xs-icon-with-text fundpress-icon-menu">
            <li ><a href="#"  >{{ _t('Suggest a kid')}}</a></li>
            <li ><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="xs-btn round-btn green-btn"><i class="fa fa-heart"></i> {{ _t('Donate')}}</a></li>
            <li >
              <div class="dropdown">
                <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ _t('View in') }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach (Cache::get('language') as $language)
                    <a class="dropdown-item" href="{{route($language['route'])}}">{{ $language['language'] }}</a>
                  @endforeach
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div><!-- .nav-menus-wrapper END -->
    </nav><!-- .xs-menus .fundpress-menu END -->
  </div>
</header>
