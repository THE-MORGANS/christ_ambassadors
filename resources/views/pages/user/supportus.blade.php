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
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">

  <div class="nicdark_filter greydark">
      <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">
          <div class="grid grid_12">
              <div class="nicdark_space100"></div>
              <div class="nicdark_space100"></div>
              <h1 class="white subtitle">SUPPORT US</h1>
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
<div class="nicdark_space50"></div>
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="grid grid_12">
            <h3 class="subtitle greydark">SUPPORT US</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        
        <div class="grid grid_6">
                    
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/img/pray_with_us2.jpg')}}">
                    <br>
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="single-teacher.html">BY PRAYING FOR US</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">
                            Your prayers help us spiritually to go further to do more with many more creative ideas, strength to do and ease of accomplishment.
                        </p>
                      
                    </div>
                    
                </div>
               
            </div>
        </div>

        <div class="grid grid_6">
            
            <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/img/moni.jpg')}}">
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="single-teacher.html">BY GIVING US</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">
                            Your giving ensures we are able to fully dedicate all our time fully to ensure these young ones; God’s heritage, are spiritually nourished with edifying spiritual food through our outreaches and biblically 
                            educational materials. Additionally, it also helps us increase our production of these materials and products thus making them available for free to more children.
                        </p>
                        <div class="nicdark_space20"></div>
                       
                    </div>
                </div>

               

            </div>

        </div>

        <div id="nicdark_archive_9" class="nicdark_space40"></div>

        <div class="grid grid_12">
            <h3 class="subtitle greydark">TO GIVE</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage30 ">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ asset('assets/img/paypal_barcode.png')}}">
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                        <div class="nicdark_space20"></div>
                        <h4 class="grey"><b>Link to Paypal</b></h4>                        
                        <div class="nicdark_space20"></div>
                        <a href="https://www.paypal.com/donate/?hosted_button_id=Q4L8G9CPHNNTW ">Click here</a>
                    </div>
                    <div class="nicdark_margin20">
                        <div class="nicdark_space20"></div>
                        <h4 class="grey"><b>Paypal Email</b></h4>                        
                        <div class="nicdark_space20"></div>
                        <p>christambassadors.net@gmail.com </p>

                    </div>
                </div>

                <a href="https://www.paypal.com/donate/?hosted_button_id=Q4L8G9CPHNNTW" class="nicdark_btn_icon small nicdark_bg_white nicdark_radius_circle nicdark_absolute_right nicdark_border_grey"></a>

            </div>
        </div>





        <div class="nicdark_space50"></div>
        
    </div>
</section>

@endsection
@section('scripts')
@endsection
@stack('scripts')
