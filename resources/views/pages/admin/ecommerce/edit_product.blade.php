@extends('layouts.admin')

@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    @include('partials.admin.sidebar') 
    @include('partials.admin.topheader') 
    
    <div class="page page-center"> 
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
   

    
        <div class="container-xl">
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
                    @if (session('error'))
                    <div class="col-sm-12 mb-3">
                        <div class="alert alert-error alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div> 
                @endif
                </div>
                <div class="col-md-1"></div>
            </div>
        
            <form action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card" role="document">
                <div class="card-body">
                    <input  type="hidden" class="form-control" name="product_id" placeholder="Your Product Name" value="{{ $product->id}}">
                    <div class="modal-header">
                        <h5 class="modal-title"> {{$pageTitle}}</h5>
                    </div>
                    <div class="col">
                    
                    <div class="mb-3 card-body">
                        <label class="form-label">Product Name</label>
                        <input  type="text" class="form-control" name="productname" placeholder="Your Product Name" value="{{ $product->productname}}">
                        @error('productname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="card-body row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Product Amount</label>
                                <div class="input-group input-group-flat">
                                    <input  type="number" placeholder="Product Amount" name="productamount"  class="form-control "  autocomplete="off" value="{{ $product->productamount}}">
                                </div>
                                @error('productamount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Product Image</label>
                                    <input  type="file" name="productimage" id="imageInput" class="form-control"  accept="image/*">
                                </div>
                                @error('productimage')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                            <div>
                                <label class="form-label">Image Preview</label>
                            
                                <img src="{{ asset('assets/'.$product->productimage) }}" class="border" id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; max-height: 200px;">
                                        
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn me-auto" >Close</button>
                        <button type="submit" class="btn btn-primary" >Update</button>
                    </div>
                </div>
                </div>
            </form>

        

            <script>
                document.getElementById("imageInput").addEventListener("change", function(event) {
                    var image = event.target.files[0];
                    var imagePreview = document.getElementById("imagePreview");
        
                    if (image) {
                        var reader = new FileReader();
        
                        reader.onload = function() {
                            imagePreview.src = reader.result;
                            imagePreview.style.display = "block";
                        }
        
                        reader.readAsDataURL(image);
                    } else {
                        imagePreview.style.display = "none";
                    }
                });
            </script>
        
        </div>
    
    </div>
 @endsection

@section('scripts')

@endsection
