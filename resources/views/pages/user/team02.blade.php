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
@stack('stylesheet');
@livewireStyles

@section('content')

  
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

  <div class="nicdark_filter greydark">
      <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">
          <div class="grid grid_12">
              <div class="nicdark_space100"></div>
              <div class="nicdark_space100"></div>
              <h1 class="white subtitle">ABOUT US</h1>
              <div class="nicdark_space10"></div>
              <h3 class="subtitle white"> EVELYN ANENI</h3>
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
    <div class="nicdark_space50"></div>


    <!--end section--><!--start section-->
<section class="nicdark_section">

  <section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_6">
            <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;" src=" {{ asset('assets/team/team02.jpg')}}">

            <div class="nicdark_space10"></div>

            <div class="nicdark_focus center">
                <div class="nicdark_margin10">
                    <a title="YOUTUBE" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i class="icon-youtube-play"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="DRIBBBLE" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_violet nicdark_shadow small nicdark_radius white"><i class="icon-dribbble-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="TWITTER" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i class="icon-twitter-1"></i></a>
                </div>
            </div>
        </div>

        <div class="grid grid_6">
            <h3 class="subtitle greydark">EVELYN ANENI</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <p style="text-align: justify;">
                Evelyn Aneni is a hands - on trustee who is passionate about doing the work of God. She loves children and provides all the needed support required 
                as evident in our continuous growth.
                 As we grow in leaps and bounds, Evelyn midwives the team formidably well with our activities in the godly growth of the Christ Ambassadors as whole.
             
            </p>
            <div class="nicdark_space50"></div>
            
            <div class="nicdark_space50"></div>
           

        </div>


        <div class="grid grid_4">
           

        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
  <!--start nicdark_container-->
  <div class="nicdark_container nicdark_clearfix">
      <div class="nicdark_space50"></div>
      <div class="grid grid_12">
          <h1 class="subtitle greydark">MEET OUR TEAM</h1>
          <div class="nicdark_space20"></div>
          <h3 class="subtitle grey"></h3>
          <div class="nicdark_space20"></div>
          <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
          <div class="nicdark_space10"></div>
      </div>
    <div class="grid grid_6">
                    
        <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

            <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                <img alt="" class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/team/team01.jpg')}}" height="460px" width="414px">
            </div>
            
            <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                <div class="nicdark_margin20">
                
                    <h4 class="white"><a class="white" href="{{ route('team01')}}">Erin Omotanwa Sulaiman</a></h4>                        
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Founder, Christ Ambassadors Network International.</p>
                    <div class="nicdark_space20"></div>
                    <a href="{{ route('team01')}}" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                </div>
            </div>

        </div>

    </div>

    <div class="grid grid_6">
            
        <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

            <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                <img alt="" class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/team/team02.jpg')}}" height="460px" width="414px">
            </div>
            
            <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                <div class="nicdark_margin20">
                
                    <h4 class="white"><a class="white" href="{{ route('team02')}}">Evelyn Aneni</a></h4>                        
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Trustee, Christ Ambassadors Network International</p>
                    <div class="nicdark_space20"></div>
                    <a href="{{ route('team02')}}" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                </div>
            </div>

        </div>

    </div>

      {{-- <div class="grid grid_5">
                  
          <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">

              <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                  <h4 class="white nicdark_margin20">Erin Omotanwa Sulaiman</h4>
              </div>

              <img class="nicdark_opacity" alt="" src="{{ asset('assets/team/team01.jpg')}}" style="width: 460px; height:414px" >

               <div class="nicdark_textevidence nicdark_bg_blue">
                  <h5 class="white nicdark_margin20">
                    Founder, Christ Ambassadors Network International.
                  </h5>
                  <i class="icon-brush nicdark_iconbg right medium blue"></i>
              </div>
              
              <div class="nicdark_textevidence">
                  <div class="nicdark_margin20">
                      <p>
                        Erin started Christ Ambassadors by the leading of the Holy Spirit to feed Children the sure food of the word of God and nurture teenagers into their glorious 
                        destinies in Christ. This she has done passionately, by the power of the Holy Spirit, since August 2020 through various activities designed for children and 
                        teenagers with signs, wonders and miracles following. The Christ Ambassadors 
                        continue to grow to reach more children and teenagers as they continue to understand their authority and power to manifest and represent Jesus Christ everywhere.
                 
                      </p>
                      <div class="nicdark_space20 nicdark_displaynone_ipadpotr"></div>
              
                  </div>
              </div>

          </div>
      
      </div>
      <div class="grid grid_2"></div>
      <div class="grid grid_5">
                  
          <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">

              <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                  <h4 class="white nicdark_margin20">Evelyn Aneni</h4>
              </div>

              <img class="nicdark_opacity" alt="" src="{{ asset('assets/team/team02.jpg')}}" style="width: 460px; height:414px">

               <div class="nicdark_textevidence nicdark_bg_yellow">
                  <h5 class="white nicdark_margin20">
                    Trustee, Christ Ambassadors Network International
                   </h5>
                  <i class="icon-music-outline nicdark_iconbg right medium yellow"></i>
              </div>
              
              <div class="nicdark_textevidence">
                  <div class="nicdark_margin20">
                      <p>
                        Evelyn Aneni is a hands - on trustee who is passionate about doing the work of God. She loves children and provides all the needed support required 
                        as evident in our continuous growth.
                         As we grow in leaps and bounds, Evelyn midwives the team formidably well with our activities in the godly growth of the Christ Ambassadors as whole.
                      </p>
                      <div class="nicdark_space20 nicdark_displaynone_ipadpotr"></div>
                      
                  </div>
              </div>

          </div>
      
      </div> --}}
      <div class="nicdark_space50"></div>
  </div>
  <!--end nicdark_container-->
          
</section>
<!--end section--><!--end-->


      <!--end nicdark_masonry_container-->
      <div class="nicdark_space50"></div>
  </div>
  <!--end nicdark_container-->
          
</section>
<!--end section-->


@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts