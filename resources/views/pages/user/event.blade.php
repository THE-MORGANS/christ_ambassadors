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
<section id="nicdark_parallax_countdown" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-events">

  <div class="nicdark_filter greydark">

      <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">

          <div class="nicdark_space40"></div>
          <div class="nicdark_space50"></div>
          <div class="nicdark_space100"></div>

          <div class="grid grid_12">
              <h1 class="white center subtitle">EVENTS</h1>
              <div class="nicdark_space10"></div>
              <div class="nicdark_space20"></div>
              <div class="nicdark_divider center big">
                <span class="nicdark_bg_white nicdark_radius"></span></div> 
              <div class="nicdark_space20"></div>    
          </div>
          <div class="nicdark_space40"></div>
          <div class="nicdark_space50"></div>

      </div>
      <!--end nicdark_container-->

  </div>
          
</section>
<!--end section-->


     <!--start section-->
     @include('pages.user.include.events')
    <!--end section-->
   


    <div class="nicdark_space50"></div>

@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts