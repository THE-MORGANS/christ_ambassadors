<div>
    <div class="row justify-content-center">
        @forelse ($products as $product)
        <div class="col-lg-3 col-md-6 sa-pdrl8">
          <input type="hidden" value="{{ $product->id }}" class="prod_id" >
          <div class="sa-team-single sa-shop-single">
            @if ($product->productdiscount == '')
              <div class="sa-offer-tag sa-bg-1">
                <h6>New</h6>
              </div>
            @else
              <div class="sa-offer-tag sa-bg-1">
                <h6> ₦{{ number_format($product->productdiscount, 2, '.', ',') }}</h6>
              </div>
            @endif
            
            <div class="sa-shop-thum">
              <img src="{{ asset('storage/'.$product->productimage) }} " alt="img">
            </div>
            <div class="sa-team-info">
              <h2>{{ $product->productname}}</h2>
              <p>₦{{ number_format($product->productamount, 2, '.', ',') }}</p>
            </div>
            
          
            <a class="sa-btn-transparent " href="#" wire:click.prevent="store({{$product->id}},'{{$product->productname}}','{{$product->productamount}}')" >Add to Cart</a>
          </div>
        </div>
        @empty
            <span class="text-danger">No Posts(s) Found</span>
        @endforelse
      </div>


    </div>
</section>


<div class="sa-pagination-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sa-pagination-area">
          <nav class="sa-pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li class="page-item"><a href="#">1</a></li>
              <li class="page-item active"><a href="#">2</a></li>
              <li class="page-item"><a href="#">3</a></li>
              <li class="page-item"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

