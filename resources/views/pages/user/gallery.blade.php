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
              <h1 class="white subtitle">GALLERY</h1>
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

<section class="nicdark_section">

  <!--start nicdark_container-->
  <div class="nicdark_container nicdark_clearfix">


    <div class="nicdark_space50"></div>
    <div class="grid grid_12">
      <h1 class="subtitle greydark">OUR GALLERY</h1>
      <div class="nicdark_space20"></div>
      <h3 class="subtitle grey">DON'T MISS OUR GALLERY</h3>
      <div class="nicdark_space20"></div>
      <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
      <div class="nicdark_space10"></div>
  </div>

      @forelse ($gallery as $item)
      {{-- <div class="grid grid_3">
                    
        <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">

            <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                <h4 class="white nicdark_margin20">JENNY GREY</h4>
            </div>

            <img class="nicdark_opacity" alt="" src="{{ asset('assets/'.$item->gallery_image) }}">

             <div class="nicdark_textevidence nicdark_bg_yellow">
                <h5 class="white nicdark_margin20">{{$item->gallerytitle}}</h5>
                <i class="icon-music-outline nicdark_iconbg right medium yellow"></i>
            </div>
            

        </div>
    
    </div> --}}
        <div class="grid grid_4">
                            
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <img alt="" src="{{ asset('assets/'.$item->gallery_image) }}">

                <div class="nicdark_textevidence nicdark_bg_greydark center">
                    <h4 class="white nicdark_margin20">{{$item->gallerytitle}}</h4>
                </div>
            </div>

        </div>
      @empty
        <span class="text-danger">No Gallery</span>
      @endforelse


  </div>
  <!--end nicdark_container-->
  <div class="nicdark_space50"></div>
</section>


@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts