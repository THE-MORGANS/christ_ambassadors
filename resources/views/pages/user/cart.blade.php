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
              <h1 class="white subtitle">CART</h1>
              <div class="nicdark_space10"></div>
              <h3 class="subtitle white">CHECK ALL OUR BOOKS AND E-BOOK</h3>
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

      <div class="grid grid_12">
        @if (session('error'))
            <div class="alert alert-danger"> 
                {{ session('error') }}
            </div>
        @endif
          <div class="nicdark_textevidence nicdark_shadow nicdark_radius_top left overflow_scroll">   
              <table class="nicdark_table extrabig nicdark_bg_orange nicdark_radius_top ">
                  <thead class="nicdark_border_orange">
                      <tr> 
                          <td class="nicdark_width_percentage1"><h4 class="white"></h4></td>
                          <td class="nicdark_width_percentage1"><h4 class="white"></h4></td>
                          <td><h4 class="white">PRODUCT</h4></td>
                          <td><h4 class="white">PRICE</h4></td>
                          <td><h4 class="white">QUANTITY</h4></td>
                          <td><h4 class="white">TOTAL</h4></td>
                      </tr>
                  </thead>
                  <tbody class="nicdark_bg_white nicdark_border_grey">
                    @if (Cart::count() > 0)
                      @foreach ($cartContent as $item)
                        <tr>
                            <td>
                              <h1>
                                <a href="" class="btn-remove" data-item="{{$item->rowId}}"><i class="icon-cancel-circled-1 red"></i></a>
                              </h1> 
                            </td>
                            <td>
                              <img alt="" class="nicdark_radius nicdark_opacity" src="{{ asset('assets/'.$item->model->productimage) }}" width="70">
                            </td>
                            <td><p>{{$item->model->productname }}</p></td>
                            <td><p>₦ {{ number_format($item->model->productamount, 2, '.', ',') }}</p></td>
                            <td class="cart-item" data-title="Quantity" data-cart-item-id="{{ $item->rowId }}">
                  
                              <input style="width:30px; height:35px" type="number" class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle quantity-input text" name="product-quantity" value="{{$item->qty}}" title="Qty" id="myNumberInput">
                              <button style="padding: 8px 8px" class="nicdark_btn nicdark_bg_orange nicdark_transition nicdark_bg_orangedark_hover medium nicdark_shadow nicdark_radius white  increment-btn">+</button>
                              <button style="padding: 8px 8px" class="nicdark_btn nicdark_bg_orange nicdark_transition nicdark_bg_orangedark_hover medium nicdark_shadow nicdark_radius  decrement-btn">-</button>
                             
                            </td>
                            <td><p>₦ {{ number_format($item->subtotal, 2, '.', ',') }}</p></td>
                        </tr>
                        @endforeach
                      @else
                      <tr>
                        <span class="text-danger">No item in cart</span>
                      </tr>
                    @endif
                  </tbody>
              </table>

              <script type="text/javascript">
                jQuery(document).ready(function ($) {
                  $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
                  $(document).ready(function() {
                      $.ajax({
                        url: '{{ route('getCartContent')}}',
                        method: 'GET',
                        success: function(response) {
                          // Handle the cart content response
                          $('#cartContainer').html(response);
                          alert(cartcontent);

                          console.log(response);
                        },
                        error: function(xhr, status, error) {
                          console.log("AJAX request failed: " + error);
                        }
                      });
    
                      // Find all cart items
                      $('.cart-item').each(function() {
                        var quantityInput = $(this).find('.quantity-input');
                        var incrementBtn = $(this).find('.increment-btn');
                        var decrementBtn = $(this).find('.decrement-btn');
    
                        // Increment button click event
                        incrementBtn.on('click', function() {
                          var currentQuantity = parseInt(quantityInput.val());
                          quantityInput.val(currentQuantity + 1);
                          // Call a function to update the cart or perform any other action
                          updateCart(quantityInput);
                        });
    
                        // Decrement button click event
                        decrementBtn.on('click', function() {
                          var currentQuantity = parseInt(quantityInput.val());
                          if (currentQuantity > 1) {
                            quantityInput.val(currentQuantity - 1);
                            // Call a function to update the cart or perform any other action
                            updateCart(quantityInput);
                          }
                        });
                      });
    
                      // Function to update the cart
                      function updateCart(quantityInput) {
                        var quantity = parseInt(quantityInput.val());
                        var cartItemId = quantityInput.closest('.cart-item').data('cart-item-id');
                    
                        // Send an AJAX request to update the cart item quantity in the server
                        $.ajax({
                          url: '{{ route('cart.updatequantity') }}',
                          type: 'POST',
                          data: { quantity: quantity, cartItemId: cartItemId },
                          success: function(response) {
                            // Handle the response from the server if needed
                            setTimeout(() => {
                              location.reload();
                            }, 100);
                            toastr.success('Cart item quantity updated successfully');
                            //location.reload();
                           
                          },
                          error: function(xhr, status, error) {
                            alert(error);
                            console.log("AJAX request failed: " + error);
                          }
                        });
                      }
                  });
                        
                  $('.btn-remove').on('click', function () {
                 
                    event.preventDefault();
    
                    // Get the value of the data-item attribute
                    var itemValue = $(this).data("item");
                   // alert(itemValue);
                    if(confirm("Do you really want to delete?")){
                      $.ajax({
                          type: 'POST',
                          url: "{{ route('cart.delete') }}",
                          data: { item: itemValue },
                          
                          success: function(data) {
                            var item = data.item;
                            toastr.success('Item deleted successfully!');
                            setTimeout(() => {
                              location.reload();
                            }, 100);
                           
                          },
                          error: function(xhr, status, error) {
                            alert(error);
                            console.log("AJAX request failed: " + error);
                          }
                      });
                    }
                  });
      
                 
                });
              </script>      

          </div>


      </div>

      <div class="nicdark_space20"></div>

      <div class="grid grid_6">
             
      </div>
      @if (Cart::count() != 0)
      <div class="grid grid_6">
          <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
              <table class="nicdark_table extrabig nicdark_bg_green nicdark_radius ">
                  <thead class="nicdark_border_green">
                      <tr>
                          <td><h4 class="white">CART TOTALS</h4></td>
                          <td class="nicdark_width_percentage1"></td>
                      </tr>
                  </thead>
                  <tbody class="nicdark_bg_grey nicdark_border_grey">
                      <tr>
                          <td><p>CART SUBTOTAL</p></td>
                          <td><p>₦{{Cart::subtotal()}}</p></td>
                      </tr>
                      <tr>
                          <td><p>SHIPPING:</p></td>
                          <td><p>Free</p></td>
                      </tr>
                      <tr>
                          <td><p><strong>ORDER TOTAL:</strong></p></td>
                          <td><p>₦{{Cart::total()}}</p></td>
                      </tr>
                  </tbody>
              </table>
          </div>
          
          <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow right nicdark_radius_bottom">
            <div class="nicdark_space10"></div>
            <a href="{{ route('cart.checkout') }}" class="nicdark_btn nicdark_bg_orange nicdark_transition nicdark_bg_orangedark_hover medium nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-basket-1"></i>&nbsp;&nbsp;&nbsp;CHECKOUT</a>&nbsp;&nbsp;
            <div class="nicdark_space10"></div>
        </div>
      </div>
      @endif
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