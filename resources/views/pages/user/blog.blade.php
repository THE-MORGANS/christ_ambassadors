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
</style>
@endsection
@stack('stylesheet')

@section('content')

  <!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img7">

  <div class="nicdark_filter greydark">

      <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">

          <div class="grid grid_12">
              <div class="nicdark_space100"></div>
              <div class="nicdark_space100"></div>
              <h1 class="white subtitle">BLOG </h1>
              <div class="nicdark_space10"></div>
              <h3 class="subtitle white"></h3>
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
      <div class="nicdark_masonry_btns">
          <div class="nicdark_margin10">
              <a data-filter="*" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">ALL</a>
          </div>
          {{-- <div class="nicdark_margin10">
              <a data-filter=".educational" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EDUCATIONAL</a>
          </div>
          <div class="nicdark_margin10">
              <a data-filter=".excursions" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">EXCURSIONS</a>
          </div> --}}
          <div class="nicdark_space10"></div>
      </div>

      <!-- Custom CSS for the sliding carousel -->
  
 
      <!--start nicdark_masonry_container-->
     <!--start nicdark_masonry_container-->
      <div class="nicdark_masonry_container">
        <?php $totalBlogs = count($blogs); ?>
        @foreach ($blogs as $index => $blog)
          <?php
           $encrypted_id = encrypt($blog->id);
          ?>
          <div class="grid grid_4 nicdark_masonry_item excursions">
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

          @if (empty($blogs))
            <span class="text-danger">No Post(s) Found</span>
          @endif
        </div>

      
  </div>
  <!--end nicdark_container-->
          
</section>
<div class="nicdark_space50"></div>

<!--end section-->

</div>
<!--end section--><!--end-->
 <!-- Previous and Next links -->

<!-- Previous and Next links -->
<!-- Previous and Next links -->


<div class="nicdark_space3 nicdark_bg_gradient"></div>

      



@endsection
@section('scripts')
@endsection

@stack('scripts')
@livewireStyles