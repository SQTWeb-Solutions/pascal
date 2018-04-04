<footer class="fundpress-footer-version-2">
  <div class="fundpress-footer-top-layer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4 col-xs-12">
          <div class="fundpress-single-footer-v2-content" >
            <div class="xs-footer-logo xs-mb-40">
              <a href="/">
                <img src="{{asset('img/logo-white.png')}}" alt="Pascal Rufi Sports Foundation">
              </a>
            </div>
            <div class="fundpress-footer-content xs-mb-30">
              <p class="color-white xs-mb-0">{{ _t('The Pascal Rufi Sports Foundation was established by the Rufi family; Pascal Rufi, Mara Simone, and their lovely daughter Emma.')}}'</p>
            </div>
            <a href="{{route('foundation.about')}}" class="xs-btn btn text-capitalize btn-primary btn-lg round-btn">{{ _t('Read More')}}</a>
          </div>
        </div>
        <div class="col-md-6 col-6 col-lg-2">
          <div class="fundpress-single-footer-v2">
            <div class="xs-footer-title">
              <h4 class="color-white">{{ _t('Sports')}}</h4>
            </div><!-- .xs-footer-title END -->
            <nav class="xs-footer-menu xs-footer-menu-v2">
              <ul>
                <li><a href="{{route('sports.category',['tennis'])}}">{{ _t('Tennis')}}</a></li>
                <li><a href="{{route('sports.category',['football'])}}">{{ _t('Football')}}</a></li>
                <li><a href="{{route('sports.category',['basket-ball'])}}">{{ _t('Basketball')}}</a></li>
                <li><a href="{{route('sports.category',['lawn-tennis'])}}">{{ _t('Lawn tennis')}}</a></li>
              </ul>
            </nav><!-- .xs-footer-menu .xs-block-menu END -->
          </div><!-- .fundpress-single-footer-v2 END -->
        </div>
        <div class="col-md-6 col-6 col-lg-2">
          <div class="fundpress-single-footer-v2" >
            <div class="xs-footer-title">
              <h4 class="color-white">{{ _t('Quick Link')}}</h4>
            </div><!-- .xs-footer-title END -->
            <nav class="xs-footer-menu xs-footer-menu-v2">
              <ul>
                <li><a href="{{route('foundation.about')}}">{{ _t('The Foundation')}}</a></li>
                <li><a href="{{route('events')}}">{{ _t('Events')}}</a></li>
                <li><a href="{{route('volunteer')}}">{{ _t('Volunteer')}}</a></li>
                <li><a href="{{route('news')}}">{{ _t('News')}}</a></li>
                <li><a href="{{route('contact')}}">{{ _t('Contact')}}</a></li>
              </ul>
            </nav><!-- .xs-footer-menu .xs-block-menu END -->
          </div><!-- .fundpress-single-footer-v2 END -->
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="fundpress-single-footer-v2">
            <div class="xs-footer-title">
              <h4 class="color-white">{{ _t('Contact')}}</h4>
            </div><!-- .xs-footer-title END -->
            <ul class="xs-list-item-icon-text-v2">
              <li>
                <i class="icon icon-paper-plane"></i>
                <div class="xs-contact-contet">
                  Plot 20/22 Aguiyi Ironsi Street, Maitama <br>Nigeria
                </div>
              </li>
              <li>
                <i class="icon icon-phone-call"></i>
                <div class="xs-contact-contet">
                  +234 00 000 000 000 <br> +234 00 000 000 000
                </div>
              </li>
              <li>
                <i class="icon icon-email"></i>
                <div class="xs-contact-contet">
                  <a href="mailto:info@pascalrufisportsfoundation.org" class="d-block">info@pascalrufisportsfoundation.org</a>
                  <a href="mailto:career@pascalrufisportsfoundation.org" class="d-block">career@pascalrufisportsfoundation.org</a>
                </div>
              </li>
              <li>
                <i class="icon icon-internet"></i>
                <div class="xs-contact-contet">
                  <a href="http://pascalrufisportsfoundation.org">pascalrufisportsfoundation.org</a>
                </div>
              </li>
            </ul>
          </div><!-- .fundpress-single-footer-v2 END -->
        </div>
      </div>
    </div>
  </div>
  <div class="fundpress-footer-bottom-v2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="fundpress-copyright-text-v2">
            <p>Copyright {{date('Y')}} Pascal Rufi Sport Foundation. Built with <i class="fa fa-heart"></i> by <a href="http://www.sqtwebsolutions.com">SQT Web Solutions</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="xs-footer-bottom-wraper text-right" >
            <ul class="xs-social-list xs-social-list-v7">
              <li class="xs-text-content">{{ _t('Follow us')}}</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
