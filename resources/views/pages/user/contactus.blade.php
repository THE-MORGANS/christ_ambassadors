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
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">CONTACT</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">FEEL FREE TO CONTACT US</h3>
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

      <div class="nicdark_space40"></div>


      <div class="grid grid_4">

          <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
              <div class="nicdark_margin20 nicdark_relative">
                      <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_yellow extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-location-outline nicdark_rotate"></i></a>
                      <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                          <h4>MAIN SCHOOL</h4>                        
                          <div class="nicdark_space20"></div>
                          <p>United Kingdom<br/>(00) 520 990 759</p>
                      </div>
              </div>
          </div>

          <div class="nicdark_space20"></div>

          <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
              <div class="nicdark_margin20 nicdark_relative">
                      <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_orange extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-address nicdark_rotate"></i></a>
                      <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                          <h4>SOCIAL MEDIA </h4>                        
                          <div class="nicdark_space20"></div>
                         <a href="https://www.youtube.com/@TheChristAmbassadors"> <p>Youtube: @TheChristAmbassadors</p></a>
                          {{-- <p>United Kingdom<br/>(00) 520 990 759</p> --}}
                      </div>
              </div>
          </div>

          <div class="nicdark_space20"></div>


          <div class="nicdark_archive1 nicdark_bg_greydark nicdark_radius nicdark_shadow">
              <div class="nicdark_margin20 nicdark_relative">
                      <a href="#" class="nicdark_displaynone_ipadpotr nicdark_btn_icon nicdark_bg_red extrabig nicdark_radius_circle white nicdark_absolute nicdark_shadow"><i class="icon-paper-plane-empty nicdark_rotate"></i></a>
                      <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                          <h4 class="white">M@IL US</h4>                        
                          <div class="nicdark_space20"></div>
                          <p class="white">info@christambassadors.net <br/>christ@christambassadors.net</p>
                      </div>
              </div>
          </div>

      
      </div>


  <div class="grid grid_8">
          
         <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
              <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius_top">
                  <h4 class="white nicdark_margin20">CONTACT US</h4>
                  <i class="icon-mail nicdark_iconbg right medium orange"></i>
              </div>
              <div class="nicdark_margin20">
                  <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="NAME">
                  <div class="nicdark_space20"></div>
                  <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="EMAIL">
                  <div class="nicdark_space20"></div>
                  <textarea class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" placeholder="MESSAGE" rows="7"></textarea>
                  <div class="nicdark_space20"></div>
                  <!--<input class="nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white" type="submit" value="SEND">-->
                  <a href="submit-message.html" class="nicdark_mpopup_ajax nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white nicdark_press">SEND</a>
              </div>
          </div>

      </div>


     

    <div class="nicdark_space50"></div>

</div>
<!--end nicdark_container-->
<!--start section-->
<section class="nicdark_section">
    <div class="nicdark_textevidence">
        <iframe class="nicdark_iframe nicdark_margintop50_negative nicdark_marginbottom90_negative" src="https://mapsengine.google.com/map/embed?mid=zefx5FZI0Z00.kKFANsaMqDXY" height="400" ></iframe>
    </div>
</section>
<!--end section-->

<div class="nicdark_space50"></div>


          
</section>
<!--end section-->

@endsection
@section('scripts')
@endsection

@stack('scripts')

@livewireScripts