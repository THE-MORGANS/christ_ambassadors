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
                    {{ $pageTitle }}
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
        
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="card col-md-10" role="document">
                    <div class="card-body">
                        <form action="{{ route('update-blog', ['blog_id' =>Request('blog_id') ]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Post title</label>
                                        <input name='post_title' value="{{ $blog->posttitle }}" type="text" class="form-control"  placeholder="Enter Post title">
                                        @error('post_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Post Short Writeup</label>
                                        <textarea name='post_shortwriteup' rows="6" class="form-control"  placeholder="Content...">{{ $blog->shortwriteup }}</textarea>
                                        @error('post_shortwriteup')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Post Content</label>
                                        <textarea name='post_content' rows="6" class="form-control"  placeholder="Content...">{{ $blog->content }}</textarea>
                                        @error('post_content')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Post Category</label>
                                        <select class="form-select mb-3" name='post_category'> 
                                                <option disabled> No Selected </option>
                                                @foreach (\App\Models\blogcategory::all() as $category)
                                                <option value="{{ $category->id}}" {{ $blog->category == $category->id ? 'selected' : '' }} >
                                                    {{ $category->category_name}}
                                                </option>
                                                @endforeach
                                        </select>
                                        @error('post_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Reference</label>
                                        <select class="form-select mb-3" name='reference'> 
                                            <option disabled> No Selected </option>
                                            <option selected>Admin</option>
                                        </select>
                                        @error('post_by')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label">Featured Image</label>
                                        <input name='featured_image' type="file" class="form-control" id="imageInput">
                                        @error('featured_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="image_holder col-md-4 mb-2" style="max-width:250px">
                                        <img class="border" id="imagePreview" src="{{ asset('assets/'.$blog->featured_image) }}" alt="Image Preview" style=" max-width: 200px; max-height: 200px;">
                                    </div>
                                </div>
                        
                            </div>
                        
                            <div class="modal-footer">
                                <button type="reset" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" >Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
               
            

        

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
