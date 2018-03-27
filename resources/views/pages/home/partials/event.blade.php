<section class="xs-bg fundpress-event-section xs-section-padding v3" >
  <div class="container">
    <div class="xs-section-heading row xs-margin-0">
      <div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
        <h2 class="color-navy-blue">{{_t('You can join in Special Events')}}</h2>
      </div>
      <div class="xs-btn-wraper xs-padding-0 col-md-3 col-xl-3 d-flex-center-end">
        <a href="{{route('events')}}" class="xs-btn round-btn navy-blue-btn">{{_t('View Events')}}</a>
      </div>
    </div>
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
    </div>
  </div>
</section>
