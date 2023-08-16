
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

        @forelse ($events as $event)
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
