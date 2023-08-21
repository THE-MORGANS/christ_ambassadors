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
              <h1 class="white subtitle">CHECKOUT</h1>
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

        <div class="nicdark_space40"></div>

        <div class="grid grid_6">
            <!--title-->
            <h3 class="subtitle greydark">BILLING DETAILS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <!--title--> 
            
            <div class="nicdark_space20"></div>
            <form action="{{ route('payment')}}" method="POST">
                @csrf
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                    <div class="nicdark_textevidence nicdark_bg_yellow nicdark_radius_top">
                        <h4 class="white nicdark_margin20">INFORMATION</h4>
                        <i class="icon-globe-1 nicdark_iconbg right medium yellow"></i>
                    </div>
                    <div class="nicdark_margin20">
                        <input type="hidden" name="orderNo" value="{{$orderNumber}}">
                        <p>FIRST NAME:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="Fname" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>LAST NAME:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="Lname" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>ADDRESS:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="inputAddress" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>Country:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="country" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>CITY:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="city" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>STATE:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="state" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        
                        <p>ZIP:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="zipcode" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>E-MAIL:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="email" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <br><br>
                        <p>PHONE:</p>
                        <div class="nicdark_space5"></div>
                        <input required name="pnumber" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" size="200">
                        <div class="nicdark_space20"></div>
                        <input class="nicdark_btn nicdark_bg_yellow medium nicdark_shadow nicdark_radius white nicdark_press" type="submit" value="SUBMIT">
                    </div>
                </div>
            </form>

        </div>

        <div class="grid grid_6">
            <!--title-->
            <h3 class="subtitle greydark">YOUR ORDER</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_red nicdark_radius"></span></div>
            <!--title-->   
            
            <div class="nicdark_space20"></div>

            <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_red nicdark_radius ">
                    <thead class="nicdark_border_red">
                        <tr>
                            <td><h4 class="white">PRODUCTS</h4></td>
                            <td><h4 class="white">QTY</h4></td>
                            <td class="nicdark_width_percentage1"><h4 class="white">TOTAL</h4></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">
                        @foreach ($cartItems as $item)
                            <tr>
                                <td><p>{{$item->model->productname }}</p></td>
                                <td><p>{{$item->qty}}</p></td>
                                <td><p>₦{{ number_format($item->subtotal, 2, '.', ',') }}</p></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="nicdark_space60"></div>

           


        </div>

    </div>
    <!--end nicdark_container-->

    <div class="nicdark_space50"></div>
     
</section>
<!--end section-->


@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts