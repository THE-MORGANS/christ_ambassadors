
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

      <!--start section-->
      <section class="nicdark_section">

        <div class="tp-banner-container">
            <div class="nicdark_slide1" >
                <ul>
                    <!--start first-->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="FRIENDS">
                        <img src="{{ asset('assets/img/slide/slider-06.jpg')}}"  alt="" data-lazyload="{{ asset('assets/img/slide/slider-06.jpg')}}" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    </li>
                    <!--end first-->

                    <!--start second-->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="LESSON">
                        <img src="{{ asset('assets/img/slide/slider-01.jpg')}}"  alt="" data-lazyload="{{ asset('assets/img/slide/slider-01.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    </li>
                    <!--end second-->

                     <!--start second-->
                     <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="CHURCH">
                        <img src="{{ asset('assets/img/slide/slider.jpeg')}}"  alt="" data-lazyload="{{ asset('assets/img/slide/slider.jpeg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    </li>
                    <!--end Thiird-->

                </ul>
                
            </div>
        </div>

    </section>
    <!--end section-->

    <!--start section-->
    <section class="nicdark_section nicdark_margintop45_negative">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">
            
            <div class="grid grid_12 percentage nomargin">    
                <div class="nicdark_textevidence center">
                    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
                        <div class="nicdark_textevidence">
                            <div class="nicdark_margin30">
                                <h2 class="white subtitle"><a class="white" href="{{ route('blog')}}">BLOG</a></h2>
                        </div>
                            <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                        </div>
                    </div>
                    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
                        <div class="nicdark_textevidence">
                            <div class="nicdark_margin30">
                                <h2 class="white subtitle"><a class="white" href="{{ route('activities')}}">OUR ACTIVITIES</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
                        <div class="nicdark_textevidence">
                            <div class="nicdark_margin30">
                                <h2 class="white subtitle"><a class="white" href="{{ route('supportus') }}">SUPPORT</a></h2>
                        </div>
                            <i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                        </div>
                    </div>
                    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
                        <div class="nicdark_textevidence">
                            <div class="nicdark_margin30">
                                <h2 class="white subtitle"><a class="white" href="{{ route('event')}}">EVENTS</a></h2>
                        </div>
                            <i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
                        </div>
                    </div>
                    <div class="nicdark_space5"></div>
                </div>
            </div>

        </div>
        <!--end nicdark_container-->
        
    </section>
    <!--end section-->


    @if($eventsindex->isEmpty())
   
    @else
     {{-- EVENTS --}}
     <section class="nicdark_section">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">
            <div class="nicdark_space50"></div>
            <div class="grid grid_12">
                <h1 class="subtitle greydark">OUR EVENTS</h1>
                <div class="nicdark_space20"></div>
                <h3 class="subtitle grey">DON'T MISS OUR EVENTS</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
                <div class="nicdark_space10"></div>
            </div>
    
            @forelse ($eventsindex as $event)
              <div class="grid grid_3">
                <!--archive1-->
                <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">
                    <a href="#" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">
                      @php
                        $formatted_date = date('Y-m-d', strtotime($event->event_date));
                        // Split the day, month, and year
                        $date = new DateTime($formatted_date);
                        list($year, $month, $day) = explode('-', $formatted_date);
                     @endphp    
    
                    {{$day}}<br/><small>  {{$date->format('M')}}</small>
                    </a>
                    <img alt=""  src="{{ asset('assets/'.$event->event_image) }}">
                    <div class="nicdark_textevidence nicdark_bg_greydark">
                        <h4 class="white nicdark_margin20">{{ $event->event_title}}</h4>
                    </div>
                    <div class="nicdark_margin20">
                        <h5 class="white"><i class="icon-pin-outline"></i> {{ $event->event_venue}}</h5>
                        <div class="nicdark_space10"></div>
                        <h5 class="white"><i class="icon-clock-1"></i> 
                          @php
                            $time = new DateTime( $event->event_time);
                            $time = $time->format('H:i');
                          @endphp
                          {{ $time}} To 14:00
                        </h5>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white"> 
                          {{ $event->event_content}}
                        </p>
                        <div class="nicdark_space20"></div>
                        {{-- <a href="single-event.html" class=" nicdark_press nicdark_btn nicdark_bg_greendark white nicdark_radius nicdark_shadow medium">CHECK IT</a> --}}
                    </div>
                </div>
                <!--archive1-->
            </div> 
            @empty
              <span class="text-danger">No Event(s) Found</span>
            @endforelse
        
            <div class="nicdark_space50"></div>
        </div>
        <!--end nicdark_container-->
    </section>
    @endif
    

    <!--start section-->
        @include('pages.user.include.activities')
    <!--end section-->

    {{-- Blog --}}
    @if($blogsindex->isEmpty())
   
    @else
        <!--start section-->
        <section class="nicdark_section">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">
                <div class="nicdark_space50"></div>
                <div class="grid grid_12">
                    <h1 class="subtitle greydark">BLOG</h1>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
                    <div class="nicdark_space10"></div>
                </div>
                <div class="nicdark_masonry_btns">
                    
                    <div class="nicdark_space10"></div>
                </div>
        
                <!-- Custom CSS for the sliding carousel -->
            
        
                <!--start nicdark_masonry_container-->
                <div class="nicdark_masonry_container">
                <?php $totalBlogs = count($blogsindex); ?>
                @foreach ($blogsindex as $index => $blog)
                    <?php
                    $encrypted_id = encrypt($blog->id);
                    ?>
                    <div class="grid grid_3 nicdark_masonry_item excursions">
                    <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">
                        <!-- Rest of your content --> 
                        <a href="{{ route('blog_detail', ['encrypted_id'=> $encrypted_id]) }}" class="nicdark_zoom nicdark_btn_icon nicdark_bg_red nicdark_border_reddark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
                            <img alt="{{ route('blog_detail', ['encrypted_id'=> $encrypted_id]) }}" 
                            src="{{ asset('assets/'.$blog->featured_image) }}">
                            
                            <div class="nicdark_margin20">
                                <h4 class="white">{{ $blog->posttitle}}</h4>
                                <div class="nicdark_space20"></div>
                                <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                                <div class="nicdark_space20"></div>
                                <p class="white">
                                {{ \Illuminate\Support\Str::limit($blog->shortwriteup, 100, '...') }}
                                </p>
                                <div class="nicdark_space20"></div>
                                <a href="{{ route('blog_detail', ['encrypted_id'=> $encrypted_id]) }}" class="white nicdark_btn">
                                <i class="icon-doc-text-1 "></i> Read More</a>                        
                            </div>
                        <i class="icon-pencil-1 nicdark_iconbg right medium red"></i>
                    </div>
                    </div>
                    
                    <!-- Previous and Next links -->
                    
                    @endforeach
        
                    @if (empty($blogsindex))
                    <span class="text-danger" style="color: red">No Post(s) Found</span>
                    @endif
                </div>
        
                
            </div>
            <!--end nicdark_container-->
                    
        </section>
    @endif
    <div class="nicdark_space50"></div>
    <div class="nicdark_space50"></div>
    <div class="nicdark_space3 nicdark_bg_gradient"></div>
            
    @endsection
    

@section('scripts')
