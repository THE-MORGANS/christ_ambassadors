@php
    use Carbon\Carbon;
@endphp

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
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    display: none;
  }
</style>
@endsection
@stack('stylesheet')
@livewireStyles

@section('content')

  
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

  <div class="nicdark_filter greydark">
      <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">
          <div class="grid grid_12">
              <div class="nicdark_space100"></div>
              <div class="nicdark_space100"></div>
              <h1 class="white subtitle">OUR ACTIVITIES</h1>
              <div class="nicdark_space10"></div>
              <h3 class="subtitle white"> </h3>
              <div class="nicdark_space20"></div>
              <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
              <div class="nicdark_space40"></div>
              <div class="nicdark_space50"></div>
          </div>
      </div>
      <!--end nicdark_container-->
  </div>
</section>
<!--end section-->


 <!--start section-->
 <section class="nicdark_section">
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space50"></div>
        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES </h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/activities/audio.jpg')}}">
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="#">AUDIO BIBLE RECORDING</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_space20"></div>
                        <p class="white" style="text-align: justify;">
                          We believe in the efficacy of the word of God and reading it out is an important part of 
                          engaging the power in the scriptures. We encourage Christ Ambassadors to read the Bible and
                           make it fun for them by also creating opportunities, where possible, for them to record bible
                            chapters. It brings them Joy when they hear themselves after recordings which encourages them 
                            to want to read more and live the truth contained therein.
                        </p>
                        <div class="nicdark_space20"></div>
                        {{-- <a href="#" class="white nicdark_btn"><i class=" icon-right-dir"></i> Click Here </a> --}}

                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/activities/podcast2.jpg')}}" height="300px">
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="#">PODCAST a.k.a CHRISTCAST!</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white" style="text-align: justify;">
                          We run a podcast where we engage children, teenagers, young adults and everyone in the lives of the children. Providing an avenue for them to express themselves, learn more about how to thrive as children of God. This Podcast is also for parents to learn many more ways to understand and communicate with them which will support them in the nurturing of the children to live as Christ Kinds gloriously.
                          Click here to listen in.

                        </p>
                        <div class="nicdark_space20"></div>
                        {{-- <a href="#" class="white nicdark_btn"><i class=" icon-right-dir"></i> Click Here </a> --}}
                        
                    </div>
                </div>


            </div>

        </div>

        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive"> 
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/activities/game.jpg')}}">
                </div>
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="#">BOOKS/GAMES</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white" style="text-align: justify;">
                          We understand that children and teenagers come across various types of books and games- some are not as edifying as parents want 
                          them to be for them, thus it is important to ensure that we provide them with fun and relatable Christian materials. This is why we have published lots of exciting, creative and edifying Christian books and games to cater to all age groups to help them learn about God in different ways. 
                          These are available for purchase on our online store or on Amazon via this @link 
                        </p>
                        <div class="nicdark_space20"></div>
                        {{-- <a href="#" class="white nicdark_btn"><i class=" icon-right-dir"></i> Click Here </a> --}}

                    </div>
                </div>
            </div>

        </div>

        
        
    </div>
    <!--end nicdark_container-->
</section>





    <div class="nicdark_space50"></div>

@endsection
@section('scripts')
@endsection

 