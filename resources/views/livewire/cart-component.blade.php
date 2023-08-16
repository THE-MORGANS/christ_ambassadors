
@livewireScripts
  <!-- Blog -->
  <section class="section-padding product_data">
    <div class="container">
      <div class="sa-cart-section">
        <div class="w-100 table-responsive mb-4">
          @if (Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <i class="flaticon-tick-inside-circle"></i>{{Session::get('success_message')}}.
            </div>
          @endif

          <table class="table sa-cart-table">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th scope="col" class="sa-product-name">Product</th>
                <th scope="col" class="sa-product-price">Price</th>
                <th scope="col" class="sa-product-qty">Quantity</th>
                <th scope="col" class="sa-product-price">Total</th>
              </tr>
            </thead>
            <tbody>
             
              @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)
                  <input type="hidden" name="" value="{{ $item->model->id }}" class="prod_id">
                  <tr>
                    <td class="sa-product-remove sa-align">
                      <a href="#" wire:click="destroy('{{$item->rowId}}')" ><i class="fa fa-times"></i></a>
                    </td> 
                    <td class="sa-product-thumbnail-mbl">
                      <div class="sa-product-thumbnail sa-align">
                        <img src=" {{ asset('storage/'.$item->model->productimage) }}" alt="product_thumbnail">
                      </div> 
                    </td> 
                    <td class="has-title sa-align has-title" data-title="Product">
                      <a href="#" class="btn-link">{{$item->model->productname }}</a>
                    </td>
                    <td class="price sa-align has-title" data-title="Price">
                      <span class="product-currency">₦</span><span class="product-price">{{ number_format($item->model->productamount, 2, '.', ',') }} </span>
                    </td>
                    
                    <td class="sa-quantity sa-align has-title" data-title="Quantity">
                    
                      <input type="number" class="input-text qty-input text" name="product-quantity" value="{{$item->qty}}" title="Qty" id="quantityInput">
                      <button  wire:click="increaseQuantity('{{$item->rowId}}')">+</button>
                      <button  wire:click="decreaseQuantity('{{$item->rowId}}')">-</button>
                      <script>
                          function increment() {
                              var input = document.getElementById('quantityInput');
                              input.value = parseInt(input.value) + 1;
                          }
                          function decrement() {
                              var input = document.getElementById('quantityInput');

                              input.value = parseInt(input.value) - 1;
                          }
                      </script>
                    </td>
                    <td class="product-price sa-align has-title" data-title="Total Price">
                      <span class="product-currency" >₦</span> <span class="product-amount">{{ $item->subtotal}}</span>
                    </td>
                  </tr>
                @endforeach
                @else
                <tr>
                 <span class="text-danger">No item in cart</span>
                </tr>
              @endif
            </tbody>
          </table>

         

          <div class="sa-cart-total-table"> 
            <div class="sa-cart-total">
              <h2>Cart totals</h2>
              <table class="table">
                <tbody>
                  <tr class="sa-subtotal">
                    <td><b>Subtotal</b> </td>
                    <td>₦ {{Cart::subtotal()}}</td>
                  </tr>
                 {{--  <tr class="sa-subtotal">
                    <td><b>Tax</b> </td>
                    <td>₦ {{Cart::tax()}}</td>
                  </tr> --}}
                  <tr class="sa-shipping">
                    <td><b>Shipping</b></td>
                    <td>  
                      <p>Free shipping</p>
                    </td>
                  </tr>
                  <tr class="sa-total">
                    <td><b>Total</b></td>
                    <td><b>₦{{Cart::total()}}</b></td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary btn-block addToCartBtn">Procced to checkout</button>
            </div>
          </div>
         


        </div>
      </div>
    </div>
  </section>
  <!-- /Blog -->