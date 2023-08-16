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
    <div class="nicdark_space50"></div>


    <!--end section--><!--start section-->
<section class="nicdark_section">

  <section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        

        <div class="grid grid_12">
            <h3 class="subtitle greydark">ABOUT ME</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <p>
              We are Christ Ambassadors Network International, a ministry for Children and Teenagers. 
              We gloriously represent and manifest Jesus Christ in everyplace.
              We come together to learn, practise and live the truth of the Living Word of God as contained in the Holy Bible.
              <br>
              The Holy Spirit is in and with us; leading, directing and equipping us to feed and nurture his lamb and sheep to lead the supernatural life, naturally as Kings and Priests unto God according to the scriptures.

            </p>
            <div class="nicdark_space50"></div>
            <h3 class="subtitle greydark">MISSION</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_red nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <p>
              Our mission is to provide children and teenagers with the knowledge of the Holy Bible by equipping them through activities, 
              teachings and products that help them come into the full understanding 
              of their authority and power in Christ so they can gloriously reign as Kings and Priests unto God on Earth.
            </p>
            <div class="nicdark_space50"></div>
            <h3 class="subtitle greydark">VISION</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <p>
              To empower children and teenagers on how to gloriously represent and manifest Christ as worthy ambassadors in everyplace, every time.
            </p>



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
                    <a href="{{ route('team01')}}" class="white nicdark_btn"><i class=" icon-right-dir"></i> Know Me :)</a>

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
                    <a href="{{ route('team02')}}" class="white nicdark_btn"><i class=" icon-right-dir"></i> Know Me :)</a>

                </div>
            </div>

        </div>

    </div>

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