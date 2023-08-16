<div>
   
  
        <!-- Page header -->
        <div class="mb-5 page-header d-print-none"> 
            <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    View Ecommerce
                </h2> 
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                    <a href="#" class="btn">
                        New view
                    </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Create new Product
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    </a>
                </div>
                </div>
                </div>
            </div>
        </div>

        <div class="page-body">
             <!-- Page body -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @if (session('success'))
                        <div class="col-sm-12 mb-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
            
                        </div>
                    @endif
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="container-xl">
                <div class="col-12">
                    <div class="card">
                      <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped">
                          <thead>
                            <tr>
                              <th>Product Image</th>
                              <th>Product Name</th>
                              <th>Product Amount</th>
                              <th class="w-2"></th>
                              <th class="w-2"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($products as $product)
                                
                                <tr> 
                                    <td>
                                        <div class="d-flex py-1 align-items-center">
                                            <img src="{{ asset('assets/'.$product->productimage) }} " alt="" class="avatar me-2">
                                        </div>
                                    </td>
                                    <td>{{ $product->productname}} </td>
                                    <td class="text-muted">
                                        ₦{{ $product->productamount}}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('edit-product', ['product_id'=> $product->id]) }}" class="btn btn-primary" >
                                                Edit
                                            </a> &nbsp;
                                            <a href="{{ route('delete-product', ['product_id'=> $product->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </div>
                                      </td>
                                </tr>
                            @empty
                                <span class="text-danger">No Posts(s) Found</span>
                            @endforelse

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

   
</div>
