@extends('layouts.user')

@section('title', 'Christ Ambassadors - No. 1 Site for Christian Podcasts')
 
@section('style')
<style>
    /* nav{
          background-color: #022147;
      } */
    .sa-header li a {
        color: #555b62;
    }

    #header.sticky.sa-header li a {
        color: #fff;
    }

    header {
        background-color: white;
    }
</style>
@endsection

@section('content')

  
  <!-- Inner-intro -->
  <section class="sa-page-title text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Podcast</h1>
        </div>
        <div class="col-md-12">
          <nav class="breadcrumb">
            <ul>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">podcast</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

    
  <section class="latest_event_sermons pd-default-2">
    <div class="container">
      <div class="section-header text-center">
        <h2>Upcoming Podcast</h2>
        <p>Join us and become part of something great</p>
      </div>
      <div class="w-100 bg-lighter-orange">
        <div class="row">
          <div class="col-md-4">
            <div class="next_event position-relative ps-5 pt-5">
              <div class="event_wrap_top">
                <p class="subtitle m-0 align-self-end">Upcoming podcast</p>
                <div class="event_date position-relative p-0" style="top:0 !important;">
                  <span class="mb-2">12</span> Jul'19
                </div>
              </div>
              <h4><a href="#">Which is the same as saying</a></h4>
              <div class="event_info ps-0">
                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                  Ipsum generators on the Internet tend.</p>
                <ul>
                  <li><i class="fa fa-clock-o"></i> Sunday 8:00 - 9:00 am</li>
                  <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest Chicago, IL United States</li>
                </ul>
              </div>
              <a href="#" class="btn btn-primary mb-4">Join Now <i class="fa fa-caret-right"></i> </a>
            </div>
          </div>
          <div class="col-md-8">
            <a>
              <img class="w-100 h-100" src="assets/images/upcoming_podcast_img.jpg" />
            </a>
          </div>
        </div>

      </div>
      <div class="w-100 pt-3 text-end">
        <a>View all podcasts <i class="fa fa-long-arrow-right ms-2"></i></a>

      </div>
    </div>
  </section>

  <section class="latest_blog section-padding style-3 ministries">
    <div class="container">
      <div class="section-header text-center">
        <h2>Categories</h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
      </div>
      <div class="podcast_categories">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="sa-place-single position-relative d-grid place-items-center">
              <img src="assets/images/place/place-6.jpg" alt="img">
              <h5 href="#" class="white_text position-absolute mb-0">
                Directions
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="latest_event_sermons sa-intro-style2 section-padding pt-0">
    <div class="container">
      <div class="section-header text-center">
        <h2>Past Podcasts</h2>
        <p>Listen to some our past podcasts sessions</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box_wrap next_event">
            <img src="/assets/images/intro-1.jpg" alt="img">
            <div class="sa-intro-style2-padding">
              <p class="subtitle">Next Event</p>
              <h4><a href="#">Which is the same as saying</a></h4>
              <div class="event_info">
                <div class="event_date">
                  <span>20</span> Aug'18
                </div>
                <ul>
                  <li><i class="fa fa-clock-o"></i> Sunday (8:00-9:00 am)</li>
                  <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest Chicago, IL United States</li>
                </ul>
              </div>
              <div class="ss-event-btns">
                <a href="#" class="btn btn-primary">Listen Now <i class="fa fa-caret-right"></i> </a>
                <a href="#" class="btn btn-primary"> <i class="fa fa-calendar"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box_wrap next_event">
            <img src="/assets/images/intro-1.jpg" alt="img">
            <div class="sa-intro-style2-padding">
              <p class="subtitle">Next Event</p>
              <h4><a href="#">Delivering what is right</a></h4>
              <div class="event_info">
                <div class="event_date">
                  <span>24</span> Jul'19
                </div>
                <ul>
                  <li><i class="fa fa-clock-o"></i> Sunday (8:00-9:00 am)</li>
                  <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest Chicago, IL United States</li>
                </ul>
              </div>
              <div class="ss-event-btns">
                <a href="#" class="btn btn-primary">Listen Now <i class="fa fa-caret-right"></i> </a>
                <a href="#" class="btn btn-primary"> <i class="fa fa-calendar"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box_wrap next_event">
            <img src="/assets/images/intro-1.jpg" alt="img">
            <div class="sa-intro-style2-padding">
              <p class="subtitle">Next Event</p>
              <h4><a href="#">Delivering what is right</a></h4>
              <div class="event_info">
                <div class="event_date">
                  <span>24</span> Jul'19
                </div>
                <ul>
                  <li><i class="fa fa-clock-o"></i> Sunday (8:00-9:00 am)</li>
                  <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest Chicago, IL United States</li>
                </ul>
              </div>
              <div class="ss-event-btns">
                <a href="#" class="btn btn-primary">Listen Now <i class="fa fa-caret-right"></i> </a>
                <a href="#" class="btn btn-primary"> <i class="fa fa-calendar"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


   

    
      


@endsection

@section('scripts')

@endsection