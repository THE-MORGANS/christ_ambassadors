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
                <h1 class="white subtitle">ECOMMERCE</h1>
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

  <section class="nicdark_section">
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space50"></div>
        @forelse ($products as $product)
          <div class="grid grid_3">
              <!-- start product-->
              <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                  <img alt="" src="{{ asset('assets/'.$product->productimage) }}">
                  <div class="nicdark_textevidence nicdark_bg_greydark">
                      <h4 class="white nicdark_margin20">{{ $product->productname}}</h4>
                  </div>
                  <div class="nicdark_textevidence"> 
                      <div class="nicdark_margin20">
                          <p>₦{{ number_format($product->productamount, 2, '.', ',') }}</p>
                          <div class="nicdark_space20"></div>
                          <a class="grey nicdark_btn nicdark_bg_grey2  medium nicdark_radius nicdark_shadow nicdark_press" href="#" data-cart-item="{{ json_encode(['id' => $product->id, 'productname' => $product->productname, 'productamount' => $product->productamount]) }}">
                            <i class="icon-basket"></i>&nbsp;&nbsp;&nbsp;ADD TO CART</a>

                      </div> 
                  </div>

              </div>
              <!-- end product-->
          </div>
        @empty
          <span class="text-danger">No Posts(s) Found</span>
        @endforelse
    </div>
    <!--end nicdark_container-->
    <div class="nicdark_space50"></div>
     
</section>
<!--end section-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
          jQuery(document).ready(function ($) {
          
              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            
              $(document).ready(function() {
                $('a[data-cart-item]').click(function(event) {
                  event.preventDefault();
                  
                  var cartItemData = JSON.parse($(this).attr('data-cart-item'));
    
                  var productId = cartItemData.id;
                  var productName = cartItemData.productname;
                  var productAmount = cartItemData.productamount;
                
                  console.log("Product ID:", productId);
                  console.log("Product Name:", productName);
                  console.log("Product Amount:", productAmount);
                
                  // Call a function to handle adding the item to the cart or perform any other action
                  addToCart(productId, productName, productAmount);
                });
                
                function addToCart(productId, productName, productAmount) {
                  // Implement your logic here to add the item to the cart using the provided parameters
                  // For example, you can make an AJAX request to a cart endpoint to add the item
                  $.ajax({
                    url: '{{ route('cart.add')}}',
                    method: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                      id: productId,
                      name: productName,
                      amount: productAmount
                    },
                    success: function(response) {
                      toastr.success('Product added to cart!');
                      // Reload the page after a delay
                      setTimeout(function() {
                        location.reload();
                      }, 2000); // Delay in milliseconds (e.g., 2000 for 2 seconds)
                      // Handle the response from the server if needed
                    },
                    error: function(xhr, status, error) {
                      alert(status);
                      console.log('Error adding item to cart:', error);
                      // Handle the error if needed
                    }
                  });
                }
              });

          })
        </script>



@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts